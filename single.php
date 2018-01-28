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


<?php get_footer(); ?>
