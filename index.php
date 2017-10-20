<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CorrienteLatina
 */

get_header(); ?>
<?php $count = 0;?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="well well-sm sidebar">
                <h2 class="widget-title" style="margin-bottom:5px;">Categories</h2>
                <section class="visible-sm visible-xs widget widget_categories">
                    <?php $args = array(
                        'show_option_none'   => 'Select category',
                        'option_none_value'  => '-1',
                        'include'            => '1319,1703,3079,23,22,21,27,24,1676,19,20,2378,1,1709,1772',
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
                if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>

                    <?php
                    endif;

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

                endif; ?>

                </main><!-- #main -->
            </div><!-- #primary -->
            <!-- end main content -->
        </div>
    </div>
</div>
<?php
get_footer();
?>
