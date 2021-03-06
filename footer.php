<!-- footer begin -->
<footer class="footer-1 bg-color-1">

    <!-- main footer begin -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <div class="widget-inner">
                            <!-- METTRE WIDGET -->
                            <h3 class="widget-title"><?php _e('Résumé','wp-theme-base')?></h3>
                            <?php dynamic_sidebar('sidebar2');?>
                            <!-- AJOUT DES LIENS VERS RESEAUX SOCIAUX -->
							<div class="social-icons clearfix">
                                <a href="http://www.facebook.com" class="facebook tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-facebook"></i></a>
                                <a href="http://www.twitter.com" class="twitter tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-twitter"></i></a>
                                <a href="http://www.google.com" class="google tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-google-plus"></i></a>
                                <a href="http://www.youtube.com" class="youtube tipped" data-title="youtube"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-youtube-play"></i></a>
                                <a href="http://www.linkedin.com" class="linkedin tipped" data-title="linkedin" data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <!-- METTRE CLE DE TRADUCTION -->
                        <h3 class="widget-title"><?php _e('Catégorie','wp-theme-base')?></h3>
                        <div class="widget-inner">
                            <?php
                            $args = array(
                                'menu' => 'menu_footer',
                                'container' => 'ul',
                                'menu_class' => 'widget-inner',
                            );
                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <!-- METTRE CLE DE TRADUCTION -->
                        <h3 class="widget-title"><?php _e('contact','wp-theme-base')?></h3>
                        <div class="widget-inner">
                            <!-- METTRE CLE DE TRADUCTION -->
                            <p><?php _e('Address: 379 5th Ave  New York, NYC 10018, United States','wp-theme-base') ?></p>
                            <p><?php _e('Phone: +(112) 345 6879','wp-theme-base')?></p>
                            <p><?php _e('Fax: +(112) 345 8796','wp-theme-base')?></p>
                            <p><?php _e('Email: contact@compact.com','wp-theme-base')?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="compact-widget">
                        <!-- METTRE CLE DE TRADUCTION -->
                        <h3 class="widget-title"><?php _e('Newsletter','wp-theme-base') ?></h3>
                        <div class="widget-inner">
                            <div class="newsletter newsletter-widget">
                                <!-- METTRE CLE DE TRADUCTION -->
                                <p><?php _e('Stay informed about our news and events','wp-theme-base') ?></p>
                                <form action="" method="post">
                                    <p><input class="newsletter-email" type="email" name="email" placeholder="<?php _e('Your email','wp-theme-base') ?>"><i class="fa fa-envelope-o"></i></p>
                                    <p><input class="newsletter-submit" type="submit" value="<?php _e('Subscribe','wp-theme-base') ?>"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- main footer close -->

    <!-- sub footer begin -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- METTRE CLE DE TRADUCTION -->
                    <?php _e('Copyright &copy; 2016 Designed by AuThemes. All rights reserved.','wp-theme-base')?>
                </div>
            </div>
        </div>
    </div>
    <!-- sub footer close -->

</footer>
<!-- footer close -->

</div>

<a id="to-the-top" ><i class="fa fa-angle-up"></i></a>

<!-- LOAD JS FILES -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/easing.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.fitvids.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/wow.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/about.js"></script>

<!-- Waypoints-->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/sticky.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/tipper.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/compact.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom-index1.js"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/revslider-custom.js"></script>

</body>
</html>
