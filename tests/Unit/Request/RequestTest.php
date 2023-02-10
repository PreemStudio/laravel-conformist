<?php

declare(strict_types=1);

namespace Tests\Unit\Connector;

use Illuminate\Support\Facades\Http;
use PreemStudio\Conformist\Response\AbstractResponse;
use Tests\Fixtures\ListServersRequest;

it('can send a request and receive a response instance', function () {
    Http::fakeSequence()
        ->push('Hello World', 200)
        ->whenEmpty(Http::response());

    expect((new ListServersRequest)->process())->toBeInstanceOf(AbstractResponse::class);
});
