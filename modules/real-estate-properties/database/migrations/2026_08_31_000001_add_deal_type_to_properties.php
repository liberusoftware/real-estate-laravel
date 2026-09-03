<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            // 'sale' | 'rent'. Distinct from `status` (draft/available/
            // under_offer/sold/let/withdrawn, the listing's lifecycle) and
            // from PropertyResource's `rentPeriod` (the storefront's
            // display-only cadence for a rental price) — deal_type is what
            // the ihona.tj storefront's Купить/Снять split filters on.
            $table->string('deal_type', 10)->default('sale')->after('property_type');
        });
    }

    public function down(): void
    {
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->dropColumn('deal_type');
        });
    }
};
