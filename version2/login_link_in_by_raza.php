<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>


<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  // api_key: 752icizjbtmfgi

  api_key: up8hQML83EYXioHsDsw4ktyShFAoNwJzhY8WDmJPZWdqRVzaIvw9r0phLieHH_c5

</script>


<p>This is a simple login button. When the user has logged in, the code inside of the script will be run.</p>

<script type="IN/Login">
  Hello, <?js= firstName ?> <?js= lastName ?>.
</script>




</head>

<body>
		<div style="border: 1px dashed #adadad; position: absolute; right: 20px; top: 5px; padding: 10px;"><span class="IN-widget" style="line-height: 1; vertical-align: baseline; display: inline-block;"><span style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: baseline !important; font-size: 1px !important;"><span id="li_ui_li_gen_1394799813367_1"><a id="li_ui_li_gen_1394799813367_1-link" href="javascript:void(0);"><span id="li_ui_li_gen_1394799813367_1-logo">in</span><span id="li_ui_li_gen_1394799813367_1-title"><span id="li_ui_li_gen_1394799813367_1-mark"></span><span id="li_ui_li_gen_1394799813367_1-title-text">Sign in</span></span></a></span></span></span><script type="IN/Login+init" data-label="action">[ <a href="#" onclick="IN.User.logout(); return false;">logout</a> ]</script></div>
		<?php
													include('sql_config/database/cio_db.php'); 
														include('top_header.php');
														
													?>
                                        
                                        <div id="black_wrapper">
                                            <div class="inner_nav">
                                                <?php include('navigation.php'); ?>
                                            </div>
                                        </div>
                                            <div id="advisory_wrapper">
                                                <div class="get_in_touch" style="margin-top:15px;">
                                                  <div class="login_main fl">
                                                  	<div class="login_header fl">
                                               	    	<img width="961" height="219" alt="" src="images/register/register-logo.jpg">
                                                        <h1>Please use your preferred method of login...</h1>
                                                    </div>
                                                    <?php
													if($_POST['submit'] == "submit")
													{
					
													// username and password sent from form
														$username = $_POST['username'];
														$password = $_POST['password'];

														// $username = strip_tags(stripslashes(mysql_real_escape_string($username)));
														// $password = sha1(strip_tags(stripslashes(mysql_real_escape_string($password))));

														$sql="SELECT * FROM registration WHERE registration_email = '$username' and registration_password='$password'";
														$rs = mysql_query($sql) or die ("Query failed");

														$numofrows = mysql_num_rows($rs);

														if($numofrows > 0){
															// session_register("username");
															session_start();
															// store session data
															$_SESSION['username']=$username;
															header("location:advisory_detail.php?action=yes");
														}
														else {
															// header("location:index.php?action=no");
															echo "<h1>user name wrong</h1>";
														}
															// $sql = mysql_query('SELECT * FROM registration where registration_email ="'.$username.'" AND registration_password ="'.$password.'"');


																	// $row = mysql_fetch_array($sql);

																	// if($row['registration_email'] == $name && $row['registration_password'] == $password)
																		// {
																			
																			// session_start();
																			// $_SESSION['user_name'] = $row['username'];
																			 // header("location:advisory_detail.php?action=yes");
																			
																		// }
																		// else 
																		// {
																			 // echo "<h1>user name wrong</h1>";
																		// } 
														
													}
													else 
													{
													?>
													 <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
                                                    	<div class="login_form fl">
                                                        	<div class="login_box fl">
                                                            	<h1>Login using your<br>Company Email Address</h1>
                                                              <label> Email</label>
                                                                <input name="username" type="email" required>
                                                              <label>Password</label>
                                                                <input name="password" type="password" required>
                                                                <input value="submit" name="submit" type="submit">
                                                        </div>
                                                       	  <div class="sign_in fr">
                                                           	<h2>Sign in with your account on:</h2>
                                                              <p><a href="http://www.linkedin.com/company/cio-choice-singapore/" target="_blank"><img src="images/linkedin_btn.png" width="410" height="70"></a></p>
                                                            </div>
                                                            
                                                            <div class="register_now fl">Not a member? register now!</div>
                                                    
                                                  </div>
												  </form>
                                                  <?php
												  
												  }
												  ?>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                        	</div>
											<?php 
           
											include('quick_contact.php');
											include('footer.php');
											
											 ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js" type="text/javascript"></script>
<script type="text/javascript" src="js/scripts.js"></script>



    <!-- Google CDN jQuery with fallback to local -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript">
		(function($){
			$(window).load(function(){
				$("#content_6").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					theme:"dark-thick"
				});
				$("#content_7").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					theme:"dark-thick"
				});
			});
		})(jQuery);
	</script>

<script>
$("#accordion > li").click(function(){
  $("#accordion li").removeClass("active");
        $(this).addClass("active");
	if(false == $(this).next().is(':visible')) {
		$('#accordion > ul').slideUp(300);
	}
	$(this).next().slideToggle(300);
});

$('#accordion > ul:eq(0)').show();

</script>

</body>
</html>
