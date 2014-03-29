<?php
	session_start();
	include('../sql_config/database/cio_db.php'); 
	if(isset($_SESSION['admin']))
	{

	}
	else 
	{
		header('Location: index.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="Laborator.co" />
	
	<title>ciochoice.sg</title>

	<link rel="stylesheet" href="include/resource/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
	<link rel="stylesheet" href="include/resource/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
	<link rel="stylesheet" href="include/resource/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"  id="style-resource-4">
	<link rel="stylesheet" href="include/resource/css/neon.css"  id="style-resource-5">
	<link rel="stylesheet" href="include/resource/css/custom.css"  id="style-resource-6">

	<script src="include/resource/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
				$('.delete_tour_list').click(function(){
					// alert('ok');
				var tour_id = $( this ).attr('id');

				$.ajax({
						type: 'post',
						url: 'ajax_request_function/ajax_delete_booking.php',
						data: {tour_id:tour_id},

						success: function(mesg) {
							alert(mesg);
							 // $('#photo_detail').append(mesg);

						}

				});

			});		

			$('.confirm').click(function(){
					// alert('ok');
				var tour_id = $( this ).attr('id');

				$.ajax({
						type: 'post',
						url: 'ajax_request_function/ajax_confirm_booking.php',
						data: {tour_id:tour_id},

						success: function(mesg) {
							alert(mesg);
							 // $('#photo_detail').append(mesg);

						}

				});

			});	

			$('.cancel').click(function(){
					// alert('ok');
				var tour_id = $( this ).attr('id');

				$.ajax({
						type: 'post',
						url: 'ajax_request_function/ajax_cancel_booking.php',
						data: {tour_id:tour_id},

						success: function(mesg) {
							alert(mesg);
							 // $('#photo_detail').append(mesg);

						}

				});

			});
			
			
		});
	</script>
</head>
<body class="page-body page-fade">

<div class="page-container">	
	<?php include('include/admin_side_menu/admin_side_menu.php'); ?>
<div class="main-content">
		
<?php include('include/admin_header/admin_header.php'); ?>



<div class="row">
	<div class="col-sm-3">
	
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>
			
			<h3>Registered users</h3>
			<p></p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>
			
			<h3>Daily Visitors</h3>
			<p></p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-mail"></i></div>
			<div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>
			
			<h3>New Messages</h3>
			<p></p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-rss"></i></div>
			<div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>
			
			<h3>Subscribers</h3>
			<p></p>
		</div>
		
	</div>
</div>

<br />

<div class="row">

