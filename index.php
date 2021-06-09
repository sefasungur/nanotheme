<?php get_header();?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php esc_url(the_post_thumbnail_url('page-header'));?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?php echo single_post_title();?></h1>
                    <span class="subheading"><?php echo get_the_excerpt();?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-preview">
                <a href="<?php echo the_permalink();?>">
                    <h2 class="post-title"><?php echo the_title();?></h2>
                    <h3 class="post-subtitle"><?php echo the_excerpt();?></h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on <?php echo the_date();?>
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <?php endwhile; ?>
                <?php previous_posts_link( '<span class="btn btn-primary text-uppercase">&laquo; Önceki Yazılar</span>');?>
                <?php next_posts_link( '<span class="btn btn-primary text-uppercase">Sonraki Yazılar &raquo;</span>');?>
            <p>&nbsp;</p>
            <?php else : ?>
                <h2 class="sayfa-bulunamadi"><?php _e( 'Üzgünüm, aradığınızı bulamadık.', 'nanomedya' ); ?></h2>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();?>
