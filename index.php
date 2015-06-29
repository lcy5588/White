<!DOCTYPE html>
<html>
<head>
<title>Richard's BLOG</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap-theme.min.css" type="text/css" media="screen"/>
<script src="<?php bloginfo('template_url'); ?>/jquery/jquery-1.11.1.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
</head>
<?php flush(); ?>
<body>
<div id="wrapper" class="container">
<header class="row">
	<div class="col-md-8 col-md-offset-2">
	<nav class="navbar">
	<div class="navbar-header">		
			<a class="navbar-brand" title="<?php bloginfo('name'); ?>" href="<?php echo get_option('home'); ?>/">Richard</a>
	</div>
	<div class="collapse navbar-collapse">
				
		<ul class="nav navbar-nav">
			<?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>		
		</ul>
	    <form class="navbar-form navbar-right" role="search" action="">
		<div class="form-group">
		  <input type="text" class="form-control" placeholder="Search" id="keyword" name="keyword" value="">
		</div>
		
		<button type="submit" class="btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
	    </form>
	</div>
	</nav>
	</div>
</header>

<div id="content" class="row">
	<div class="col-md-2">

	</div>
	<div class="col-md-8">
	<div class="container-fluid">
	<!-- Blog Post -->
		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<!-- Post Title -->
			<h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<!-- Post Data -->
			<p class="sub"><?php the_tags('标签：', ', ', ''); ?> &bull; <?php the_time('Y年n月j日') ?> &bull; 
			<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' &bull; ', ''); ?></p>
			<div class="hr dotted clearfix">&nbsp;</div>
			<!-- Post Image -->
			
			<img class="thumb" alt="" style="width:100%;" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />
			
			<!-- Post Content -->
			<?php the_content(); ?>
			<!-- Read More Button -->
			<p class="clearfix"><a href="<?php the_permalink(); ?>" class="button right"> Read More...</a></p>
		</div>
		<div class="hr clearfix">&nbsp;</div>
        <?php endwhile; ?>
		<!-- Blog Navigation -->
		<p class="clearfix"><?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?> <span class="float right"><?php next_posts_link('查看旧文章 &gt;&gt;', 0); ?></span></p>
		 <?php else : ?>
			<h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
			<p>没有找到任何文章！</p>
			<?php endif; ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php endwhile; ?>
		<?php else : ?>
			输出找不到文章提示
		<?php endif; ?>
		</div>
	</div>
	<div class="col-md-2">

	</div>
</div>

<footer class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="container-fluid">
			 <span class="float">版权所有 &copy; 2010 <?php bloginfo('name'); ?>
			&nbsp;&nbsp;|&nbsp;&nbsp;Powered By <a rel="external" title="WordPress主页" class="link" href="http://wordpress.org/">WordPress</a>
			&nbsp;&nbsp;|&nbsp;&nbsp;Design By Richard&nbsp;&nbsp;|&nbsp;&nbsp;
			Code By Richard
			</span>
			</p>
		</div>
	</div>
</footer>
<body>
</html>
