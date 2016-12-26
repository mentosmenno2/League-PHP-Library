<?php
	class get extends base
	{
		public function __construct() {
			parent::__construct();
		}

		public function freeToPlay() {
			$url = $this->getUrl('champion', 'champions');
			$parameters = [
				"freeToPlay" => "true"
			];
			return $this->request($url, $parameters);
		}

		public function champions() {
			$parameters = [
				
			];
			$url = $this->getUrl('champion', 'champions');
			return $this->request($url, $parameters);
		}

		public function champion($id) {
			$parameters = [
				
			];
			$url = $this->getUrl('champion', 'champion');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function championMastery($playerId, $championId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championMastery');
			$url = str_replace("{playerId}", $playerId, $url);
			$url = str_replace("{championId}", $championId, $url);
			return $this->request($url, $parameters);
		}

		public function championsMastery($playerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championsMastery');
			$url = str_replace("{playerId}", $playerId, $url);
			return $this->request($url, $parameters);
		}

		public function championMasteryScore($playerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championsMasteryScore');
			$url = str_replace("{playerId}", $playerId, $url);
			return $this->request($url, $parameters);
		}

		public function championMasteryTopChampions($playerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('championmastery', 'championsMasteryTop');
			$url = str_replace("{playerId}", $playerId, $url);
			return $this->request($url, $parameters);
		}

		public function currentGame($summonerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('current-game', 'currentGame');
			$platformId = $this->getPlatformId();
			$url = str_replace("{platformId}", $platformId, $url);
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function featuredGames() {
			$parameters = [
				
			];
			$url = $this->getUrl('featured-games', 'featured');
			return $this->request($url, $parameters);
		}

		public function recentGames($summonerId) {
			$parameters = [
				
			];
			$url = $this->getUrl('game', 'recent');
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function leagues($summonerIds) {
			$parameters = [
				
			];
			$url = $this->getUrl('league', 'league');
			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function leagueEntries($summonerIds) {
			$parameters = [
				
			];
			$url = $this->getUrl('league', 'leagueEntries');
			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function leaguesChallenger() {
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

		public function staticDataChampions($dataById = false, $champData = 'all') {
			$parameters = [
				"dataById" => $dataById,
				"champData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'champions');
			return $this->request($url, $parameters);
		}

		public function staticDataChampion($id, $champData = 'all') {
			$parameters = [
				"champData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'champions');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function staticDataItems($itemListData = 'all') {
			$parameters = [
				"itemListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'items');
			return $this->request($url, $parameters);
		}

		public function staticDataItem($id, $itemListData = 'all') {
			$parameters = [
				"itemListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'item');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function staticDataLanguageStrings() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'language-strings');
			return $this->request($url, $parameters);
		}

		public function staticDataLanguages() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'languages');
			return $this->request($url, $parameters);
		}

		public function staticDataMap() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'map');
			return $this->request($url, $parameters);
		}

		public function staticDataMasteries($masteryListData = 'all') {
			$parameters = [
				"masteryListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'masteries');
			return $this->request($url, $parameters);
		}

		public function staticDataMastery($id, $masteryListData = 'all') {
			$parameters = [
				"masteryListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'mastery');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function staticDataRealm() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'realm');
			return $this->request($url, $parameters);
		}

		public function staticDataRunes($runeListData = 'all') {
			$parameters = [
				"runeListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'runes');
			return $this->request($url, $parameters);
		}

		public function staticDataRune($id, $runeListData = 'all') {
			$parameters = [
				"runeListData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'rune');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function staticDataSummonerSpells($spellData = 'all') {
			$parameters = [
				"spellData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'summoner-spells');
			return $this->request($url, $parameters);
		}

		public function staticDataSummonerSpell($id, $spellData = 'all') {
			$parameters = [
				"spellData" => $champData
			];
			$url = $this->getUrl('lol-static-data', 'summoner-spell');
			$url = str_replace("{id}", $id, $url);
			return $this->request($url, $parameters);
		}

		public function staticDataVersions() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-static-data', 'versions');
			return $this->request($url, $parameters);
		}

		public function lolChardsStatus() {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-status', 'shards');
			return $this->request($url, $parameters);
		}

		public function lolChardStatus($shard) {
			$parameters = [
				
			];
			$url = $this->getUrl('lol-status', 'shard');
			$url = str_replace("{shard}", $shard, $url);
			return $this->request($url, $parameters);
		}

		public function match($matchId) {
			$parameters = [
				
			];
			$url = $this->getUrl('match', 'match');
			$url = str_replace("{matchId}", $matchId, $url);
			return $this->request($url, $parameters);
		}

		public function matchList($summonerId, $championIds = '', $rankedQueues = '', $seasons = '') {
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

		public function rankedStats($summonerId, $season = "") {
			$parameters = [
				'season' => $season
			];
			$url = $this->getUrl('stats', 'ranked');
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function statsSummary($summonerId, $season = "") {
			$parameters = [
				'season' => $season
			];
			$url = $this->getUrl('stats', 'summary');
			$url = str_replace("{summonerId}", $summonerId, $url);
			return $this->request($url, $parameters);
		}

		public function summonersByNames($summonerNames) {
			$parameters = [
				
			];

			$summonerNamesList = listToCommaSeparated($summonerNames);
			$url = $this->getUrl('summoner', 'byName');
			$url = str_replace("{summonerNames}", $summonerNamesList, $url);
			return $this->request($url, $parameters);
		}

		public function summonersByIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'byId');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function masteriesBySummonerIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'masteries');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function summonerNamesBySummonerIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'name');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}

		public function runesBySummonerIds($summonerIds) {
			$parameters = [
				
			];

			$summonerIdsList = listToCommaSeparated($summonerIds);
			$url = $this->getUrl('summoner', 'runes');
			$url = str_replace("{summonerIds}", $summonerIdsList, $url);
			return $this->request($url, $parameters);
		}
	}
?>