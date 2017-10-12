<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CorrienteLatina
 */

get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="well well-sm sidebar">
              <div class="visible-sm visible-xs visible-md widget widget_categories">
                <h2 class="widget-title" style="margin-bottom:5px;">Pages</h2>
                <?php
                  $args = array(
                    'depth'                 => 0,
                    'child_of'              => 0,
                    'selected'              => 0,
                    'echo'                  => 1,
                    'name'                  => 'cat',
                    'id'                    => null, // string
                    'class'                 => 'form-control', // string
                    'show_option_none'      => null, // string
                    'show_option_no_change' => null, // string
                    'option_none_value'     => null, // string
                  );
                  wp_dropdown_pages( $args );
                 ?>
                 <script type="text/javascript">
                     var dropdown = document.getElementById("cat");
                     function onCatChange() {
                         if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                             location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
                         }
                     }
                     dropdown.onchange = onCatChange;
                 </script>
               </div>
               <div class="visible-lg widget widget_categories">
                <?php
                dynamic_sidebar('page-sidebar');
                ?>
              </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- main content -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                <?php
              	while ( have_posts() ) : the_post();

              		get_template_part( 'template-parts/content', 'page' );

              		// If comments are open or we have at least one comment, load up the comment template.
              		// if ( comments_open() || get_comments_number() ) :
              		// 	comments_template();
              		// endif;

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
