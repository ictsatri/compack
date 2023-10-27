<?php
	
	require_once 'vendor/autoload.php';
	
	$satusehat = new Satusehat\Bridging\SatuSehatHttp();
	return $satusehat->getToken();
