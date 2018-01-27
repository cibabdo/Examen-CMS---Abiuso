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

<?php get_footer(); ?>