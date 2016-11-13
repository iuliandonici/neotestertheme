<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idtheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta name="google-site-verification" content="qLci80O36pwTGRNRVK45GP5RMt_bXBxnLhMiZCzQXoY" />
<meta name="p:domain_verify" content="10ebb42e3ddc72a2fc58b8c335cd0810"/>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php echo get_template_directory_uri();?>/img/favicon.ico" rel="shortcut icon">


 <script src="<?php echo get_template_directory_uri();?>/respond/dest/respond.min.js"></script>


<?php wp_head(); ?>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwki.neotester.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwki.neotester.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=415460785131029";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<!-- Reactful Plugin --> 
<script type="text/javascript">
	(function() {
		var reactful_client_id="632896";
		window._rctfl = window._rctfl || {c: []}; window._rctfl.c.push(reactful_client_id);
		var el = document.createElement('script'); el.async = 1;
		el.src = "//visitor.reactful.com/dist/main.rtfl.js";
		document.getElementsByTagName('head')[0].appendChild(el);
	})();
</script>
<!-- End Reactful Plugin -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2618202-14', 'auto');
  ga('send', 'pageview');

</script>



</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'idtheme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'idtheme' ); ?></button>
				<?php wp_nav_menu(); ?>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
		
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"> <img src="<?php echo get_template_directory_uri();?>/img/neotester_logo.png" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"></a></h1>
	
			<?php
		

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