<div class="row">
	<div class="col-sm-8">
	
		<div class="panel panel-primary" id="charts_env">
		
			<div class="panel-heading">
				<div class="panel-title">Site Stats</div>
				
				<div class="panel-options">
					<ul class="nav nav-tabs">
						<li class=""><a href="#area-chart" data-toggle="tab">Area Chart</a></li>
						<li class="active"><a href="#line-chart" data-toggle="tab">Line Charts</a></li>
						<li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li>
					</ul>
				</div>
			</div>
	
			<div class="panel-body">
			
				<div class="tab-content">
				
					<div class="tab-pane" id="area-chart" style="">							
						<div id="area-chart-demo" class="morrischart" style="height: 300px; position: relative;"><svg height="300" version="1.1" width="645" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.95001220703125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.5" y="259.4375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,259.4375H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="200.828125" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,200.828125H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="142.21875" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,142.21875H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="83.609375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,83.609375H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,25H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="620" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="524.2104062072112" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="428.42081241442264" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="332.63121862163393" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="236.57918758557736" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="140.78959379278868" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="45" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="#727c8f" stroke="#000000" d="M45,36.72187500000001C68.94739844819716,51.37421875000001,116.84219534459152,80.67890625000001,140.78959379278868,95.33125000000001C164.73699224098584,109.98359375000001,212.6317891373802,153.940625,236.57918758557736,153.940625C260.5921953445915,153.940625,308.6182108626198,95.33125000000001,332.63121862163393,95.33125000000001C356.5786170698311,95.33125000000001,404.47341396622545,153.940625,428.42081241442264,153.940625C452.3682108626198,153.940625,500.2630077590141,109.98359375,524.2104062072112,95.33125000000001C548.1578046554084,80.67890625,596.0526015518028,51.37421875000001,620,36.72187500000001L620,259.4375L45,259.4375Z" fill-opacity="1" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#576277" d="M45,36.72187500000001C68.94739844819716,51.37421875000001,116.84219534459152,80.67890625000001,140.78959379278868,95.33125000000001C164.73699224098584,109.98359375000001,212.6317891373802,153.940625,236.57918758557736,153.940625C260.5921953445915,153.940625,308.6182108626198,95.33125000000001,332.63121862163393,95.33125000000001C356.5786170698311,95.33125000000001,404.47341396622545,153.940625,428.42081241442264,153.940625C452.3682108626198,153.940625,500.2630077590141,109.98359375,524.2104062072112,95.33125000000001C548.1578046554084,80.67890625,596.0526015518028,51.37421875000001,620,36.72187500000001" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45" cy="36.72187500000001" r="4" fill="#576277" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="140.78959379278868" cy="95.33125000000001" r="4" fill="#576277" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="236.57918758557736" cy="153.940625" r="4" fill="#576277" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="332.63121862163393" cy="95.33125000000001" r="4" fill="#576277" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="428.42081241442264" cy="153.940625" r="4" fill="#576277" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="524.2104062072112" cy="95.33125000000001" r="4" fill="#576277" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="620" cy="36.72187500000001" r="7" fill="#576277" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#3e444e" stroke="#000000" d="M45,142.21875C68.94739844819716,149.544921875,116.84219534459152,164.197265625,140.78959379278868,171.5234375C164.73699224098584,178.849609375,212.6317891373802,200.828125,236.57918758557736,200.828125C260.5921953445915,200.828125,308.6182108626198,171.5234375,332.63121862163393,171.5234375C356.5786170698311,171.5234375,404.47341396622545,200.828125,428.42081241442264,200.828125C452.3682108626198,200.828125,500.2630077590141,178.849609375,524.2104062072112,171.5234375C548.1578046554084,164.197265625,596.0526015518028,149.544921875,620,142.21875L620,259.4375L45,259.4375Z" fill-opacity="1" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#303641" d="M45,142.21875C68.94739844819716,149.544921875,116.84219534459152,164.197265625,140.78959379278868,171.5234375C164.73699224098584,178.849609375,212.6317891373802,200.828125,236.57918758557736,200.828125C260.5921953445915,200.828125,308.6182108626198,171.5234375,332.63121862163393,171.5234375C356.5786170698311,171.5234375,404.47341396622545,200.828125,428.42081241442264,200.828125C452.3682108626198,200.828125,500.2630077590141,178.849609375,524.2104062072112,171.5234375C548.1578046554084,164.197265625,596.0526015518028,149.544921875,620,142.21875" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45" cy="142.21875" r="4" fill="#303641" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="140.78959379278868" cy="171.5234375" r="4" fill="#303641" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="236.57918758557736" cy="200.828125" r="4" fill="#303641" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="332.63121862163393" cy="171.5234375" r="4" fill="#303641" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="428.42081241442264" cy="200.828125" r="4" fill="#303641" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="524.2104062072112" cy="171.5234375" r="4" fill="#303641" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="620" cy="142.21875" r="7" fill="#303641" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 556px; top: 57px;"><div class="morris-hover-row-label">2012</div><div class="morris-hover-point" style="color: #303641">
  Series A:
  100
</div><div class="morris-hover-point" style="color: #576277">
  Series B:
  90
