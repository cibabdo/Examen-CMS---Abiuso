<?php get_header(); ?>
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- mettre clé de traduction -->
                    <h1><?php _e('Blog List','wp-theme-base')?></h1>
                    <ul class="breadcrumbs">
                        <!-- mettre clé de traduction -->
                        <!-- mettre lien vers frontpage -->
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home','wp-theme-base')?></a></li>
                        <b>/</b>
                        <!-- mettre clé de traduction -->
                        <li class="active"><?php _e('Blog List','wp-theme-base')?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div id="blog-grid" class="blog-grid">
                    <?php while (have_posts()):the_post() ?>
                    <!-- post begin -->
                    <article class="item col-md-4 col-sm-6">
                        <div class="post-media">
                            <img  alt="<?php the_field('articleImage') ?>" src="<?php the_field('articleImage') ?>" class="img-responsive">
                            <div class="post-date">
                                <span class="date-day"><?php echo get_the_date('j') ?></span>
                                <span class="date-month"><?php echo get_the_date('F') ?></span>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-title">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            </div>
                            <div class="post-metadata">
                                    <span class="byline">
                                        <i class="fa fa-user"></i>
                                        <a href="<?php the_permalink(); ?>"><?php the_author() ?></a>
                                    </span>
                                <span class="cat-links">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="<?php the_permalink(); ?>"><?php the_category('-');?></a>
                                    </span>

                            </div>
                            <div class="post-entry">
                                <!-- mettre résumé de l'article via dashboard 'Read More Tag' -->
                                <p><?php the_excerpt(read); ?></p>

                            </div>
                        </div>
                    </article>
                    <!-- post close -->
                    <?php endwhile; ?>
                </div>
            </div>
                <!-- pagination begin -->
                <div class="pagination-ourter text-center">
                    <ul class="pagination">
                        <li class="prev page-numbers"><?php previous_posts_link('<'); ?></li>
                        <li class="next page-numbers"><?php next_posts_link('>'); ?></li>
                    </ul>
                </div>
                <!-- pagination close -->





            </div>
        </div>
    </div>
    <!-- content close -->

<?php get_footer(); ?>