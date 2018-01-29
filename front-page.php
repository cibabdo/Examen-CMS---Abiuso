<?php get_header(); ?>
    <!-- Modal Search begin -->
    <div id="myModal" class="modal fade" role="dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form role="search" method="get" class="search-form" action="">
                        <input type="search" class="search-field" placeholder="Search here..." value="" title="" />
                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search close -->

    <!-- SLIDER -->
<?php

$images = get_field('slides');

if( $images ): ?>

    <!-- slider -->
    <div id="slider">
    <!-- revolution slider begin -->
    <div class="fullwidthbanner-container">
    <div id="revolution-slider">
    <ul>
        <?php foreach( $images as $image ): ?>
            <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                <!--  BACKGROUND IMAGE -->
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

    </div>
    </div>
    <!-- revolution slider close -->
    </div>
    <!-- slider close -->

    <div class="clearfix"></div>

    <!-- content begin -->
    <div id="content" class="no-padding">

        <!-- PREMIERE SECTION -->
        <section id="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <?php

                        $image = get_field('homesect1_image');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>

                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="about-box">
                            <h2 class="box-title"><?php the_field('homesect1_titre'); ?></h2>
                            <div class="tiny-border"></div>
                            <?php the_field('homesect1_wys'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- DEUXIEME SECTION -->
        <section id="section-project" class="no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest-projects clearfix">
                            <div class="latest-projects-intro">
                                <!-- METTRE CLE DE TRADUCTION -->
                                <h2 class="box-title"><?php _e('Derniers articles','wp-theme-base')?></h2>
                                <div class="tiny-border-light"></div>
                                <!-- METTRE CLE DE TRADUCTION -->
                                <p><?php _e( 'Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non pretium turpis','wp-theme-base') ?></p>
                            </div>
                            <div class="latest-projects-wrapper">
                                <div id="latest-projects-items" class="latest-projects-items">
                                    <?php
                                    $args = array(
                                        'orderby' => 'post_date',
                                        'order'   => 'ASC',
                                    );
                                    $recentPosts = new WP_Query($args);
                                    $recentPosts->query('showposts=6');
                                    ?>
                                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                                    <div class="item">
                                        <img src="<?php the_field('articleImage') ?>" alt="<?php the_field('articleImage') ?>" class="img-responsive">
                                        <div class="project-details">
                                            <p class="folio-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></p>
                                            <p class="folio-cate"><i class="fa fa-tag"></i><a href="<?php the_permalink(); ?>"><?php the_category('/'); ?></a></p>
                                            <div class="folio-buttons">
                                                <a href="<?php the_field('articleImage') ?>" title="<?php the_title(); ?>" class="folio"><i class="fa fa-search"></i></a>
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <!-- A utiliser quand plusieurs boucles présente sur la page -->
                                    <!-- Remet à zero le compteur -->
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- TROISIEME SECTION -->
        <section>
            <!-- Container Begin -->
            <div class="container">

                <div class="row">
                    <?php while (have_rows('homesection3_repetaer')):the_row();
                        $icone = get_sub_field('homesection3_icone');
                        $titre = get_sub_field('homesection3_titre');
                        $wysy = get_sub_field('homesection3_wys');
                    ?>
                    <div class="col-md-4">
                        <div class="service-box service-style2">
                            <img src="<?php echo $icone; ?>" alt="<?php echo $icone; ?>" class="img-responsive">
                            <div class="service-content">
                                <h3><?php echo $titre; ?></h3>
                                <p><?php echo $wysy; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <!-- Container End -->
        </section>
        <!-- section close -->

    </div>
    <!-- content close -->


<?php get_footer(); ?>