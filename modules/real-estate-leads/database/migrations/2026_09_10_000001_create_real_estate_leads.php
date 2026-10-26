<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('real_estate_leads', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('property_id')->nullable()->index();
            $table->unsignedBigInteger('assigned_to')->nullable()->index();
            // Not a foreign key: real_estate_contact_messages has no team_id
            // of its own (it's an anonymous public-form submission), so this
            // is purely a provenance pointer, not a scoping relation.
            $table->unsignedBigInteger('source_contact_message_id')->nullable()->index();
            $table->string('source', 40)->default('manual');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 50)->nullable();
            $table->string('status', 20)->default('new')->index();
            $table->unsignedTinyInteger('score')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('last_activity_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['team_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estate_leads');
    }
};
