<?php
function view_error2($title,$message) {
	view_header_top();
	view_header_bottom();
	?>
		<div class="row">
			<div class="large-12 columns">
				<h1><?php echo $title; ?></h1>
				<p><?php echo $message; ?></p>
			</div>
		</div>
	<?php
	view_footer_top();?><?php view_footer_bottom();
}
function view_error($title,$message) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php echo no_index(); ?>
		<style type="text/css">
			body {
				background-color: #fff;
				margin: 40px;
				font-family: Lucida Grande, Verdana, Sans-serif;
				font-size: 12px;
				color: #000;
			}
			#content {
				border: #999 1px solid;
				background-color: #fff;
				padding: 20px 20px 12px 20px;
			}
			h1 {
				font-weight: normal;
				font-size: 14px;
				color: #990000;
				margin: 0 0 4px 0;
			}
		</style>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<div id="content">
			<h1><?php echo $title; ?></h1>
			<p><?php echo $message; ?></p>
		</div>
	</body>
</html>
<?php
}

function view_404() {
	view_error('404 Page Not Found','The page you requested was not found.');
}

function view_header_top() {
	echo '<!DOCTYPE html>
			<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
			<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
			<head>
			  <meta charset="utf-8" />';
			  //intelCache();
	echo '<meta http-equiv="Cache-control" content="public" />
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		      <meta name="viewport" content="width=device-width, initial-scale=1">
			  <!--CSS-->
			  <link rel="stylesheet" href="'.STYLE_URL.'main.css" />
			  <link rel="stylesheet" href="'.STYLE_URL.'normalize.css" />
			  <link rel="stylesheet" href="'.STYLE_URL.'rwdgrid.css" />
			  <!--JS-->
			  <script src="'.SCRIPT_URL.'vendor/modernizr-2.6.2.min.js"></script>
		';
}

function view_header_bottom() {
    echo "</head>";
	echo "<body>";
}

function view_footer_top() {
	echo '<!-- script and etc -->
        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
        <!--script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script-->
        <script> if (typeof angular == "undefined") {document.write(\'<script src="'.SCRIPT_URL.'vendor/angular.min.js"><\/script>\');}</script>
        <!--script>window.jQuery || document.write("<script src="js/vendor/jquery-1.10.2.min.js"><\/script>)</script-->
        <script src="'.SCRIPT_URL.'vendor/angular-sanitize.js"></script>
        <script src="'.SCRIPT_URL.'plugins.js"></script>
        <script src="'.SCRIPT_URL.'main.js"></script>
        <script src="'.SCRIPT_URL.'content.js"></script>';
}
  
function view_footer_bottom(){
	echo '</body>
		</html>';
}
