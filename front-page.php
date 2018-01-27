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


<?php get_footer(); ?>