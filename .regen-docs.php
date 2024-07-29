<?php

use CedricZiel\Baserow\Generated\Client;

require_once __DIR__.'/vendor/autoload.php';

$methods = get_class_methods(Client::class);
$readme = file_get_contents('./.github/README.md');

$doc = '';

foreach ($methods as $method) {
    echo "$method\n";
    $doc .= "$method\n";
}

file_put_contents('README.md', str_replace('### docs ###', $doc, $readme));
