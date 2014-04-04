<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/twitterfeed.js"></script>
<link href="css/twitter-styles.css" rel="stylesheet" type="text/css" />



<script>

jQuery(document).ready(function(cash) { 
    $("#network").hide();
    $("#achieve").hide();
	

	$( "#learn_over" ).mouseover(function() {

    $("#network").hide();
    $("#achieve").hide();
    $("#learn").show();


	});
	
	$( "#network_over" ).mouseover(function() {


    $("#achieve").hide();
    $("#learn").hide();
    $("#network").show();

	});
	
	
	$( "#achieve_over" ).mouseover(function() {


    $("#network").hide();
    $("#learn").hide();
    $("#achieve").show();

	});
	
	
   });

</script>
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
                                                        	<h1>cio choice overview</h1>
															<p>CIO CHOICE is a <strong>B2B platform</strong> that enables the industry leading <strong>CIOs</strong> to share and  exchange their success with their <strong>ICT vendors</strong> within their peer networks and the community at large. The platform truly promotes the "Voice of the CIO" to select and honour Products, Services and Solutions; <strong>recognising the ICT vendors</strong> for their outstanding commitment to service quality and professionalism in the 'local' context to repeatedly deliver successful outcomes.</p>
                                                            
                                                            <p><strong>CIO CHOICE repeatedly delivers successful outcomes by being the only platform for unbiased recognition of Industry Leaders</strong></p>
                                                            <!--<p>CIO CHOICE is a <strong>B2B platform</strong> that recognizes unites the leading <strong>CIOs</strong> and <strong>ICT Vendors</strong> in Singapore. The community promotes innovation and enterprise, bringing together experts from across key technology and communication sectors.<br>
<br>
Distinguished CIOs & ICT decision makers select and honor Products, Services and Solutions, with the winner declared the <strong>CIOs' preferred choice. </strong></p>-->
                                                        </div>
                                                    <div class="network fl">
                                                        
                                                        <div id="learn_over" class="learn fl">
                                                       	  		<img src="images/learn.jpg" width="110" height="110"> 
                                                                <span>LEARN</span>
                                                            </div>
                                                        <div id="network_over" class="learn fl">
                                                       	  		<img src="images/network.jpg" width="110" height="110"> 
                                                                <span>Network</span>
                                                      </div>
                                                        <div id="achieve_over" class="learn fl mrgn">
                                                       	  		<img src="images/achieve.jpg" width="110" height="110"> 
                                                                <span>Achieve</span>
                                                      </div>
                                                      
                                                    </div>
                                                    
                                                    
                                                    <div id="learn" class="learn_bg fl">
                                                    	<p>CIO CHOICE is designed to facilitate exchange of ideas, knowledge and best practices amongst the industry leading CIOs in Singapore to help them repeatedly drive successful outcomes</p>
                                                    </div>
                                                    
                                                    	<div id="network" class="network_bg fl">
                                                        <p>CIO CHOICE provides opportunities for the CIOs and customer-centric Vendors to network in a relaxed environment, forge new relationships and build long-term partnerships</p>
                                                        </div>
                                                    
                                                    	<div id="achieve" class="achieve_bg fl">
                                                       <p>CIO CHOICE is the first and only platform to enable the Vendors to achieve recognition and accolades from their own Customers for their outstanding commitment to service quality and professionalism</p>
                                                        </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="fl" style=" width:672px; text-align:center; margin:40px 0px"><img src="images/star_pic.jpg" width="342" height="11"></div>
                                                    <div class="step_by_step_mian fl">
                                                    	<div class="step_by_step fl">
                                                        	<h1>
                                                            <img src="images/top_icon.jpg" width="104" height="108"><br>
                                                            CIO CHOICE step-by-step
                                                            </h1>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 1 – Forming the CIO CHOICE Advisory Panel</h2>
                                                            <p>We invite Industry Leading CIOs and ICT Decision makers to join our independent advisory panel.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 2 – ICT Vendors register in categories</h2>
                                                            <p>Vendors are invited to register their Products, Services and Solutions into ICT categories. The categories cover a wide range of segments with the technolgy and communications sectors.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 3 – Online survey begins</h2>
                                                            <p>Over 700 CIOs across Singapore are invited to take part in our unbiased online survey. Voting consists of CIOs naming their preferred Vendors in selected segments and categories over the full technology landscape.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 4 – Validation by our Advisory Panel</h2>
                                                            <p>The independent advisory panel study the results of the survey and endorse the results to establish the CIO’s Preferred choice within in category.</p>
                                                        </div>
                                                        <div class="step_1 fl">
                                                        	<h2>Step 5 – Recognition and Award </h2>
                                                            <p>CIO CHOICE EVENTS bring together the leaders of the ICT community. Vendors are honoured in each category and presented with the title of CIO CHOICE. The awards come directly from CIOs, making the recognition a truly invaluable sales and marketing tool.</p>
                                                        </div>
                                                        
                                                        <a href="/contact_us.php" class="find_out">ICT VENDOR? find out more</a>
                                                        
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
