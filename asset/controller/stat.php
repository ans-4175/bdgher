<?php
if (!defined('ROOT_PATH')) die('No direct access.');
//view, if isset param, switch case, error view404
if (!isset($_GET['minta'])){
	view_header_top();
	?>
	<title>Dashboard #BDGHER</title>
	<link rel="stylesheet" href="<?php echo STYLE_URL ?>bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo STYLE_URL ?>bootflat.min.css" />
	<link rel="stylesheet" href="<?php echo STYLE_URL ?>jquery-ui-timepicker-addon.css">
    <link rel="stylesheet" href="<?php echo STYLE_URL ?>ui-lightness/jquery-ui-1.10.2.custom.min.css">
	<style>
		body{
			background-color : #F1F2F6 !important;
		}
	</style>
	<?php
	view_header_bottom();
	?>
	<div ng-app="bdgApp">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content DOWN here -->
        <div class="container" id="container" ng-controller="crtCtrl">
			<h1>Lihat Data Pengunjung</h1>
			<div class="row">
				<div class="col-md-4"><h4>Mulai tanggal : </h4><input type="text" value="" id="tglMulai"/></div>
				<div class="col-md-4"><h4>Sampai tanggal : </h4><input type="text" value="" id="tglSelesai"/></div>
			</div><br />
			<div ng-click="run()"><button class="btn btn-success" type="button">Lihat</button></div><hr />
			<div id="data" style="display:block">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><h4>Total Kunjungan : {{kunjungan.total}}</h4></h3>
						</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr><th>Tempat Kunjungan</th><th>Jumlah Pengunjung (orang)</th></tr>
							</thead>
							<tbody>
								<tr><td>Aula Barat &amp; Timur</td><td>{{kunjungan.albaraltim}}</td></tr>
								<tr><td>St. Peter</td><td>{{kunjungan.stpeter}}</td></tr>
								<tr><td>Villa Merah</td><td>{{kunjungan.villmer}}</td></tr>
								<tr><td>Drie Locomotief</td><td>{{kunjungan.drielok}}</td></tr>
								<tr><td>Graha Parahyangan</td><td>{{kunjungan.graha}}</td></tr>
								<tr><td>Aalbers' Houses</td><td>{{kunjungan.pagergunung}}</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><h4>Jenis Pengunjung</h4></h3>
						</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr><th>Tipe Device</th><th>Jumlah Pengunjung (orang)</th></tr>
							</thead>
							<tbody>
								<tr><td>Android Mobile</td><td>{{ua.android}}</td></tr>
								<tr><td>iPhone</td><td>{{ua.ios}}</td></tr>
								<tr><td>Blackberry</td><td>{{ua.bb}}</td></tr>
								<tr><td>Windows Phone</td><td>{{ua.wphone}}</td></tr>
								<tr><td>Lain-lain (Desktop atau Tablet)</td><td>{{devLain}}</td></tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title"><h4>Pengunjung : {{pengunjungs.total}}</h4><select style="color:#000" ng-model="selectedIp" ng-options="org for org in pengunjungs.orang">
								<option value="" ng-hide="foo">--pilih ip--</option>
							</select></h3>
						</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr><th>IP</th><th>Tempat</th><th>Lama Waktu (menit)</th></tr>
							</thead>
							<tbody>
								<tr class="warning" ng-repeat="orang in pengunjungs.rute | filter:selectedIp">
									<td>{{orang.ip}}</td>
									<td>{{orang.tempat}}</td>
									<td>{{orang.durasi}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			</div>
        </div>
    </div>
	<?php
	view_footer_top();
	?>
	<script src="<?php echo SCRIPT_URL ?>vendor/jquery-1.10.2.min.js"></script>
	<script src="<?php echo SCRIPT_URL ?>vendor/jquery-ui.min.js"></script>
    <script src="<?php echo SCRIPT_URL ?>vendor/jquery-ui-timepicker-addon.js"></script>
	<script>
		$(function() {
			$('#tglMulai').datetimepicker({dateFormat: "yy-mm-dd"});
			$('#tglSelesai').datetimepicker({dateFormat: "yy-mm-dd"});
		});
		
		var bdgApp = angular.module('bdgApp', ["ngSanitize"]);
		bdgApp.controller('crtCtrl', ['$scope','$http', function ($scope,$http) {
			// Controller magic
			$scope.run = function() {
				var imulai = $('#tglMulai').val();
				var iselesai = $('#tglSelesai').val();
				if (imulai!=""&&iselesai!="") {
					$http({
						url: "<?php echo HOME_URL."stat" ?>", 
						method: "GET",
						params: {minta:"yes",mulai:imulai,selesai:iselesai}
					 }).
						success(function(data, status, headers, config) {
						// this callback will be called asynchronously
						// when the response is available
						//Total Pengunjung
						$scope.kunjungan = {
							"total":data[0].total,
							"albaraltim":data[0].albaraltim,
							"stpeter":data[0].stpeter,
							"villmer":data[0].villmer,
							"drielok":data[0].drielok,
							"graha":data[0].graha,
							"pagergunung":data[0].pagergunung,
						};
						//Jenis Pengunjung
						$scope.ua = {
							"android":data[1].android,
							"ios":data[1].iphone,
							"bb":data[1].blackberry,
							"wphone":data[1].windows
						};
						//Pengunjung
						$scope.pengunjungs = data[2];
						$scope.devLain = $scope.pengunjungs.total-$scope.ua.android-$scope.ua.ios-$scope.ua.bb-$scope.ua.wphone;
						}).
						error(function(data, status, headers, config) {
						// called asynchronously if an error occurs
						// or server returns response with an error status.
						});
				}
			}
		}]);
        </script>
	<?php
	view_footer_bottom();
}else{
	$mulai = $_GET['mulai'];
	//$mulai = "2014-04-20 00:00";
	$selesai = $_GET['selesai'];
	//$selesai = "2014-04-22 00:00";
	$ret = array();
	$db = new db();
	$places = array('albaraltim','stpeter','villmer','drielok','graha','pagergunung');
	//Total Pengunjung
	$total = 0;
	foreach ($places as $place){
		$query = "SELECT count(*) as jml FROM `bdg_counter` WHERE `bdg_counter`.`datetime` BETWEEN {ts '$mulai'} AND {ts '$selesai'} AND ke = '$place' ORDER BY `bdg_counter`.`datetime` DESC";
		$res = $db->query($query);
		$kunjungan[$place] = $res[0]['jml'];
		$total += $kunjungan[$place];
	}
	$kunjungan['total'] = $total;
	array_push($ret,$kunjungan);
	//Jenis Pengunjung
	$mobiles = array('android','blackberry','windows','iphone');
	foreach ($mobiles as $mobile){
		$query = "SELECT COUNT(DISTINCT ip_id) as jml FROM `bdg_counter` WHERE `bdg_counter`.`datetime` BETWEEN {ts '$mulai'} AND {ts '$selesai'} AND ua LIKE '%$mobile%' ORDER BY `bdg_counter`.`datetime` DESC";
		//echo $query;
		$res = $db->query($query);
		$ua[$mobile] = $res[0]['jml'];
	}
	array_push($ret,$ua);
	//Pengunjung
	$query = "SELECT DISTINCT ip_id FROM `bdg_counter` WHERE `bdg_counter`.`datetime` BETWEEN {ts '$mulai'} AND {ts '$selesai'} ORDER BY `bdg_counter`.`datetime` DESC";
	$ips = $db->query($query);
	//echo $query;
	$pengunjungs['total'] = count($ips);
	$pengunjungs['orang'] = array();
	$pengunjungs['rute'] = array();
	foreach ($ips as $ip){
		$orang = array();
		$user = $ip['ip_id'];
		$orang['ip'] = $user;
		$query = "SELECT * FROM `bdg_counter` WHERE ip_id = '$user' AND `bdg_counter`.`datetime` BETWEEN {ts '$mulai'} AND {ts '$selesai'} ORDER BY `bdg_counter`.`datetime` ASC";
		$routes = $db->query($query);
		//echo $query;
		$visits = count($routes);
		$orang['rute'] = array();
		for ($i=0; $i<$visits; $i++){
			$rute = array();
			$tempat = $routes[$i]['ke'];
			$next = (isset($routes[$i+1]['dari'])) ? $routes[$i+1]['dari']: "";
			if (strcmp($tempat,$next)==0){
				$t2 = strtotime($routes[$i+1]['datetime']);
				$t1 = strtotime($routes[$i]['datetime']);
				$durasi = date("i:s",$t2-$t1);
			}else
				$durasi = "Diam";
			$rute['ip'] = $user;
			$rute['tempat'] = $tempat;
			$rute['durasi'] = $durasi;
			array_push($pengunjungs['rute'],$rute);
		}
		array_push($pengunjungs['orang'],$orang['ip']);
		//array_push($pengunjungs['rute'],$orang['rute']);
	}
	array_push($ret,$pengunjungs);
	
	$ret = json_encode($ret);
	echo $ret;
}
