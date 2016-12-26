<?php
	require 'classes/base.php';
	require 'classes/get.php';

	class riotApi 
	{
		public $get;

		public function __construct() {
			$this->get = new get();
		}
	}

	$riotApi = new riotApi();

	echo $riotApi->get->freeToPlay();
?>