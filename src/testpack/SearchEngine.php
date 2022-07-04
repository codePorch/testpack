<?php
namespace vin\testpack;
class SearchEngine 
{
	
private $engin ;
private $page ;
private $googleApiKey = '072E5C8B5B9744309F8F16BCA45B19A6';
private $googleApiUrl = 'https://api.serpwow.com/search';


	public function setEngine($query)
	{
			$this->engin = $query;
			return $this->engin;
	}
	
	public function search($queryArr = [])
	{
		$querystring = implode(", ", $queryArr);
		return $this->getResult($querystring);
		
	}
	
	private function getResult($querystr){
		
		

				$queryString = http_build_query([
'api_key' => $this->googleApiKey,
  'q' => $querystr,
  'engine' => 'google',
 'flatten_results' => 'true',
  'num' => '10',
  'max_page' => '5',
 'google_domain'=>$this->engin,
]);





		
		if(($ch = curl_init(sprintf('%s?%s', $this->googleApiUrl, $queryString))) === false){
			throw new \RuntimeException('Unable to initialize request url.');
		}

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_TIMEOUT, 180);

		if(($response = curl_exec($ch)) === false){
			curl_close($ch);
			throw new \RuntimeException('Unable to execute request.');
		}

		$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if($responseCode!=200){
			throw new \RuntimeException('API did not return a valid result: '.$responseCode.' Response: '.$response);
		}

		return json_decode($response, true);
	}
}

?>
