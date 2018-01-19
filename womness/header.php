<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title><?php wp_title(''); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="MainWrap">
  <div id="HeaderWrap">
  	<div id="navbar">
	  <div id="cssmenu">
	    <?php
	    wp_nav_menu(array(
	    	'theme_location' 	=> 'womness_top_menu',
	    	'container' 		=> '',
	    ));
	    ?>
	  </div>
	</div>
    <div id="Header">
      <div id="sub-nav">
	    <?php
		    wp_nav_menu(array(
		    	'theme_location' 	=> 'womness_main_menu',
		    	'container' 		=> '',
		    ));
		?>
	  </div>

      <div id="logo">
      	<?php
		$value = get_option( 'womness_logo', '' );
		if ($value) {
			?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $value; ?>" class="logoimg <?php echo get_option( 'womness_logo_size', '' ); ?>"></a> <?php
		}
		else {
			?> <h1><span class="darkpink"><?php echo get_bloginfo('name'); ?></span></h1> <?php
		}
      	?>
      </div>
    </div>
  </div>