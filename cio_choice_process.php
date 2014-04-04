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
	// alert('okk');
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
                                                        <a href="/enter.php">Enter Now</a>
                                                        <a href="cio_choice_process.php">CIO CHOICE Process</a>
                                                    </div>
                                                  </div>
                                                  
                                               	  <div class="overview_right fr">
                                               	    <div class="choice_overview fl">
                                                        																
															<h1> CIO CHOICE Process</h1>
															<br/> <br/>
															
                                                            
                                                            <div class="step_by_step_mian fl">
                                                    	
                                                        	<div style="text-align:center; margin:20px;">
                                                            <img src="images/top_icon.jpg" width="104" height="108">
                                                            </div>
      	                                                     <h1 style="margin:0; padding:0; color:#ffffff;"> CIO CHOICE step-by-step</h1> 
                                                        
                                                        <div class="step_1 fl">
                                                        	<h2>Step 1– Forming the CIO CHOICE Advisory Panel</h2>
                                                            <p>We invite Industry Leading CIOs and ICT Decision makers to join our independent Advisory Panel.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 2 – ICT Vendors register in categories</h2>
                                                            <p>Vendors are invited to register their Products, Services and Solutions into ICT categories. The categories cover a wide range of segments within the technology and communications sectors.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 3 – Online survey begins</h2>
                                                            <p>Over 700 CIOs across Singapore are invited to take part in our unbiased online survey. Voting consists of CIOs naming their preferred Vendors in selected segments and categories over the full technology landscape.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 4 – Validation by our Advisory Panel </h2>
                                                            <p>The independent Advisory Panel studies the results of the survey and endorses the results to establish the CIO's Preferred choice for each category.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 5 – Recognition and Award </h2>
                                                            <p>CIO CHOICE  brings together the leaders of the ICT community. Vendors are honoured in each category and presented with the title of CIO CHOICE. The awards come directly from CIOs, making the recognition a truly invaluable sales and marketing tool.</p>
                                                        </div>
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
