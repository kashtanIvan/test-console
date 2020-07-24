<?php

require __DIR__ . '/vendor/autoload.php';

use App\Command\UserCanDoCommand;
use App\Command\UserInfoCommand;
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new UserInfoCommand());
$app->add(new UserCanDoCommand());
$app->run();
