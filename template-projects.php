<?php
/*
Template Name: Projects Template
*/
?>
<div class="container">
<!--TAB NAV -->
	<ul id="projects-tabnav"class="nav nav-tabs redify">
		<li class="active"><a href="#all-projects" data-toggle="tab">ALL PROJECTS</a></li>
		<li><a href="#archives" data-toggle="tab">ARCHIVES</a></li>
		<li><a href="#videos" data-toggle="tab">VIDEOS</a></li>
	</ul>
<!-- List View -->
	<div class="col-xs-12">
<button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">DISPLAY BY LIST</button>
</div>
	<?php get_template_part('templates/projects-listview');?>
</div>
<!--TAB CONTENT-->
<div class="tab-content">
	<div class="tab-pane active" id="all-projects">
		<?php get_template_part('templates/content-page');  ?>
	</div>
	<div class="tab-pane" id="archives">
	  	 <?php get_template_part('templates/projects-archives');  ?>
  	</div>
  	<div class="tab-pane" id="videos">
	   <?php get_template_part('templates/projects-videos');  ?> 
  	</div>
</div>