<?php

function base_url(){
    $base_ = (empty($_SERVER['HTTPS']) OR strtolower($_SERVER['HTTPS']) === 'off') ? 'http' : 'https';
	$base_ .= '://'. $_SERVER['HTTP_HOST'];

	if ($_SERVER['HTTP_HOST'] == "localhost") {
		$base_url = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
	}
	elseif ($_SERVER['HTTP_HOST'] == "192.168.1.19") {
        $base_url = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
    }
	else{
		$base_url = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $base_).'/';
	}

    $base_home = str_replace('error/db/','', $base_url);

	return $base_home;
}