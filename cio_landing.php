<?php
session_start();
   include('sql_config/database/cio_db.php');
if (isset($_SESSION['username']) && isset($_SESSION['cio']))
{
    $name = $_SESSION['user_name'];
    $type = $_SESSION['cio'];
		if (isset($_SESSION['corperate_email'])) {
		
		$corperate_email = $_SESSION['corperate_email'];
		$disnone="";
	$login_type_linkedin="";
		 $login_type_result = mysql_query("SELECT login_type FROM registration WHERE corperate_email ='$corperate_email'");
                                    while ($login_type_row = mysql_fetch_array($login_type_result))
                                    {
                                        $login_type_linkedin = $login_type_row['login_type'];
                                       
									}
									if($login_type_linkedin == 'Linkedin')
									{
										$disnone = 'none';
									}
									else {
									$disnone = 'block';
									}
	
}
} else
{
    header('Location: login.php');
}
?> 

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cio Choice</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/rcarousel.css" rel="stylesheet" type="text/css">
        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <link href="css/tinycarousel.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.tinycarousel.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // alert('okk');
                $("#slider5").tinycarousel({
                    axis: "y"
                });
            });
        </script>
		
			<script type="text/javascript">
		$(document).ready(function(){
			
				$('.change_pass').click(function(){
				
				var old_pass = $('.old_pass').val();
				var new_pass = $('.new_pass' ).val();
				var re_pass = $( '.re_pass' ).val();

				$.ajax({
						type: 'post',
						url: 'ajax_change_password.php',
						data: {old_pass:old_pass,new_pass:new_pass,re_pass:re_pass,},
 
						success: function(mesg) {
							alert(mesg);
							$('.mesg').empty().append(mesg);
							 // $('#photo_detail').append(mesg);

						}

				});

			});		
			/*$('.keyup-email-2').keyup(function() {
				$('span.error-keyup-8').remove();
				var inputVal = $(this).val();
				var emailFreeReg= /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!aol.com)([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailFreeReg.test(inputVal)) {
					$(this).after('<span style="position: absolute;height: 22px;margin-left: -38px;margin-top: 45px;color: #F00;" class="error error-keyup-8">No Free Email Addresses.</span>');
					// $('.enter_form_send').hide();
					 // $(".enter_form_send").prop('disabled', 'true');
				}
				else { 
				// $('.enter_form_send').show();
				 // $(".enter_form_send").prop('disabled', 'false');
				}
			});*/
			
			
		});
	</script>
<script type="text/javascript">
$(document).ready(function(){
 
     $(".logincontainer").click(function () {
 
     $(".logbar").toggle("slow");
 
  });
	
});
</script>
        <style type="text/css">
            #container {
                width:918px;
                position: relative;
                margin: 0 auto;
                background:#e73535;
            }

            #carousel {
                width:918px;
                margin: 0 auto;
            }

            #ui-carousel-next, #ui-carousel-prev {
                width: 60px;
                height:60px;
                background: url(images/arrow-left.png) #fff center center no-repeat;
                display: block;
                position: absolute;
                top: 0;
                z-index: 100;
            }

            #ui-carousel-next {
                right: 0;
                top:45%;
                background-image: url(images/arrow-right.png);
            }

            #ui-carousel-prev {
                left: 0;
                top:45%;
            }

            #ui-carousel-next > span, #ui-carousel-prev > span {
                display: none;
            }

            .slide {
                margin: 0;
                position: relative;
            }

            .slide  h1 {
                font: 45px/1 'Source Sans Pro';	
                color: #fff;
                font-weight:bold;
                margin:83px 0px 0px 140px;
                height:auto;
                line-height:50px;
                padding: 0;
                width:630px;
                text-transform:uppercase;
            }

            .slide  p {
                font: 45px/1 'Source Sans Pro';	
                color: #fff;
                font-weight:300;
                margin:83px 0px 0px 140px;
                height:auto;
                line-height:50px;
                padding: 0;
                width:630px;
                text-align:center;
                text-transform:uppercase;
            }

            #slide01 > img {
                position: absolute;
                top:45px;
                right:200px;
            }

            #slide01 > .text {
                position: absolute;
                left:0px;
                top: 115px;
            }

            #slide02 > img {
                position: absolute;
                top:45px;
                right:200px;
            }

            #slide02 > .text {
                position: absolute;
                left:0px;
                top:115px;
            }

            #slide03 > img {
                position: absolute;
                top:45px;
                right:200px;
            }

            #slide03 > .text {
                position: absolute;
                left:0px;
                top:115px;
            }

            #slide04 > img {
                position: absolute;
                top:45px;
                right:200px;
            }

            #slide04 > .text {
                position: absolute;
                left:0px;
                top:115px;
            }

            #slide05 > img {
                position: absolute;
                top:45px;
                right:200px;
            }

            #slide05 > .text {
                position: absolute;
                left:0px;
                top:115px;
            }

            #slide06 > img {
                position: absolute;
                top:45px;
                right:200px;
            }

            #slide06 > .text {
                position: absolute;
                left:0px;
                top:115px;
            }

            #pages {
                bottom: 25px;
                left: 400px;
                margin: 0 auto;
                position: absolute;
                width: 150px;
            }

            .bullet {
                background: url(images/page-off.png) center center no-repeat;
                display: block;
                width: 18px;
                height: 18px;
                margin: 0;
                margin-right: 5px;
                float: left;				
            }

        </style>
