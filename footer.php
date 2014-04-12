<div class="footer_links">
											<?php
													//footer
													$footer_query = mysql_query("select * from footer");
													while($footer_res = mysql_fetch_array($footer_query))
													{
														$footer_text = $footer_res['footer_text'];
													}
											?> 
                                            	    <div class="footer_link fl">
                                                    	<ul>
                                                        	<li><a href="/">Home</a></li>
                                                            <li><a href="/enter.php">Enter</a></li>
                                                    		<li><a href="/careers.php">Careers</a></li>
                                                    		<li><a href="/privacy_policy.php">Privacy&nbsp;Policy</a></li>
                                                        </ul>
                                                        <p><?php echo $footer_text;?></p>
                                                    </div>

                                            	<div class="footer_logo">
                                                	<a href="index.php"><img src="admin/upload/logo.jpg" width="85" height="95"></a>
                                                </div>
                                            </div>