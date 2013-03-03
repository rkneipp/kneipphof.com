<?php
/**
 *
 * Description: Single Portfolio template.
 *
 */

get_header(); ?>
	
	<section id="single-project">
	
		<div class="container">
		
			<div class="sixteen columns">
	
				<ul class="project-nav">
				    <li class="prev"><?php next_post_link('%link', '<i class="icon-arrow-left"></i>'); ?></li>
				    <li class="back"><a href="<?php echo home_url(); ?>"><i class="icon-home"></i></a></li>
				    <li class="next"><?php previous_post_link('%link', '<i class="icon-arrow-right"></i>'); ?></li>
				</ul><!-- .project-nav -->
				
				<div class="clear"></div>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<h1><span><?php the_title(); ?></span></h1>
				
				<?php $mediaType = get_post_meta($post->ID, 'gt_portfolio_type', true); ?>
				
				<?php
				switch ($mediaType) {
				    case "Image":
				        gt_image($post->ID, 'feature-image');
				        break;
				    
				    case "Slideshow":
				        gt_gallery($post->ID, 'slideshow');
				        break;
				    
				    case "Video":
				        $embed = get_post_meta($post->ID, 'gt_portfolio_embed_code', true);
				        if (!empty($embed)) {
				            echo "<div class='video-frame'>";
				            echo stripslashes(htmlspecialchars_decode($embed));
				            echo "</div>";
				        }
				    
				    default:
				        break;
				}
				?>
				
				
					<div class="sixteen columns">

						<?php the_content(); ?>
						
					<?php endwhile; endif; ?>
	
					</div>
					
			
				
				</div><!-- end .row -->
				
				<div class="row">
				
					<div class="ten columns alpha">
				
					<?php comments_template(); ?>
				
					</div><!-- end .ten columns alpha -->
					
				</div><!-- end .row -->
		
			</div><!-- end .sixteen columns -->
				
		</div><!-- end .container -->
	
	</section><!-- end #single-project -->
	
<?php get_footer(); ?>