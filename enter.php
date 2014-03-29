<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/twitterfeed.js"></script>
<link href="css/twitter-styles.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
    
	<script type="text/javascript">
    $(document).ready( function() {
	//alert('raza');
      $('#tab-container').easytabs();
    });
    </script> 
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
                                            <div id="advisory_wrapper">
                                                <div class="our_advisory_panel mrgn_top" style="height:auto;">
                                                  <div class="overview_left fl">
                                                  	<div class="about fl">
                                                    	<h1>Enter</h1>
                                                        <a href="enter.php">Enter Now</a>
                                                        <a href="cio_choice_process.php">CIO CHOICE Process</a>
                                                    </div>
                                                  </div>
                                                  
                                               	  <div class="overview_right fr">
                                               	    <div class="choice_overview fl">
	
															<h1> Enter Now </h1>
                                                            <h1 style="color:#c5ac35; text-transform:none;">Welcome to the CIO CHOICE Singapore</h1>
                                                            
                                                      <p style="margin:0px 0px 20px 20px;">If you are an ICT Vendor we would like to invite you to register your Product, Service or solution in the relevant ICT category. The categories are part of the ICT segments - hardware, software &amp; services, across the various ICT domains : business apps, infra, security, mobility, big data, analytics, etc.</p>
                                                      
                                                      <p style="font-size:18px; font-weight:bold; margin:0px 0px 20px 20px;">Are you interested in the only unbiased recognition from industry leaders in Singapore?</p>
                                                      
                                                      <div class="enter">
<h5>Register and Login to Enter CIO CHOICE Now...</h5>
<a href="registration.php" style="margin:0px 0px 0px 115px; float:left;"><img src="images/register_btn.jpg" width="184" height="63"></a>
<a href="login.php" style="margin:0px 0px 0px 42px; float:left;"><img src="images/login_button.jpg" width="184" height="63"></a>
</div>
                                                    </div>
                                                    <div class="fl" style=" width:672px; text-align:center; margin:20px 0px"><img src="images/star_pic.jpg" width="342" height="11"></div>
                                                    <div class="choice_overview fl">
	
													  <h1>want to know more?</h1>
                                                      <h2>The CIO CHOICE Process</h2>
													  <p style="text-align:left;">Your Products, Service and Solutions will be presented in an online survery to more than 700 CIOs. The survey is conducted across Singapore and then further validated by the <a href="#"><strong>CIO CHOICE independent Advisory Panel.</strong></a><br>
<br>
The result of <a href="#"><strong>the process conducted</strong></a> with CIOs and ICT Decision makers is to recognise the leaders in each cateogry and crown them the CIO’s preferred choice.</p>
                                                      
                                                     <div class="readmore fl"><a href="/cio_choice_process.php" class="read_more">read more</a></div>
                                                     
                                                     <h2>our Community</h2>
													  <p style="text-align:left;">The CIO CHOICE community aims to connect people to share ideas and establish a strong network of CIOs and ICT vendors within the Singapore area.</p>
                                                      
                                                     <div class="readmore fl"><a href="/cio_choice_community.php" class="read_more">read more</a></div>
                                                     
                                                     <h2>CIO CHOICE Partners</h2>
													  <p style="text-align:left;">We are always looking to partner with like-minded companies and professionals wishing to focus on enterprise and innovation within ICT. If you believe there is opportunity to extend the CIO CHOICE family, drop us an email to <a href="mailto:partners@cio-choice.sg"><strong>partners@cio-choice.sg</strong></a></p>
                                                      
                                                     <div class="become_partner mrgn fl">
                                                	<a class="partner" href="/contact_us.php">BECOME A PARTNER</a>
                                                	</div>
                                                    </div>
                                               	  </div>
                                                  <div style="clear:both"></div>
                                                </div>
                                                
                                            </div>
                                         
                                           <?php 
										   
												include('events_panel.php');                                             
												include('quick_contact.php');
												include('footer.php');
											?>     
                                           


    <!-- Google CDN jQuery with fallback to local -->
	<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
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
