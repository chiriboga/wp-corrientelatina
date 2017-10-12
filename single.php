<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CorrienteLatina
 */

get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php
            $related = ci_get_related_posts( get_the_ID(), 1 );
            if ( $related->have_posts() ):
                ?>
                <div class="well well-sm hidden-xs">
                    <p><em><strong>You</strong> may also like</em></p>
                    <?php while ( $related->have_posts() ): $related->the_post(); ?>
                        <?php echo '<a class="" style="margin-bottom:5px;" href="'.get_permalink().'" itemprop="url" title="'.get_the_title().'">'.get_the_post_thumbnail( $post_id,array( 1000, 500), array( 'class' => 'img-responsive lazy','alt' => get_the_title() ) ).'</a>'; ?>
                        <?php the_title( '<p style="margin-bottom:0;"><a style="text-transform:capitalize;" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' ); ?>
                    <?php endwhile; ?>
                </div>
                <?php
            endif;
            wp_reset_postdata();
            ?>
            <div class="well well-sm sidebar">
                <h2 class="widget-title" style="margin-bottom:5px;">Categories</h2>
                <section class="visible-sm visible-xs visible-md widget widget_categories">
                    <?php $args = array(
                        'show_option_none'   => 'Select category',
                        'option_none_value'  => '-1',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'show_count'         => 0,
                        'class'              => 'form-control',
                        'depth'              => 1,
                        'taxonomy'           => 'category',
                        'hide_if_empty'      => true,
                        'value_field'	     => 'term_id',
                    ); ?>
                    <?php wp_dropdown_categories( $args ); ?>
                    <script type="text/javascript">
                        <!--
                        var dropdown = document.getElementById("cat");
                        function onCatChange() {
                            if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                                location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
                            }
                        }
                        dropdown.onchange = onCatChange;
                        -->
                    </script>
                </section>
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- main content -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                <?php
                    // PULL AD FROM PROFILE AND SHOW IF THERE'S SOMETHING THERE
                    if(get_the_author_meta('ad_code', $author->ID))
                    {
                        echo get_the_author_meta('ad_code', $author->ID);
                        echo '<hr/>';
                    }
                ?>
                <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', get_post_format() );
                    endwhile; // End of the loop.
                ?>
                <?php
                    // PULL AD FROM PROFILE AND SHOW IF THERE'S SOMETHING THERE
                    if(get_the_author_meta('ad_code', $author->ID))
                    {
                        echo get_the_author_meta('ad_code', $author->ID);
                        echo '<hr/>';
                    }
                ?>
                <?php
                    while ( have_posts() ) : the_post();
                        //the_post_navigation();
                         //If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    endwhile; // End of the loop.
                ?>
                </main><!-- #main -->
            </div><!-- #primary -->
            <!-- end main content -->
        </div>
    </div>
</div>
<?php
get_footer();
?>
