
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
	<style type="text/css">
	#total_news:hover {
	color:#fff;
	}
		
	</style>
	<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "66f4fd4a-f716-4744-b336-7d26381fd2d2", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
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
															
															$result2 = mysql_query("SELECT * FROM news");
															while($row2 = mysql_fetch_array($result2)){
															$title = $row2['news_title'];
																if (strlen($title) > 25) 
																{
																	$stringCut = substr($title, 0, 25);
																	$title = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
																}
															
															echo '<a style="line-height:22px;" href="view_news.php?id='.$row2['news_id'].'" target="_blank">'.$title.'</a>';
															}
															
															$Keyword = $_GET['tags'];
														?>
                                                        
                                                        
                                                    </div>
                                                  </div>
                                                  
                                               	  <div class="singapore_news_right fr">
                                               	    <div class="singapore_news fl">
                                                        	<h1>CIO CHOICE Singapore News</h1>
                                                            	<div  style="width: 40%;" class="latest_news">
                                                                  <a href="#" class="active">News</a>
																   <span style="float:left;">></span>
                                                                  <a href="#">
																  <?php
																  if($Keyword=='') {
																		echo "Latest News";
																	} 
																	else {
																	
																		echo $Keyword;
																	}
																  ?>
																 
																  </a>
                                                                </div>
                                                            
                                                        </div>
														      <?php
															
															// $result3 = mysql_query("SELECT * FROM news where news_tags LIKE '%Keyword%' ");
															// while($row3 = mysql_fetch_array($result3)){
																	// echo "r dffdfs sdf sr". $row3['news_tags'];
														// }
														?>
														
													<?php
													// else {
													include ('paginate.php'); //include of paginat page
													
$per_page =4;   
// $result1 = "";      // number of results to show per page 
// if(isset($_REQUEST['tags']))
// {
// $Keyword = $_REQUEST['tags'];

if($Keyword == "") {
$result = mysql_query("SELECT * FROM news");
}
else {
// $result = mysql_query("SELECT * FROM news where news_tags LIKE '%Keyword%'");
$result = mysql_query("SELECT * FROM news WHERE FIND_IN_SET('".$Keyword."', news_tags)");
// $result = mysql_query("select * from news where ',' + news_tags + ',' like '%,$Keyword,%'");
}
// $Keyword = 'news test ';
// $result1 = mysql_query("SELECT * FROM news where tags LIKE '%Keyword%'");
// }
// else {

// }

$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have

//-------------if page is setcheck------------------//
if (isset($_GET['page'])) {
    $show_page = $_GET['page'];             //it will telles the current page
    if ($show_page > 1 && $show_page <= $total_pages) {
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
																		<span class='st_sharethis'></span>
																		<span class='st_facebook'></span>
																		<span style="margin-top: -99px;" class='st_twitter'></span>
																		<span class='st_linkedin'></span>
																		<span class='st_pinterest'></span>
																		<span class='st_email'></span>
																		<!--<span>
																			<a target="_blank" href="http://www.linkedin.com/company/cio-choice-singapore/" style="margin:0px 0px 0px 5px;"><img src="images/linkedin.png" width="30" height="31"></a>
																			<a target="_blank" href="https://twitter.com/CIOCHOICE_SG" style="margin:0px 0px 0px 5px;"><img src="images/twitter.png" width="30" height="31"></a>
																			<a target="_blank" href="https://plus.google.com/+CiochoiceSg1/posts" style="margin:0px 0px 0px 5px;"><img src="images/google_plus.png" width="30" height="31"></a>
																			<a target="_blank" href="https://www.facebook.com/ciochoice.sg" style="margin:0px 0px 0px 5px;"><img src="images/facebook.png" width="30" height="31"></a>
																		</span> -->
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
					
					echo ' <div style="margin-left:273px;" class="pagination fl">
					 ';
					  if ($total_pages > 1) {
                        echo paginate($reload, $show_page, $total_pages);
						}
						echo '</div>';
            
										// }		
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
