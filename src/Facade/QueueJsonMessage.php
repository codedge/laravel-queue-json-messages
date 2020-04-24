<?php

declare(strict_types=1);

namespace Codedge\Facade;

use Illuminate\Support\Facades\Facade;

final class QueueJsonMessage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'queuejm';
    }
}
