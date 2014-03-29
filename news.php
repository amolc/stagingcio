
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
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
																   <span style="float:left;">></span>
                                                                  <a href="#">Latest News</a>
                                                                </div>
                                                            
                                                        </div>
														   
														
													<?php
													// else {
													include ('paginate.php'); //include of paginat page
													
$per_page =4;   
// $result1 = "";      // number of results to show per page 
// if(isset($_REQUEST['tags']))
// {
// $Keyword = $_REQUEST['tags'];
// $Keyword = $_GET['tags'];
// $Keyword = 'news test ';
// $result1 = mysql_query("SELECT * FROM news where news_title LIKE '%Keyword%'");
// }
// else {
$result = mysql_query("SELECT * FROM news");
// }

$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have

//-------------if page is setcheck------------------//
if (isset($_GET['page'])) {
    $show_page = $_GET['page'];             //it will telles the current page
    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
        // error - show first set of results
        $start = 0;              
        $end = $per_page;
    }
} else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}
// display pagination
$page = intval($_GET['page']);

$tpages=$total_pages;
if ($page <= 0)
    $page = 1;
	$reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                   
					
					
                    // display data in table
                    // echo "<table class='table table-bordered'>";
                    // echo "<thead><tr><th>country code</th> <th>Country Name</th></tr></thead>";
                    // loop through results of database query, displaying them in the table 
                    for ($i = $start; $i < $end; $i++) {
                        // make sure that PHP doesn't try to show results that don't exist
                        if ($i == $total_results) {
                            break;
                        }
                      
                        // echo out the contents of each row into a table
                        // echo "<tr " . $cls . ">";
                        // echo '<td>' . mysql_result($result, $i, 'news_id') . '</td>';
                        // echo '<td>' . mysql_result($result, $i, 'news_img') . '</td>';
                        // echo "</tr>";
                     
					
					?>
					
					<div class="singapore_news_detail fl">
                                                        	<a href="view_news.php?id=<?php echo mysql_result($result, $i, 'news_id'); ?>" target="_blank" class="read">
															<img src="admin/upload/news/<?php echo mysql_result($result, $i, 'news_img'); ?>" width="661">
															</a>
                                                            <h1 style="line-height: 24px!important;"><?php echo  mysql_result($result, $i, 'news_title'); ?></h1>
                                                            <h2>Posted: <span><?php echo mysql_result($result, $i, 'news_inserted_date'); ?></span></h2>
																	<?php
																$description = mysql_result($result, $i, 'news_description');
																$news_tags = mysql_result($result, $i, 'news_tags');
																		if (strlen($description) > 190) {
																		$stringCut = substr($description, 0, 300);
																		 $description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
																			}
																	?>
                                                            <p><?php echo $description; ?></p>
                                                            
                                                            	<div class="included_topics fl">
                                                                	<span>INCLUDED TOPICS: </span>
																	<?php
																	$comma_separated = explode(",", $news_tags);
																	foreach($comma_separated as $key2 ) {
																		
																		 echo '<a href="news.php?tags='.$key2.'">'.$key2.'</a>';
																	}
																	?>
                                                                    
                                                                    
                                                                </div>
                                                                <div class="included_topics fl mrgn_bottom">
                                                                  <a href="view_news.php?id=<?php echo mysql_result($result, $i, 'news_id'); ?>" target="_blank" style="text-decoration: none;" class="read">read more</a>
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
														
														<?php
														    }  
                    // close table>
                // echo "</table>";
            // pagination
			 // echo '<div class="pagination"><ul>';
                    // if ($total_pages > 1) {
                        // echo paginate($reload, $show_page, $total_pages);
                    // }
                    // echo "</ul></div>";
					
					echo ' <div style="margin-left:385px;" class="pagination fl">
					 ';
					  if ($total_pages > 1) {
                        echo paginate($reload, $show_page, $total_pages);
						}
						echo '</div>';
            
										// }		
										?>
													<?php
														if(isset($_REQUEST['tags'])) 
													{
														// $Keyword = $_REQUEST['tags'];
														// $Keyword = $_GET['tags'];
														$Keyword = 'news test ';
														$result11 = mysql_query("SELECT * FROM news where news_title LIKE '%Keyword%'");
													
														while($row = mysql_fetch_array($result11))
														{
													?>	
                                                        <div class="singapore_news_detail fl">
                                                        	<a href="view_news.php?id=<?php echo $row['news_id']; ?>" target="_blank" class="read">
															<img src="admin/upload/news/<?php echo $row['news_img']; ?>" width="661">
															</a>
                                                            <h1 style="line-height: 24px!important;"><?php echo $row['news_title']; ?></h1>
                                                            <h2>Posted: <span><?php echo $row['news_inserted_date']; ?></span></h2>
																	<?php
																$description2 = $row['news_description'];
																$news_tags2 = $row['news_tags'];
																		if (strlen($description2) > 190) {
																		$stringCut2 = substr($description2, 0, 300);
																		 $description2 = substr($stringCut2, 0, strrpos($stringCut2, ' ')).'...';
																			}
																	?>
                                                            <p><?php echo $description2; ?></p>
                                                            
                                                            	<div class="included_topics fl">
                                                                	<span>INCLUDED TOPICS: </span>
																	<?php
																	$comma_separated2 = explode(",", $news_tags2);
																	foreach($comma_separated2 as $key ) {
																		
																		 echo '<a href="#">'.$key.'</a>';
																	}
																	?>
                                                                    
                                                                    
                                                                </div>
                                                                <div class="included_topics fl mrgn_bottom">
                                                                  <a href="view_news.php?id=<?php echo $row['news_id']; ?>" target="_blank" class="read">read more</a>
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
                                                        <?php  } 
														}
														
														?>                                               
                                                        
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
