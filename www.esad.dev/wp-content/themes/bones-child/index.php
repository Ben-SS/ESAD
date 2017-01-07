<?php get_header(); ?>

		<?php get_template_part('content', 'nav'); ?>
		<div id="loader"></div>

		<div id="container" class="fadein">
			<script>
				document.getElementById("loader").style.display = "none";
				document.getElementById("container").style.display = "block";
			</script>	

			<div id="toggle" class="row"><span class="glyphicon glyphicon-align-justify"></span></div>
			<div id="search-div">
				<form id="searchform" role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
					<div class="form-group">
						<label for="search">Buscar:</label>
						<input type="search" class="search-field form-control" placeholder="…" value="" name="s" title="Search for:" />
						<button type="submit" class="search-submit btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
			</div>

			<div class="row">

				<div class="sidebar-single col-md-2">
					<?php if ( dynamic_sidebar('Login Sidebar') ) : else : endif; ?>
				</div>

				<div id="blog-container" class="col-md-10">

					<div id="inner-content" class="wrap cf">

							<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

									<div class="each-post col-md-4">

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

									</div>

								<?php endwhile; else : ?>

									<div class="no-post-container">

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

									</div>
								<?php endif; ?>

							</main>

					</div>

				</div>
				
			</div>

			
		</div>


<?php get_footer(); ?>