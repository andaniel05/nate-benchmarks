<?php

$benchmarks = [];

// Nate
ob_start();
$t1 = microtime(true);
require __DIR__.'/nate/index.php';
$t2 = microtime(true);
ob_end_clean();

$benchmarks['nate'] = $t2 - $t1;

// Twig
ob_start();
$t1 = microtime(true);
require __DIR__.'/twig/index.php';
$t2 = microtime(true);
ob_end_clean();

$benchmarks['twig'] = $t2 - $t1;

asort($benchmarks);

var_dump($benchmarks);

$percent = $benchmarks['nate'] * 100 / $benchmarks['twig'];
$percent = 100 - round($percent, 2);

echo "Nate is $percent% more faster than Twig.";