<?php get_header(); ?>
<?php get_template_part('content', 'nav'); ?>
		<div id="loader"></div>
		<div id="container" class="fadein">
				<script>
					document.getElementById("loader").style.display = "none";
					document.getElementById("container").style.display = "block";
				</script>

			<div id="toggle" class="row"><span class="glyphicon glyphicon-align-justify"></span></div>
			<div id="search-container">
			<div id="back-to-blog">
				<a href="<?php echo get_page_link( get_page_by_title( Blog )->ID);?>">&laquo; Blog</a>
			</div>
			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main">
						<h1><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="entry-header article-header">

									<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                  						<p class="search-p entry-meta vcard">
                    							<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
	                   								/* the time the post was published */
	                   								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	                   								/* the author of the post */
	                   								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	                							); ?>
                  						</p>

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

								</section>

								<footer class="search-footer article-footer">

									<?php if(get_the_category_list(', ') != ''): ?>
                  					<?php printf( __( 'filed under', 'bonestheme' ) . ': %1$s', get_the_category_list(', ') ); ?>
                  					<?php endif; ?>

                 					<?php the_tags( '<p class="search-p tags"><span class="tags-title">' . __( 'Tags', 'bonestheme' ) . ': ','</span> ', ' ', '</p>' ); ?>

								</footer> <!-- end article footer -->

							</article>

							<hr>

						<?php endwhile; ?>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					</div>

			</div>

<?php get_footer(); ?>
