<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\PropertyManagement\Application\CreateManagementRecord;
use Liberu\RealEstate\PropertyManagement\Application\RecordManagementFailure;
use Liberu\RealEstate\PropertyManagement\Application\TransitionManagementRecord;
use Liberu\RealEstate\PropertyManagement\Application\UpdateManagementDetails;
use Liberu\RealEstate\PropertyManagement\Domain\Events\ManagementRecordCreated;
use Liberu\RealEstate\PropertyManagement\Domain\Events\ManagementRecordStatusChanged;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementCapability;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementStatus;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

uses(RefreshDatabase::class);

it('supports every property management capability through its validated public boundary', function (): void {
    expect(ManagementCapability::cases())->toHaveCount(7);

    $record = app(CreateManagementRecord::class)->handle(1, 5, ['subject' => 'Rent schedule', 'capability' => ManagementCapability::RentSchedule->value]);
    expect(fn () => app(UpdateManagementDetails::class)->handle($record, 1, 5, []))->toThrow(ValidationException::class);
    $updated = app(UpdateManagementDetails::class)->handle($record, 1, 5, ['frequency' => 'monthly', 'amount' => 1500]);
    expect($updated->details['amount'])->toBe(1500);
});

it('emits lifecycle events, records failures, and keeps records tenant-scoped', function (): void {
    Event::fake();
    $record = app(CreateManagementRecord::class)->handle(1, 5, ['subject' => 'Maintenance', 'capability' => ManagementCapability::Maintenance->value, 'details' => ['description' => 'Boiler repair', 'priority' => 'high']]);
    app(TransitionManagementRecord::class)->handle($record, 1, 5, ManagementStatus::Completed);
    app(RecordManagementFailure::class)->handle($record->refresh(), 1, 5, 'Contractor unavailable');

    Event::assertDispatched(ManagementRecordCreated::class);
    Event::assertDispatched(ManagementRecordStatusChanged::class);
    expect($record->refresh()->failure_reason)->toBe('Contractor unavailable')->and($record->audit)->toHaveCount(3);
    expect(ManagementRecord::query()->forTeam(2)->count())->toBe(0);
});