<style type="text/css">
.logout a:hover {
    color: #ADADAD!important;
	
	}
</style>

    <script src="js/jquery.easytabs.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                //alert('raza');
                $('#tab-container').easytabs(); 
				
            });
        </script> 


    </head>

    <body>
        <?php
        // include('sql_config/database/cio_db.php');
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
                        <h6><img src="images/cio_area_icon.jpg" width="41" height="34">  THE CIO area</h6>
                    </div>

                    <!--<div class="logout fr">
                        <a href="logout.php"><img src="images/logout.jpg" width="17" height="25">logout</a>
                    </div>-->
						<div style="width:115px;display:<?php echo $disnone; ?>;" class="logout fr">
                     <!--   <a href="change_password_ict.php">changePassword</a>-->
						<a class="logincontainer"><img src="images/change_pass_icon.png" width="22" height="25">Password</a>
						  
					<div class="logbar  change_pass_wrraper" style="display: none;">
						
						                      
						<div style="" class="">
							<label>Old Password:</label>
							<input name="old"  class="old_pass" type="password" required>
							<label>New Password:</label>
							<input name="new"  class="new_pass" type="password" required>
							<label style="width:180px;">Confirm New Password:</label>
							<input name="retype"  class="re_pass" type="password" required>
																				
							<input name="Submit" class="change_pass" value="Submit" type="submit">
							<span style="color:red" class="mesg"></span>
						</div>
					</div>
                    </div> 

                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div id="advisory_wrapper">
		<?php
			  if(isset($_REQUEST['send']))
											{
											echo '<div style="text-align: center;width: 760px;margin-left: 287px;color:#585858;margin-top: 20px;font-weight: normal;font-size: 18px;">Thank you for your interest in the survey. It will be mailed to you in the next 12-24 hours. </div>';											}
											if(isset($_REQUEST['error']))
											{
											echo '<h1 style="color:red;margin-left: 550px;margin-top: 20px;">Survey Not Sent</h1>';
											}
			  ?>
            <div class="get_in_touch mrgn_top">
                <div id="tab-container">  
			  <ul class='etabs' style="width:100%;">
				<li class='tab' style="	margin:0px 13px 0px 0px;"><a href="#tab1">NOTICES</a></li>
				<li class='tab'><a href="#tab2" class="mrgn">REQUEST THE SURVEY</a></li>
			  </ul>
			<?php
			  if(isset($_REQUEST['add']))
											{
											echo '<div class="your_register">
                                                    	<h1>Your Registration form will be <span>emailed to you to be stamped</span>, <span>signed</span> and <span>authorized</span> by a representative of the company. </h1>
                                                        <p>Please return your a scanned copy to <a href="#">registration@cio-choice.sg</a>.</p>
                                                    </div><br /><br />';
											}
			  ?>
				<div id="tab1"  style="height: auto;width: auto;" class="content three_tabs fl">
						 <div class="online_voting_main fl">
                    <div class="online_voting fl">
                        <!--carousel start-->
                        <div id="container">
                            <div id="carousel">
           
                            <?php $slide = mysql_query("select * from cio_landing");  ?>
                            <?php  while ($row = mysql_fetch_array($slide)): ?>
                                <div id="slide01" class="slide">
                                    <div class="text">
                                        <h1> <?php echo $row['title'] ?></h1>
                                        <p> <?php echo $row['description'] ?></p>
                                    </div>
                                    <img src="admin/<?php echo $row['path'] ?>" alt="" border="0" />
                                </div>
							<?php endwhile;?>	

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
                                    while ($row2 = mysql_fetch_array($result2))
                                    {
                                        $title = $row2['news_title'];
                                        if (strlen($title) > 30)
                                        {
                                            $stringCut = substr($title, 0, 30);
                                            $title = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
                                        }
                                        $description = $row2['news_description'];
                                        if (strlen($description) > 50)
                                        {
                                            $stringCut = substr($description, 0, 100);
                                            $description = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
                                        }
                                        //echo '<a style="line-height:22px;" href="view_news.php?id='.$row2['news_id'].'" target="_blank">'.$title.'</a>';
                                        echo '<li><div class="news_detail fl">';
                                        echo '<h2>' . $title . '</h2>';
                                        echo '<h3>' . $row2['news_inserted_date'] . '</h3>';
                                        echo '<p>' . $description . '<a href="view_news.php?id=' . $row2['news_id'] . '" target="_blank">read more</a></p>';
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
                        <p><?php echo $row['message'];?>
                        <br>
                        <strong>The CIO CHOICE team</strong><img style="float:right; margin:9px 280px 0px 0px;" src="images/double_dot2.jpg" width="24" height="18"></p>
                    </div>
                </div>
                                                            
				</div><!--tab1 close--> 
															  
				<div id="tab2"  style="height: auto;width: auto;" class="content three_tabs fl">
						
                    <div class="online_voting_main fl">
														<!--
														<div id="surveyMonkeyInfo"><div><script src="https://www.surveymonkey.com/jsEmbed.aspx?sm=R7gdr4H4ovq9Y_2bo2OYufQw_3d_3d"> </script></div>Create your free online surveys with <a href="https://www.surveymonkey.com">SurveyMonkey</a> , the world's leading questionnaire tool.</div>
														-->
														<div class="online_survey fl">
                                                        	<div class="send_btn fl"><a href="send_survey.php"></a></div>
                                                            <div class="online_survey_text fl">
                                                            	<h1>CIO CHOICE <span>ONLINE SURVEY</span></h1>
                                                                <p>To request the survey, or if you would like to be re-sent a reminder </p>
                                                              <h2>HIT THE &acute;<a href="send_survey.php"><span>SEND ME THE SURVEY</span></a>&acute; BUTTON</h2>
                                                              <p>and we’ll have it delivered to your registered email address<br><br>
                                                                <strong>Registered Email Address: <a href="#" style="color:#e73535;"><?php echo $corperate_email;?></a></strong></p>
                                                          </div>
                                                        </div>
                                                        <div class="having_problems fl">
                                                        	<h3>Having Problems with your Survey?</h3>
                                                            <p>Please feel free to get in touch by emailing <a href="mailto:survey@cio-choice.sg" style=" color:#616161; font-weight:bold; text-decoration:underline;">survey@cio-choice.sg</a></p>
                                                        </div>

												 </div>
														
				</div><!--tab2 close-->
			</div>
                <div style="clear:both;"></div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <?php
        include('quick_contact.php');
        include('footer.php');
        ?>    




        <!--
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/scripts.js"></script> -->



        <!-- Google CDN jQuery with fallback to local -->
        <!--<script type="text/javascript" src="js/jquery.min.js"></script>
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
    
    </script> -->

        <!--<script type="text/javascript" src="js/jquery-1.7.1.js"></script>--> 
        <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="js/jquery.ui.rcarousel.js"></script>
        <script type="text/javascript">
        jQuery(function($) {
            function generatePages() {
                var _total, i, _link;

                _total = $("#carousel").rcarousel("getTotalPages");

                for (i = 1; i < _total; i++) {
                    _link = $("<a href='#'></a>");

                    $(_link)
                            .bind("click", {page: i},
                            function(event) {
                                $("#carousel").rcarousel("goToPage", event.data.page);
                                event.preventDefault();
                            }
                            )

                            .addClass("bullet off")
                            .appendTo("#pages");
                }

                // mark first page as active
                $("a:eq(0)", "#pages")
                        .removeClass("off")
                        .addClass("on")
                        .css( "background-image", "url(images/page-on.png)");

            }

            function pageLoaded(event, data) {
                $("a.on", "#pages")
                        .removeClass("on")
                        .css( "background-image", "url(images/page-off.png)");

                $("a", "#pages")
                        .eq(data.page)
                        .addClass("on")
                        .css( "background-image", "url(images/page-on.png)");
            }

            $("#carousel").rcarousel(
                    {
                        visible: 1,
                        step: 1,
                        speed: 700,
                        auto: {
                            enabled: true
                        },
                        width: 918,
                        height: 358,
                        start: generatePages,
                        pageLoaded: pageLoaded
                    }
            );

            $( "#ui-carousel-next")
                    .add("#ui-carousel-prev")
                    .add( ".bullet")
                    .hover(
                            function() {
                                $(this).css( "opacity", 0.7);
                            },
                            function() {
                                $(this).css( "opacity", 1.0);
                            }
                    );
        });
        </script>


    </body>
</html>