</div></div></div>
					</div>
					
					<div class="tab-pane active" id="line-chart" style="">
						<div id="line-chart-demo" class="morrischart" style="height: 300px; position: relative;"><svg height="300" version="1.1" width="645" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.95001220703125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.5" y="259.4375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,259.4375H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="200.828125" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,200.828125H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="142.21875" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,142.21875H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="83.609375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,83.609375H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M45,25H620" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="620" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="524.2104062072112" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="428.42081241442264" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="332.63121862163393" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="236.57918758557736" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="140.78959379278868" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="45" y="271.9375" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.7813)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#7a92a3" d="M45,48.44375000000002C68.94739844819716,63.096093750000016,116.84219534459152,92.40078125,140.78959379278868,107.053125C164.73699224098584,121.70546875,212.6317891373802,165.66250000000002,236.57918758557736,165.66250000000002C260.5921953445915,165.66250000000002,308.6182108626198,107.053125,332.63121862163393,107.053125C356.5786170698311,107.053125,404.47341396622545,165.66250000000002,428.42081241442264,165.66250000000002C452.3682108626198,165.66250000000002,500.2630077590141,121.70546874999998,524.2104062072112,107.053125C548.1578046554084,92.40078124999998,596.0526015518028,63.096093750000016,620,48.44375000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#0b62a4" d="M45,25C68.94739844819716,39.65234375,116.84219534459152,68.95703125,140.78959379278868,83.609375C164.73699224098584,98.26171875,212.6317891373802,142.21875,236.57918758557736,142.21875C260.5921953445915,142.21875,308.6182108626198,83.609375,332.63121862163393,83.609375C356.5786170698311,83.609375,404.47341396622545,142.21875,428.42081241442264,142.21875C452.3682108626198,142.21875,500.2630077590141,98.26171874999999,524.2104062072112,83.609375C548.1578046554084,68.95703124999999,596.0526015518028,39.65234375,620,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45" cy="48.44375000000002" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="140.78959379278868" cy="107.053125" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="236.57918758557736" cy="165.66250000000002" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="332.63121862163393" cy="107.053125" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="428.42081241442264" cy="165.66250000000002" r="7" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="524.2104062072112" cy="107.053125" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="620" cy="48.44375000000002" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="45" cy="25" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="140.78959379278868" cy="83.609375" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="236.57918758557736" cy="142.21875" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="332.63121862163393" cy="83.609375" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="428.42081241442264" cy="142.21875" r="7" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="524.2104062072112" cy="83.609375" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="620" cy="25" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 366.42081241442264px; top: 57px;"><div class="morris-hover-row-label">2010</div><div class="morris-hover-point" style="color: #0b62a4">
  October 2013:
  50
</div><div class="morris-hover-point" style="color: #7A92A3">
  November 2013:
  40
