<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * The Filament PropertyResource form (and the ihona.tj storefront's
     * PropertyCard/detail page) have rendered fields for these seven
     * attributes since early in the project — a known, previously
     * out-of-scope schema-drift bug (see docs/handoffs): the form looked
     * like it worked, but had nothing to save into, so Eloquent's mass
     * assignment silently dropped every value on submit. Adding the real
     * columns closes that gap.
     */
    public function up(): void
    {
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->boolean('has_generator')->default(false)->after('deal_type');
            $table->boolean('has_wifi')->default(false)->after('has_generator');
            $table->boolean('has_parking')->default(false)->after('has_wifi');
            // 'pamir' | 'fan' | 'hissar' | 'other' — matches the Filament
            // Select options, kept as a free string rather than an enum
            // class since it's presentation-only, not branched on in PHP.
            $table->string('mountain_view', 20)->nullable()->after('has_parking');
            $table->unsignedInteger('altitude')->nullable()->after('mountain_view');
            // 'well' | 'river' | 'spring' | 'other'.
            $table->string('water_source', 20)->nullable()->after('altitude');
            $table->unsignedSmallInteger('max_guests')->nullable()->after('water_source');
        });
    }

    public function down(): void
    {
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->dropColumn([
                'has_generator',
                'has_wifi',
                'has_parking',
                'mountain_view',
                'altitude',
                'water_source',
                'max_guests',
            ]);
        });
    }
};
