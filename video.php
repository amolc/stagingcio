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
                
<style type="text/css">
.video_1 div iframe {
width:370px!important;
height: 200px!important;
}
</style>

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
                                                  <h1>Media</h1>
                                                  <div class="contact_details_2 fl">
                                                  	<a href="media.php">GALLERY</a>
                                                    <a href="video.php"class="active">VIDEO</a> 
													<br />
                                                  </div>
                                                  <div class="video_main fl"> 
												  <?php 
												  $result = mysql_query("select * from gallery where type = 'video'") or die (mysql_error());
												  while ($row = mysql_fetch_array($result))  
												{ 
												  ?>
                                                  	<div class="red_carpet fl">
                                                   	  <h1><?php echo $row['title']; ?></h1>
                                                      <div>
												<?php 
														$gallery_id = $row['gallery_id'];;
													   $result2 = mysql_query("select * from gallery_videos where gallery_id = '$gallery_id'") or die (mysql_error());
												  while ($row2 = mysql_fetch_array($result2))  
												{ ?>
                                                        <div class="video_1 fl">
                                                       		<div style="float:left;"><?php 
															
															echo str_replace("<i>"," ",$row2['video_path']); ?></div>
															 <div style="clear:both;"></div>
                                                            <h2><?php echo $row2['video_title']; ?></h2>
                                                            <h3>Posted: <span><?php echo $row2['video_date']; ?></span></h3>
                                                            <p><?php echo $row2['video_description']; ?></p>
                                                        </div>
												<?php } ?>		
                                                        
                                                      </div>
                                                    </div>
													<?php } ?>
                                                   
                                                    
                                                    <div class="pagination fl" style="margin-left:385px;">
                                                        	<a href="#" class="prev"></a>
                                                            <a href="#">1</a>
                                                            <a href="#">2</a>
                                                            <a href="#">3</a><a href="#" class="next"></a>
                                                            
                                                            
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
