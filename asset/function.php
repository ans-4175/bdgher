<?php
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function store_visit($to){
	//check before->after
	if (isset($_SESSION['visit']['ip'])){
		$_SESSION['visit']['from'] = $_SESSION['visit']['to'];
		$_SESSION['visit']['to'] = $to;
	}else{
		$_SESSION['visit']['ip'] = get_client_ip();
		$_SESSION['visit']['from'] = "";
		$_SESSION['visit']['to'] = $to;
	}
	$ua = slugging($_SERVER['HTTP_USER_AGENT']);
	$ip = $_SESSION['visit']['ip'];
	$from = $_SESSION['visit']['from'];
	$to = $_SESSION['visit']['to'];
	if (strcmp($from,$to)<>0){
		//store in db
		$db = new db();
		$query = "INSERT INTO `bdg_counter` (`ip_id`, `dari`, `ke`, `ua`) VALUES ('$ip', '$from', '$to', '$ua');";
		//echo $query;
		$ret = 0;
		$db->exec($query);
		$ret = $db->lastInsertId();
	}
}

function check_places($tujuan){
	$ret = false;
	$places = array('albaraltim','stpeter','villmer','drielok','graha','pagergunung');
	foreach ($places as $place){
		if (strcmp($tujuan,$place)==0) $ret=true;
	}
	return $ret;
}
