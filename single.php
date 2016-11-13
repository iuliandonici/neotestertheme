<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package idtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
		/*
			the_post_navigation();
		*/
			// If comments are open or we have at least one comment, load up the comment template.
			?>
			<div class="share-bottom-article">
				<h4> Share this article</h4>
				<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/facebook_35.png"></a>
				
				<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/google_plus_35.png"></a>
				
				<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/pinterest_35.png"></a>
				
				<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/linkedin_35.png"></a>
				
				<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php $bitly = getBitly(get_permalink($post->ID)); echo $bitly ?>" title="Tweet this!" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/twitter_35.png"></a>
			</div>
			<?php 
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