</div></div></div>
					</div>
					
					<div class="tab-pane" id="pie-chart" style="">
						<div id="donut-chart-demo" class="morrischart" style="height: 300px;"><svg height="300" version="1.1" width="645" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.95001220703125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#707f9b" d="M322.5,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,349.9961550987827,60.80878649836198" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#707f9b" stroke="#ffffff" d="M322.5,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,350.87996008410073,57.941926064380766L363.74423264817403,16.213179747542966A140,140,0,0,1,322.5,290Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#455064" d="M349.9961550987827,60.80878649836198A93.33333333333333,93.33333333333333,0,0,0,272.0698976321213,71.46391984395719" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#455064" stroke="#ffffff" d="M350.87996008410073,57.941926064380766A96.33333333333333,96.33333333333333,0,0,0,270.4489300560109,68.93954583894153L249.55645907503256,36.40316977429521A135,135,0,0,1,362.27122433931066,20.991280470845Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#242d3c" d="M272.0698976321213,71.46391984395719A93.33333333333333,93.33333333333333,0,0,0,322.4706784690487,243.33332872751785" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#242d3c" stroke="#ffffff" d="M270.4489300560109,68.93954583894153A96.33333333333333,96.33333333333333,0,0,0,322.4697359912682,246.3333285794738L322.4575884998741,284.9999933380169A135,135,0,0,1,249.55645907503256,36.40316977429521Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="322.5" y="140" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="15px" font-weight="800" transform="matrix(1.362,0,0,1.362,-116.7602,-53.7074)" stroke-width="0.734188988095238" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-size: 15px; line-height: normal; font-family: Arial;"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Download Sales</tspan></text><text x="322.5" y="160" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="14px" transform="matrix(1.7481,0,0,1.7481,-241.2694,-112.6274)" stroke-width="0.5720424107142857" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: normal; font-family: Arial;"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">41</tspan></text></svg></div>
					</div>
					
				</div>
				
			</div>

			<table class="table table-bordered table-responsive">

				<thead>
					<tr>
						<th width="50%" class="col-padding-1">
							<div class="pull-left">
								<div class="h4 no-margin">Pageviews</div>
								<small>54,127</small>
							</div>
							<span class="pull-right pageviews"><canvas width="34" height="30" style="display: inline-block; width: 34px; height: 30px; vertical-align: top;"></canvas></span>
							
						</th>
						<th width="50%" class="col-padding-1">
							<div class="pull-left">
								<div class="h4 no-margin">Unique Visitors</div>
								<small>25,127</small>
							</div>
							<span class="pull-right uniquevisitors"><canvas width="34" height="30" style="display: inline-block; width: 34px; height: 30px; vertical-align: top;"></canvas></span>
						</th>
					</tr>
				</thead>
				
			</table>
			
		</div>	

	</div>

	<div class="col-sm-4">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<h4>
						Real Time Stats
						<br>
						<small>current server uptime</small>
					</h4>
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
		
			<div class="panel-body no-padding">
				<div id="rickshaw-chart-demo" class="rickshaw_graph">
					<div id="rickshaw-legend" class="rickshaw_legend"><ul><li class="line"><div class="swatch" style="background-color: rgb(224, 242, 255);"></div><span class="label">Download</span></li><li class="line"><div class="swatch" style="background-color: rgb(115, 200, 255);"></div><span class="label">Upload</span></li></ul></div>
				<svg width="321" height="193"><g><path d="M0,13.24967530378214Q5.677551020408164,10.60634765562759,6.551020408163266,11.601734510211145C7.861224489795919,13.094814792086476,11.791836734693879,27.37222854338911,13.102040816326532,28.180478122535447S18.342857142857145,21.855351513917046,19.653061224489797,19.684230301674518S24.893877551020413,6.187201904263446,26.204081632653065,6.469266000110167S31.444897959183674,20.210159806734055,32.755102040816325,22.504871260141726S37.99591836734694,30.56647667757708,39.30612244897959,29.416380534186885S44.5469387755102,10.633188694117768,45.857142857142854,11.003909826239777S51.097959183673474,32.2950206372631,52.40816326530613,33.12359185540697S57.648979591836735,21.268643906977957,58.95918367346939,19.289622007678474S64.2,13.318609832480409,65.51020408163265,13.333372862412148S70.75102040816327,17.517962133680857,72.06122448979592,19.437252306995873S77.30204081632654,34.27891071735101,78.61224489795919,32.52627459556231S83.8530612244898,2.8598623581245417,85.16326530612245,1.910891089108901S90.40408163265306,19.657199767434523,91.71428571428571,23.036561905405904S96.95510204081633,35.80437857610423,98.26530612244898,35.70451246882271S103.50612244897961,24.74642033937268,104.81632653061226,22.037900832590765S110.05714285714286,8.85656116720683,111.36734693877551,8.619317401003542S116.60816326530613,19.72678104710861,117.91836734693878,19.66546317055787S123.1591836734694,7.881376689177955,124.46938775510205,8.006138635496143S129.71020408163264,19.613334203291515,131.0204081632653,20.913082633739748S136.26122448979592,21.57451067106113,137.57142857142858,21.00362293997847S142.81224489795918,15.08857019494016,144.12244897959184,15.20420532291314S149.36326530612246,20.64275706812139,150.67346938775512,22.15997421970826S155.9142857142857,31.227664118056353,157.22448979591837,30.376376838781823S162.46530612244896,15.916459588859057,163.77551020408163,13.647101426962962S169.01632653061225,6.673531009733219,170.3265306122449,7.682795219820861S175.56734693877553,23.448986125566584,176.8775510204082,23.73974352783938S182.11836734693875,11.614317265863104,183.42857142857142,10.590369242548832S188.66938775510204,12.551193635381594,189.9795918367347,13.500263294696651S195.2204081632653,20.95673300174982,196.53061224489795,20.081065835699405S201.77142857142857,3.5283052638295263,203.08163265306123,4.743591634192484S208.32244897959185,32.40683816374346,209.63265306122452,32.23392953932898S214.87346938775508,4.928857129329099,216.18367346938774,3.014505390047759S221.42448979591836,11.829039579564725,222.73469387755102,13.090412146515575S227.97551020408162,14.057375849096465,229.28571428571428,15.62823105955627S234.5265306122449,29.20219932226638,235.83673469387756,28.79896425111363S241.07755102040818,13.630166405935533,242.38775510204084,11.595880348028771S247.62857142857143,9.272742237507098,248.9387755102041,8.456103672045998S254.1795918367347,1.4391703606707158,255.48979591836735,3.42949469341778S260.73061224489794,25.79842020872658,262.0408163265306,28.359346999516646S267.28163265306125,30.263130183928848,268.5918367346939,29.03876260131844S273.8326530612245,17.502171800111874,275.14285714285717,16.11567117341255S280.38367346938776,15.312369931784882,281.6938775510204,15.17375633432519S286.934693877551,15.661127395754018,288.2448979591837,14.729535198815626S293.48571428571427,6.482899793775696,294.7959183673469,5.8578343649412545S300.0367346938776,6.348387772018823,301.34693877551024,8.478880910471219S306.58775510204083,25.127738990266213,307.8979591836735,27.162765749465223S313.1387755102041,27.848821875161278,314.44897959183675,28.829148502461322Q315.32244897959185,29.482699587328018,321,36.96603202246567L321,105.73552575124866Q315.32244897959185,110.47683353881536,314.44897959183675,111.06305558686392C313.1387755102041,111.94238865893678,309.20816326530615,116.01948954184184,307.8979591836735,114.52885647197714S302.6571428571429,97.5492863374905,301.34693877551024,96.15672488821687S296.1061224489796,100.84895205756752,294.7959183673469,100.60324197924088S289.55510204081634,94.0172012985957,288.2448979591837,93.69962410495054S283.0040816326531,97.29802011819025,281.6938775510204,97.42747004278932S276.45306122448983,93.98401175756509,275.14285714285717,94.99412335094125S269.9020408163266,106.564623550782,268.5918367346939,107.52858597655104S263.35102040816327,105.95152278509879,262.0408163265306,104.63374760863165S256.8,94.63110727513423,255.48979591836735,94.35083421187966S250.24897959183676,101.32298371008932,248.9387755102041,101.83101697608596S243.6979591836735,99.25755081464185,242.38775510204084,99.43116687184614S237.14693877551022,104.06695452905643,235.83673469387756,103.56717754812898S230.59591836734694,94.05686571969889,229.28571428571428,94.43339706257159S224.0448979591837,107.55062793607425,222.73469387755102,107.33249097685594S217.4938775510204,92.30405061237734,216.18367346938774,92.2520274703885S210.94285714285718,106.61300110487551,209.63265306122452,106.81225955696759S204.3918367346939,94.00531061454978,203.08163265306123,94.24461199130928S197.84081632653061,108.9622267832482,196.53061224489795,109.20527332456264S191.28979591836736,97.66830378698765,189.9795918367347,96.67507740445375S184.73877551020408,98.8333948868372,183.42857142857142,99.27300949922355S178.18775510204085,101.35886965384573,176.8775510204082,101.07122352831728S171.63673469387757,95.74662122529153,170.3265306122449,96.39654824393902S165.0857142857143,106.46046407859637,163.77551020408163,107.57049371479211S158.53469387755104,108.59552904534252,157.22448979591837,107.49684460589637S151.98367346938778,98.02550970042446,150.67346938775512,96.58364932033065S145.4326530612245,92.08193157338997,144.12244897959184,93.07824080495816S138.88163265306125,105.83617228099367,137.57142857142858,106.5467416360126S132.33061224489796,101.93113864080749,131.0204081632653,100.18393435514743S125.7795918367347,88.61340436461738,124.46938775510205,89.07469877941192S119.22857142857143,104.20741600551536,117.91836734693878,104.79687850309278S112.67755102040816,94.41487700508912,111.36734693877551,94.96932375518615S106.1265306122449,108.68552451599581,104.81632653061226,110.34134600406307S99.57551020408162,111.9211504086367,98.26530612244898,111.52753863585873S93.02448979591836,108.4234295878536,91.71428571428571,106.40522827628337S86.4734693877551,91.12697840117006,85.16326530612245,91.34552552015637S79.92244897959183,106.88413499821854,78.61224489795919,108.59069946614643S73.37142857142857,109.25700673711788,72.06122448979592,108.41117019943532S66.8204081632653,100.57621988330185,65.51020408163265,100.1323340893209S60.269387755102045,103.10589471928834,58.95918367346939,103.97231225962598S53.718367346938784,109.67239682421943,52.40816326530613,108.79650949269734S47.16734693877551,95.14718244832446,45.857142857142854,95.2134389444051S40.61632653061225,108.97919959360688,39.30612244897959,109.45907445350376S34.06530612244898,101.74149110718456,32.755102040816325,100.01218754337393S27.514285714285716,92.48208593250784,26.204081632653065,92.16603881539739S20.963265306122448,95.03888463486956,19.653061224489797,96.85171637226934S14.412244897959186,110.95811041978295,13.102040816326532,110.29435618939512S7.861224489795919,91.1064735143529,6.551020408163266,90.21417406839092Q5.677551020408164,89.61930777108293,0,101.37136172977529Z" class="area" fill="#e0f2ff"></path></g><g><path d="M0,101.37136172977529Q5.677551020408164,89.61930777108293,6.551020408163266,90.21417406839092C7.861224489795919,91.1064735143529,11.791836734693879,109.63060195900728,13.102040816326532,110.29435618939512S18.342857142857145,98.66454810966911,19.653061224489797,96.85171637226934S24.893877551020413,91.84999169828693,26.204081632653065,92.16603881539739S31.444897959183674,98.2828839795633,32.755102040816325,100.01218754337393S37.99591836734694,109.93894931340064,39.30612244897959,109.45907445350376S44.5469387755102,95.27969544048574,45.857142857142854,95.2134389444051S51.097959183673474,107.92062216117525,52.40816326530613,108.79650949269734S57.648979591836735,104.83872979996362,58.95918367346939,103.97231225962598S64.2,99.68844829533997,65.51020408163265,100.1323340893209S70.75102040816327,107.56533366175276,72.06122448979592,108.41117019943532S77.30204081632654,110.29726393407432,78.61224489795919,108.59069946614643S83.8530612244898,91.56407263914268,85.16326530612245,91.34552552015637S90.40408163265306,104.38702696471313,91.71428571428571,106.40522827628337S96.95510204081633,111.13392686308076,98.26530612244898,111.52753863585873S103.50612244897961,111.99716749213033,104.81632653061226,110.34134600406307S110.05714285714286,95.52377050528318,111.36734693877551,94.96932375518615S116.60816326530613,105.38634100067021,117.91836734693878,104.79687850309278S123.1591836734694,89.53599319420645,124.46938775510205,89.07469877941192S129.71020408163264,98.43673006948737,131.0204081632653,100.18393435514743S136.26122448979592,107.25731099103153,137.57142857142858,106.5467416360126S142.81224489795918,94.07455003652635,144.12244897959184,93.07824080495816S149.36326530612246,95.14178894023684,150.67346938775512,96.58364932033065S155.9142857142857,106.39816016645023,157.22448979591837,107.49684460589637S162.46530612244896,108.68052335098784,163.77551020408163,107.57049371479211S169.01632653061225,97.04647526258651,170.3265306122449,96.39654824393902S175.56734693877553,100.78357740278882,176.8775510204082,101.07122352831728S182.11836734693875,99.7126241116099,183.42857142857142,99.27300949922355S188.66938775510204,95.68185102191984,189.9795918367347,96.67507740445375S195.2204081632653,109.44831986587708,196.53061224489795,109.20527332456264S201.77142857142857,94.48391336806878,203.08163265306123,94.24461199130928S208.32244897959185,107.01151800905967,209.63265306122452,106.81225955696759S214.87346938775508,92.20000432839966,216.18367346938774,92.2520274703885S221.42448979591836,107.11435401763762,222.73469387755102,107.33249097685594S227.97551020408162,94.80992840544428,229.28571428571428,94.43339706257159S234.5265306122449,103.06740056720153,235.83673469387756,103.56717754812898S241.07755102040818,99.60478292905044,242.38775510204084,99.43116687184614S247.62857142857143,102.3390502420826,248.9387755102041,101.83101697608596S254.1795918367347,94.07056114862509,255.48979591836735,94.35083421187966S260.73061224489794,103.31597243216451,262.0408163265306,104.63374760863165S267.28163265306125,108.49254840232008,268.5918367346939,107.52858597655104S273.8326530612245,96.00423494431742,275.14285714285717,94.99412335094125S280.38367346938776,97.5569199673884,281.6938775510204,97.42747004278932S286.934693877551,93.3820469113054,288.2448979591837,93.69962410495054S293.48571428571427,100.35753190091424,294.7959183673469,100.60324197924088S300.0367346938776,94.76416343894324,301.34693877551024,96.15672488821687S306.58775510204083,113.03822340211244,307.8979591836735,114.52885647197714S313.1387755102041,111.94238865893678,314.44897959183675,111.06305558686392Q315.32244897959185,110.47683353881536,321,105.73552575124866L321,193Q315.32244897959185,193,314.44897959183675,193C313.1387755102041,193,309.20816326530615,193,307.8979591836735,193S302.6571428571429,193,301.34693877551024,193S296.1061224489796,193,294.7959183673469,193S289.55510204081634,193,288.2448979591837,193S283.0040816326531,193,281.6938775510204,193S276.45306122448983,193,275.14285714285717,193S269.9020408163266,193,268.5918367346939,193S263.35102040816327,193,262.0408163265306,193S256.8,193,255.48979591836735,193S250.24897959183676,193,248.9387755102041,193S243.6979591836735,193,242.38775510204084,193S237.14693877551022,193,235.83673469387756,193S230.59591836734694,193,229.28571428571428,193S224.0448979591837,193,222.73469387755102,193S217.4938775510204,193,216.18367346938774,193S210.94285714285718,193,209.63265306122452,193S204.3918367346939,193,203.08163265306123,193S197.84081632653061,193,196.53061224489795,193S191.28979591836736,193,189.9795918367347,193S184.73877551020408,193,183.42857142857142,193S178.18775510204085,193,176.8775510204082,193S171.63673469387757,193,170.3265306122449,193S165.0857142857143,193,163.77551020408163,193S158.53469387755104,193,157.22448979591837,193S151.98367346938778,193,150.67346938775512,193S145.4326530612245,193,144.12244897959184,193S138.88163265306125,193,137.57142857142858,193S132.33061224489796,193,131.0204081632653,193S125.7795918367347,193,124.46938775510205,193S119.22857142857143,193,117.91836734693878,193S112.67755102040816,193,111.36734693877551,193S106.1265306122449,193,104.81632653061226,193S99.57551020408162,193,98.26530612244898,193S93.02448979591836,193,91.71428571428571,193S86.4734693877551,193,85.16326530612245,193S79.92244897959183,193,78.61224489795919,193S73.37142857142857,193,72.06122448979592,193S66.8204081632653,193,65.51020408163265,193S60.269387755102045,193,58.95918367346939,193S53.718367346938784,193,52.40816326530613,193S47.16734693877551,193,45.857142857142854,193S40.61632653061225,193,39.30612244897959,193S34.06530612244898,193,32.755102040816325,193S27.514285714285716,193,26.204081632653065,193S20.963265306122448,193,19.653061224489797,193S14.412244897959186,193,13.102040816326532,193S7.861224489795919,193,6.551020408163266,193Q5.677551020408164,193,0,193Z" class="area" fill="#73c8ff"></path></g></svg><div class="detail inactive"></div></div>
			</div>
		</div>

	</div>
