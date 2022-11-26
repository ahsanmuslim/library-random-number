<?php

use PhpDasar\RandomNumber\Random;

require_once __DIR__ . '/vendor/autoload.php';

$num = new Random();
echo $num->getNumber();