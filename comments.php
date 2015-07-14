<?php
    if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
?>
<!-- Comment's List -->
		<h3>Comments</h3>
		
		<ol class="commentlist">
			  <?php
			if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
				// if there's a password
				// and it doesn't match the cookie
			?>
			<li class="decmt-box">
				<p><a href="#addcomment">请输入密码再查看评论内容.</a></p>
			</li>
			<?php
				} else if ( !comments_open() ) {
			?>
			<li class="decmt-box">
				<p><a href="#addcomment">评论功能已经关闭!</a></p>
			</li>
			<?php
				} else if ( !have_comments() ) {
			?>
			<li class="decmt-box">
				<p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p>
			</li>
			<?php
				} else {
					wp_list_comments('type=comment&callback=aurelius_comment');
				}
			?>
		</ol>
		
		<!-- Comment Form -->
		<?php
			if ( !comments_open() ) :
			// If registration required and not logged in.
			elseif ( get_option('comment_registration') && !is_user_logged_in() ) :
			?>
			<p>你必须 <a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a> 才能发表评论.</p>
			<?php else  : ?>
			<!-- Comment Form -->
			<form id="commentform" name="commentform" class="form-horizontal" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
				<h3>发表评论</h3>
				<div class="hr dotted clearfix">&nbsp;</div>
				
					<?php if ( !is_user_logged_in() ) : ?>
					<div class="form-group has-feedback">
						<label for="author" class="sr-only">昵称</label>
						<div class="col-sm-4">
						<input type="text" name="author" id="author" class="form-control" value="<?php echo $comment_author; ?>" aria-describedby="require2Status"  placeholder="昵称" tabindex="1" />
						<span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true"></span>
						<span id="require2Status" class="sr-only">(success)</span>
						</div>
					
						<label for="email" class="sr-only">EMail</label>
						<div class="col-sm-4">
							<input type="text" name="email" id="email" class="form-control" value="<?php echo $comment_author_email; ?>" aria-describedby="require2Status" placeholder="EMail" tabindex="2" />
							<span class="glyphicon glyphicon-asterisk form-control-feedback" aria-hidden="true"></span>
							<span id="require2Status" class="sr-only">(success)</span>
						</div>
						<label for="url" class="sr-only">网址</label>
						<div class="col-sm-4">
							<input type="text" name="url" id="url" class="form-control" value="<?php echo $comment_author_url; ?>" placeholder="网址" tabindex="3" />
						</div>
					</div>
					<?php else : ?>
					您已登录:<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出登录">退出 &raquo;</a>
					<?php endif; ?>
					<div class="form-group">
						<label for="message" class="col-sm-2">评论内容</label>
						<div class="col-sm-12">
							<textarea id="message comment" class="form-control" name="comment" tabindex="4" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<!-- Add Comment Button -->
						<div class="col-sm-12">
							<a href="javascript:void(0);" onClick="Javascript:document.forms['commentform'].submit()" class="button medium black right">发表评论</a> 
						</div>
					</div>
				
				<?php comment_id_fields(); ?>
				<?php do_action('comment_form', $post->ID); ?>
			</form>
			<?php endif; ?>
	
