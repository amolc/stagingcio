<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
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
                                                  <h1>About</h1>
                                                    <a href="cio_choice_overview.php">CIO CHOICE Overview</a>
                                                    <a href="cio_choice_community.php">The Community</a>
                                                    <a href="testimonials.php">Testimonials</a>
                                                </div>
                                              </div>

                                              <div class="overview_right fr">
                                                <div class="choice_overview fl">
                                                      <h1>The CIO CHOICE Community</h1>
                                                        <p><img src="images/community.jpg" width="590" height="203"></p>
                                                        <p style="text-align:left;">CIO CHOICE believes that <strong>recognition spurs confidence</strong> and motivates to continuously excel and push the limits. Recognition also inspires others to pursue the high benchmark set by the winners. Our philosophy may not be unique but our platform certainly is. Our long-term idea is to encourage the smaller, and the younger ICT service providers in Singapore to have increased participation and greater role in shaping Singapore's enterprise ICT landscape.</p> 

<p style="text-align:left;">The CIO CHOICE community <strong>caters directly for CIOs and ICT Vendors' needs</strong>. Continued interaction between these two parties will drive more confidence and trust between them.
We believe the mutually beneficial relationship formed within the CIO CHOICE network will <strong>drive successful outcomes and innovation</strong> throughout Singapore. The 'local' feel to our B2B platform is intended to help both parties share innovation in a relaxed environment.</p>     

<p style="text-align:left; text-decoration:underline;"><a href="/contact_us.php">Become part of the CIO CHOICE community and lead innovation and enterprise growth in Singapore's ICT sector.</a></p>
</p>
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
