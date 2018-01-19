<?php

namespace Seminar\Events;

use Seminar\Listeners\DashListener;
use Seminar\Listeners\ShortenListener;

class TransformEvent extends AbstractEvent
{
    protected $listeners = [
        DashListener::class,
        ShortenListener::class,
    ];

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
