<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>

	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<!-- Main Stylesheets
  	================================================== -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dynamic-css/options.css">
	<link href="http://get.pictos.cc/fonts/3933/1" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/extra/kneipp.css">
	<!-- Meta
	================================================== -->
	
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Favicons
	================================================== -->
	
	<link rel="shortcut icon" href="<?php global $data; echo $data['custom_favicon']; ?>">
	<link rel="apple-touch-icon" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon-114x114.png">
	
<?php wp_head(); ?>

<script language="JavaScript">
<!--
function calcHeight()
{
  //find the height of the internal page
  var the_height=
    document.getElementById('the_iframe').contentWindow.
      document.body.scrollHeight;

  //change the height of the iframe
  document.getElementById('the_iframe').height=
      the_height;
}
//-->
</script>

</head>

<body <?php body_class(); ?> >

	<div class="header-background-image"></div>

	<header id="header-global" role="banner">
	
		<div class="logo-icons container">
		
			<div class="row">
			
				<div class="header-logo six columns">

					<div id="logo">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" class="logok" >
							
					
						</a>
					</div>
				  	
				</div><!-- end .header-logo -->
				
				<div class="icons ten columns">
				
					<ul class="social-icons">
							<li><a href="callto:+393331380810" class="phone-link" title="Chiama ora"></a></li>
							<li><a href="mailto:info@kneipphof.com?subject=Richiesta%20informazioni" class="mail-link" title="Scrivi una mail"></a></li>
						<?php if ($data["text_twitter_profile"]) { ?>
							<li><a href="<?php echo $data['text_twitter_profile']; ?>" class="twitter-link" title="Profilo Twitter" target="_blank"></a></li>
						<?php } if ($data["text_facebook_profile"]){ ?>
							<li><a href="<?php echo $data['text_facebook_profile']; ?>" class="facebook-link" title="Profilo Facebook" target="_blank"></a></li>
						<?php } if ($data["text_linkedin_profile"]){ ?>
							<li><a href="<?php echo $data['text_linkedin_profile']; ?>" class="linkedin-link" title="Profilo Linkedin" target="_blank"></a></li>
						<?php } if ($data["text_googleplus_profile"]){ ?>
							<li><a href="<?php echo $data['text_googleplus_profile']; ?>" class="googleplus-link" title="Profilo Google +" target="_blank"></a></li>
						
						<?php } ?>
						
					</ul>
				
				</div><!-- end .icons -->
				
			</div><!-- end .row -->
			
		</div><!-- end .logo-icons container -->
			
		<nav id="header-navigation" class="sixteen columns" role="navigation">
		
		<?php if (is_front_page()) { ?>
			
			<?php
			$header_menu_args = array(
			    'menu' => 'Header',
			    'theme_location' => 'Front',
			    'container' => false,
			    'menu_id' => 'navigation'
			);
			
			wp_nav_menu($header_menu_args);
			?>
			
		<?php } else { ?>
		
			<?php
			$header_menu_args = array(
			    'menu' => 'Header',
			    'theme_location' => 'Inner',
			    'container' => false,
			    'menu_id' => 'navigation'
			);
		
		wp_nav_menu($header_menu_args);
		?>
		
		<?php } ?>

		</nav><!-- end #header-navigation -->
			
		<?php if (is_front_page()) { ?>
		
		<div class="container">
				
			<div class="row">
			
				<?php if ($data['text_introduction']) { ?>
				<h1 id="uber-statement"><?php echo $data['text_introduction']; ?></h1>
				<?php } ?>
				
			</div>
	
		</div><!-- end .container -->
		
		<?php } else { ?>
		<?php } ?>
	
	</header><!-- end #header-global -->
	