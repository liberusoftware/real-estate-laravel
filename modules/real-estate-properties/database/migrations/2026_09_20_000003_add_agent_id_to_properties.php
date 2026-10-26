<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Property previously had no relation to the agent/owner responsible for
 * it at all — only created_by (the account that inserted the row, not
 * necessarily who's handling the listing day to day). No FK constraint,
 * matching created_by's own column on this same table: the users table
 * is behind a swappable config('auth.providers.users.model'), and a lot
 * of Application-layer call sites (and their tests) pass a synthetic
 * actor id that was never a persisted row.
 */
return new class() extends Migration
{
    public function up(): void
    {
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->unsignedBigInteger('agent_id')->nullable()->index()->after('created_by');
        });
    }

    public function down(): void
    {
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->dropColumn('agent_id');
        });
    }
};
