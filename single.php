<?php get_header(); ?>
<!-- PREMIERE SECTION -->
<!-- suppresion #subheader et remplacement par balise style background -->
<section id="" data-speed="8" data-type="background" class="padding-top-bottom subheader" style="background: url(<?php the_post_thumbnail_url(); ?>)" >
    <div class="container">
        <div class="row"  >
            <div class="col-md-12" >
                <h1><?php the_title() ?></h1>
                <ul class="breadcrumbs">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home')?></a></li>
                    <b>/</b>
                    <li class="active"><?php the_title() ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- DEUXIEME SECTION -->
<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-single">
                    <!-- post begin -->
                    <article>
                        <div class="post-media">
                            <img src="<?php the_field('articleImage') ?>" class="img-responsive">
                        </div>
<!-- TROISIEME SECTION -->
                        <?php while (have_posts()):the_post() ?>
                            <div class="post-content">
                                <div class="post-title">
                                    <h1><?php the_title() ?></h1>
                                </div>
                                <div class="post-metadata">
                                            <span class="posted-on">
                                                <i class="fa fa-clock-o"></i>
                                                <?php echo get_the_date(); ?>
                                            </span>
                                    <span class="byline">
                                                <i class="fa fa-user"></i>
                                                <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
                                            </span>
                                    <span class="cat-links">
                                                <i class="fa fa-folder-open"></i>
                                                <a href="<?php the_permalink(); ?>"><?php the_category('-') ?></a>
                                            </span>
                                </div>
                                <div class="hr"></div>
                                <div class="post-entry">
                                    <p><?php the_content() ?></p>
                                <div class="clearfix"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </article>
                    <!-- post close -->
                </div>



<?php get_footer(); ?>