</div>
<br />
<div class="row">
	
	<div class="col-sm-4">
		
		<div class="panel panel-primary">
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th class="padding-bottom-none text-center">
							<br>
							<br>
							<span class="monthly-sales"><canvas width="262" height="80" style="display: inline-block; width: 262px; height: 80px; vertical-align: top;"></canvas></span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="panel-heading">
							<h4>Monthly Sales</h4>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
	</div>
	
	<div class="col-sm-8">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Latest Updated Profiles</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
				
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Position</th>
						<th>Activity</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td>1</td>
						<td>Art Ramadani</td>
						<td>CEO</td>
						<td class="text-center"><span class="inlinebar"><canvas width="29" height="15" style="display: inline-block; width: 29px; height: 15px; vertical-align: top;"></canvas></span></td>
					</tr>
					
					<tr>
						<td>2</td>
						<td>Filan Fisteku</td>
						<td>Member</td>
						<td class="text-center"><span class="inlinebar-2"><canvas width="29" height="15" style="display: inline-block; width: 29px; height: 15px; vertical-align: top;"></canvas></span></td>
					</tr>
					
					<tr>
						<td>3</td>
						<td>Arlind Nushi</td>
						<td>Co-founder</td>
						<td class="text-center"><span class="inlinebar-3"><canvas width="29" height="15" style="display: inline-block; width: 29px; height: 15px; vertical-align: top;"></canvas></span></td>
					</tr>

				</tbody>
			</table>
		</div>
		
	</div>
	
