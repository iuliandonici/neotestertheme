<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idtheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( 'Theme by %2$s.', 'idtheme' ), 'idtheme', '<a href="http://www.iuliandonici.com" rel="designer">Iulian Donici</a>' ); ?> 

							<script src="//static.getclicky.com/js" type="text/javascript"></script>
				<script type="text/javascript">try{ clicky.init(100974337); }catch(e){}</script>
				<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100974337ns.gif" /></p></noscript>
				<script src="//static.getclicky.com/js" type="text/javascript"></script>
				<script type="text/javascript">try{ clicky.init(100974337); }catch(e){}</script>
				<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100974337ns.gif" /></p></noscript>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
