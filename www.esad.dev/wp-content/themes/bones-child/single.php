<?php get_header(); ?>

<?php get_template_part('content', 'nav'); ?>
		<div id="loader"></div>

		<div id="container" class="fadein">
			<script>
				document.getElementById("loader").style.display = "none";
				document.getElementById("container").style.display = "block";
			</script>

			<div id="single-container" class="row">

				<div class="sidebar-single col-md-2">
					<?php if ( dynamic_sidebar('Login Sidebar') ) : else : endif; ?>
					<?php if ( dynamic_sidebar('Recent Sidebar') ) : else : endif; ?>
				</div>

				<div id="inner-content" class="wrap cf col-md-10">

					<div id="back-to-blog">
						<a href="<?php echo get_page_link( get_page_by_title( Blog )->ID);?>">&laquo; Blog</a>
					</div>

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>
					
				</div>

			</div>

			<div class="row comments-row">
				<div class="comments-div col-md-8 col-md-offset-2">
					<?php $withcomments = true; comments_template();?>
				</div>
			</div>

		</div>

<?php get_footer(); ?>
