<?php

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use DawM\TestComposer\Test;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('C:\Users\DAW_M\Documents\DAW_DWES\PHP\Clase\Test-Composer\your.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$test = new Test();
$test->hi();