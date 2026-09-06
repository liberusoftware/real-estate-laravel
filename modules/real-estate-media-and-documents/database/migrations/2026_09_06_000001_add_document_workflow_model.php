<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::table('real_estate_document_templates', function (Blueprint $table): void {
            $table->string('slug')->nullable()->after('name');
            $table->text('description')->nullable()->after('slug');
            $table->string('document_type')->default('custom')->after('description');
            $table->string('locale', 10)->default('en')->after('document_type');
            $table->string('status')->default('draft')->after('locale');
            $table->unsignedInteger('version')->default(1)->after('status');
            $table->json('variables')->nullable()->after('content');
            $table->json('sections')->nullable()->after('variables');
            $table->foreignId('parent_template_id')->nullable()->after('sections');
            $table->timestamp('published_at')->nullable()->after('parent_template_id');
            $table->timestamp('archived_at')->nullable()->after('published_at');
            $table->index(['team_id', 'document_type', 'status']);
            $table->unique(['team_id', 'slug', 'version']);
        });

        Schema::create('real_estate_document_envelopes', function (Blueprint $table): void {
            $table->id();
            $table->string('team_id')->index();
            $table->foreignId('document_template_id');
            $table->string('created_by')->nullable()->index();
            $table->string('property_id')->nullable()->index();
            $table->string('transaction_type')->default('custom');
            $table->string('document_number')->nullable()->index();
            $table->string('status')->default('draft')->index();
            $table->json('values');
            $table->longText('rendered_content');
            $table->string('content_hash', 64)->index();
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });

        Schema::create('real_estate_document_participants', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('document_envelope_id');
            $table->string('team_id')->index();
            $table->string('party_id')->nullable()->index();
            $table->string('user_id')->nullable()->index();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('role');
            $table->unsignedInteger('signing_order')->default(1);
            $table->string('status')->default('pending')->index();
            $table->timestamp('invited_at')->nullable();
            $table->timestamp('viewed_at')->nullable();
            $table->timestamp('signed_at')->nullable();
            $table->timestamps();
            $table->index(['document_envelope_id', 'signing_order']);
        });

        Schema::create('real_estate_document_envelope_signatures', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('document_envelope_id');
            $table->foreignId('document_participant_id');
            $table->string('team_id')->index();
            $table->string('method')->default('drawn');
            $table->text('signature_data');
            $table->string('signature_hash', 64);
            $table->string('content_hash', 64);
            $table->timestamp('consented_at');
            $table->timestamp('signed_at');
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estate_document_envelope_signatures');
        Schema::dropIfExists('real_estate_document_participants');
        Schema::dropIfExists('real_estate_document_envelopes');
        Schema::table('real_estate_document_templates', function (Blueprint $table): void {
            $table->dropUnique(['team_id', 'slug', 'version']);
            $table->dropIndex(['team_id', 'document_type', 'status']);
            $table->dropColumn(['slug', 'description', 'document_type', 'locale', 'status', 'version', 'variables', 'sections', 'parent_template_id', 'published_at', 'archived_at']);
        });
    }
};
