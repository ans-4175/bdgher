<?php
if (!defined('ROOT_PATH')) die('No direct access.');
function view_cerita(){
	view_header_top();
	echo "<title>Bandung Heritage</title>";
	view_header_bottom();
	?>
	<div ng-app="bdgApp">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content DOWN here -->
        <div id="container" ng-controller="crtCtrl">
            <div id="header">
                <img class="stretch" src="<?php echo IMAGE_URL ?>{{cerita.cover}}">
                <div id="judul"><div class="div-caption"><span class="caption">{{cerita.judul}}</span></div></div>
            </div>
            <div id="btnhead" style="position: fixed;top: 0px;">
                <div class="saga">SAGA</div>
                <div class="facts link-head"><a href="?tempat=<?php echo $_GET['tempat'] ?>&info=yes">FACTS <img id="panah-i" src="<?php echo IMAGE_URL ?>panah-i.png"></a></div>
                <div style="clear:both"></div>
            </div>
            <div id="kotak-isi">
                <div class="kotak-trans"></div>
                <div id="isi-cerita" ng-bind-html="isi_cerita"></div>
                <div class="kotak-trans"></div>
            </div>
        </div>
    </div>
	<?php
	view_footer_top();
	?>
	<script>
		var bdgApp = angular.module('bdgApp', ["ngSanitize"]);
		bdgApp.controller('crtCtrl', ['$scope', function ($scope) {
			// Controller magic
			$scope.cerita = {
				"cover":cerita.cover,
				"judul":cerita.judul
			};
			$scope.isi_cerita = cerita.isi;
		}]);
		//alert(cerita.judul);
        </script>
	<?php
	view_footer_bottom();
}

function view_info(){
	view_header_top();
	echo "<title>Bandung Heritage</title>";
	view_header_bottom();
	?>
	<div ng-app="bdgApp">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content DOWN here -->
        <div id="container" ng-controller="crtCtrl">
            <!--div id="btnscroll">
                <img id="bgpanah" src="img/bg-panah.png">
                <div class="panah" onclick="window.scrollBy(0,-window.outerHeight)"><img id="panah-atas" src="img/panah.png"></div>
                <div class="panah" onclick="window.scrollBy(0,window.outerHeight)"><img id="panah-bawah" src="img/panah.png"></div>
            </div-->
            <div id="header">
                <img class="stretch" src="<?php echo IMAGE_URL ?>{{info.cover}}">
                <div id="judul"><div class="div-caption" ng-repeat="jdl in info.judul"><span class="caption2" ng-bind-html="jdl.teks"></span></div></div>
            </div>
            <div id="btnhead"  style="position: absolute;top: 0px;z-index:99">
                <div class="saga link-head2"><a href="?tempat=<?php echo $_GET['tempat'] ?>"><img class="putar-kiri" id="panah-i" src="<?php echo IMAGE_URL ?>panah-i.png"> SAGA</a></div>
                <div class="facts">FACTS</div>
                <div style="clear:both"></div>
            </div>
            <div id="main-facts" class="cokelat">
                <div class="m-f-" ng-show="info.addr"><div class="m-f-title">Address</div><div class="m-f-content">Jl. {{info.addr}} <img id="poi" src="<?php echo IMAGE_URL ?>poi.png"></div><div style="clear:both"></div></div>
                <div class="m-f-" ng-show="info.year"><div class="m-f-title">Constructed in</div><div class="m-f-content">{{info.year}}</div><div style="clear:both"></div></div>
                <div class="m-f-" ng-show="info.arch"><div class="m-f-title">Architect</div><div class="m-f-content">{{info.arch}}</div><div style="clear:both"></div></div>
                <div class="m-f-" ng-show="info.style"><div class="m-f-title">Style</div><div class="m-f-content">{{info.style}}</div><div style="clear:both"></div></div>
            </div>
            <div ng-show="info.buildings" id="building" class="fact-content">
				<div class="f-c-title">BUILDING</div>
				<div ng-repeat="building in info.buildings">
					<div class="f-c-teks" ng-if="building.teks != null" ng-bind-html="building.teks"></div>
					<div class="f-c-img"  ng-if="building.img != null">
						<img class="stretch" src="<?php echo IMAGE_URL ?>{{building.img}}">
						<div class="judul-img"><div class="div-caption-img"><span class="caption-img">{{building.caption}}</span></div></div>
					</div>
                </div>
            </div>
            <div ng-show="info.archs" id="arch" class="fact-content">
				<div class="f-c-title">ARCHITECT</div>
				<div ng-repeat="arch in info.archs">
					<div class="f-c-teks" ng-if="arch.teks != null" ng-bind-html="arch.teks"></div>
					<div class="f-c-img"  ng-if="arch.img != null">
						<img class="stretch" src="<?php echo IMAGE_URL ?>{{arch.img}}">
						<div class="judul-img"><div class="div-caption-img"><span class="caption-img">{{arch.caption}}</span></div></div>
					</div>
                </div>
            </div>
            <div ng-show="info.trivias" id="trivia" class="fact-content">
				<div class="f-c-title">TRIVIA</div>
				<div ng-repeat="trivia in info.trivias">
					<div class="f-c-teks" ng-if="trivia.teks != null" ng-bind-html="trivia.teks"></div>
					<div class="f-c-img"  ng-if="trivia.img != null">
						<img class="stretch" src="<?php echo IMAGE_URL ?>{{trivia.img}}">
						<div class="judul-img"><div class="div-caption-img"><span class="caption-img">{{trivia.caption}}</span></div></div>
					</div>
                </div>
            </div>
            <div id="image-src" class="cokelat">
                <div class="i-s-title">Image Sources</div>
                <div class="i-s-content" ng-repeat="source in info.sources">{{source.ref}}</div>
            </div>
        </div>
    </div>
	<?php
	view_footer_top();
	?>
	<script>
		var bdgApp = angular.module('bdgApp', ["ngSanitize"]);
		bdgApp.controller('crtCtrl', ['$scope', function ($scope) {
			// Controller magic
			$scope.info = {
				"cover":info.cover,
				"judul":info.judul,
				"addr":info.addr,
				"coord":info.coord,
				"year":info.year,
				"arch":info.arch,
				"style":info.styled,
				"buildings":info.building,
				"archs":info.archs,
				"trivias":info.trivia,
				"sources":info.sources,
			};
		}]);
		//alert(cerita.judul);
        </script>
	<?php
	view_footer_bottom();
}

function view_splash(){
	view_header_top();
	echo "<title>Bandung Heritage</title>";
	view_header_bottom();
	?>
	<img class="stretch" src="<?php echo IMAGE_URL ?>konsep.jpg">	
	<?php
	view_footer_bottom();
}
