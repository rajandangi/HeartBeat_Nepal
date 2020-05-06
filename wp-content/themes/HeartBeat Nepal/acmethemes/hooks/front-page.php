<?php
/**
 * Front page hook for all WordPress Conditions
 *
 * @since SuperMag 1.1.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_front_page' ) ) :

    function supermag_front_page() {
        $supermag_customizer_all_values = supermag_get_theme_options();
        ?>
    <div id="ads">
        <?php dynamic_sidebar('Top Front Ads'); ?>
    </div>  
<?php $args = array('showposts' => 3, 'cat' => '59'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post(); ?>
<div class="col-12 banner text-center display-3 clearfix">
    <div class="d-flex">
        <h1 class="pb-3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
        <figure>
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('full');?>
            </a>
        </figure>
    </div>
    <hr style="border-bottom:1px solid #ddd;"> 
</div>
    <?php endwhile; wp_reset_postdata();?>
<div id="ads">
        <?php dynamic_sidebar('Below Front Ads'); ?>
    </div>
 <style>
    .text-center {
    text-align: center!important;
}
#ads img{
              width:100%;
|}
.banner h1 {
    font-size: 70px;
    font-weight: bold!important;
    text-align: center;
    padding: 30px;
    color :#003d5a!important;
    line-height: 1em;
}
.banner h1 :hover{
    color :#fe4339!important;
}   
.pb-3 a{
    font-weight: bold!important;
    text-align: center;
    line-height :1em;
    font-size: 55px!important;
}  
.pb-3 {
    padding-bottom: 1em!important;
    font-size: 55px;
    color :#3f69ae!important;
}
.pt-0 {
    padding-top: 0!important;
}
.d-flex img{
     width: 100%;
    height: 500px!important;
    margin-top :-45px!important;
}


@media (max-width:767px){
    .d-flex img{
     width: 100%!important;
     height: auto!important;
}   
    .lead {
        display :none;
    }
.pb-3 a{
    font-weight: bold!important;
    text-align: center;
    font-size: 24px!important;
}         
    .banner h1 {
    font-size: 24px;
    font-weight: bold!important;
    text-align: center;
    color :#003d5a!important;
}
</style>
        <div id="primary" class="content-area">
            
            <main id="main" class="site-main" role="main">
                <?php
                if( is_active_sidebar( 'supermag-home' ) ){
                    dynamic_sidebar( 'supermag-home' );
                }
                echo "<div class='clearfix'></div>";
                if ( 1 != $supermag_customizer_all_values['supermag-hide-front-page-content'] ) {

                    if ( 'posts' == get_option( 'show_on_front' ) ) {
                        if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                            the_posts_navigation();
                            else :
                                get_template_part( 'template-parts/content', 'none' );
                            endif;
                    }
                    else {
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        endwhile; // End of the loop.
                    }
                }
                ?>
            </main>
            <!-- #main -->
        </div><!-- #primary -->
        <?php
    }
endif;
add_action( 'supermag_action_front_page', 'supermag_front_page', 10 );