# testpack
The package is supposed to be a library for crawling search engine results and extracting metadata for a set of keywords

Example usage:

require_once __DIR__ . '/vendor/autoload.php';

use vin\testpack\SearchEngine;
require_once __DIR__ . '/src/testpack/SearchEngine.php';

$client = new SearchEngine();

$client->setEngine("google.ae");

$results = $client->search(["keyword1","keyword2"]); 
