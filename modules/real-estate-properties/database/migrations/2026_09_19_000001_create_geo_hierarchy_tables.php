<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Global (not team-scoped) reference tables. real_estate_territories (and
 * Property.territory_id, added separately in the host's own migrations)
 * still exist and are left alone — other packages (e.g. Agency) depend on
 * them — but Property's own location no longer goes through that flat,
 * per-team Territory concept: region/city/district is a proper hierarchy,
 * and is global rather than per-team because geography isn't a fact about
 * which team lists in it.
 */
return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('real_estate_regions', function (Blueprint $table): void {
            $table->id();
            $table->string('name', 120);
            $table->string('slug', 140)->unique();
            $table->timestamps();
        });

        Schema::create('real_estate_cities', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('region_id')->constrained('real_estate_regions')->cascadeOnDelete();
            $table->string('name', 120);
            $table->string('slug', 140);
            $table->timestamps();

            $table->unique(['region_id', 'slug']);
        });

        Schema::create('real_estate_districts', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('city_id')->constrained('real_estate_cities')->cascadeOnDelete();
            $table->string('name', 120);
            $table->string('slug', 140);
            $table->timestamps();

            $table->unique(['city_id', 'slug']);
        });

        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->foreignId('region_id')->nullable()->after('country')->constrained('real_estate_regions')->nullOnDelete();
            $table->foreignId('city_id')->nullable()->after('region_id')->constrained('real_estate_cities')->nullOnDelete();
            $table->foreignId('district_id')->nullable()->after('city_id')->constrained('real_estate_districts')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->dropConstrainedForeignId('district_id');
            $table->dropConstrainedForeignId('city_id');
            $table->dropConstrainedForeignId('region_id');
        });

        Schema::dropIfExists('real_estate_districts');
        Schema::dropIfExists('real_estate_cities');
        Schema::dropIfExists('real_estate_regions');
    }
};
