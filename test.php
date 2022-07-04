<?php
require_once __DIR__ . '/vendor/autoload.php';

use vin\testpack\SearchEngine;
require_once __DIR__ . '/src/testpack/SearchEngine.php';

$client = new SearchEngine();
$client->setEngine("google.ae");
$results = $client->search(["cakes"]); 


header('Content-Type: application/json');
print_r(json_encode($results,JSON_PRETTY_PRINT));
?>
