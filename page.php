<?php get_header(); ?>

<!-- content begin -->
<div id="content" class="no-padding">

    <!-- PREMIERE SECTION -->
    <!-- section begin -->
    <!-- suppresion #about-intro et remplacement par balise style background -->
    <section id="" style="background: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php while (have_posts()):the_post() ?>
                    <div class="about-text-intro text-center">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
    <!-- IMAGE + ICONE PLAY + VIDEO OEMBED -->
                    <div class="box-intro-video">
                        <div id="overlay-video" class="overlay-video-intro">
                            <img alt="" src="<?php the_field('icone_play') ?>" class="img-responsive" />
                            <?php $youtube_video_url = get_field('video', false, false);?>
                            <a href="<?php echo $youtube_video_url ?>?autoplay=1" class="btn-intro-video"><i class="fa fa-play"></i></a>
                        </div>
                        <div id="thevideo" style="display:none">
                            <iframe id="someFrame" width="750" height="422" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    

<?php get_footer(); ?>