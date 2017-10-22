<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CorrienteLatina
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="header_text">', '</h1>' );
		else :
			the_title( '<hr/><h4 class="header_text" style="margin-bottom:0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;
		if ( 'post' === get_post_type() ) :
            $avatar = get_avatar( get_the_author_meta( 'ID' ), 20, null, null, array('class' => array('img-circle') ) );
            $author_url = get_the_author_posts_link();
        ?>
		<div class="entry-meta">
			<?php echo '<small style="font-size:11px;font-style:italic" class="clearfix" itemprop="author"><strong>by:</strong> '.$avatar.' <span itemprop="name">'.$author_url.'</span> | <strong>on:</strong> '.the_date('F j, Y, g:i a','','',false).'</small>'; ?>
		</div><!-- .entry-meta -->
		<div class="clearfix clear mb5"></div>
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
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
        if ( is_single() ) :
            /*
            the_excerpt();
            */
            the_content( sprintf(
                    #translators: %s: Name of current post.
                    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'corrientelatina' ), array( 'span' => array( 'class' => array() ) ) ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', true )
                ) );
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'corrientelatina' ),
                'after'  => '</div>',
            ) );
        else :
            echo '<a class="" style="margin-bottom:5px;" href="'.get_permalink().'" itemprop="url" title="'.get_the_title().'">'.get_the_post_thumbnail( $post_id,array( 1000, 500), array( 'class' => 'img-responsive lazy','alt' => get_the_title() ) ).'</a>';
            // BEGIN adding newsletter sign up to list
            $k = ( $paged > 1 ) ? $wp_query->post_count * ( $paged - 1 ) + $wp_query->current_post : $wp_query->current_post;
            do_action( 'inject_ads', $k );
            // END adding newsletter sign up to LIST
        endif;
		?>
	</div><!-- .entry-content -->

    <?php
    if ( is_single() ) :
    ?>
    <hr/>
<!--
    <footer class="entry-footer">
		<small style="font-size:11px;font-style:italic" class="clearfix"><?php corrientelatina_entry_footer(); ?></small>
	</footer>
-->
   <!-- .entry-footer -->
    <?php
		else :

		endif;
    ?>
</article><!-- #post-## -->
