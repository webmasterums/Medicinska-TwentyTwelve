<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">


<!-- Forum och Sociala medier - Har en special klass som tillåter att de ligger på samma rad men var sin sida (se CSS) -->

<!-- PHP-skript för att visa rätt språk på "Baksidan"-länken -->
<div class="headerlinks">
    <div class="left">
	&nbsp;
	<?php $curLang = substr(get_bloginfo( 'language' ), 0, 2);
   	 switch ($curLang) {
        	case "en": // Engelska
	   	echo '<a href="http://baksidan.medicinska.se/en">Back page</a>';
            	break;
       	 	case "sv": // Svenska
            	echo '<a href="http://baksidan.medicinska.se/sv">Baksida</a>';
            	break;
   	 }
	?>
    </div>

<!-- Nedan kommer bilder ooch länkar för språk och sociala medier -->
    <div class="right" align="right">

<!-- Språk -->

	<a href="?lang=sv"><img src="http://medicinska.se/bilder/flag_sv.gif" alt="Svenska" height="19" class="links"></a>
	<a href="?lang=en"><img src="http://medicinska.se/bilder/flag_gb.gif" alt="English" height="19" class="links"></a>	
	&emsp; <!-- Tab mellan ikonerna--> 

<!-- Socialamedier-->

 	<a href="https://www.facebook.com/UmeaMedicinskaStudentkar/"><img src="http://medicinska.se/bilder/facebook.png" alt="Facebook" height="19" class="links"></a>
	<a href="https://www.linkedin.com/company/ume%C3%A5-medicinska-studentk%C3%A5r"><img src="http://medicinska.se/bilder/linkedin.png" alt="LinkedIn" height="19" class="links"></a>
	<a href="https://twitter.com/UMStudentkar"><img src="Http://medicinska.se/bilder/twitter_small.png" alt="Twitter" height="19" class="links"></a>

&nbsp;

	</div>
	<center>
	<div class="header_small_screen">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="100%"/>
	</div>
	</center>

</div>

<!--- PHP-skript för headern --->
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img
				src="<?php header_image(); ?>"
				class="header-image"
				width="<?php echo esc_attr( get_custom_header()->width ); ?>"
				height="<?php echo esc_attr( get_custom_header()->height ); ?>"
				alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
				/>
			</a>
		<?php endif; ?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
						<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->




	</header><!-- #masthead -->

	<div id="main" class="wrapper">
