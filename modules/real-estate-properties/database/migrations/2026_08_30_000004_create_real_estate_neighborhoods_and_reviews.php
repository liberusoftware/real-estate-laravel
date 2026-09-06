<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('real_estate_neighborhoods', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('created_by')->index();
            $table->string('name');
            $table->text('description')->nullable();
            $table->json('schools')->nullable();
            $table->json('amenities')->nullable();
            $table->string('crime_rate')->nullable();
            $table->decimal('median_income', 12, 2)->nullable();
            $table->unsignedInteger('population')->nullable();
            $table->unsignedTinyInteger('walk_score')->nullable();
            $table->unsignedTinyInteger('transit_score')->nullable();
            $table->timestamp('last_updated')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['team_id', 'name']);
        });

        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->foreignId('neighborhood_id')->nullable()->after('branch_id')->constrained('real_estate_neighborhoods')->nullOnDelete();
            $table->index(['team_id', 'neighborhood_id']);
        });

        Schema::create('real_estate_neighborhood_reviews', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('neighborhood_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedTinyInteger('rating');
            $table->string('title', 100);
            $table->text('comment');
            $table->date('review_date')->nullable();
            $table->string('moderation_status', 32)->default('pending')->index();
            $table->boolean('approved')->default(false)->index();
            $table->string('ip_address', 45)->nullable();
            $table->unsignedInteger('helpful_votes')->default(0);
            $table->unsignedInteger('unhelpful_votes')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['team_id', 'neighborhood_id', 'user_id'], 'neighborhood_reviews_team_neighborhood_user_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estate_neighborhood_reviews');
        Schema::table('real_estate_properties', function (Blueprint $table): void {
            $table->dropForeign(['neighborhood_id']);
            $table->dropIndex('real_estate_properties_team_id_neighborhood_id_index');
            $table->dropColumn('neighborhood_id');
        });
        Schema::dropIfExists('real_estate_neighborhoods');
    }
};
