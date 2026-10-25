<?php

declare(strict_types=1);

use App\Models\User;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\MediaAndDocuments\Application\CreateDocumentEnvelope;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentEnvelope;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentTemplate;

it('creates reads and signs document envelopes through explicit API responses', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $user->forceFill(['current_team_id' => $team->id])->save();
    $template = DocumentTemplate::query()->create(['team_id' => $team->id, 'name' => 'Offer', 'type' => 'offer', 'document_type' => 'offer', 'status' => 'published', 'content' => '<p>Hello {{ recipient }}</p>']);
    $this->actingAs($user, 'sanctum');
    $response = $this->postJson('/api/v1/real-estate/media-and-documents/templates/'.$template->id.'/envelopes', [
        'values' => ['recipient' => '<Buyer>', 'property_id' => 'property-55'],
        'participants' => [['user_id' => $user->id, 'name' => $user->name, 'email' => $user->email, 'role' => 'buyer']],
    ])->assertCreated()->assertJsonPath('data.rendered_content', '<p>Hello &lt;Buyer&gt;</p>')
        ->assertJsonPath('data.property_id', 'property-55')->assertJsonPath('data.transaction_type', 'offer');
    $envelopeId = $response->json('data.id');
    $participantId = $response->json('data.participants.0.id');
    $this->getJson('/api/v1/real-estate/media-and-documents/envelopes/'.$envelopeId)->assertOk()
        ->assertJsonCount(1, 'data.participants')->assertJsonCount(0, 'data.signatures');
    $url = '/api/v1/real-estate/media-and-documents/envelopes/'.$envelopeId.'/participants/'.$participantId.'/sign';
    $this->postJson($url, ['signature' => 'Buyer signature', 'method' => 'typed'])->assertOk()
        ->assertJsonPath('data.signature_hash', hash('sha256', 'Buyer signature'))
        ->assertJsonPath('data.participant.name', $user->name);
    $this->getJson('/api/v1/real-estate/media-and-documents/envelopes/'.$envelopeId)->assertOk()
        ->assertJsonPath('data.status', 'completed')->assertJsonCount(1, 'data.signatures');
    $this->postJson($url, ['signature' => 'Duplicate', 'method' => 'typed'])->assertUnprocessable();
});

it('keeps another teams templates envelopes and signatures inaccessible', function (): void {
    $user = User::factory()->create();
    $team = Team::factory()->create(['user_id' => $user->id]);
    $other = Team::factory()->create();
    $user->forceFill(['current_team_id' => $team->id])->save();
    $template = DocumentTemplate::query()->create(['team_id' => $other->id, 'name' => 'Private offer', 'type' => 'offer', 'document_type' => 'offer', 'status' => 'published', 'content' => 'Private terms']);
    $envelope = app(CreateDocumentEnvelope::class)->handle($other->id, $other->user_id, $template, [], [['user_id' => $user->id, 'name' => $user->name, 'role' => 'buyer']]);
    $participant = $envelope->participants->first();
    $this->actingAs($user, 'sanctum');
    $this->postJson('/api/v1/real-estate/media-and-documents/templates/'.$template->id.'/envelopes', [
        'values' => ['recipient' => 'Buyer'], 'participants' => [['user_id' => $user->id, 'name' => $user->name, 'role' => 'buyer']],
    ])->assertUnprocessable();
    $this->getJson('/api/v1/real-estate/media-and-documents/envelopes/'.$envelope->id)->assertNotFound();
    $this->postJson('/api/v1/real-estate/media-and-documents/envelopes/'.$envelope->id.'/participants/'.$participant->id.'/sign', ['signature' => 'Unauthorized', 'method' => 'typed'])->assertUnprocessable();
    expect(DocumentEnvelope::query()->count())->toBe(1)->and($envelope->signatures()->count())->toBe(0);
});
