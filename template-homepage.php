<?php
/**
 * Template Name: Homepage
 *
 */
 get_header();?>
<?php get_template_part( 'template-parts/content', 'homepage-main' ); ?>
<!--
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            Could be an ad!
        </div>
    </div>
</div>
-->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
            <div class="well well-sm">
            <?php
            get_sidebar('homepage');
            ?>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <?php get_template_part( 'template-parts/content', 'homepage-loop' ); ?>
            <a href="<?php echo site_url(); ?>/articles/" class="btn btn-lg btn-info btn-block mb20 mt20">View All Articles</a>
        </div>
    </div>
</div>
<?php
get_footer();
?>
