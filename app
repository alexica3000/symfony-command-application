<?php

namespace App;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('demo application');
$app->add(new WhatTimeCommand());
$app->add(new ConvertString());
$app->run();
