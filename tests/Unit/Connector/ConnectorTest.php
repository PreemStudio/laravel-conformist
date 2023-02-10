<?php

declare(strict_types=1);

namespace Tests\Unit\Connector;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use PreemStudio\Conformist\Response\AbstractResponse;
use Tests\Fixtures\ForgeConnector;

it('can access the base URL', function () {
    expect((new ForgeConnector)->baseUrl())->toBe('https://forge.laravel.com/api/v1');
});

it('can create a request from a connector', function () {
    expect((new ForgeConnector)->makeRequest())->toBeInstanceOf(PendingRequest::class);
});

it('can create a response instance', function () {
    Http::fakeSequence()
        ->push('Hello World', 200)
        ->whenEmpty(Http::response());

    expect((new ForgeConnector)->toResponse(Http::get('https://google.com')))->toBeInstanceOf(AbstractResponse::class);
});
