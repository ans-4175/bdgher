<?php
if (!defined('ROOT_PATH')) die('No direct access.');
//view, if isset param, switch case, error view404
$info = (isset($_GET['info'])) ? $_GET['info'] : "";
$tempat = (isset($_GET['tempat'])) ? $_GET['tempat'] : "";
if ((strcmp($tempat,"")<>0)&&(strcmp($info,"yes")==0)&&check_places($tempat)){
	view_info();
}else if((strcmp($tempat,"")<>0)&&(strcmp($info,"yes")<>0)&&check_places($tempat)){
	store_visit($_GET['tempat']);
	view_cerita();
}else{
	//view_404();
	view_splash();
}

