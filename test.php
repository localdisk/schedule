<?php

require './vendor/autoload.php';

$b = new \Localdisk\BackGround();
$b->handle('php process.php', __DIR__ . '/end.txt', true);

echo 'foo';
