<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>cio-choice.sg</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<!-- Required CSS -->

	<!--[if lt IE 9]>
	<link href="css/movingboxes-ie.css" rel="stylesheet" media="screen" />
	<![endif]-->
	
	<!-- Required script -->
	<!-- <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>-->
<script type="text/javascript" src="js/jquery.js"></script> 
	<!--<link rel="stylesheet" href="slider_style.css">
	
	<script type="text/javascript" src="js/jcarousellite.js"></script>-->
	<script src="http://jwpsrv.com/library/c+e6yqaJEeO1oCIACmOLpg.js"></script>

	
<!--<script type="text/javascript" async="" src="js/ga.js"></script>-->
<!--<script src="js/jquery.min.js"></script>-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/mytweets.js"></script>-->
<link href="css/razamalik.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.sky.carousel-1.0.2.min.js"></script>
<script type="text/javascript" src="js/twitterfeed.js"></script>
<link href="css/twitter-styles.css" rel="stylesheet" type="text/css" />
<!--  added for the video player -->
<!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>
  
<!-- added for the video player -->


<script type="text/javascript">
	$(function() {
		$('.sky-carousel').carousel({
			itemWidth: 260,
			itemHeight: 260,
			distance: 12,
			selectedItemDistance: 75,
			selectedItemZoomFactor: 1,
			unselectedItemZoomFactor: 0.5,
			unselectedItemAlpha: 0.6,
			motionStartDistance: 210,
			topMargin: 115,
			circular: true,
			loop: true,
			preload: true,
			loopRewind: true,
			gradientStartPoint: 0.35,
			gradientOverlayColor: "#ebebeb",
			gradientOverlaySize: 190,
			selectByClick: false
		});
	});	
</script>
<style type="text/css">
	@media only screen and (min-width: 960px) {#portfolio-wrapper img {min-height: 147px;}} 
	@media only screen and (min-width: 768px) and (max-width: 959px) {#portfolio-wrapper img {min-height: 115px;}}
</style>
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
                                            <div class="black_container">
											<?php include('navigation.php'); ?>
                                               
                                                    <div class="video fl">
														<?php
														
															$video_query = mysql_query("select * from videos");
															while($video_res = mysql_fetch_array($video_query))
															{
																$video = $video_res['video_embed_code'];
															}
															// echo $video;
														?>
														
														<!--<div id="myElement">Loading the player...</div>-->
														<div>
														<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="737" height="415"
      														poster="admin/upload/Intro_frame_01.jpg"
    													  data-setup="{}">
   															
   															 <source src="intro.webm" type='video/webm' />
   															 <source src="intro.ogv" type='video/ogg' />
															 <source src="intro.mp4" type='video/mp4' />
    
 														 </video>
														</div>

														<script type="text/javascript">
															// jwplayer("myElement").setup({
																// file: "admin/upload/<?php echo $video; ?>",
																  // height: 415,
																// width: 737,
																// image: "admin/upload/Intro_frame_01.jpg"
															// });
														</script>
                                                       <!-- <img src="images/video.jpg" width="737" height="415">-->
                                                    </div>
                                            </div>
                                        </div>
										<!--<div style="padding-top:50px;height: 560px;" id="advisory_wrapper">-->
										<div style="padding-top:50px;height: 630px;" id="advisory_wrapper">
										
											
										<div class="sixteen columns">
											<div class="project">
												<div class="sky-carousel sc-no-select" style="visibility: visible;">
     <div class="sky-carousel-wrapper" style="visibility: visible; opacity: 1;">
      <h1 style="text-align:center; margin-top:37px; color:#20201F; font-size: 30px;font-weight: bold;">Our Advisory Panel</h1>
      <ul class="sky-carousel-container" style=" left: -1405px;">
      <?php
             $advisory_query1 = mysql_query("select * from advisory_panel");
             $counter=0;
             while($advisory_res = mysql_fetch_array($advisory_query1))
             {
              $advisory_image = $advisory_res['advisory_image'];
              $advisory_name = $advisory_res['advisory_name'];
              $advisory_desination = $advisory_res['advisory_desination'];
              $advisory_description = $advisory_res['advisory_description'];
           
               $advisory_description = str_replace("<div>","",$advisory_description);
                $advisory_description = str_replace("</div>","",$advisory_description);

              if (strlen($advisory_description) > 190) {

               // truncate string
               $stringCut = substr($advisory_description, 0, 300);

               // make sure it ends in a word so assassinate doesn't become ass...
               // $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
			   
                $advisory_description = substr($stringCut, 0, strrpos($stringCut, ' ')).'<a style="font-weight:bold;" href="advisory_detail.php?id='.$advisory_res['advisory_id'].'"> Read more</a>';
				
			}
           
             
            ?>
              
               <li style="-webkit-transform-origin: 50% 139px; -webkit-transform: translate(0px, 0px) scale(0.5) translateZ(0px); opacity: 0.6;">
              <img style="" src="http://www.cio-choice.sg/<?php echo $advisory_image; ?>&h=190&w=190&zc=1" alt="" class="sc-image">
                <div class="sc-content">
                 <h2><a style="font-weight:bold; border:none; font-size:26px;" href="advisory_detail.php?id=<?php echo $advisory_res['advisory_id']; ?>"><?php echo $advisory_name; ?></a></h2>
                 <p><?php echo $advisory_description; ?></p>
                </div>
               </li>
               
       
             <?php
            $counter++;
              }
             ?>

      </ul>
     </div>
    <div class="sc-preloader" style="display: none;"></div><div class="sc-content-wrapper">
    <div class="sc-content-container" style="visibility: visible; opacity: 1;">
    <div class="sc-content">
    <h2></h2><p></p></div></div></div> 
    <div class="sc-overlay sc-overlay-left" width="190" height="1" style="width: 370px;background: #FFF;"></div>
    <div class="sc-overlay sc-overlay-right" width="190" height="1" style="width: 370px;background: #FFF;"></div>
    <a href="#" class="sc-nav-button sc-prev sc-no-select"></a>
    <a href="#" class="sc-nav-button sc-next sc-no-select">
    </a>
    
    </div>
											</div>
										</div>




																		
												
											
															
														
												
												</div>
                                            </div>
											<!--<img src="timthumb.php?src=/admin/advisory_panel_img/Alice-Abigail-Tan.jpg&h=150&w=150&zc=1" alt="some text" />-->
                                            <div style="display:none;" id="advisory_wrapper">
                                                <div class="our_advisory_panel">
                                                  <h1>Our Advisory Panel</h1>
                                                    <span><img src="images/alice_abigail.jpg" alt="" width="863" height="298"></span>
                                                  <h2>Alice Abigail</h2>
                                                  <p>Ms Alice Abigail, an Information Technology Head of Department with over 20 years<br>
                                                  of regional experience in leading and managing a team of IT managers and executives in IT goal setting, initiatives and support for the organization Find out more</p>
                                                        
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                                <?php include('events_panel.php'); ?>
                                              
                                           
                                            <?php   include('quick_contact.php');
                                                    include('footer.php');
                                              ?>                                   
                                            

 

    <!-- Google CDN jQuery with fallback to local 
	<script type="text/javascript" src="js/jquery.min.js"></script>-->
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
				$("#content_8").mCustomScrollbar({
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