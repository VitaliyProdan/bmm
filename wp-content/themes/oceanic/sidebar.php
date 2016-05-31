<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package oceanic
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} ?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php if (!is_front_page()) :?>
		<?php dynamic_sidebar('filter'); ?>
	<?php endif; ?>
</div><!-- #secondary -->