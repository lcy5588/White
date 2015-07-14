<?php get_header()?>
	<!-- Column 1 /Content -->
	<div class="row">
		<div class="col-md-2">

	</div>
	<div class="col-md-8">
		<div class="container-fluid">
		<div class="sorting">
			<div class="sort_by">
				<h4>排序</h4>
				<ul>
					<li><a href="#">随机查看</a></li>
					<li><a href="#">评论最多</a></li>
					<li><a href="#">标题排序</a></li>
				</ul>
			</div>
			<h4>浏览分类</h4>
			<h2>WordPress</h2>
			<p></p>
			<p>使用 WordPress 可以搭建功能强大的网络信息发布平台，但更多的是应用于个性化的博客。针对博客的应用，WordPress 能让您省却对后台技术的担心，集中精力做好网站的内容。这里是露兜博客精心整理的 WordPress 相关内容，兴许会给您带来不小的帮助，希望您能喜欢。</p>
		</div>
		<!-- Blog Post -->
		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<!-- Post Title -->
			<h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<!-- Post Data -->
			<p class="sub"> <?php the_time('Y年n月j日') ?> 
			<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?> <?php the_tags('标签：', ', ', ''); ?> <?php edit_post_link('编辑', ' &bull; ', ''); ?></p>
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
	</div><!--class="container-fluid"-->
	</div><!--class="col-md-8"-->
	
	<div class="col-md-2"></div>
	<?php get_sidebar();?>
	</div>
	<?php get_footer(); ?>
