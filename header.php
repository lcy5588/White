<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';	
    } else {
        wp_title('',true);
    } ?></title>
<!-- Stylesheets -->
<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>-->

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
