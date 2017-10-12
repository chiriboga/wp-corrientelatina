<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CorrienteLatina
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- top ribbon -->
<div class="top-ribbon clearfix">
	<div class="container-fluid">
		<div class="row">
	    	<div class="col-lg-9 col-md-9 col-sm-7 col-xs-12 hidden-xs">
	    	    <div class="social-box">
                    <ul class="list-inline social-icons">
                        <li class="text-center"><a href="https://facebook.com/corrientelatina" target="_blank"><i class="fa fa-facebook"></i><span class="hidden-sm">Facebook</span></a></li>
                        <li class="text-center"><a href="https://twitter.com/corrientelatina" target="_blank"><i class="fa fa-twitter"></i><span class="hidden-sm">Twitter</span></a></li>
                        <li class="text-center"><a href="https://youtube.com/corrientelatina" target="_blank"><i class="fa fa-youtube"></i><span class="hidden-sm">Youtube</span></a></li>
                        <li class="text-center"><a href="https://open.spotify.com/user/corrientelatina" target="_blank"><i class="fa fa-spotify"></i><span class="hidden-sm">Spotify</span></a></li>
                        <li class="text-center"><a href="https://www.snapchat.com/add/corrientelatina" target="_blank"><i class="fa fa-snapchat-ghost"></i><span class="hidden-sm">snapchat</span></a></li>
                        <li class="text-center"><a href="https://instagram.com/corrientelatina" target="_blank"><i class="fa fa-instagram"></i><span class="hidden-sm">Instagram</span></a></li>
                    </ul>
                </div>
	    	</div>
	    	<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 nav-search">
	    		<form class="navbar-form navbar-right col-sm-12" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<div class="input-group">
	                	<input type="text" id="s" name="s" placeholder="Search" class="form-control col-sm-12" value="">
						<div class="input-group-btn">
							<input type="submit" id="searchsubmit" value="Go" class="btn btn-cl">
						</div>
					</div>
				</form>
	    	</div>
	    </div>
	</div>
</div>
<!-- end top ribbon -->

<!-- logo -->
<div class="container hidden-xs">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
			<!-- <h1 style="font-size: 4em;text-transform: uppercase;">Corriente <span style="font-weight:bold;color: #0088cc;">Latina</span></h1> -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="display: inline-block;"><img src="https://corrientelatina.com/wp-content/uploads/2015/04/corrientelatina-brand-circle.png" alt="corrientelatina.com" class="img-responsive logo" style="max-height:100px;" /></a>
		</div>
	</div>
</div>
<!-- end logo -->

<!-- section nav -->
<div class="section-nav text-center">
	<nav class="navbar navbar-centered navbar-default">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand visible-xs" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://pbs.twimg.com/profile_images/578748075923120128/GAaFb72p_400x400.jpeg" alt="corrientelatina.com" class="img-responsive pull-left" style="max-height:30px;margin-top:-5px;margin-right: 5px;"> <span style="">Corriente <span>Latina</span></span></a>
	    </div>
	    <div id="navbar" class="navbar-collapse collapse">
	     	<?php wp_nav_menu(
	     		array(
	     		'theme_location' 	=> 'menu-1',
	     		'container' 		=> false,
	     		'menu_id' 			=> 'primary-menu',
	     		'menu_class' 		=> 'nav navbar-nav'
	     		)
	     	); ?>
	    </div><!--/.nav-collapse -->
	  </div>
	</nav>
</div>
<!-- end seciton nav -->
