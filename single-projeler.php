<?php get_header();?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php esc_url(the_post_thumbnail_url('page-header'));?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Proje - <?php the_title();?></h1>
                    <span class="subheading"><?php the_excerpt();?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p><?php the_content();?></p>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>
