<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" type="text/css" media="screen"/>
<script src="<?php bloginfo('template_url'); ?>/jquery/jquery-1.11.1.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper" class="container">
<header class="row">
	<div class="col-md-8 col-md-offset-2">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<a class="navbar-brand" href="">Brand</a>
	</div>
	<nav class="collapse navbar-collapse bs-navbar-collapse" id="bs-example-navbar-collapse-2">
				
		<ul class="nav navbar-nav">
			<li>HI</li>
		</ul>
	    <form class="navbar-form navbar-right" role="search" action="">
		<div class="form-group">
		  <input type="text" class="form-control" placeholder="Search" id="keyword" name="keyword" value="">
		</div>
		
		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
	    </form>
	</nav>
	</div>
</header>

<div id="content" class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
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
			
			<img class="thumb" alt="" style="width:100%;"src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />
			
			<!-- Post Content -->
			<?php the_excerpt(); ?>
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
		文章html骨架
		<?php endwhile; ?>
		<?php else : ?>
			输出找不到文章提示
		<?php endif; ?>
	</div>
	<div class="col-md-2">
	</div>
</div>

<footer class="row">
<div class="col-md-8 col-md-offset-2">水平居中很简单，垂直居中就很困难，网上方法很多，不过都存在这样那样的兼容性问题，要么就要引入一些其他元素。考虑到后期图片自动缩放，外容器浮动等等因素，然后只利用代码，不引入其他元素。于是我在网上思路的基础上，自己写了下面的方法。</div>
</footer>
<body>
</html>