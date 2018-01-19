<?php

require 'vendor/autoload.php';

function fire($event)
{
    $event->execute();
}

$input = 'Le Huu Tien';

$transformEvent = new Seminar\Events\TransformEvent($input);
fire($transformEvent);

// /// OUTPUT 1
// echo preg_replace('/\s/', '_', $input);

// echo PHP_EOL;

// // OUTPUT 2
// $result = '';
// $temp = explode(' ', $input);
// foreach ($temp as $tmp) {
//     $result .= $tmp[0];
// }
// echo $result;

// echo PHP_EOL;
