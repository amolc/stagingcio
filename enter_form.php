<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cio Choice</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<script src="admin/include/resource/js/jquery-1.10.2.min.js"></script>

<script type="text/javascript">
$(document).ready(function()
{

	$('#cio_category').on('change',function()
	{
              
					$('.category1').remove();
					$('.categroy_created').remove();
                    var value = $(this).val();
					
                    if(value >0) 
					{
                       for (var i = 1; i <=value; i++) 
					    {
							$('.category').before('<div class="categroy_created"><h2 class="form_heading" style="color:#c5ac35;">Entry '+i+'</h2><div class="field fl"><span class="input_lable fl">ICT Category & Code: </span> <span class="input_lable fl"  style="width:320px;height:25px; display:block; font-weight:normal; padding:0px; margin:0px;">(Please see categories found on the <u>categories</u>  tab)</span><br /><input type="text" name="category_code[]" id="category_code" class="fl input_field" required/></div> <div class="field fl"><span class="input_lable fl" style="width:438px; height:25px; display:block; padding:0px;">&nbsp;</span><span class="input_lable fl">Product/ Service/ Solution Name:</span><br /><input type="text" name="solution[]" id="solution" class="fl input_field" required/></div><div class="field fl"><span class="input_lable fl">Brand Name:</span><br /><input type="text" name="brand_name[]" id="country" class="fl input_field" required/></div><div class="field fl" style="width:910px; margin:0px;"><span class="input_lable fl">Product Description: </span><span class="input_lable fl"  style="width:910px;height:25px; display:block; font-weight:normal; padding:0px; margin:0px;">(Please do not make description longer than 100 words)</span><br /> <textarea name="product_description[]" class="fl input_field" id="post_code" style="width:890px; height:180px; padding:10px;" required></textarea></div></div>');													
						}
                    }
            
	}); 
});
</script>

</head>

											<?php
											include('sql_config/database/cio_db.php'); 
											
											if(isset($_POST['Submit']))
											{
											
											$first_name = $_REQUEST['first_name'];
											$last_name = $_REQUEST['last_name'];
											$title = $_REQUEST['title'];
											$email = $_REQUEST['email'];
											$user_telephone = $_REQUEST['telephone'];
											$user_mobile = $_REQUEST['mobile'];
											$company_name = $_REQUEST['company_name'];
											$company_address = $_REQUEST['company_address'];
											$company_telephone = $_REQUEST['company_telephone'];
											$post_code = $_REQUEST['post_code'];
											$country = $_REQUEST['country'];
											$company_size = $_REQUEST['company_size'];
											$cio_category_no = $_REQUEST['cio_category_no'];
											$category_code = $_REQUEST['category_code'];
											$solution = $_REQUEST['solution'];
											$brand_name = $_REQUEST['brand_name'];
											$product_des = $_REQUEST['product_description'];
											$term = $_REQUEST['term'];
											$fee_part = $_REQUEST['fee_part'];
											//echo $term;exit;

												if ($term == '1')
												{
													$sql="insert into ictpartners 
													(first_name,last_name,title,email,telephone,mobile,company_name,company_address,company_telephone,post_code,country,company_size,total_products,fee_part)
													values
													('$first_name','$last_name','$title','$email','$user_telephone','$user_mobile','$company_name','$company_address','$company_telephone','$post_code','$country','$company_size','$cio_category_no','$fee_part')";
													mysql_query($sql)or die(mysql_error());
													$partner_id = mysql_insert_id();
													
													for($i=0;$i<$cio_category_no;$i++)
													{
														$sql2="insert into ictpartners_products
														(partner_id,category_code,solution,brand_name,product_description)
														values
														('$partner_id','$category_code[$i]','$solution[$i]','$brand_name[$i]','$product_des[$i]')";
														mysql_query($sql2)or die(mysql_error());
													}
													
													echo'<script>window.location.replace("enter_form.php?add=ok");</script>';	
												}
																																
											}	
											?>


