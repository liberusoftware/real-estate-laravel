<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::table('real_estate_property_saved_searches', function (Blueprint $table): void {
            // Tracks when this search last emailed its owner, so
            // CheckSavedSearchAlerts only notifies about properties
            // published after that point instead of re-sending the same
            // matches on every scheduled run.
            $table->timestamp('last_notified_at')->nullable()->after('criteria');
        });
    }

    public function down(): void
    {
        Schema::table('real_estate_property_saved_searches', function (Blueprint $table): void {
            $table->dropColumn('last_notified_at');
        });
    }
};
