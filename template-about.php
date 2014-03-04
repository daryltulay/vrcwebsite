<?php
/*
Template Name: About Us Template
*/
?>
<!-- Nav tabs -->
<div class="container">
	<ul class="nav nav-tabs" style="margin-bottom: 10px;margin-top: 40px; background-color: #b10f12;border-bottom: 11px solid #8c0407;">
  <li class="active"><a href="#about-us" data-toggle="tab">ABOUT US</a></li>
  <li><a href="#about-the-owner" data-toggle="tab">ABOUT THE OWNER</a></li>
  <li><a href="#our-team" data-toggle="tab">OUR TEAM</a></li>
</ul>
	
	<!-- Tab panes -->
	
	<div class="tab-content">
		<div class="tab-pane active" id="about-us">
		<?php get_template_part('templates/content-about-us');  ?>	
	</div>
		<div class="tab-pane" id="about-the-owner">
	  	<?php get_template_part('templates/content-about-owner');  ?>
  	</div>
	  	<div class="tab-pane" id="our-team">
  		<?php get_template_part('templates/content-about-ourteam');  ?>
  </div>
	</div>
</div>