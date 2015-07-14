<?php get_header(); ?>
<div id="content" class="row">
	<div class="col-md-2">

	</div>
	<div class="col-md-8">
		<div class="container-fluid">
<!-- Column 1 / Content -->
 <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
<h2 class="grid_12 caption clearfix"><?php the_title(); ?></h2>
	<div class="grid_8">
		<?php the_content(); ?>
		<!-- Contact Form -->
		<?php comments_template(); ?>
		
	</div>
	<!-- Column 2 / Sidebar -->
	
    <?php else : ?>
    <div class="grid_8">
        没有找到你想要的页面！
    </div>
    <?php endif; ?>
    </div><!--class="container-fluid"-->
	</div><!--class="col-md-8"-->
	
	<div class="col-md-2"></div>
	<?php get_sidebar();?>
	</div>
<?php get_footer(); ?>
