<?php
/**
 * Month View Content Template
 * The content template for the month view of events. This template is also used for
 * the response that is returned on month view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/content.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<div id="tribe-events-content" class="tribe-events-month">

	<!-- Month Title -->
	<?php do_action( 'tribe_events_before_the_title' ) ?>
	<h2 class="tribe-events-page-title"><?php tribe_events_title() ?></h2>

	<?php

	$filters = tribe_events_get_filters();
	$views   = tribe_events_get_views();

	$current_url = tribe_events_get_current_filter_url();
	?>

	<?php do_action( 'tribe_events_bar_before_template' ) ?>
	<div id="tribe-events-bar">

		<form id="tribe-bar-form" class="tribe-clearfix searchform" name="tribe-bar-form" method="post" action="<?php echo esc_attr( $current_url ); ?>">

			<!-- Mobile Filters Toggle -->

			<div id="tribe-bar-collapse-toggle" <?php if ( count( $views ) == 1 ) { ?> class="tribe-bar-collapse-toggle-full-width"<?php } ?>>
				<?php printf( esc_html__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?><span class="tribe-bar-toggle-arrow"></span>
			</div>

			<!-- Views -->
			<?php if ( count( $views ) > 1 ) { ?>
				<div id="tribe-bar-views">
					<div class="tribe-bar-views-inner tribe-clearfix form-group">
						<h3 class="tribe-events-visuallyhidden"><?php esc_html_e( 'Event Views Navigation', 'the-events-calendar' ) ?></h3>
						<label><?php esc_html_e( 'View As', 'the-events-calendar' ); ?></label>
						<select class="tribe-bar-views-select tribe-no-param form-control" name="tribe-bar-view">
							<?php foreach ( $views as $view ) : ?>
								<option class="form-control" <?php echo tribe_is_view( $view['displaying'] ) ? 'selected' : 'tribe-inactive' ?> value="<?php echo esc_attr( $view['url'] ); ?>" data-view="<?php echo esc_attr( $view['displaying'] ); ?>">
									<?php echo $view['anchor']; ?>
								</option>
							<?php endforeach; ?>
						</select>
					</div>
					<!-- .tribe-bar-views-inner -->
				</div><!-- .tribe-bar-views -->
			<?php } // if ( count( $views ) > 1 ) ?>

			<?php if ( ! empty( $filters ) ) { ?>
				<div class="tribe-bar-filters">
					<div class="tribe-bar-filters-inner tribe-clearfix">
						<?php foreach ( $filters as $filter ) : ?>
							<div class="<?php echo esc_attr( $filter['name'] ) ?>-filter">
								<label class="label-<?php echo esc_attr( $filter['name'] ) ?>" for="<?php echo esc_attr( $filter['name'] ) ?>"><?php echo $filter['caption'] ?></label>
								<?php echo $filter['html'] ?>
							</div>
						<?php endforeach; ?>
						<div class="tribe-bar-submit">
							<button class="btn btn-info" type="submit" name="submit-bar"><?php printf( esc_attr__( 'Find %s', 'the-events-calendar' ), tribe_get_event_label_plural() ); ?></button>
						</div>
						<!-- .tribe-bar-submit -->
					</div>
					<!-- .tribe-bar-filters-inner -->
				</div><!-- .tribe-bar-filters -->
			<?php } // if ( !empty( $filters ) ) ?>

		</form>
		<!-- #tribe-bar-form -->

	</div><!-- #tribe-events-bar -->




	<?php do_action( 'tribe_events_after_the_title' ) ?>

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<!-- Month Header -->
	<?php do_action( 'tribe_events_before_header' ) ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>

		<!-- Header Navigation -->
		<?php tribe_get_template_part( 'month/nav' ); ?>

	</div>
	<!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ) ?>

	<!-- Month Grid -->
	<?php tribe_get_template_part( 'month/loop', 'grid' ) ?>

	<!-- Month Footer -->
	<?php do_action( 'tribe_events_before_footer' ) ?>
	<div id="tribe-events-footer">

		<!-- Footer Navigation -->
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'month/nav' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>

	</div>
	<!-- #tribe-events-footer -->
	<?php do_action( 'tribe_events_after_footer' ) ?>

	<?php tribe_get_template_part( 'month/mobile' ); ?>
	<?php tribe_get_template_part( 'month/tooltip' ); ?>

</div><!-- #tribe-events-content -->
