<?php
/**
 * The template for displaying the author page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package idtheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">

				<?php //This is where I'm displaying info about the author's article
				
				$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

				?>
				<div class="author_bio_page">
					<div class="author_bio_page_info">
						<?php echo get_avatar( get_the_author_meta('user_email') , 90 ); ?>
							<div class="author_bio_page_details">
								I am <strong><?php echo $curauth->first_name;?><?php echo $curauth->last_name; ?></strong>.
								<?php echo $curauth->user_description; ?>
 									You can find me on
									<a href="<?php echo $curauth->user_url; ?>"> 	<?php echo $curauth->user_url; ?></a>.
								<BR>
								<BR>
									
							
								
							</div>
					</div>
				</div>
				<div class="author_role">  
					<?php 
						if (is_author()) {
						$author = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
						$user_roles = $current_user->roles;
						$user_role = array_shift($user_roles);
						global $post;
						if ( user_can( $post->post_author, 'administrator' ) ) {
						  echo 'As an <strong>Administrator</strong>';
						} elseif ( user_can( $post->post_author, 'editor' ) ) {
						  echo 'As an Editor';
						} elseif ( user_can( $post->post_author, 'author' ) ) {
						  echo 'As an Author';
						} elseif ( user_can( $post->post_author, 'contributor' ) ) {
						  echo 'As a Contributor';
						} elseif ( user_can( $post->post_author, 'subscriber' ) ) {
						  echo 'As a Subscriber';
						} else {
						  echo '<strong>Guest</strong>';
						}
					}
						?> 
						at Neotester, I've written the articles below.
				</div>
			</header><!-- .page-header -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				 /* get_template_part( 'template-parts/content', get_post_format() ); */
			?>
					
					<div id="author_articles">
						<div class="author_articles_title_article">
							&#187; <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							 <?php the_title(); ?>
							</a>
							<div class="share-top-article-only-on-author">
								<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/facebook_35.png"></a>
								
								<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/google_plus_35.png"></a>
								
								<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/pinterest_35.png"></a>
								
								<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/linkedin_35.png"></a>
								
								<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php $bitly = getBitly(get_permalink($post->ID)); echo $bitly ?>" title="Tweet this!" target="new"><img src="<?php echo bloginfo('template_url'); ?>/socialmedia/twitter_35.png"></a>
							</div>
							<div class="author_articles_publish_date">
								Published on <?php the_time('d.m.Y'); ?>
							</div>
							<div class="author_articles_tags">
								Topics: <?php the_tags( '', ' ', ''); ?>
							</div>
						</div>
						<div class="author_articles_content">
							<?php the_content(); ?>
						</div>
					</div>
	
	

			<?php 
			
			endwhile;

			wp_pagenavi();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
