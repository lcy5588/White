<!doctype html>
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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
</head>
<?php flush(); ?>
<body>
<div id="wrapper" class="container_12 clearfix">
	<!-- Text Logo -->
	<h1 id="logo" class="grid_4"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<!--<h2 class="grid_12 caption clearfix"><?php bloginfo('description'); ?></h2>-->
	<!-- Navigation Menu -->
	
	<ul id="navigation" class="grid_8">
		<?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
		<li <?php if (is_home()) { echo 'class="current"';} ?>>
		<a title="<?php bloginfo('name'); ?>"  href="<?php echo get_option('home'); ?>/">
			<!--<span class="meta">Get in touch</span><br />-->主页</a>
		</li>
	</ul>
	<div class="hr grid_12 clearfix">&nbsp;</div>
	<!-- Caption Line -->
	<h2 class="grid_12 caption clearfix">Our <span>blog</span>, keeping you up-to-date on our latest news.</h2>
	<div class="hr grid_12 clearfix">&nbsp;</div>
