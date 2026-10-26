<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Self-declared at registration ("I am a..."), kept separate from the
            // Spatie role that actually governs permissions. A tourist maps to the
            // 'buyer' role (no distinct tourist role exists in the permission
            // system — see docs/adr or PartyType, which is a different, CRM-facing
            // concept), but this column preserves the finer distinction for
            // personalizing the /app dashboard and default browsing view.
            $table->string('signup_intent', 20)->nullable()->after('locale');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('signup_intent');
        });
    }
};
