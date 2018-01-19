<?php

namespace Seminar\Listeners;

class ShortenListener implements ListenerInterface
{
    public function handle($event)
    {
        $name = $event->name;
        $result = '';
        $temp = explode(' ', $name);
        foreach ($temp as $tmp) {
            $result .= $tmp[0];
        }
        echo $result;
        echo PHP_EOL;
    }
}
