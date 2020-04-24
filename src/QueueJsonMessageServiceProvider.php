<?php

declare(strict_types=1);

namespace Codedge\QueueJsonMessage;

use Illuminate\Support\ServiceProvider;

final class QueueJsonMessageServiceProvider extends ServiceProvider
{
    public function provides()
    {
        return [
            'queuejm',
        ];
    }
}
