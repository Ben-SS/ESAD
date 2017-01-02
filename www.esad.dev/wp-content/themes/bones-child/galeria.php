<?php
/*
 Template Name: Galería
 *
*/
?>

<?php get_header(); ?>
<?php get_template_part('content', 'nav'); ?>
		<div id="loader"></div>
		<div id="container" class="fadein">
				<script>
					document.getElementById("loader").style.display = "none";
					document.getElementById("container").style.display = "block";
				</script>

			<div id="toggle" class="row"><span class="glyphicon glyphicon-align-justify"></span></div>
			<div id="galeria-container">
				<div class="row">
					<div class="container-fluid share-sidebar">
						<?php
						if ( dynamic_sidebar('Share Sidebar') ) : else : endif;
						?>
					</div>
				</div>
				<div class="row">
					<div id="albums-div" class="container-fluid">
						<h2 class="fadein">Day 2 Test</h2>
						<p>Una galería de prueba</p>
						<?php echo do_shortcode("[envira-gallery id='197']"); ?>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>