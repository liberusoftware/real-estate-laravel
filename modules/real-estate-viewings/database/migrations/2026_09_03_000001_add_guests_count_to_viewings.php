<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Lets a nightly-stay booking (tourism property types) carry a guest
     * count through the same request/confirm flow a viewing appointment
     * already uses — null for an ordinary viewing.
     */
    public function up(): void
    {
        Schema::table('real_estate_viewings', function (Blueprint $table): void {
            $table->unsignedSmallInteger('guests_count')->nullable()->after('ends_at');
        });
    }

    public function down(): void
    {
        Schema::table('real_estate_viewings', function (Blueprint $table): void {
            $table->dropColumn('guests_count');
        });
    }
};
