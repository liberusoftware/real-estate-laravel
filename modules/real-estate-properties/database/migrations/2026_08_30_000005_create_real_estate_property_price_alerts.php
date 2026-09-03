<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('real_estate_property_price_alerts', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('property_id')->index();
            $table->decimal('initial_price', 14, 2);
            $table->decimal('alert_percentage', 6, 2);
            $table->string('alert_frequency', 16);
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['team_id', 'user_id', 'property_id'], 'price_alerts_team_user_property_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estate_property_price_alerts');
    }
};
