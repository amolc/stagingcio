
<?php

 include('../sql_config/database/cio_db.php'); 
 $id = $_REQUEST['id'];
 $res = mysql_query("select * from events where event_id = '$id'")or die (mysql_error());
 $row = mysql_fetch_array($res);
// print_r($row);exit;

?>
 <?php
                                                              $query2 = mysql_query("select * from event_videos where event_id='".$id."' LIMIT 2");
                                                              while($res2 = mysql_fetch_array($query2))
                                                              { 

                                                                $event_video_code = $res2['event_video_code'];
                                                                // if (!empty($event_video_code)) {
                                                                  // echo '<span class="video_span" style="margin-right:4px; width:285px;height:161px; float:left;">'.$event_video_code.'</span>';
                                                                // }
                                                                
                                                              }
                                                            ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Tourbooking.co" />
	<meta name="author" content="Laborator.co" />

	<title>ciochoice.sg</title>

	<link rel="stylesheet" href="include/resource/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
	<link rel="stylesheet" href="include/resource/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
	<link rel="stylesheet" href="include/resource/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"  id="style-resource-4">
	<link rel="stylesheet" href="include/resource/css/neon.css"  id="style-resource-5">
	<link rel="stylesheet" href="include/resource/css/custom.css"  id="style-resource-6">

	<script src="include/resource/js/jquery-1.10.2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<!-- TS1387507274: Neon - Responsive Admin Template created by Laborator -->
</head>
<body class="page-body">

<div class="page-container">

<?php include('include/admin_side_menu/admin_side_menu.php'); ?>
	<div class="main-content">
<?php include('include/admin_header/admin_header.php'); ?>

			<ol class="breadcrumb bc-3">
				<li>
					<a href="admin_dashboard.php"><i class="entypo-home"></i>Home</a>
				</li>
				
				<li class="active">
					<strong>Event</strong>
				</li>
			</ol>

			<h2>Event</h2>
			<br />

