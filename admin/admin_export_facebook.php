<?php 

	session_start();
	include('../sql_config/database/cio_db.php'); 
	require_once("include/facebook/facebook.php");
		$admin = $_SESSION['admin'];
		$id = $_REQUEST['id'];

		 $res = mysql_query("select * from events where event_id = '$id'")or die (mysql_error());
		 $row = mysql_fetch_array($res);

        $config = array(
	    'appId' => '1456796401221243',
	    'secret' => '293e21d6ec9cf719ba67c993f2329960',
	    "scope" => "read_stream,publish_stream,user_photos",
	    'fileUpload' => true,
	    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );



  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
  $fbPage =    $facebook->api('me/accounts?until&type=pages');

  ?>
  <?php 
     if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {

        $user_profile = $facebook->api('/me','GET');
       
        echo "Event's Name: ".$row['event_name'] ;
        echo '<br/>';
        echo '<br/>';
        echo "Name's Album : ".str_replace(' ', '_', $row['event_name']);
        $query1 = mysql_query("select * from event_fb_images where event_id='".$id."'");
        $album_details = array(
            'message' => $row['event_name'],
            'name' => str_replace(' ', '_', $row['event_name'])
        );
        $create_album = $facebook->api('/me/albums', 'post', $album_details);
        $album_uid = $create_album['id'];
         while($res1 = mysql_fetch_array($query1)){
         	$fb_image = $res1['event_fb_pic'];
         	 if (!empty($fb_image)) {
            $photo_details['image'] = '@' . realpath('user_data/'.$fb_image);
         	 $upload_photo = $facebook->api('/' . $album_uid . '/photos', 'post', $photo_details);
         	 }
         }
                                                              
      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
      header('Location: '.$login_url);
      echo 'Please <a href="' . $login_url . '">login.</a>';

    }

  ?>
