<?php
function explodeTrim($delim,$text){
	$tags = explode($delim,$text);
	$ret = array();
	foreach ($tags as $tag){
		$tmp = trim($tag);
		array_push($ret,$tmp);
	}
	return $ret;
}

function amankan($str) {
	// experimental
	if (get_magic_quotes_gpc()) {
		return $str;
	} else {
		if (function_exists('addslashes')) {
			return addslashes($str);
		} else {
			return mysql_real_escape_string($str);
		}
	}
}


function no_index() {
	return '<meta name="robots" content="noindex,nofollow" />'.NL;
}

function int_to_rp($int) {
	$int = str_split((string)$int);
	$i = 0;
	$retval = "";
	for ($j = count($int) - 1; $j >= 0; $j--) {
		if ($i == 3) {
			$retval = $int[$j].".".$retval;
			$i = 1;
		} else {
			$retval = $int[$j].$retval;
			$i++;
		}		
	}
	$retval = "Rp ".$retval;
	return $retval;
}

function rp_to_int($rp) {
	$rp = explode(" ",$rp);
	$rp = $rp[1];
	$rp = explode(".",$rp);
	$retval = "";
	foreach ($rp as $tiga) {
		$retval .= $tiga;
	}
	return intval($retval);
}

function slugging($string) {
	$nstring = preg_replace("/[^a-zA-Z0-9]/","-",strtolower($string));
	return $nstring;
}

function convDate($dtime){
	$mtime = strtotime($dtime);
	$tgl = date("d/m/Y",$mtime);
	return $tgl;
}

function intelCache(){
	//get the last-modified-date of this very file
	$lastModified=filemtime(__FILE__);
	//get a unique hash of this file (etag)
	$etagFile = md5_file(__FILE__);
	//get the HTTP_IF_MODIFIED_SINCE header if set
	$ifModifiedSince=(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
	//get the HTTP_IF_NONE_MATCH header if set (etag: unique file hash)
	$etagHeader=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);

	//set last-modified header
	header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
	//set etag-header
	header("Etag: $etagFile");
	//make sure caching is turned on
	header('Cache-Control: public');

	//check if page has changed. If not, send 304 and exit
	if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$lastModified || $etagHeader == $etagFile)
	{
		   header("HTTP/1.1 304 Not Modified");
		   exit;
	}
}