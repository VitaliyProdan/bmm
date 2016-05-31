<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package oceanic
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	
	<div class="site-footer-widgets">
        <div class="site-container">
            <ul>
                <?php dynamic_sidebar( 'oceanic-site-footer' ); ?>
            </ul>
            <div class="clearboth"></div>
        </div>
    </div>
	
	<div class="site-footer-bottom-bar">
	
		<div class="site-container">
			
			<div class="site-footer-bottom-bar-left">
                
                <?php printf( __( 'Buy Me Mama &copy; %s Created by %s', 'oceanic' ), date("Y"), 'MaxILineSoft' ); ?>
                
			</div>
	        
	        <div class="site-footer-bottom-bar-right">
                
	            <?php wp_nav_menu( array( 'theme_location' => 'footer','container' => false, 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
                
	        </div>
	        
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>