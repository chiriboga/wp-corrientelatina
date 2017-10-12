<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CorrienteLatina
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<hr/><h4 class="header_text" style="margin-bottom:0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
        <?php
        if ( 'post' === get_post_type() ) :
            $avatar = get_avatar( get_the_author_meta( 'ID' ), 20, null, null, array('class' => array('img-circle') ) );
            $author_url = get_the_author_posts_link();
        ?>
        <div class="entry-meta">
			<?php echo '<small style="font-size:11px;font-style:italic" class="clearfix" itemprop="author">by: '.$avatar.' <span itemprop="name">'.$author_url.'</span></small>'; ?>
		</div><!-- .entry-meta -->
		<?php
			$categories = get_the_category();
			$separator = ' ';
			$output = '';
			if ( ! empty( $categories ) ) {
				foreach( $categories as $category ) {
					$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'corrientelatina' ), $category->name ) ) . '"><span class="label label-'.$category->cat_ID.'">' . esc_html( $category->name ) . '</span></a>' . $separator;
				}
				echo trim( $output, $separator );
			}
			?>
	      	<div class="clearfix"></div>
            <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php
        echo '<a class="" style="margin-bottom:5px;" href="'.get_permalink().'" itemprop="url" title="'.get_the_title().'">'.get_the_post_thumbnail( $post_id,'corrientelatina-1000', array( 'class' => 'img-responsive lazy','alt' => get_the_title() ) ).'</a>';
            // BEGIN adding newsletter sign up to list
            $k = ( $paged > 1 ) ? $wp_query->post_count * ( $paged - 1 ) + $wp_query->current_post : $wp_query->current_post;
            do_action( 'inject_ads', $k );
        //the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
