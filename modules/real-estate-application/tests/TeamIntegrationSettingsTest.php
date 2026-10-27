<?php

use Liberu\RealEstate\Application\Support\TeamIntegrationSettings;

it('accepts integration credentials as secret settings', function () {
    $definition = new TeamIntegrationSettings();

    expect($definition->validate(['openai_api_key' => 'credential', 'rightmove_client_secret' => 'credential']))->toBeTrue()
        ->and($definition->secret())->toBeTrue();
});

it('rejects configuration paths and non-map integration settings', function (mixed $settings) {
    expect((new TeamIntegrationSettings())->validate($settings))->toBeFalse();
})->with([
    'configuration path' => [['services.openai.api_key' => 'credential']],
    'numeric keys' => [['credential']],
    'scalar' => ['credential'],
    'null' => [null],
]);
