<?php

namespace Laracon\Order\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use Laracon\Shipping\Contracts\Events\ParcelShipped;
use Laracon\Order\Domain\Listeners\HandleOrderShipment;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ParcelShipped::class => [
            HandleOrderShipment::class,
        ],
    ];
}
