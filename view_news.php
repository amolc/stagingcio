
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
													
														// $result = mysql_query("SELECT * FROM news");
												$total_news = mysql_query("select count(1) FROM news");
												$total_row = mysql_fetch_array($total_news);

												$total = $total_row[0];
												// echo "Total rows: " . $total;
													
													$id = $_REQUEST['id'];
													$result = mysql_query("SELECT * FROM news WHERE news_id=$id");
													$row = mysql_fetch_array($result);	
												?>
                                        
                                         
                                                                                
                                  
                                        <div id="black_wrapper">
                                            <div class="inner_nav">
                                                <?php include('navigation.php'); ?>
                                            </div>
                                        </div>
                                            <div id="advisory_wrapper">
                                                <div class="news_container mrgn_top" style="height:auto;">
                                                  <div class="overview_left fl">
                                                  	<div class="about fl">
                                                    	<h1>NEWS</h1>
                                                        <h1 style="background: none;"><a style="font-size: 24px;font-weight: bold;" id="total_news" href="news.php">2014 &nbsp;( <?php echo $total;?> )</a></h1>
														 <?php
															
															$result2 = mysql_query("SELECT * FROM news limit 7 ");
															while($row2 = mysql_fetch_array($result2)){
															$title = $row2['news_title'];
																if (strlen($title) > 25) 
																{
																	$stringCut = substr($title, 0, 25);
																	$title = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
																}
															
															echo '<a style="line-height:22px;" href="view_news.php?id='.$row2['news_id'].'" target="_blank">'.$title.'</a>';
															}
														?>
                                                        
                                                        
                                                    </div>
                                                  </div>
                                                  
                                               	  <div class="singapore_news_right fr">
                                               	    <div class="singapore_news fl">
                                                        	<h1>CIO CHOICE Singapore News</h1>
                                                            	<div class="latest_news">
                                                                  <a href="#" class="active">News</a>
                                                                  <a href="#">Latest News</a>
                                                                </div>
                                                            
                                                        </div>
                                                        <div class="singapore_news_detail fl">
                                                        	<img src="admin/upload/news/<?php echo $row['news_img']; ?>" width="661">
                                                            <h1 style="line-height: 24px!important;"><?php echo $row['news_title']; ?></h1>
                                                            <h2>Posted: <span><?php echo $row['news_inserted_date']; ?></span></h2>
                                                            <p><?php echo $row['news_description']; ?></p>
                                                            
                                                            	<div class="included_topics fl">
                                                                	<span>INCLUDED TOPICS: </span>
                                                                    <a href="#">Community ,</a>
                                                                    <a href="#">CIO ,</a>
                                                                    <a href="#">ICT Vendors</a>
                                                                    
                                                                </div>
                                                                <div class="included_topics fl mrgn_bottom">
                                                                 
																	<div class="social_media fr" style="width:145px;">
																		<span>
																			<a target="_blank" href="http://www.linkedin.com/company/cio-choice-singapore/" style="margin:0px 0px 0px 5px;"><img src="images/linkedin.png" width="30" height="31"></a>
																			<a target="_blank" href="https://twitter.com/CIOCHOICE_SG" style="margin:0px 0px 0px 5px;"><img src="images/twitter.png" width="30" height="31"></a>
																			<a target="_blank" href="https://plus.google.com/+CiochoiceSg1/posts" style="margin:0px 0px 0px 5px;"><img src="images/google_plus.png" width="30" height="31"></a>
																			<a target="_blank" href="https://www.facebook.com/ciochoice.sg" style="margin:0px 0px 0px 5px;"><img src="images/facebook.png" width="30" height="31"></a>
																		</span> 
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
