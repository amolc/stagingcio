<?php
if(isset($_GET['getperm']) && $_GET['getperm']!= '') {
require '../include/facebook/facebook.php';
			

$facebook = new Facebook(array(

 
  
  'appId'  => '174965245977678',

  'secret' => 'b1468bb9111d804ee97c223ec91a7900',
  
  

));



$user = $facebook->getUser();


if ($user) {

 

 try {

    // Proceed knowing you have a logged in user who's authenticated.

    $user_profile = $facebook->api('/me');
	
	

  } catch (FacebookApiException $e) {

    

	 $result = $e->getResult();

	 error_log(json_encode($result));

	

	$e_type = $e->getType();

  	error_log('Got an ' . $e_type . ' while posting');

	

	//error_log($e);

    $user = null;

  }

}




if ($user) {

  //$logoutUrl = $facebook->getLogoutUrl();

  
$pages = $facebook->api("me/accounts");

$acces_token = $facebook->getUserAccessToken();
  
//echo '<pre>';
//print_r($pages);

$_SESSION['admin'] = 'admin';
		echo '<script>window.top.location.href = "../admin/admin_dashboard.php"</script>';

} else {

 

    $fb_log_param =  'http://staging.cio-choice.sg/version2/admin/index.php';
	
	$loginUrl = $facebook->getLoginUrl(array(

											 

    'redirect_uri'  => $fb_log_param,
	'scope' => 'publish_stream,photo_upload,manage_pages,email',	

    ));

  echo '<script>window.top.location.href = "' . $loginUrl . '"</script>';

}

}
if(isset($_GET['code']) && $_GET['code']!= '') {
	require '../include/facebook/facebook.php';
				
	
	$facebook = new Facebook(array(
	
	 
	  
	  'appId'  => '174965245977678',
	
	  'secret' => 'b1468bb9111d804ee97c223ec91a7900',
	  
	  
	
	));
	
	
	
	$user = $facebook->getUser();
	
	
	
	
	if ($user) {
	
	 
	
	 try {
	
	    // Proceed knowing you have a logged in user who's authenticated.
	
	    $user_profile = $facebook->api('/me');
		
		
	
	  } catch (FacebookApiException $e) {
	
	    
	
		 $result = $e->getResult();
	
		 error_log(json_encode($result));
	
		
	
		$e_type = $e->getType();
	
	  	error_log('Got an ' . $e_type . ' while posting');
	
		
	
		//error_log($e);
	
	    $user = null;
	
	  }
	
	}
	
	
	
	
	if ($user) {
	
	  //$logoutUrl = $facebook->getLogoutUrl();
	
	  
	$pages = $facebook->api("me/accounts");
	
	$acces_token = $facebook->getUserAccessToken();
	  
	//echo '<pre>';
	//print_r($pages);
	//session_start();
			// store session data
			$_SESSION['admin'] = 'admin';
			echo '<script>window.top.location.href = "../admin/admin_dashboard.php"</script>';
	//header("location:http://apps.fountaintechies.com/sportsfeed/admin/dashboard.php");
	
	
	} else {
	
	 
	
	    $fb_log_param =  'http://staging.cio-choice.sg/version2/admin/index.php';
		
		$loginUrl = $facebook->getLoginUrl(array(
	
												 
	
	    'redirect_uri'  => $fb_log_param,
		'scope' => 'publish_stream,photo_upload,manage_pages,email',	
	
	    ));
	
	  //echo '<script>window.top.location.href = "' . $loginUrl . '"</script>';
	
	}

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
	
	<title>cio-choice.sg</title>

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
</head>
<body class="page-body login-page login-form-fall">

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="#" class="logo">
				<h1 style="color:#fff;">cio-choice.sg</h1>
			</a>
			
			<p class="description">Dear user, log in to access the admin area!</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" id="form_login">
				
				<div class="form-group">
					<div class="form-group">
						<h3 style="color:#fff;" class="mesg"></h3>
					</div>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" id="login" class="btn btn-primary btn-block btn-login">
						Login In
						<i class="entypo-login"></i>
					</button>
				</div>
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="forgot_password.php" class="link">Forgot your password?</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
			<a href="http://staging.cio-choice.sg/version2/admin/index.php?getperm=1.1"><img src="facebook-login-button.png"></a>
			
		</div>
		
	</div>
	
</div>


	<script src="include/resource/js/gsap/main-gsap.js" id="script-resource-1"></script>
	<script src="include/resource/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
	<script src="include/resource/js/bootstrap.min.js" id="script-resource-3"></script>
	<script src="include/resource/js/joinable.js" id="script-resource-4"></script>
	<script src="include/resource/js/resizeable.js" id="script-resource-5"></script>
	<script src="include/resource/js/neon-api.js" id="script-resource-6"></script>
	<script src="include/resource/js/jquery.validate.min.js" id="script-resource-7"></script>
	<script src="include/resource/js/neon-login.js" id="script-resource-8"></script>
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