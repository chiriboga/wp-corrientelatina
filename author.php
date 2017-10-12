<?php
/**
 * The template for displaying archive pages
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
            <h2 class="widget-title" style="margin-bottom:5px;">Our Writers</h2>
            <aside id="nav_menu-2" class="widget widget_nav_menu">
              <div class="menu-categories-container">
                <ul class="menu">
                <?php wp_list_authors( array(
                    'show_fullname' => 0,
                    'optioncount'   => 0,
                    'orderby'       => 'user_registered',
                    'order'         => 'ASC',
                    'include'       => array(2,4,33,10,20,22,3)
                ) ); ?>
              </ul>
              </div>
            </aside>
          </div>
      </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <!-- main content -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                  <?php
                   $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                   ?>
                    <?php
                    if ( have_posts() ) : ?>

                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <?php
                          $avatar = get_avatar($curauth->user_email, 500, null, null, array('class' => array('img-rounded img-responsive') ) );
                          echo $avatar;
                          ?>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          <h1 class="page-title" style="margin-top:0;"><?php echo str_replace("Author: ", "", get_the_archive_title() ); ?></h1>
                          <?php
                              the_archive_description( '<div class="archive-description">', '</div>' );
                          ?>
                        </div>
                      </div>
                      <hr/>

                        <?php
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
<!--

<?php if (have_posts()) : ?>
<?php $count = 0; ?>
<?php while (have_posts()) : the_post(); ?>
<?php $count++; ?>
  <?php if ($count == 2) : ?>
          //Paste your ad code here
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
   <?php else : ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
  <?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
-->
