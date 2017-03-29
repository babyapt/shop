<html>
	<head>
		<title>บ้านครูแป๋ว Shop</title>
		<meta name="apple-mobile-web-app-title" content="BKP Shop">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<?php if($page!='index'){ ?>
		<!-- JQuery -->
		<script src="../js/jquery.min.js"></script>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<script src="../js/bootstrap.min.js"></script>
		<!-- Fontawesome Icon -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<script>
		$(document).ready(function(){
			$('a').each(function(i,v){
				if($(this).attr('href').match(/^[^#]/)){
					$(this).data('href',$(this).attr('href'));
					$(this).attr('href','void(0);');
				}
			});
			$('a').on('click',function(e){
				if($(this).attr('href').match(/^[^#]/)){
					e.preventDefault();
					location.href=$(this).data('href');
				}
			})
		});
		</script>
		<?php } ?>
		<style>
			.myframe {
				min-width: 100vw;
				min-height: 100vh;
				width: 100vw;
				height: 100vh;
			}
			body, div.mymenu, div.mymenu>.row {
				margin: 0px;
				padding: 0px;
				min-width: 100vw;
				min-height: 100vh;
				width: 100vw;
				height: 100vh;
			}
			.mymenu>.row>div {
				min-height: 50vh;
				height: 50vh;
				font-size: 3em;
				transition-duration: .3s;
				text-align: center;
				padding-top: 12vh;
			}
			.mymenu>.row>div:hover {
				text-shadow: 0 0 20px #FFF, 0 0 20px #FFF;
				cursor: pointer;
			}
			.blur {
				filter: blur(2px);
			}
			.c1 {
				background-color: #41FFD8;
			}
			.c2 {
				background-color: #E85997;
			}
			.c3 {
				background-color: #7F3CFF;
			}
			.c4 {
				background-color: #4AFF5A;
			}
		</style>
	</head>
	<body>