<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

			<div class="panel-heading">
				<div class="panel-title">
					 Edit Event
				</div>

				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>

			<div class="panel-body">
		<?php

			if($_POST['upload_button'] == "Submit"){
			
			 if($_FILES["file"]["name"] != ""){
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$temp = explode(".", $_FILES["file"]["name"]);
				$extension = end($temp);
				if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))
				&& ($_FILES["file"]["size"] < 80000)
				&& in_array($extension, $allowedExts))
				  {
				  if ($_FILES["file"]["error"] > 0)
					{
					echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
					}
				  else
					{
					echo "Upload: " . $_FILES["file"]["name"] . "<br>";
					echo "Type: " . $_FILES["file"]["type"] . "<br>";
					echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
					echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

					if (file_exists("upload/" . $_FILES["file"]["name"]))
					  {
					  echo $_FILES["file"]["name"] . " already exists. ";
					  }
					else
					  {
					  move_uploaded_file($_FILES["file"]["tmp_name"],
					  "upload/" . $_FILES["file"]["name"]);
					  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
					  }
					}
					}
				else
				  {
					echo "Invalid file";
				  }
					}
					
						
				$event_name = mysql_real_escape_string($_POST['event_name']);
				$event_held_date = mysql_real_escape_string($_POST['event_held_date']);
				$event_image = $_FILES["file"]["name"];
				$event_description = mysql_real_escape_string($_POST['event_description']);
				$facebook = mysql_real_escape_string($_POST['fb']);
				$twitter = mysql_real_escape_string($_POST['twitter']);
				$youtube = mysql_real_escape_string($_POST['youtube']);
				$location = mysql_real_escape_string($_POST['event_location']);
				$map = mysql_real_escape_string($_POST['map']);
				$event_id = mysql_real_escape_string($_POST['event_id']);

				$today_date = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$current_date = date("m/d/Y", $today_date);
				var_dump($event_image);
				if($event_image != ""){
				//echo "img";exit;
					$sql   = "update events set
					event_name = '$event_name', 
					event_image = '$event_image', 
					event_held_date = '$event_held_date',
					event_description = '$event_description',
					event_location = '$location',
					event_map = '$map',
					event_facebook = '$facebook',
					event_twitter_hashtag = '$twitter',
					event_youtube_video = '$youtube' where event_id='$event_id'";
				
				  mysql_query($sql) or die (mysql_error());
				  
					// $sql_y   = "update event_videos set
					// event_video_code = '$youtube' where event_id='$event_id'";
				
				  // mysql_query($sql_y) or die (mysql_error());
					
					//header('Location: admin_all_events.php?edit=ok');
					echo "<h1>Updated</h1>";

				  
			    }
				else
				{
				//echo "no img";exit;
				$sql   = "update events set
					event_name = '$event_name', 
					event_held_date = '$event_held_date',
					event_description = '$event_description',
					event_location = '$location',
					event_map = '$map',
					event_facebook = '$facebook',
					event_twitter_hashtag = '$twitter',
					event_youtube_video = '$youtube' where event_id='$event_id'";
				
				mysql_query($sql) or die (mysql_error());
					// $sql_y   = "update event_videos set
					// event_video_code = '$youtube' where event_id='$event_id'";
				
				  // mysql_query($sql_y) or die (mysql_error());
					
					//header('Location: admin_all_events.php?edit=ok');
					echo "<h1>Updated</h1>";
				}
			
			}
			
			
			

				?>


				<form role="form" action="<?php $_SERVER["PHP_SELF"];?>" method="post"  enctype="multipart/form-data" class="form-horizontal form-groups-bordered">

				<input type="hidden" class="form-control"  name="event_id"  value="<?php echo $row['event_id']; ?>">
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Event Name</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" name="event_name"  placeholder="Logo Name" value="<?php echo $row['event_name']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Event Location</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" name="event_location"  placeholder="Event Location" value="<?php echo $row['event_location']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Event Date</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" name="event_held_date"  placeholder="Logo Name" value="<?php echo $row['event_held_date']; ?>">
						</div>
					</div>
					<div class="form-group">
							<label for="field-ta" class="col-sm-3 control-label">Event Map</label>
					
							<div class="form-group" style="width: 572px;margin-left: 272px;">
								<textarea style="width:600px;height:140px;" class="form-control wysihtml5 overview" name="map" id="map" required><?php echo $row['event_map']; ?></textarea>
							</div>
		
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Image Upload</label>
						
						<div class="col-sm-5">
							
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
										<?php
											
										    $src = isset($row['event_image']) && !empty($row['event_image']) ? 'upload/'.$row['event_image'] : 'http://placehold.it/200x150';
										 ?>
									<img src="<?php echo $src ?>" alt="...">
								
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="file" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							
						</div>
					</div>
					<div class="form-group">
							<label for="field-ta" class="col-sm-3 control-label">Event Description</label>
					
							<div class="form-group" style="width: 572px;margin-left: 272px;">
								<textarea style="width:600px;height:140px;" class="form-control wysihtml5 overview" name="event_description" id="tour_overview" required><?php echo $row['event_description']; ?></textarea>
							</div>
		
					</div>
					<div class="form-group">
							<label for="field-ta" class="col-sm-3 control-label">FaceBook Images</label>
					
							<div class="form-group" style="width: 572px;margin-left: 272px;">
								<textarea style="width:600px;height:140px;" class="form-control wysihtml5 overview" name="fb" id="tour_overview" required><?php echo $row['event_facebook']; ?></textarea>
							</div>
		
					</div>
					<div style="display:none;" class="form-group">
							<label for="field-ta" class="col-sm-3 control-label">Twitter Hash Tag</label>
					
							<div class="form-group" style="width: 572px;margin-left: 272px;">
								<textarea style="width:600px;height:140px;" class="form-control wysihtml5 overview" name="twitter" id="twitter" required><?php echo $row['event_video_code']; ?></textarea>
							</div>
		
					</div>
					<div class="form-group">
							<label for="field-ta" class="col-sm-3 control-label">YouTube</label>
					
							<div class="form-group" style="width: 572px;margin-left: 272px;">
								<textarea style="width:600px;height:140px;" class="form-control wysihtml5 overview" name="youtube" id="youtube" required><?php echo $event_video_code; ?></textarea>
							</div>
		
					</div>


					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<!--<button type="submit" class="btn btn-default">Submit</button>-->
							<input type="submit" name="upload_button" class="btn btn-default" value="Submit">
						</div>
					</div>
				</form>

			</div>

		</div>

	</div>
</div>

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




	<script src="include/resource/js/gsap/main-gsap.js" id="script-resource-1"></script>
	<script src="include/resource/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
	<script src="include/resource/js/bootstrap.min.js" id="script-resource-3"></script>
	<script src="include/resource/js/joinable.js" id="script-resource-4"></script>
	<script src="include/resource/js/resizeable.js" id="script-resource-5"></script>
	<script src="include/resource/js/neon-api.js" id="script-resource-6"></script>
	<script src="include/resource/js/fileinput.js" id="script-resource-71"></script>
	<script src="include/resource/js/bootstrap-switch.min.js" id="script-resource-7"></script>
	<script src="include/resource/js/neon-chat.js" id="script-resource-8"></script>
	<script src="include/resource/js/neon-custom.js" id="script-resource-9"></script>
	<script src="include/resource/js/neon-demo.js" id="script-resource-10"></script>
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