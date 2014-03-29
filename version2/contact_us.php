<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

<!--javascript form validator start-->
<script>
function checkEmail(email) {   
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) { return false }
    return true;
}
 
function validateForm(formName)
{    
    var obj = document.getElementById(formName);
    
    	if(obj.first_name.value == ""){ alert("First Name can not be blank."); obj.first_name.focus(); return false; } 
    	if(obj.last_name.value == ""){ alert("Last Name can not be blank."); obj.last_name.focus(); return false; } 
	if(obj.email.value == ""){ alert("Email can not be blank."); obj.email.focus(); return false; } 
    	if(obj.select.value == ""){ alert("'I am a' can not be blank."); obj.select.focus(); return false; } 
	if(checkEmail(obj.email.value) == false){ alert("Email must be valid."); obj.email.focus(); return false; }
	if(obj.message.value == ""){ alert("Message can not be blank."); obj.message.focus(); return false; } 
}            
</script>
<!--javascript form validator end-->
                


</head>

<body>

     <?php             
											   include('sql_config/database/cio_db.php'); 
											   include('top_header.php');
											   include('header.php');
									?>
									
                                   
                                        
                                 
                                        <div id="black_wrapper">
                                            <div class="inner_nav">
                                              <?php include('navigation.php'); ?>
                                            </div>
                                        </div>
										
			
										 <!--<form  action="<?php $_SERVER["PHP_SELF"];?>" method="post">-->
                        <form action="<?php $_SERVER["PHP_SELF"];?>" method="post" id="myForm" onsubmit="return validateForm(this.id)" >
                                         
                                            <div id="advisory_wrapper">
                                                <div class="get_in_touch mrgn_top">
                                                  <h1>Get in Touch</h1>
                                                  <div class="contact_details_2 fl">
                                                  	<a href="contact_us.php" class="active">Contact Details</a>
                                                    <a href="faq.php">FAQs</a> 
													<br />
																				<?php

						include('sql_config/database/cio_db.php'); 

						if($_POST['Submit'] == "Submit")
						{
					
							
							$first_name = mysql_real_escape_string($_POST['first_name']);
							$last_name = mysql_real_escape_string($_POST['last_name']);
							$email = mysql_real_escape_string($_POST['email']);
							$select = mysql_real_escape_string($_POST['select']);
							$message = mysql_real_escape_string($_POST['message']);
					
						
							$today_date = mktime(0,0,0,date("m"),date("d"),date("Y"));
							$current_date = date("m/d/Y", $today_date);
							
								$sql   = "insert into contact_us(contact_us_first_name,contact_us_last_name,contact_us_email,contact_us_im,contact_us_message,contact_us_insert_date) values('".$first_name."','".$last_name."','".$email."','".$select."','".$message."','".$current_date."')";
						
								$query = mysql_query($sql);
								if($query)
								{
									echo "<span style='margin-left: 162px;font-size: 2em;'> successful</span>";
																	
											/*$mg_api = 'key-4vyeldmso9oe3t8gitphksdwz9p0tpw5';
											$mg_version = 'api.mailgun.net/v2/';
											$mg_domain = "staging.cio-choice.sg";
											$mg_from_email = "info@samples.com";
											$mg_message_url = "https://".$mg_version.$mg_domain."/messages";
											$ch = curl_init();
											curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
											curl_setopt ($ch, CURLOPT_MAXREDIRS, 3);
											curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, false);
											curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
											curl_setopt ($ch, CURLOPT_VERBOSE, 0);
											curl_setopt ($ch, CURLOPT_HEADER, 1);
											curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
											curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
											curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
											curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $mg_api);
											curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
											curl_setopt($ch, CURLOPT_POST, true);
											//curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
											curl_setopt($ch, CURLOPT_HEADER, false);
											//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
											curl_setopt($ch, CURLOPT_URL, $mg_message_url);
											curl_setopt($ch, CURLOPT_POSTFIELDS,               
													array(  'from'      => '<' . $from . '>',
															'to'        => $registration_email,
															'subject'   => $subject.time(),
															'text'      => $message

														));
											$result = curl_exec($ch);
											curl_close($ch);
											$res = json_decode($result,TRUE);*/
											
								// $to = $registration_email ;					
								// $subject = "Registration";
								// $message = '<!doctype html>
									// <html>
									// <head>
									// <meta charset="utf-8">
									// <title>Tour bookings</title>
									// <style>
									// body { margin:0px; padding:0px;}
									// </style>
									// </head>

									// <body>
									 // <div style="width:500px; min-height:450px; margin:0 auto; background:#e2e2e2;">
										
										 // <div style="width:440px; min-height:390px; margin:30px; float:left; background:white;">
											 // <div style="width:440px; height:80px; border-bottom:#e1e1e1 solid 1px; background:#f5f5f5;">
												 // <a href="#" style="float:left; margin:18px 20px 0px 19px;"><img width="112" height="45 " alt="" src="http://tourbookings.co/images/tourbooking_logo.png"></a>
												 // <h1 style="float:left; font-family:Arial, Helvetica, sans-serif; line-height:80px; color:#fd8900 !important; font-size:24px; letter-spacing:2px; font-weight:bold; display:block; margin:0px; text-decoration:none;">TOURBOOKINGS.CO</h1>
												// </div>
									   
												
												// <div style="width:440px; float:left;">
												 // <h1 style="float:left; border-bottom:#e1e1e1 solid 1px; width:440px; font-family:Arial, Helvetica, sans-serif; text-indent:20px; line-height:40px; color:#323232; font-size:14px; font-weight:bold; display:block; margin:0px; text-decoration:none;"><span style="color:#fd8900; margin-right:5px;">Dear,</span>'.$supplier_fname.' '.$supplier_lname.'</h1>
													
													// <p style="float:left; width:400px;padding:0px 20px; font-family:Arial, Helvetica, sans-serif; color:#727172; font-size:14px; line-height:20px; margin-bottom:80px;">We have received your deposit made.
													// <br />
													// You will now be able to view and utilise the amount in your account with us to purchase other tours through the My Shop feature in your portal.
													// </p>
												// </div>
												
												// <div style="width:440px; float:left;">
												 // <h1 style="float:left; border-top:#e1e1e1 solid 1px; width:420px; font-family:Arial, Helvetica, sans-serif; height:53px; color:#323232; font-size:14px; font-weight:bold; display:block; margin:0px; text-decoration:none; padding:15px 0px 0px 20px;">Best Wishes,<br>

									// <a href="#" style="color:#fb8900; text-decoration:none;">TourBookings</a></h1>
												// </div>
											// </div>
											// <div style="clear:both;"></div>
									   // </div>
									// </body>
									// </html>';								
									// $headers  = 'MIME-Version: 1.0' . "\r\n";
									// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
									// $headers .= 'To: '.$registration_email.'' . "\r\n";
									// $headers .= 'From: apache@iamamol.com' . "\r\n";					
									// mail( $to, $subject, $message, $headers );
		// echo "confirm tour Deposit";
									
								}
								else 
								{
									echo "error";
								}

						}
					
					

						?>
													
                                                  </div>
                                                  <div class="advisory_panel fl" style="height:auto;">
                                                  	<div class="contact_address fl">
                                                    <span>Please feel free to get in touch using these details or the handy form on the right...</span>
                                                      <p>Email: <a href="mailto:contactus@cio-choice.sg">contactus@cio-choice.sg</a><br>
                                                      <br>
                                                        Telephone: +65 9668 2895<br>
                                                        <br>
                                                        Address: 100 Cecil Street,<br>
                                                        #10-01 The Globe, Singapore 069532</p>
                                                    </div>
                                                    
                                                    <div class="contact_form fr">
                                                    	<label>* First Name:</label>
                                                        <input name="first_name" type="text">
                                                        <label>* Last Name:</label>
                                                        <input name="last_name" type="text">
                                                        <label>* Email Address:</label>
                                                        <input name="email" type="text">
                                                        <label>* I'm a...</label>
                                                        <select name="select" id="select">
														<option value="CIO">CIO</option>
                                                        <option value="ICT Vendor">ICT Vendor</option>
                                                        <option value="Partner">Partner</option>
                                                        <option value="Other">Other</option>
                                                        </select>
														<label>* Your Message:</label>
                                                        <textarea name="message" cols="" rows=""></textarea>
                                              			<input name="Submit" value="Submit" type="submit">
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                       </form>
                                           <?php 
           
											include('quick_contact.php');
											include('footer.php');
											
											 ?>


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

</body>
</html>
