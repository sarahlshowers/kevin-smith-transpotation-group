<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Kevin Smith Transportation Group - Pennsylvania’s source for luxury limousine and chauffeured transportation">
    <link rel="stylesheet" src="<?php bloginfo('template_url'); ?>/library/scss/style.css"/ type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400, 600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-62118693-1', 'auto');
        ga('send', 'pageview');
      </script>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div class="grid">
			<header class="header desktop-header row" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div class="inner-header">
 					<a class="fluid-images desktop-logo" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/library/images/logo.svg"/ class="logo" /></a>
            <?php wp_nav_menu( array(
              'theme_location' => 'main-nav',
              'container' => 'nav',
              'depth' => 2
            )); ?>
				</div>
			</header>

      <header class="mobile-header">
        <div class="banner-wrapper">
          <a class="desktop-logo" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/library/images/logo.svg"/ class="logo" /></a>
          <a href="#home"  id="menu-button" class="dropdown" data-scroll><img src="<?php bloginfo('template_url'); ?>/library/images/icon-menu.png"/ class="logo" /></a>
        </div>
          <?php wp_nav_menu( array(
            'theme_location' => 'main-nav',
            'container' => 'nav',
            'container_class' => 'toggle-menu',
            'depth' => 2
          )); ?>
      </header>
      <?php if (!is_front_page()) : ?>
				<div class="white-container">
	        <div class="breadcrumbs">
	          <?php bcn_display() ?>
	        </div>
			<?php else : ?>
				<div class="page-container">
      <?php endif; ?>
