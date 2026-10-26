<?php

namespace Tests;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use RuntimeException;

abstract class TestCase extends BaseTestCase
{
    public function createApplication(): Application
    {
        $app = parent::createApplication();

        if (! $app->environment('testing')) {
            throw new RuntimeException('Refusing to run tests outside the testing environment. Clear the cached application configuration first.');
        }

        return $app;
    }
}
