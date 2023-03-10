<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Jetpack\TestBench\AbstractPackageTestCase;

abstract class TestCase extends AbstractPackageTestCase
{
    protected function getRequiredServiceProviders(): array
    {
        return [
            \Illuminate\View\ViewServiceProvider::class,
            \Spatie\LaravelData\LaravelDataServiceProvider::class,
        ];
    }

    protected function getServiceProviderClass(): string
    {
        return \PreemStudio\Conformist\ServiceProvider::class;
    }
}