</div>



<!-- Footer -->
	<?php include('include/admin_footer/admin_footer.php'); ?>	

</div>
	
	
	
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
	<div class="chat-inner">
	
		
		<h2 class="chat-header">
			<a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>
			
			<i class="entypo-users"></i>
			Chat
			<span class="badge badge-success is-hidden">0</span>
		</h2>
		
		
		<div class="chat-group" id="group-1">
			<strong>Favorites</strong>
			
			<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
		</div>
		
		
		<div class="chat-group" id="group-2">
			<strong>Work</strong>
			
			<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
			<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
		</div>
		
		
		<div class="chat-group" id="group-3">
			<strong>Social</strong>
			
			<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
		</div>
	
	</div>
	
	<!-- conversation template -->
	<div class="chat-conversation">
		
		<div class="conversation-header">
			<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
			
			<span class="user-status"></span>
			<span class="display-name"></span> 
			<small></small>
		</div>
		
		<ul class="conversation-body">	
		</ul>
		
		<div class="chat-textarea">
			<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
		</div>
		
	</div>
	
</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">
	<li>
		<span class="user">Art Ramadani</span>
		<p>Are you here?</p>
		<span class="time">09:00</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>This message is pre-queued.</p>
		<span class="time">09:25</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>Whohoo!</p>
		<span class="time">09:26</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Catherine J. Watkins</span>
		<p>Do you like it?</p>
		<span class="time">09:27</span>
	</li>
