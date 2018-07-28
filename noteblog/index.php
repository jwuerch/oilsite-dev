<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please browse readme.txt for credits and forking information
 * @package noteblog
 */

get_header(); ?>

<div class="container">
	<div class="latest-articles-text">LATEST ARTICLES</div>

	<div class="row">
		<div id="primary" class="col-md-12 content-area">
			<main id="main" class="site-main">


				<div class="article-grid-container">
					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php

							$post_display_option = get_theme_mod('post_display_option','post-excerpt');

							if($post_display_option == 'post-excerpt'){
								get_template_part( 'template-parts/content','excerpt');
							}
							else{
								get_template_part( 'template-parts/content','excerpt');
							}

							?>



						<?php endwhile; ?>

						<?php noteblog_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

				</div>
			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!--row-->      

</div><!--.container-->
	<div class="about-section">
		<div class="row about-row">
			<div class="col-md-6 about-col-1">
			</div>
			<div class="col-md-6 about-col-2">
				<div class="about-wrap">
					<h6 class="about-title">ABOUT</h6>
					<p class="about-text">Call Me Oil is a professional blog about the latest news regarding essential oils, holistic health, nootropics, aromatherapy and may other topics about your personal health. Started by two young aspirants of essential oils, Call Me Oil brings you the latest information about how to maintain and improve your well-being.</p>
				</div>
			</div>
		</div>
	</div><!--.about-section end-->

	<div class="home-subscribe-box">
		<div class="subscribe-wrap">
			<h6 class="subscribe-title">SUBSCRIBE</h6>
			<p class="subscribe-text">SIGN-UP TO OUR NEWSLETTER</p>
			<form>
				<input type="text" placeholder="Your email">
				<input type="submit" placeholder="SUBMIT">
			</form>
		</div>
	</div>
<?php get_footer(); ?>