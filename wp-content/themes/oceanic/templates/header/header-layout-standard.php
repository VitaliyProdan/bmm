<?php global $woocommerce; ?>

<div class="site-container">
	<?php dynamic_sidebar('language-area'); ?>
    <div class="site-header-left">
        <?php if( get_header_image() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php esc_url( header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>" /></a>
        <?php else : ?>
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="site-title"><?php bloginfo( 'name' ); ?></a>
            <div class="site-description"><?php bloginfo( 'description' ); ?></div>
        <?php endif; ?>
        
    </div><!-- .site-branding -->
	<div class="site-header-middle">
		<?php dynamic_sidebar('slogan'); ?>
		<?php dynamic_sidebar('search'); ?>
		<?php dynamic_sidebar('contact-area'); ?>

	</div>
    <div class="site-header-right">
        <?php
        if ( oceanic_is_woocommerce_activated() && get_theme_mod( 'oceanic-header-shop-links', true ) ) { ?>

            <?php if ( !is_user_logged_in() ) { ?>
             <!--   <div class="site-header-right-link"><a href="<?php /*echo get_permalink( get_option('woocommerce_myaccount_page_id') ); */?>" title="<?php /*_e('Login','woocommerce'); */?>"><?php /*_e('Login','woocommerce')*/?>/<?/*_e('Register','woocommerce'); */?></a></div>--><?php } ?>
			<div class="quick-menu-holder">
				<?php dynamic_sidebar('quick-menu'); ?>
				<div class="items"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'oceanic'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></div>
			</div>
        <?php }  ?>
    </div>
    <div class="clearboth"></div>
    
</div>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<span class="header-menu-button"><i class="fa fa-bars"></i></span>
	<div id="main-menu" class="main-menu-container oceanic-mobile-menu-dark-color-scheme">
		<div class="main-menu-close"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'main-navigation-inner' ) ); ?>
	</div>
</nav><!-- #site-navigation -->
