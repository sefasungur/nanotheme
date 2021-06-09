<?php /* Template Name: İletişim*/?>
<?php get_header();?>
<header class="masthead" style="background-image: url('<?php esc_url(the_post_thumbnail_url('page-header'));?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?php the_title();?></h1>
                    <span class="subheading"><?php the_excerpt();?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p><?php the_content();?></p>
                <hr/>
                <p><span><i class="fas fa-home"></i></span> <?php echo get_theme_mod("contact_address");?></p>
                <p><span><i class="fas fa-phone"></i></span> <?php echo get_theme_mod("contact_phone");?></p>
                <p><span><i class="fas fa-fax"></i></span> <?php echo get_theme_mod("contact_fax");?></p>
                <p><span><i class="fas fa-at"></i></span> <?php echo get_theme_mod("contact_email");?></p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <?php echo do_shortcode('[contact-form-7 id="74" title="İletişim formu 1" html_class="" html_id="contactForm" ]');?>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="map">
    <div id="map" style="width: 100%; height: 500px"></div>
</div>
<?php
    $coord = get_theme_mod("contact_map");
    $coord = explode(",",$coord);?>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat:<?php echo $coord[0];?>, lng: <?php echo $coord[1];?>};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {
                zoom: 15,
                center: uluru,
                });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: 'asdasdasd'
        });
    }
</script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqHEUFH7QhiQJqSZeNOaDUmz2Kcaw91RY&callback=initMap&language=tr"></script>
<?php get_footer();?>
