<?php

declare(strict_types=1);

namespace PreemStudio\Conformist\Response\Extensions;

use PreemStudio\Conformist\Contracts\Extensible;
use PreemStudio\Conformist\Contracts\Extension;

final class ThrowsIfStatus implements Extension
{
    public function __construct(private int $statusCode)
    {
        //
    }

    /** @param  \PreemStudio\Conformist\Contracts\Response  $extensible */
    public function register(Extensible $extensible): void
    {
        $extensible->throwIfStatus($this->statusCode);
    }

    public function dependencies(): array
    {
        return [];
    }
}
