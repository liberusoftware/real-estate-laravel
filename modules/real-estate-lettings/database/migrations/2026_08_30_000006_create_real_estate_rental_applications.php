<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('real_estate_rental_applications', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('team_id')->index();
            $table->unsignedBigInteger('property_id')->index();
            $table->unsignedBigInteger('party_id')->nullable()->index();
            $table->unsignedBigInteger('applicant_user_id')->nullable()->index();
            $table->string('status')->default('submitted')->index();
            $table->string('employment_status')->nullable();
            $table->decimal('annual_income', 12, 2)->nullable();
            $table->decimal('monthly_income', 12, 2)->nullable();
            $table->date('application_date')->nullable();
            $table->date('desired_move_in_date')->nullable();
            $table->date('lease_end_date')->nullable();
            $table->string('background_check_status')->nullable();
            $table->string('credit_report_status')->nullable();
            $table->string('rental_history_status')->nullable();
            $table->string('affordability_status')->nullable();
            $table->string('right_to_rent_status')->nullable();
            $table->json('guarantors')->nullable();
            $table->json('employer_reference')->nullable();
            $table->json('landlord_reference')->nullable();
            $table->timestamp('screening_consent_at')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('decided_at')->nullable();
            $table->unsignedBigInteger('decided_by')->nullable();
            $table->text('decision_notes')->nullable();
            $table->string('ethereum_address')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['team_id', 'status', 'application_date'], 'rental_applications_team_status_date_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('real_estate_rental_applications');
    }
};
