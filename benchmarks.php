<?php

$benchmarks = [];

ob_start();
$t1 = microtime(true);
require_once __DIR__.'/nate/index.php';
$t2 = microtime(true);
ob_end_clean();

$benchmarks['nate'] = $t2 - $t1;

ksort($benchmarks);

var_dump($benchmarks);