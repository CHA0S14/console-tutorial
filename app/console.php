<?php

include __DIR__.'/../vendor/autoload.php';

use Commands\GreetCommand;
use Commands\InteractiveGreetCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new GreetCommand);
$application->add(new InteractiveGreetCommand);
$application->run();
