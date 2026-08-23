<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('real_estate_lettings', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('created_by')->nullable()->index();
            $table->unsignedBigInteger('property_id')->nullable()->index();
            $table->unsignedBigInteger('party_id')->nullable()->index();
            $table->string('subject');
            $table->string('capability', 40)->index();
            $table->string('status', 32)->index();
            $table->json('details')->nullable();
            $table->json('audit')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index(['team_id', 'capability', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estate_lettings');
    }
};
