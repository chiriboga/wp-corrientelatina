<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CorrienteLatina
 */

?>
<div class="footer-top">
    <div class="container-fluid">
        <ul class="list-inline social-icons text-center">
            <li class="text-center"><a href="https://facebook.com/corrientelatina" target="_blank"><i class="fa fa-facebook"></i><span class="hidden-xs hidden-sm">Facebook</span></a></li>
            <li class="text-center"><a href="https://twitter.com/corrientelatina" target="_blank"><i class="fa fa-twitter"></i><span class="hidden-xs hidden-sm">Twitter</span></a></li>
            <li class="text-center"><a href="https://youtube.com/corrientelatina" target="_blank"><i class="fa fa-youtube"></i><span class="hidden-xs hidden-sm">Youtube</span></a></li>
            <li class="text-center"><a href="https://open.spotify.com/user/corrientelatina" target="_blank"><i class="fa fa-spotify"></i><span class="hidden-xs hidden-sm">Spotify</span></a></li>
            <li class="text-center"><a href="https://www.snapchat.com/add/corrientelatina" target="_blank"><i class="fa fa-snapchat-ghost"></i><span class="hidden-xs hidden-sm">snapchat</span></a></li>
            <li class="text-center"><a href="https://instagram.com/corrientelatina" target="_blank"><i class="fa fa-instagram"></i><span class="hidden-xs hidden-sm">Instagram</span></a></li>
        </ul>

    </div>
</div>
<footer>
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                	<div id="footer-sidebar1">
                    <?php
    	                if(is_active_sidebar('footer-sidebar-1')){
        	    	        dynamic_sidebar('footer-sidebar-1');
            	        }
                    	?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                	<div id="footer-sidebar2">
						<?php
    	                if(is_active_sidebar('footer-sidebar-2')){
        	    	        dynamic_sidebar('footer-sidebar-2');
            	        }
                    	?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                	<div id="footer-sidebar3">
						<?php
    	                if(is_active_sidebar('footer-sidebar-3')){
        	    	        dynamic_sidebar('footer-sidebar-3');
            	        }
                    	?>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <?php
                $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'Bottom_Ribbon',
                    'container'       => 'div',
                    'container_class' => 'footer_links text-center',
                    'container_id'    => '',
                    'menu_class'      => 'list-inline',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );
                wp_nav_menu( $defaults );
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<span class="totop" style="display: none;"><a href="#"><i class="fa fa-angle-up"></i></a></span>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');
fbq('init', '564532503649864');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="//www.facebook.com/tr?id=564532503649864&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>
