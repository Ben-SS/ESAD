<?php
/*
 Template Name: Contactar
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
			<div id="contactar-container" class="row">
				<div id="form" class="col-md-10">
					<h2>Formulario de contacto:</h2>
					<p>Por favor rellene el siguiente formulario y nos pondremos en contacto con usted lo antes posible.</p>
					<?php echo do_shortcode("[wpforms id='200']"); ?>
				</div>
				<div class="follow col-md-2">
					<h2><?php printf(__('Follow us','bonestheme') . ':'); ?></h2>
					<?php if ( dynamic_sidebar('Follow Sidebar') ) : else : endif; ?>
				</div>
			</div>
		</div>

<?php get_footer(); ?>