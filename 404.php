<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CorrienteLatina
 */

get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="well well-sm sidebar">
                <?php
                get_sidebar();
                ?>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- main content -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'corrientelatina' ); ?></p>
                
                
                </main><!-- #main -->
            </div><!-- #primary -->
            <!-- end main content -->
        </div>
    </div>
</div>
<?php
get_footer();