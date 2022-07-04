# testpack
The package is supposed to be a library for crawling search engine results and extracting metadata for a set of keywords

Example usage:

require_once __DIR__ . '/vendor/autoload.php';

use vin\testpack\SearchEngine;
require_once __DIR__ . '/src/testpack/SearchEngine.php';

$client = new SearchEngine();

$client->setEngine("google.ae");

$results = $client->search(["keyword1","keyword2"]); 

Example output:

The $results should be an instance of ArrayIterator with the following properties

- keyword being searched

- ranking (where the result was found on the search engine, the topmost result would be 0 and the last would be 50 (results per page x 5)

- url of the page (as it appears in google search)

- title of the page (as it appears in google search)

- description (as it appears in google search)

- promoted This is a boolean value indicating whether the result is an ad or organic result(true if it is 'ad') 
