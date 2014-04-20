<?php
/*
Moving server? Releasing? This is what you have to do:
- Change open_db()
*/

// defining some constant that maybe needed
define('DS',DIRECTORY_SEPARATOR);
define('NL',PHP_EOL);

define('ROOT_PATH',dirname(__FILE__).DS);
define('ASSET_PATH',ROOT_PATH.'asset'.DS);
define('CONTROLLER_PATH',ASSET_PATH.'controller'.DS);
define('METHOD_PATH',ASSET_PATH.'method'.DS);
define('VIEW_PATH',ASSET_PATH.'view'.DS);
define('IMAGE_PATH',ASSET_PATH.'image'.DS);

define('HOME_URL','http://'.$_SERVER['SERVER_NAME'].substr($_SERVER['SCRIPT_NAME'],0,strpos($_SERVER['SCRIPT_NAME'],'index.php')));
define('ASSET_URL',HOME_URL.'asset/');
define('IMAGE_URL',ASSET_URL.'image/');
define('STYLE_URL',ASSET_URL.'style/');
define('SCRIPT_URL',ASSET_URL.'script/');
//--UBAH CONFIG ini----------------------------------------------------------
define('IDB_HOST','localhost');
define('IDB_USER','root');
define('IDB_PASS','bismillah');
//define('IDB_USER','labtekin_die');
//define('IDB_PASS','w1t1XvA13r');
define('IDB_NAME','labtek_indie');
define('TBL_PR','bdg_');
//---------------------------------------------------------------------------

// initiate function, session, db, etc.
require_once(ROOT_PATH.'db.php');
require_once(ASSET_PATH.'gen_function.php');
require_once(ASSET_PATH.'function.php');
require_once(ASSET_PATH.'template.php');
// Create our Application instance (replace this with your appId and secret).
date_default_timezone_set('Asia/Jakarta');
if(!isset($_SESSION)){
	session_set_cookie_params(3600);
    session_start();
}
ob_start();
//$con = open_db();

// root offset from root url
$offset = count(explode('/',$_SERVER['SCRIPT_NAME']))-2;

// make parameter for controller and saving input
$qm = strpos($_SERVER['REQUEST_URI'],'?');
if ($qm === false) {
	$ruri = $_SERVER['REQUEST_URI'];
} else {
	$ruri = substr($_SERVER['REQUEST_URI'],0,$qm);
}
$ruri = explode('/',$ruri);
for ($i = $offset+1; $i < count($ruri); $i++) {
	if ($ruri[$i] != '') {
		$param[] = $ruri[$i];
	}
}

// default controller if no ruri
    if (!isset($param)) {
	$param[0] = 'index';
}

// give responsibility to controller
if (file_exists(CONTROLLER_PATH.$param[0].'.php')) {
	if (file_exists(METHOD_PATH.$param[0].'.php')) {
		require_once(METHOD_PATH.$param[0].'.php');
	}
	if (file_exists(VIEW_PATH.$param[0].'.php')) {
		require_once(VIEW_PATH.$param[0].'.php');
	}
	require_once(CONTROLLER_PATH.$param[0].'.php');
} else {
	view_404();
}

//close_db($con);
ob_flush();
