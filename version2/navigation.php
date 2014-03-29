<div class="nav fl">
	<ul style="display:none;">
		<?php
		
			/** $menu_query = mysql_query("select * from menu");
			while($menu_res = mysql_fetch_array($menu_query))
			{
				$menu = $menu_res['menu_name'];
				$menu_link = $menu_res['menu_link'];
				
				echo '<li><a href="'.$menu_link.'">'.$menu.'</a></li>';
			}**/
		?>	

	</ul>
	<ul>
		<li><a href="index.php" class="home">HOME</a></li>
		<li><a href="#" class="about">ABOUT</a>
			<ul>
			  <li><a href="cio_choice_overview.php">CIO CHOICE Overview</a></li>
			  <li><a href="cio_choice_community.php">Community</a></li>
			  <li><a href="testimonials.php">Testimonials</a></li>
			</ul>
		</li>
		<li><a href="#" class="advisory">ADVISORY&nbsp;PANEL</a>
			<ul>
			  <li><a href="advisory_panel.php">2014</a></li>
			</ul>
		</li>
		<li><a href="#" class="events">EVENTS</a>
			<ul>
			  <li><a href="previous_events.php">Previous Events</a></li>
			</ul>
		</li>
		<li class="background"><a href="#" class="get_in_touch">GET&nbsp;IN&nbsp;TOUCH</a>
			<ul>
			  <li><a href="contact_us.php">Contact Details</a></li>
			  <li><a href="faq.php">FAQs</a></li>
			</ul>
		</li>
	</ul>
</div>