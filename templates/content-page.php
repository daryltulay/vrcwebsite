<div class="container clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
	</div>
</div>
