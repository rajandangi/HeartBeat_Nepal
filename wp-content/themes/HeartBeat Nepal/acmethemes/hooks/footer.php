<?php
/**
 * content and content wrapper end
 *
 * @since SuperMag 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_after_content' ) ) :

    function supermag_after_content() {
      ?>
        </div><!-- #content -->
        </div><!-- content-wrapper-->
    <?php
    }
endif;
add_action( 'supermag_action_after_content', 'supermag_after_content', 10 );

/**
 * Footer content
 *
 * @since SuperMag 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_footer' ) ) :

    function supermag_footer() {

	    $supermag_customizer_all_values = supermag_get_theme_options();
	    if( is_active_sidebar( 'full-width-footer' ) ) :
		    dynamic_sidebar( 'full-width-footer' );
	    endif;
        ?>
        <div class="clearfix"></div>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-wrapper">
                <div class="top-bottom wrapper">
                    <div id="footer-top">
                        <div class="footer-columns">
                           <?php if( is_active_sidebar( 'footer-col-one' ) ) : ?>
                                <div class="footer-sidebar acme-col-3">
                                    <?php dynamic_sidebar( 'footer-col-one' ); ?>
                                </div>
                            <?php endif; 
                           if( is_active_sidebar( 'footer-col-two' ) ) : ?>
                                <div class="footer-sidebar acme-col-3">
                                    <?php dynamic_sidebar( 'footer-col-two' ); ?>
                                </div>
                            <?php endif;
                           if( is_active_sidebar( 'footer-col-three' ) ) : ?>
                                <div class="footer-sidebar acme-col-3">
                                    <?php dynamic_sidebar( 'footer-col-three' ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div><!-- #foter-top -->
                    <div class="clearfix"></div>
                 </div><!-- top-bottom-->
                <div class="wrapper footer-copyright border text-center">
                    
                    <div class="vl-site-info">
				<strong>© 2016 HeartBeat Nepal. All rights reserved</strong> &nbsp;||
           <strong>Designd By</strong> :<strong> <a href="https://tilakkc.com.np/" target="_blank" rel="nofollow noopener">Rajan Dangi</a></strong>
			</div><!-- .site-info -->
                </div>
            </div><!-- footer-wrapper-->
        </footer><!-- #colophon -->
    <?php
    }
endif;
add_action( 'supermag_action_footer', 'supermag_footer', 10 );

/**
 * Page end
 *
 * @since SuperMag 1.1.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_page_end' ) ) :

    function supermag_page_end() {
        ?>
        </div><!-- #page -->
    <?php
    }
endif;
add_action( 'supermag_action_after', 'supermag_page_end', 10 );