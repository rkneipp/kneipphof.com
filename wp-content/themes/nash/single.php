<?php
/**
 *
 * Description: Standard Blog (Single Article) template.
 *
 */

get_header(); ?>

	<div id="main">
			
		<section id="content">
		
			<div class="container">
			
				<div class="sixteen columns">
					
					<section id="post-content" class="sixteen columns alpha">
										
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<article <?php post_class("single-article"); ?>>
											
							<h1 class="post-title"><?php the_title(); ?></h1>
							
							<span class="meta-author">By <?php the_author_posts_link(); ?></span>
							
							<span class="meta-category"><?php _e('Posted in', 'nash'); ?> - <?php the_category(' & '); ?> <?php _e('on', 'nash'); ?> <strong><?php echo get_the_date($d); ?></strong> <span class="comment-count"><a href="#comments" class="scroll"><?php $commentscount = get_comments_number(); echo $commentscount; ?></a> <?php _e('Comments', 'nash'); ?></span></span>
	
							<?php the_post_thumbnail('single-post'); ?>
							
							<?php the_content(); ?>
							
							<span class="tags"><i class="icon-tags"></i> <?php the_tags(' ',' '); ?></span>
												
						</article><!-- end #single-article -->
						
					<?php endwhile; endif; ?>
					
					<?php comments_template(); ?>
					
					<?php gt_content_nav('nav-below');?>
						
					</section><!-- end #post-content -->
					
					
			
				</div><!-- end .sixteen columns -->
		
			</div><!-- end .container -->
		
		</section><!-- end #content -->
	
	</div><!-- end #main -->
		
<?php get_footer(); ?>
