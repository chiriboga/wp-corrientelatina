<?php
/**
 * Template part for the main post of the homepage
 *
 * @link //codex.wordpress.org/Template_Hierarchy
 *
 * @package CorrienteLatina
 */

?>
<!-- first article NO carousel -->
<?php
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
$number = 3;
$arg = array(
	'post_type'=> array('post'),
	'posts_per_page'=> $number,
	'paged'=>$paged ,
	'post__not_in' => array(),
	'order'=>'desc',
	'orderby'=>'date',
	'ignore_sticky_posts' => true
);
?>
<div class="container">
    <div class="row">
    <?php
    $query = new WP_Query( $arg );
    if ( $query->have_posts()) :
        $count = 1;
        while ( $query->have_posts() ) : $query->the_post();
        ?>
	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        <?php
	        echo '
	            <a class="" href="'.get_permalink().'" itemprop="url" title="'.get_the_title().'" style="margin-bottom:5px;">'.get_the_post_thumbnail( $post->ID, 'corrientelatina-800', array( 'class' => 'img-responsive lazy','alt' => get_the_title() ) ).'</a>
	            <a href="'.get_permalink().'"><h3 class="header-link"><span>'.get_the_title().'</span></h3></a>
	            <!--<small style="font-size:11px;font-style:italic" class="clearfix">by: <span itemprop="name">'.get_the_author().'</span></small>--><hr/>
	            ';
	        ?>
	        </div>
    <?php
	$count++;
	endwhile;
	endif;
	wp_reset_postdata();
	?>
	</div>
</div>
