<?php
/*
 Template Name: Bienvenidos
 *
*/
?>

<?php get_header(); ?>

	<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
					
		<div class="jumbo notranslate">
			<div id="translate">
				<?php if ( dynamic_sidebar('Translate Sidebar') ) : else : endif; ?>
			</div>
			<div class="home-login">
				<?php if ( dynamic_sidebar('Login Sidebar') ) : else : endif; ?>
			</div>
			<img class="logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/Logo.png" alt="Logo"/>
			<p class="jumbo-text"><span class="jumbo-text-capital">E</span><span class="jumbo-text-normal">sta </span><span class="jumbo-text-capital">S</span><span class="jumbo-text-normal">emana </span><span class="jumbo-text-capital">A</span><span class="jumbo-text-normal">campada </span><span class="jumbo-text-capital">D</span><span class="jumbo-text-normal">ónde</span></p>
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


	<div id="home-container">
		<div id="toggle" class="row"><span class="glyphicon glyphicon-align-justify"></span></div>
		<div id="carousel-div">
			<div class="slider">
				<div class="slide"><img class="slider-image" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/1.jpg" alt="slider1"/></div>
				<div class="slide"><img class="slider-image" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/2.jpg" alt="slider2"/></div>
				<div class="slide"><img class="slider-image" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/3.jpg" alt="slider3"/></div>
				<div class="slide"><img class="slider-image" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/4.jpg" alt="slider4"/></div>
				<div class="slide"><img class="slider-image" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/5.jpg" alt="slider5"/></div>
				<div class="slide"><img class="slider-image" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/6.jpg" alt="slider6"/></div>
			</div>
		</div>

		<div id="content-container">
			<div id="left-block">
				<div id="sobre" class="container">
					<div class="title container">
						<img class="caravan" src="<?php echo get_stylesheet_directory_uri() ?>/images/caravan_orange.png" alt="Sobre Nosotros"/>
						<h2 class="title-text">Sobre Nosotros</h2>
					</div>
					<div class="text-container">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus scelerisque rhoncus ipsum, vel ultrices mauris posuere non. Aliquam et nisi dolor. Morbi at ultricies nunc, sed feugiat neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat laoreet ornare.</p>
					</div>
				</div>

				<div id="hacemos" class="container">
					<div class="title container">
						<img class="caravan" src="<?php echo get_stylesheet_directory_uri() ?>/images/caravan_green.png" alt="Sobre Nosotros"/>
						<h2 class="title-text">¿Qué hacemos?</h2>
					</div>
					<div class="text-container">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus scelerisque rhoncus ipsum, vel ultrices mauris posuere non. Aliquam et nisi dolor. Morbi at ultricies nunc, sed feugiat neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat laoreet ornare.</p>
					</div>
				</div>
			</div>

			<div id="centre-block">
				<div id="eventos" class="container">
					<div class="title container events-title-container">
						<img class="caravan" src="<?php echo get_stylesheet_directory_uri() ?>/images/caravan_blue.png" alt="Sobre Nosotros"/>
						<h2 class="title-text">Próximos Eventos</h2>
					</div>
					<div id="events-list">
						<?php if ( dynamic_sidebar('Calendar Sidebar') ) : else : endif; ?>
					</div>
				</div>
			</div>

			<div id="right-block">
				<div id="noticias" class="container">
					<div class="title container">
						<img class="caravan" src="<?php echo get_stylesheet_directory_uri() ?>/images/caravan_yellow.png" alt="Sobre Nosotros"/>
						<h2 class="title-text">Últimas Noticias</h2>
					</div>
					<div id="last-blog">
						<?php query_posts( array( 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' ) );
						?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'home-article' ); ?> role="article">

								<header class="home-article-header">

									<p id="home-article-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
										<p class="home-article-details">
	                                            <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
	                   								/* the time the post was published */
	                   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	                   								/* the author of the post */
	                   								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	                							); ?>
										</p>
								</header>

								<section class="home-article-content">
									<?php
										the_post_thumbnail( array(250, 150) );
										the_excerpt();
									?>
								</section>

								<footer id="home-article-footer">
									<p class="footer-comment-count">
										<?php comments_number();?>
									</p>

								</footer>

							</article>

						<?php endwhile; else : ?>
							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
						<?php endif; ?>
					
					</div>

					<div class="text-container">
						<a href="<?php echo get_page_link( get_page_by_title( Blog )->ID);?>">Blog &raquo;</a>
					</div>

				</div>
			</div>
		</div>

	</div>

<?php get_footer(); ?>