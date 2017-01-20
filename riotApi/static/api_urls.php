<?php
	$this->URLS = [
			'champion' => [
				'version' => 'v1.2',
				'links' => [
					'champions' => '/api/lol/{region}/{apiVersion}/champion',
					'champion' => '/api/lol/{region}/{apiVersion}/champion/{id}'
				]
				
			],
			'championmastery' => [
				'version' => '',
				'links' => [
					'championMastery' => '/championmastery/location/{location}/player/{playerId}/champion/{championId}',
					'championsMastery' => '/championmastery/location/{location}/player/{playerId}/champions',
					'championsMasteryScore' => '/championmastery/location/{location}/player/{playerId}/score',
					'championsMasteryTop' => '/championmastery/location/{location}/player/{playerId}/topchampions',
				]
			],
			'current-game' => [
				'version' => 'v1.0',
				'links' => [
					'currentGame' => '/observer-mode/rest/consumer/getSpectatorGameInfo/{platformId}/{summonerId}'
				]

			],
			'featured-games' => [
				'version' => 'v1.0',
				'links' => [
					'featured' => '/observer-mode/rest/featured'
				]
			],
			'game' => [
				'version' => 'v1.3',
				'links' => [
					'recent' => '/api/lol/{region}/{apiVersion}/game/by-summoner/{summonerId}/recent'
				]
			],
			'league' => [
				'version' => 'v2.5',
				'links' => [
					'league' => '/api/lol/{region}/{apiVersion}/league/by-summoner/{summonerIds}',
					'leagueEntries' => '/api/lol/{region}/{apiVersion}/league/by-summoner/{summonerIds}/entry',
					'challenger' => '/api/lol/{region}/{apiVersion}/league/challenger',
					'master' => '/api/lol/{region}/{apiVersion}/league/master'
				]
			],
			'lol-static-data' => [
				'version' => 'v1.2',
				'links' => [
					'champions' => '/api/lol/static-data/{region}/{apiVersion}/champion',
					'champion' => '/api/lol/static-data/{region}/{apiVersion}/champion/{id}',
					'items' => '/api/lol/static-data/{region}/{apiVersion}/item',
					'item' => '/api/lol/static-data/{region}/{apiVersion}/item/{id}',
					'language-strings' => '/api/lol/static-data/{region}/{apiVersion}/language-strings',
					'languages' => '/api/lol/static-data/{region}/{apiVersion}/languages',
					'map' => '/api/lol/static-data/{region}/{apiVersion}/map',
					'masteries' => '/api/lol/static-data/{region}/{apiVersion}/mastery',
					'mastery' => '/api/lol/static-data/{region}/{apiVersion}/mastery/{id}',
					'realm' => '/api/lol/static-data/{region}/{apiVersion}/realm',
					'runes' => '/api/lol/static-data/{region}/{apiVersion}/rune',
					'rune' => '/api/lol/static-data/{region}/{apiVersion}/rune/{id}',
					'summoner-spells' => '/api/lol/static-data/{region}/{apiVersion}/summoner-spell',
					'summoner-spell' => '/api/lol/static-data/{region}/{apiVersion}/summoner-spell/{id}',
					'versions' => '/api/lol/static-data/{region}/{apiVersion}/versions'
				]
			],
			'lol-status' => [
				'version' => 'v1.0',
				'links' => [
					'shards' => '/shards',
					'shard' => '/shards/{shard}'
				]
			],
			'match' => [
				'version' => 'v2.2',
				'links' => [
					'match' => '/api/lol/{region}/{apiVersion}/match/{matchId}',
					'for-tournament' => '/api/lol/{region}/{apiVersion}/match/for-tournament/{matchId}',
					'by-tournament' => '/api/lol/{region}/{apiVersion}/match/by-tournament/{tournamentCode}/ids'
				]
			],
			'matchlist' => [
				'version' => 'v2.2',
				'links' => [
					'matchList' => '/api/lol/{region}/{apiVersion}/matchlist/by-summoner/{summonerId}'
				]
			],
			'stats' => [
				'version' => 'v1.3',
				'links' => [
					'ranked' => '/api/lol/{region}/{apiVersion}/stats/by-summoner/{summonerId}/ranked',
					'summary' => '/api/lol/{region}/{apiVersion}/stats/by-summoner/{summonerId}/summary'
				]
			],
			'summoner' => [
				'version' => 'v1.4',
				'links' => [
					'byName' => '/api/lol/{region}/{apiVersion}/summoner/by-name/{summonerNames}',
					'byId' => '/api/lol/{region}/{apiVersion}/stats/by-summoner/{summonerId}/summary',
					'masteries' => '/api/lol/{region}/{apiVersion}/summoner/{summonerIds}/masteries',
					'name' => '/api/lol/{region}/{apiVersion}/summoner/{summonerIds}/name',
					'runes' => '/api/lol/{region}/{apiVersion}/summoner/{summonerIds}/runes',
				]
			]
		];
?>