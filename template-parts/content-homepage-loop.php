<?php
/**
 * Template part for the main post of the homepage
 *
 * @link //codex.wordpress.org/Template_Hierarchy
 *
 * @package CorrienteLatina
 */
?>
<?php
/*
<div itemscope itemtype="//schema.org/NewsArticle">
  <meta itemscope itemprop="mainEntityOfPage"  itemType="//schema.org/WebPage" itemid="//google.com/article"/>
  <h2 itemprop="headline">Article headline</h2>
  <h3 itemprop="author" itemscope itemtype="//schema.org/Person">
    By <span itemprop="name">John Doe</span>
  </h3>
  <span itemprop="description">A most wonderful article</span>
  <div itemprop="image" itemscope itemtype="//schema.org/ImageObject">
    <img src="//google.com/thumbnail1.jpg"/>
    <meta itemprop="url" content="//google.com/thumbnail1.jpg">
    <meta itemprop="width" content="800">
    <meta itemprop="height" content="800">
  </div>
  <div itemprop="publisher" itemscope itemtype="//schema.org/Organization">
    <div itemprop="logo" itemscope itemtype="//schema.org/ImageObject">
      <img src="//google.com/logo.jpg"/>
      <meta itemprop="url" content="//google.com/logo.jpg">
      <meta itemprop="width" content="600">
      <meta itemprop="height" content="60">
    </div>
    <meta itemprop="name" content="Google">
  </div>
  <meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00"/>
  <meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00"/>
</div>*/
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
$number = 10;
$arg = array(
    'post_type'=> array('post'),
    'posts_per_page'=> $number,
    'paged'=>$paged ,
    'post__not_in' => array(),
    'order'=>'desc',
    'orderby'=>'date',
    'ignore_sticky_posts' => false,
    'offset' => 3
);
$query = new WP_Query( $arg );
if ( $query->have_posts()) :
    $count = 1;
    while ( $query->have_posts() ) : $query->the_post();

    if($count%4==0)
    {
        echo '<div class="clearfix"></div>';
    }
    else{
        $avatar = get_avatar( get_the_author_meta( 'ID' ), 20, null, null, array('class' => array('img-rounded') ) );
        $author_url = get_the_author_posts_link();
        echo '
            <div itemscope itemtype="//schema.org/NewsArticle">';
			echo '
            <div class="clearfix"></div>
            <a href="'.get_permalink().'"><h4 class="header_text" style="margin-bottom:0px;" itemprop="headline">'.get_the_title().'</h4></a>
            <small style="font-size:11px;font-style:italic" class="clearfix" itemprop="author">by: '.$avatar.' <span itemprop="name">'.$author_url.'</span></small>
            <div class="clearfix clear mb5"></div>';
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'corrientelatina' ), $category->name ) ) . '"><span class="label label-'.$category->cat_ID.'">' . esc_html( $category->name ) . '</span></a>' . $separator;
                }
                echo trim( $output, $separator );
            }
            echo '
            <div class="clearfix mt20"></div>
			<meta itemscope itemprop="mainEntityOfPage" itemType="//schema.org/WebPage" itemid="'.get_permalink().'"/>
			<div itemprop="image" itemscope itemtype="//schema.org/ImageObject">';
			echo '<a class="" style="margin-bottom:5px;" href="'.get_permalink().'" itemprop="url" title="'.get_the_title().'">'.get_the_post_thumbnail( $post_id,'corrientelatina-1000', array( 'class' => 'img-responsive lazy','alt' => get_the_title() ) ).'</a>';
			$post_thumb_url = get_the_post_thumbnail_url(); //array( 1000, 500)
			echo '
				    <meta itemprop="url" content="'.$post_thumb_url.'">
				    <meta itemprop="width" content="480">
				    <meta itemprop="height" content="250">
			</div>';
			echo '
			<div itemprop="publisher" itemscope itemtype="//schema.org/Organization">
			<div itemprop="logo" itemscope itemtype="//schema.org/ImageObject">
			 <!-- <img src="//corrientelatina.com/wp-content/themes/corrientelatina/img/favicon-57.png"/>-->
			  <meta itemprop="url" content="//corrientelatina.com/wp-content/themes/corrientelatina/img/favicon-57.png">
			  <meta itemprop="width" content="57">
			  <meta itemprop="height" content="57">
			</div>
			<meta itemprop="name" content="CorrienteLatina.com">
		  </div>';


        echo '
			<meta itemprop="datePublished" content="'.get_the_date('c').'"/>
			<meta itemprop="dateModified" content="'.get_the_modified_date('c').'"/>
        </div><hr/>';
    }
    ?>
    <?php
    $count++;
    endwhile;
	endif;
?>
