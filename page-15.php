<?php get_header(); ?>

<!-- content begin -->
<div id="content" class="no-padding">

    <!-- PREMIERE SECTION -->
    <!-- section begin -->
    <section id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php while (have_posts()):the_post() ?>
                    <div class="intro-text text-center">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                    <?php endwhile; ?>


<?php get_footer(); ?>
