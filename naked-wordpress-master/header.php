<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>

<header id="masthead" class="site-header">
	
	<div class="hero banner">
		<h1>Welcome to Sechelt</h1>
		<h2>    British Columbia</h2>
	<div class="container nav-bar">
		
		<nav id="nav" class="site-navigation main-navigation absolute-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="http://18.188.133.18/SecheltBC/wp-content/uploads/2018/03/LogoLarge-2.png"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>
		</nav><!-- .site-navigation .main-navigation -->
		
	</div>
	</div>
	
	<div class="center">
		<div class="clear"></div>
	</div><!--/container -->
		
</header><!-- #masthead .site-header -->

<main class="main-fluid"><!-- start the page containter -->
