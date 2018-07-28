<?php
/**
 * The template for displaying all single posts.
 *
 * Please browse readme.txt for credits and forking information
 * @package noteblog
 */

get_header(); ?>
	<div class="banner-holder">
		<div class="banner">
			<div class="container">
				<h1 class="title single-title entry-title container banner-title"><?php the_title(); ?></h1>
			</div>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="bg-stretch" style="background-image: url('<?php echo $thumb['0'];?>')"></div>
		</div>
	</div>



	<div class="container">
        <div class="row">
			<div id="primary" class="col-md-9 content-area">
				<main id="main" role="main">
					<div class="affiliate-text">Disclosure: Some of the links in this post may be affiliate links and we may receive commission or compensation. Read our privacy policy for more information.</div>


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content',get_post_format()); ?>
				</main><!-- #main -->				

				<div>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						if(!comments_open())

					?>
				</div>			

				<div class="post-navigation">				
					<?php noteblog_post_navigation(); ?>
				</div>

				<?php endwhile; // End of the loop. ?>

				
			</div><!-- #primary -->

			<?php get_sidebar('sidebar-1'); ?>
		</div> <!--.row-->            
    </div><!--.container-->
    <?php get_footer(); ?>
