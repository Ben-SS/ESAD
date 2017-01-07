<?php get_header(); ?>
		

			<?php get_template_part('content', 'nav'); ?>
			<div id="loader"></div>

			<div id="container" class="fadein">
				<script>
					document.getElementById("loader").style.display = "none";
					document.getElementById("container").style.display = "block";
				</script>

				<div id="toggle" class="row"><span class="glyphicon glyphicon-align-justify"></span></div>

				<div id="events-container">
					<div  class="row">
						<div class="sidebar-single col-md-2">
							<?php if ( dynamic_sidebar('Login Sidebar') ) : else : endif; ?>
							<?php if ( dynamic_sidebar('Calendar Sidebar') ) : else : endif; ?>
						</div>

						<div id="calendar" class="col-md-10">

							<div id="tribe-events-pg-template">
								<?php tribe_events_before_html(); ?>
								<?php tribe_get_view(); ?>
								<?php tribe_events_after_html(); ?>
							</div> <!-- #tribe-events-pg-template -->

						</div>
					</div>
				</div>
			</div>	

<?php get_footer(); ?>