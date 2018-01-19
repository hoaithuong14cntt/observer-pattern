<?php

namespace Seminar\Events;

abstract class AbstractEvent
{
    protected $listeners = [];

    public function execute()
    {
        foreach ($this->listeners as $listener) {
            $listener = new $listener;
            $listener->handle($this);
        }
    }
}
