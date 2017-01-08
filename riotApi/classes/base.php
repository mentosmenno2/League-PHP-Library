<?php
	class base
	{	
		//Configurable variables
		private $API_KEY;
		private $DEFAULT_REGION;
		private $RETURN_JSON;

		//Static variables
		private $PLATFORM_DATA;
		private $URLS;
		private $API_BASE_URL = 'https://{region}.api.pvp.net';
		private $API_STATIC_BASE_URL = 'https://global.api.pvp.net';

		//Changing variables
		public $region;

		public function __construct() {
			include dirname(__DIR__).'/config.php';
			include dirname(__DIR__).'/static/platform_data.php';
			include dirname(__DIR__).'/static/api_urls.php';
			$this->region = $this->DEFAULT_REGION;
		}

		public function getUrl($endpoint, $action) {
			$url = $this->URLS[$endpoint]['links'][$action];
			$endpointVersion = $this->URLS[$endpoint]['version'];
			if ($endpoint == "lol-static-data") {
				$url = $this->API_STATIC_BASE_URL . $url;
			}
			else {
				$url = $this->API_BASE_URL . $url;
			}
			$url = str_replace("{apiVersion}", $endpointVersion, $url);
			$url = str_replace("{region}", $this->region, $url);
			$url = str_replace("{location}", $this->PLATFORM_DATA[strtoupper($this->region)]["platformId"], $url);
			return $url;
		}

		protected function listToCommaSeparated($listItems) {
			$listItemsList = '';
			if (is_array($listItems)) {
				$i = 0;
				foreach ($listItems as $value) {
					$i++;
					if ($i > 1) {
						$listItemsList .= ',';
					}
					$listItemsList .= $value;
				}
			}
			else {
				$listItemsList = $listItems;
			}
			return $listItemsList;
		}

		protected function getPlatformId() {
			$region = strtoupper($this->region);
			return $this->PLATFORM_DATA[$region]["platformId"];
			
		}

		protected function getSpectateDomain() {
			$region = strtoupper($this->region);
			return $this->PLATFORM_DATA[$region]["spectateDomain"];
			
		}

		protected function getSpectatePort() {
			$region = strtoupper($this->region);
			return $this->PLATFORM_DATA[$region]["spectatePort"];
		}

		protected function request($url, $parameters = []) {
			$parameters["api_key"] = $this->API_KEY;
			$i = 0;
			foreach ($parameters as $name => $value) {
			    $i++;
			    if($i > 1) {$url .= '&';}
			    else {$url .= '?';}
			    $url .= $name.'='.$value;
			}
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			$result = curl_exec($ch);
			$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			$error = true;
			if($responseCode == 200) {
				$error = false;	
			}
			$response = [
				"error" => $error,
				"responseCode" => $responseCode,
				"data" => json_decode($result)
			];
			if ($this->RETURN_JSON) {
				return json_encode($response);
			}
			else {
				return $response;
			}
		}
	}
?>
