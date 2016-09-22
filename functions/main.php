<?php
if (!defined('DOKU_INC')) die();

function getRootNamespace($info)
{
	$return = '';
	$NS = $info['namespace'];
	$_ns = explode(':', $NS)[0];
	
	if($_ns) {
		$return = " class='". $_ns ."'";
	} else {
		$return = NULL;
	}
	return $return;
}