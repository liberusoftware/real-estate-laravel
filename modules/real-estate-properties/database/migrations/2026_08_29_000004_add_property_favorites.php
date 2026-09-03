<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('real_estate_property_favorites', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreignId('property_id')->constrained('real_estate_properties')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['team_id', 'user_id', 'property_id'], 'property_favorites_team_user_property_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estate_property_favorites');
    }
};
