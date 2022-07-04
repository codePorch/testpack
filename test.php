<?php
require_once __DIR__ . '/vendor/autoload.php';

use vin\testpack\SearchEngine;
require_once __DIR__ . '/src/testpack/SearchEngine.php';

$client = new SearchEngine();
$client->setEngine("google.ae");
$results = $client->search(["cakes"]); 

$search_parameters=$results['search_parameters']['q'];

$position=1;
$items = new ArrayIterator();
foreach ($results['organic_results'] as $number => $result) 
{


$link=(array_key_exists("link", $result)) ? $result['link'] : "";
$title=(array_key_exists("title", $result)) ? $result['title'] : "";
$description=(array_key_exists("snippet", $result)) ? $result['snippet'] : "";
$promoted=$result['type'];

	
		$res = array(
			"keyword " => $search_parameters,
			"ranking " => $position,
			"url" => $link,
			"title" => $title,
			"description "=>$description,
			"promoted "=>$promoted
		);
	
	
  $position++;
  $items->append($res);
}
header('Content-Type: application/json');
print_r(json_encode($items,JSON_PRETTY_PRINT));
?>
