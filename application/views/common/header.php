<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>   -->
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Welcome to Girraffe Ark</title>

		<!-- other CSS -->
		<link href="<?=base_url();?>css/external.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

		<?php if(!empty($include)):?>

		<!-- Vegas Slider -->
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/vegas/vegas.min.css">

		<?php endif;?>
		
		<!-- css -->
		<link href="<?=base_url();?>css/girraffeark.css?v=<?=time();?>" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="wrapper">