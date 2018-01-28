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

    <!-- DEUXIEME SECTION -->
    <!-- section begin -->
    <section id="section-about" class="margin-top-80">
        <div class="container">
            <div class="row">
                <?php while ( have_rows('propossect2_repetear') ) : the_row(); ?>
                <div class="col-md-4">
                    <h5><?php the_sub_field('propossect2_titre'); ?></h5>
                    <p><?php the_sub_field('propossect2_txt');?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- TROISIEME SECTION -->
    <!-- section begin -->
    <section id="section-team" class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2><?php the_field('propossect3_titre') ?></h2>
                        <div class="tiny-border"></div>
                    </div>
                </div>
                <?php while (have_rows('propossect3_repetear')):the_row(); ?>
                <div class="col-md-3">
                    <div class="team-box">
                        <div class="team-inner">
                            <img src="<?php the_sub_field('image_propos_section3') ?>" alt="" class="img-circle">
                            <div class="mask"></div>
                        </div>
                        <h6><?php the_sub_field('texte_propos_section3') ?></h6>
                        <div class="subtext"><?php the_sub_field('fonction_propos_section3') ?></div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </section>
    <!-- section close -->

</div>
<!-- content close -->

<?php get_footer(); ?>