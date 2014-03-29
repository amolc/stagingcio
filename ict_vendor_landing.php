<?php
 session_start();
  // include('../include/database/db.php'); 
if(isset($_SESSION['username']) && isset($_SESSION['ict'])){
	$name = $_SESSION['user_name'];
	$type = $_SESSION['cio'];
}
else {
	header('Location: login.php');
}
 ?>
<!doctype html> 
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link href="css/rcarousel.css" rel="stylesheet" type="text/css">
<link href="css/tinycarousel.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/jquery.tinycarousel.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
		// alert('okk');
			$("#slider5").tinycarousel({
				axis   : "y"
			});
		});       
	</script>

</head>

<body>
                                   	<?php
													include('sql_config/database/cio_db.php'); 
														include('top_header.php');
														
													?>
                                        
                                        
                                        <div id="shadow_wrapper"></div>
                                        <div id="black_wrapper">
                                            <div class="inner_nav">
                                               <?php include('navigation.php'); ?>
                                            </div>
                                        </div>
                                            <div id="advisory_wrapper">
                                               <div class="landing_head" style="margin-top:0px;">
													<p><img src="images/Landing_logo.jpg" width="240" height="238"></p>
                                                    <h1>Hi</h1>
                                                    <h2><?php echo $name; ?><strong style="color:#20201f;">,</strong> </h2>
                                                    <h3>Welcome to CIO CHOICE <span>SINGAPORE</span></h3>
                                                </div>
                                        	</div>
                                            <div id="cio_area">
                                            	<div class="landing_head" style="margin-top:0px;height:50px;">
                                                	<div class="cio_area_head fl">
                                                    	<div class="cio_area fl">
                                                        	<h6><img src="images/world_icon.jpg" width="43" height="38">   THE ICT VENDOR area</h6>
                                                        </div>
                                                        
                                                        <div class="logout fr">
                                                        	<a href="logout.php"><img src="images/logout.jpg" width="17" height="25">logout</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div id="advisory_wrapper">
                                                <div class="get_in_touch mrgn_top">
                                                  <div class="contact_details_2 fl">
                                                  	<a href="#" class="active">NOTICES</a>
                                                    <a href="ict_vender_enter.php">ENTER NOW</a>
                                                  </div>
                                                  <div class="online_voting_main fl">
                                                  	<div class="online_voting fl">
														
														<!--carousel start-->
															<div id="container">
																<div id="carousel">
																	<div id="slide01" class="slide">
																		<div class="text">
																			<h1> You are invited to submit yourProducts, Services & Solutions</h1>
																		</div>
                                                                        <img src="images/click_here.jpg" alt="" border="0" />
																	</div>
																	
																	<div id="slide02" class="slide">
																		<div class="text">
																			<h1> You are invited to submit yourProducts, Services & Solutions</h1>
																		</div>
                                                                        <img src="images/click_here.jpg" alt="" border="0" />
																	</div>
																	
																	<div id="slide03" class="slide">
																		<div class="text">
																			<h1> You are invited to submit yourProducts, Services & Solutions</h1>
																		</div>
                                                                        <img src="images/click_here.jpg" alt="" border="0" />
																	</div>
																	
																	<div id="slide04" class="slide">
																		<div class="text">
																			<h1> You are invited to submit yourProducts, Services & Solutions</h1>
																		</div>
                                                                        <img src="images/click_here.jpg" alt="" border="0" />
																	</div>
																	
																	<div id="slide05" class="slide">
																		<div class="text">
																			<h1> You are invited to submit yourProducts, Services & Solutions</h1>
																		</div>
                                                                        <img src="images/click_here.jpg" alt="" border="0" />
																	</div>
																	
																						
																</div>
																<div id="pages"></div>
															</div>
														<!--carousel end-->
													</div>

                                                    	<div class="news fl">
                                                        	<h1>News</h1>
                                                            	<div id="slider5">
																	<a class="prev" href="#"></a>
																	<div class="viewport">
																		<ul class="overview">
																			
																	
                                                           <?php
															
															$result2 = mysql_query("SELECT * FROM news");
															while($row2 = mysql_fetch_array($result2))
															{
																$title = $row2['news_title'];
																if (strlen($title) > 30) 
																{
																	$stringCut = substr($title, 0, 30);
																	$title = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
																}
																$description = $row2['news_description'];
																if (strlen($description) > 50) 
																{
																	$stringCut = substr($description, 0, 100);
																	$description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
																}
															//echo '<a style="line-height:22px;" href="view_news.php?id='.$row2['news_id'].'" target="_blank">'.$title.'</a>';
															echo '<li><div class="news_detail fl">';
															echo '<h2>'.$title.'</h2>';
															echo '<h3>'.$row2['news_inserted_date'].'</h3>';
															echo '<p>'.$description.'<a href="view_news.php?id='.$row2['news_id'].'" target="_blank">read more</a></p>';
															echo '</div></li>';
															}
														?>        
                                                           	</ul>
																	</div>
																	<a class="next" href="#"></a>
																</div> 
                                                        </div>

                                                        	<div class="message_board fr">
                                                            	<h2><img src="images/message_icon.jpg" width="29" height="32">Message Board</h2> 
                                                                	<span><img src="images/double_dot1.jpg" width="24" height="18"></span>
                                                                <p>We have an <u>up and coming event</u> planned for the 30th February: THE CIO CHOICE Red Carpet Night 2014! To get the latest information, please get in touch and we’ll keep you posted.<br>
                                                                  <br>
                                                                  We hope to see you there.<br>

                                                                  <br>
                                                              <strong>The CIO CHOICE team</strong><img style="float:right; margin:9px 280px 0px 0px;" src="images/double_dot2.jpg" width="24" height="18"></p>
                                                            </div>
                                                  </div>
                                                  <div style="clear:both;"></div>
                                              </div>
                                              <div style="clear:both;"></div>
                                        	</div>
                                            
                                            
                                          <?php   include('quick_contact.php');
                                                    include('footer.php');
                                              ?>    



