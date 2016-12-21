<?php
	class riotApi
	{	
		//Configurable variables
		private $API_KEY;
		private $DEFAULT_REGION;

		//Static variables
		private $PLATFORM_DATA;
		private $URLS;
		private $API_BASE_URL = 'https://{region}.api.pvp.net';
		private $API_STATIC_BASE_URL = 'https://global.api.pvp.net';

		//Changing variables
		public $region;

		public function __construct() {
			include 'config.php';
			include 'static/platform_data.php';
			include 'static/api_urls.php';
			$this->region = $this->DEFAULT_REGION;
		}

		public function getFreeToPlay() {
			$url = $this->getUrl('champion', 'champions');
			$parameters = [
				"freeToPlay" => "true"
			];
			return $this->request($url, $parameters);
		}

		public function getChampions() {
			$parameters = [
				
			];
			$url = $this->getUrl('champion', 'champions');
			return $this->request($url, $parameters);
		}

		public function getChampion($id) {
			$parameters = [
				
			];
			$url = $this->getUrl('champion', 'champion');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function getChampionMastery($playerId, $championId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championMastery');
			$url = str_replace("{playerId}", $playerId, $url);
			$url = str_replace("{championId}", $championId, $url);
			return $this->request($url, $parameters);
		}

		public function getChampionsMastery($playerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championsMastery');
			$url = str_replace("{playerId}", $playerId, $url);
			return $this->request($url, $parameters);
		}

		public function getChampionMasteryScore($playerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championsMasteryScore');
			$url = str_replace("{playerId}", $playerId, $url);
			return $this->request($url, $parameters);
		}

		public function getChampionMasteryTopChampions($playerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championsMasteryTop');
			$url = str_replace("{playerId}", $playerId, $url);
			return $this->request($url, $parameters);
		}

		public function getCurrentGame($summonerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('current-game', 'currentGame');
			$platformId = $this->getPlatformId();
			$url = str_replace("{platformId}", $platformId, $url);
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function getFeaturedGames() {
			$parameters = [
				
			];
			$url = $this->getUrl('featured-games', 'featured');
			return $this->request($url, $parameters);
		}

		public function getRecentGames($summonerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('game', 'recent');
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function getLeagues($summonerIds) {
			$parameters = [
				
			];
			$url = $this->getUrl('league', 'league');
			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function getLeagueEntries($summonerIds) {
			$parameters = [
				
			];
			$url = $this->getUrl('league', 'leagueEntries');
			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function getLeaguesChallenger() {
			$parameters = [
				
			];
			$url = $this->getUrl('league', 'challenger');
			return $this->request($url, $parameters);
		}

		public function getLeaguesMaster() {
			$parameters = [
				
			];
			$url = $this->getUrl('league', 'master');
			return $this->request($url, $parameters);
		}

		public function getStaticDataChampions($dataById = false, $champData = 'all') {
			$parameters = [
				"dataById" => $dataById,
				"champData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'champions');
			return $this->request($url, $parameters);
		}

		public function getStaticDataChampion($id, $champData = 'all') {
			$parameters = [
				"champData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'champions');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function getStaticDataItems($itemListData = 'all') {
			$parameters = [
				"itemListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'items');
			return $this->request($url, $parameters);
		}

		public function getStaticDataItem($id, $itemListData = 'all') {
			$parameters = [
				"itemListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'item');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function getStaticDataLanguageStrings() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'language-strings');
			return $this->request($url, $parameters);
		}

		public function getStaticDataLanguages() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'languages');
			return $this->request($url, $parameters);
		}

		public function getStaticDataMap() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'map');
			return $this->request($url, $parameters);
		}

		public function getStaticDataMasteries($masteryListData = 'all') {
			$parameters = [
				"masteryListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'masteries');
			return $this->request($url, $parameters);
		}

		public function getStaticDataMastery($id, $masteryListData = 'all') {
			$parameters = [
				"masteryListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'mastery');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function getStaticDataRealm() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'realm');
			return $this->request($url, $parameters);
		}

		public function getStaticDataRunes($runeListData = 'all') {
			$parameters = [
				"runeListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'runes');
			return $this->request($url, $parameters);
		}

		public function getStaticDataRune($id, $runeListData = 'all') {
			$parameters = [
				"runeListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'rune');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function getStaticDataSummonerSpells($spellData = 'all') {
			$parameters = [
				"spellData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'summoner-spells');
			return $this->request($url, $parameters);
		}

		public function getStaticDataSummonerSpell($id, $spellData = 'all') {
			$parameters = [
				"spellData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'summoner-spell');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function getStaticDataVersions() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'versions');
			return $this->request($url, $parameters);
		}

		public function getLoLChardsStatus() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-status', 'shards');
			return $this->request($url, $parameters);
		}

		public function getLoLChardStatus($shard) {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-status', 'shard');
			$url = str_replace("{shard}", $shard, $url);
			return $this->request($url, $parameters);
		}

		public function getMatch($matchId) {
			$parameters = [
				
			];
			$url = $this->getUrl('match', 'match');
			$url = str_replace("{matchId}", $matchId, $url);
			return $this->request($url, $parameters);
		}

		public function getMatchList($summonerId, $championIds = '', $rankedQueues = '', $seasons = '') {
			$championIdsList = listToCommaSeparated($championIds);
			$rankedQueuesList = listToCommaSeparated($rankedQueues);
			$seasonsList = listToCommaSeparated($seasons);
			$parameters = [
				'championIds' => $championIdsList,
				'rankedQueues' => $rankedQueuesList,
				'seasons' => $seasonsList
			];
			$url = $this->getUrl('matchlist', 'matchList');
			$url = str_replace("{summonerId}", $summonerId, $url);

			return $this->request($url, $parameters);
		}

		public function getRankedStats($summonerId, $season = "") {
			$parameters = [
				'season' => $season
			];
			$url = $this->getUrl('stats', 'ranked');
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function getStatsSummary($summonerId, $season = "") {
			$parameters = [
				'season' => $season
			];
			$url = $this->getUrl('stats', 'summary');
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function getSummonersByNames($summonerNames) {
			$parameters = [
				
			];

			$summonerNamesList = listToCommaSeparated($summonerNames);
			$url = $this->getUrl('summoner', 'byName');
			$url = str_replace("{summonerNames}", $summonerNamesList, $url);
			return $this->request($url, $parameters);
		}

		public function getSummonersByIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'byId');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function getMasteriesBySummonerIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'masteries');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function getSummonerNamesBySummonerIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'name');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function getRunesBySummonerIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'runes');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
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
			return $url;
		}

		private function listToCommaSeparated($listItems) {
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

		private function getPlatformId() {
			$region = strtoupper($this->region);
			return $this->PLATFORM_DATA[$region]["platformId"];
			
		}

		private function getSpectateDomain() {
			$region = strtoupper($this->region);
			return $this->PLATFORM_DATA[$region]["spectateDomain"];
			
		}

		private function getSpectatePort() {
			$region = strtoupper($this->region);
			return $this->PLATFORM_DATA[$region]["spectatePort"];
		}

		private function request($url, $parameters = []) {
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
				"data" => json_decode($result)
			];
			return json_encode($response);
		}
	}

	$riotApi = new riotApi();
?>