</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>I am going out.</p>
		<span class="time">08:21</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>Call me when you see this message.</p>
		<span class="time">08:27</span>
	</li>
</ul></div>

<!-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Default Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
			</div>
			
			<div class="modal-body">
				<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

	<link rel="stylesheet" href="include/resource/js/jvectormap/jquery-jvectormap-1.2.2.css"  id="style-resource-1">
	<link rel="stylesheet" href="include/resource/js/rickshaw/rickshaw.min.css"  id="style-resource-2">

	<script src="include/resource/js/gsap/main-gsap.js" id="script-resource-1"></script>
	<script src="include/resource/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
	<script src="include/resource/js/bootstrap.min.js" id="script-resource-3"></script>
	<script src="include/resource/js/joinable.js" id="script-resource-4"></script>
	<script src="include/resource/js/resizeable.js" id="script-resource-5"></script>
	<script src="include/resource/js/neon-api.js" id="script-resource-6"></script>
	<script src="include/resource/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-7"></script>
	<script src="include/resource/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-8"></script>
	<script src="include/resource/js/jquery.sparkline.min.js" id="script-resource-9"></script>
	<script src="include/resource/js/rickshaw/vendor/d3.v3.js" id="script-resource-10"></script>
	<script src="include/resource/js/rickshaw/rickshaw.min.js" id="script-resource-11"></script>
	<script src="include/resource/js/raphael-min.js" id="script-resource-12"></script>
	<script src="include/resource/js/morris.min.js" id="script-resource-13"></script>
	<script src="include/resource/js/toastr.js" id="script-resource-14"></script>
	<script src="include/resource/js/neon-chat.js" id="script-resource-15"></script>
	<script src="include/resource/js/neon-custom.js" id="script-resource-16"></script>
	<script src="include/resource/js/neon-demo.js" id="script-resource-17"></script>
	<script type="text/javascript">
		
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-28991003-3']);
		_gaq.push(['_setDomainName', 'laborator.co']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		
	</script>
	
</body>
</html>