<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>-->
<!--<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js" type="text/javascript"></script>
<script type="text/javascript" src="js/scripts.js"></script>-->



    <!-- Google CDN jQuery with fallback to local -->
	<!-- <script type="text/javascript" src="js/jquery.min.js"></script>
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

</script>-->

		<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="js/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="js/jquery.ui.rcarousel.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				function generatePages() {
					var _total, i, _link;
					
					_total = $( "#carousel" ).rcarousel( "getTotalPages" );
					
					for ( i = 0; i < _total; i++ ) {
						_link = $( "<a href='#'></a>" );
						
						$(_link)
							.bind("click", {page: i},
								function( event ) {
									$( "#carousel" ).rcarousel( "goToPage", event.data.page );
									event.preventDefault();
								}
							)
							.addClass( "bullet off" )
							.appendTo( "#pages" );
					}
					
					// mark first page as active
					$( "a:eq(0)", "#pages" )
						.removeClass( "off" )
						.addClass( "on" )
						.css( "background-image", "url(images/page-on.png)" );

				}

				function pageLoaded( event, data ) {
					$( "a.on", "#pages" )
						.removeClass( "on" )
						.css( "background-image", "url(images/page-off.png)" );

					$( "a", "#pages" )
						.eq( data.page )
						.addClass( "on" )
						.css( "background-image", "url(images/page-on.png)" );
				}
				
				$("#carousel").rcarousel(
					{
						visible: 1,
						step: 1,
						speed: 700,
						auto: {
							enabled: true
						},
						width:918,
						height:358,
						start: generatePages,
						pageLoaded: pageLoaded
					}
				);
				
				$( "#ui-carousel-next" )
					.add( "#ui-carousel-prev" )
					.add( ".bullet" )
					.hover(
						function() {
							$( this ).css( "opacity", 0.7 );
						},
						function() {
							$( this ).css( "opacity", 1.0 );
						}
					);
			});
		</script>

</body>
</html>