<body>

     <?php             

											   include('top_header.php');
											   include('header.php');
									?>
									
                                   
                                        
                                 
                                        <div id="black_wrapper">
                                            <div class="inner_nav">
                                              <?php include('navigation.php'); ?>
                                            </div>
                                        </div>
										
			
										 <!--<form  action="" method="post">-->
                        <form action="" method="post">
                                         
                                            <div id="advisory_wrapper">
											
                                                <div class="get_in_touch mrgn_top">
												
                                                  <div class="contact_details_2 fl">
                                                  	<a href="#" class="">NOTICES</a>
                                                    <a href="#"  class="">CATEGORIES</a>  
                                                    <a href="#"  class="">PARTICIPATION FEES</a>  
                                                    <a href="#"  class="">T & Cs</a>  
                                                    <a href="enter_form.php"  class="active">ENTER</a>  
													<br />
                                                  </div>
												  <?php
											if(isset($_REQUEST['add']))
											{
											echo '<h1 style="color:green;">Saved</h1>';
											}
											?>
                                                  <div class="video_main fl">
										           
													<h2 class="form_heading">1. Contact Information </h2>
												
													<div class="field fl">
													<span class="input_lable fl">First Name:</span>
													<br />
													<input type="text" name="first_name" id="first_name" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Last Name:</span>
													<br />
													<input type="text" name="last_name" id="last_name" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Title:</span>
													<br />
													<input type="text" name="title" id="title" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Email:</span>
													<br />
													<input type="text" name="email" id="email" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Telephone Number:</span>
													<br />
													<input type="text" name="telephone" id="telephone" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Mobile No:</span>
													<br />
													<input type="text" name="mobile" id="mobile" class="fl input_field" required/>
													</div>
													<br />
													<h2 class="form_heading">2. Company Information </h2>
													
													
													<div class="field fl">
													<span class="input_lable fl">Company Name:</span>
													<br />
													<input type="text" name="company_name" id="company_name" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Company Address:</span>
													<br />
													<input type="text" name="company_address" id="company_address" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Post Code/Zip:</span>
													<br />
													<input type="text" name="post_code" id="post_code" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Country:</span>
													<br />
													<input type="text" name="country" id="country" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl">Telephone Number:</span>
													<br />
													<input type="text" name="company_telephone" id="company_telephone" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl" style="width:438px; display:block;">Company Revenue (Singapore):</span>
													<br />
													<label for="">Less than $USD 15 Million</label><input type="radio" name="company_size" id="company_size" value="less" class=""/>
													<label for="" style="margin-left:15px;">More than $USD 15 Million</label><input type="radio" name="company_size" id="company_size" value="more" class=""/>
													</div>
													
													<h2 class="form_heading">3. Product / Service / Solution Detail </h2>
                                                    
                                                    <div class="field fl" style="width:890px;">
													<span style=" display:block; float:left; margin:15px 0px 10px 0px;"><select style="width:70px; height:30px; padding:7px;" name="cio_category_no" id="cio_category" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    
													  </select>
                                                      </span>
                                                      <span class="input_lable fl" style="width:800px; margin:11px 0px 0px 15px; padding:0px;">Select the  Number of CIO CHOICE categories you would like to participate in.</span>
                                                      <span class="input_lable fl"  style="width:800px; font-weight:normal; padding:0px; margin-left:15px;">( Each category entry form must be completed, details of the ICT categories is found on the <u>categories</u>  tab)</span>
													</div>
                                                <div class="category"></div>    
                                                <div class="category1">
												
                                                    <h2 class="form_heading" style="color:#c5ac35;">Entry 1</h2>
                                                    
                                                    
                                                    <div class="field fl">
													<span class="input_lable fl">ICT Category & Code: </span>
                                                    <span class="input_lable fl"  style="width:320px;height:25px; display:block; font-weight:normal; padding:0px; margin:0px;">(Please see categories found on the <u>categories</u>  tab)</span>
													<br />
													<input type="text" name="category_code[]" id="category_code" class="fl input_field" required/>
													</div>
													
													<div class="field fl">
													<span class="input_lable fl" style="width:438px; height:25px; display:block; padding:0px;">&nbsp;</span>
                                                    <span class="input_lable fl">Product/ Service/ Solution Name:</span>
													<br />
													<input type="text" name="solution[]" id="solution" class="fl input_field" required/>
													</div>
                                                    
                                                    <div class="field fl">
													<span class="input_lable fl">Brand Name:</span>
													<br />
													<input type="text" name="brand_name[]" id="country" class="fl input_field" required/>
													</div>
                                                    
                                                    <div class="field fl" style="width:910px; margin:0px;">
													<span class="input_lable fl">Product Description: </span>
                                                    <span class="input_lable fl"  style="width:910px;height:25px; display:block; font-weight:normal; padding:0px; margin:0px;">(Please do not make description longer than 100 words)</span>
													<br />
                                                    <textarea name="product_description[]" class="fl input_field" id="post_code" style="width:890px; height:180px; padding:10px;" required></textarea>
													</div>
                                                </div>
                                                    <h2 class="form_heading">4. Build your application</h2>
                                                    
                                                    <div class="field fl" style="width:800px;">
													<input type="checkbox" name="term"  value="1" required/> <label for="" class="input_lable" style="padding:0px;">I agree with the <u>Terms and Condtions</u> related to CIO CHOICE registration</label>
													</div>
                                                    <div class="field fl" style="width:800px;">
													<input type="checkbox" name="fee_part"  value="yes" /> <label for="" class="input_lable" style="padding:0px;">I accept the CIO CHOICE  <u>Participation Fees</u></label>
													</div>
                                                    <div >
                                                        <input class="enter_form_send" type="submit" value="" name="Submit">
                                                    </div>
											</form>
                                                    <div class="your_register">
                                                    	<h1>Your Registration form will be <span>emailed to you to be stamped</span>, <span>signed</span> and <span>authorized</span> by a representative of the company. </h1>
                                                        <p>Please return your a scanned copy to <a href="#">registration@cio-choice.sg</a>.</p>
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                      
                                           <?php 
           
											include('quick_contact.php');
											include('footer.php');
											
											 ?>


    <!-- Google CDN jQuery with fallback to local -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

	<script type="text/javascript">
		(function($){
        $(".facebook_scroll a[rel^='prettyPhoto']").prettyPhoto();
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
        $(".facebook_scroll a[rel^='prettyPhoto']").prettyPhoto({
          social_tools: ''
        });
$(".facebook_scroll").owlCarousel({autoPlay:true,items:4});

		})(jQuery);
	</script>
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
