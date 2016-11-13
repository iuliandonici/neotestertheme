<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idtheme
 */
?>
<aside id="secondary" class="widget-area" role="complementary">
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<h3>Search on Neotester</h3>	
	<div class="search">	
	<input type="text" size="20" name="s" id="s" value="Type here" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>		
	<input type="submit" id="searchsubmit" value="Search" class="btn" />	
	</div>
	</form>
	<h3>Social Neotester</h3>
			<a href="https://www.facebook.com/neotesterpage/" target="new" title="Neotester Facebook page">
			<img src="<?php echo bloginfo('template_url'); ?>/socialmedia/social-1_logo-facebook.svg" class="social"></a>
			<a href="https://pinterest.com/neotester/" target="new" title="Neotester Pinterest page">
			<img src="<?php echo bloginfo('template_url'); ?>/socialmedia/social-1_logo-pinterest.svg" class="social"></a>
			<a href="https://twitter.com/neotester" target="new" title="Neotester Twitter profile">
			<img src="<?php echo bloginfo('template_url'); ?>/socialmedia/social-1_logo-twitter.svg" class="social"></a>
			
			<a href="http://feeds.feedburner.com/neotestercom" target="new" title="Neotester RSS feed">
			<img src="<?php echo bloginfo('template_url'); ?>/socialmedia/social-1_logo-rss.svg" class="social"></a>
	<BR>
	<div class="fb-page" data-href="https://www.facebook.com/neotesterpage/" data-width="270" data-height="200" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/neotesterpage/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/neotesterpage/">Neotester</a></blockquote></div>
	<h3>Get updates by e-mail</h3>	
	<form action="//neotester.us4.list-manage.com/subscribe/post?u=34b0a8f7133a898efc9a3a470&amp;id=665cdec8e1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>			<input style="margin-top: -20px; width: 100%;" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="e-mail address" required>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    
	<div style="position: absolute; left: -5000px;" aria-hidden="true">		<input type="text" name="b_34b0a8f7133a898efc9a3a470_665cdec8e1" tabindex="-1" value="">	</div>	<input style="margin-top: 15px; width: 100%;" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
	</form><!--End mc_embed_signup-->


	
		
			<?php 
			if (is_home()) {
				
			}
			else {
				//for use in the loop, list 5 post titles related to first tag on current post
					$tags = wp_get_post_tags($post->ID);
					if ($tags) {
					$first_tag = $tags[0]->term_id;
					$args=array(
					'tag__in' => array($first_tag),
					'post__not_in' => array($post->ID),
					'posts_per_page'=>10,
					'caller_get_posts'=>1,
					'meta_key' => '_thumbnail_id'
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) { 
					if (!is_author()) { //making sure it's not displayed if the Author page is being viewed
						?> 
							<h3>Others are reading:</h3>
						<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<div id="others_read">
							<div class="thumbs">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'thumb-small' ); ?>
							</div>
							<div class="title_article">
								<?php the_title(); ?>
								</a>
							</div>
						</div>
						<?php
						endwhile;
						}
					}
					wp_reset_query();
					}
			}

			/* $recent = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => '_thumbnail_id' ) );
		if( $recent->have_posts() ) : while( $recent->have_posts() ) : $recent->the_post();
		echo '<a href="'; the_permalink(); echo '">';
				?>
				
				
					<?php the_post_thumbnail( 'thumb-small' ); ?>
				<p style="margin-right: -5px; text-align: center; background-color: #36B200;">
					<?php the_title(); 
					echo '</p></a><BR>';
			endwhile; endif; wp_reset_postdata(); 
			*/
			?>
		
	

</aside><!-- #secondary -->
