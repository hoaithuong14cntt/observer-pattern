<?php

namespace Seminar\Listeners;

class DashListener implements ListenerInterface
{
    public function handle($event)
    {
        $name = $event->name;
        echo preg_replace('/\s/', '_', $name);
        echo PHP_EOL;
    }
}
