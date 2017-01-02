<?php
/*
 Template Name: Nav
 *
*/
?>

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
						
				<div class="banner notranslate">
					<div id="translate">
						<?php if ( dynamic_sidebar('Translate Sidebar') ) : else : endif; ?>
					</div>
					<img class="logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/Logo.png" alt="Logo"/>
					<p class="banner-text"><span class="banner-text-capital">E</span><span class="banner-text-normal">sta </span><span class="banner-text-capital">S</span><span class="banner-text-normal">emana </span><span class="banner-text-capital">A</span><span class="banner-text-normal">campada </span><span class="banner-text-capital">D</span><span class="banner-text-normal">ónde</span></p>
				</div>

				<div id="popout">

					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
						         'container' => false,                           // remove nav container
						         'container_class' => 'menu',                 // class of container (should you choose to use it)
						         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
						         'menu_class' => 'nav top-nav',               // adding custom nav class
						         'theme_location' => 'main-nav',                 // where it's located in the theme
						         'before' => '',                                 // before the menu
					               'after' => '',                                  // after the menu
					               'link_before' => '',                            // before each link
					               'link_after' => '',                             // after each link
					               'depth' => 0,                                   // limit the depth of the nav
						         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
				</div>

			</header>