# testpack
The package is supposed to be a library for crawling search engine results and extracting metadata for a set of keywords
Example usage:

$client = new SearchEngine();

$client->setEngine("google.ae");

$results = $client->search(["keyword1","keyword2"]); 
