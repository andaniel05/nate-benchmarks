<?php

require_once __DIR__.'/../vendor/autoload.php';

use ThenLabs\Nate\Template;

$page = new Template(__DIR__.'/templates/page.tpl.php');

echo $page->render([
    'lang' => 'en',
    'title' => 'My Title',
    'persons' => [
        ['name' => 'Juan Pérez', 'age' => '50', 'gender' => 'M'],
        ['name' => 'Luisa Martínez', 'age' => '23', 'gender' => 'F'],
        ['name' => 'Manuel Pérez', 'age' => '30', 'gender' => 'M'],
    ],
    'footer_content' => '<p style="background-color: gray; color: white">This is the footer content.</p>',
]);