<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php wp_head();?>
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <?php
        $logo = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $logo , 'full' );
        $image_url = $image[0];
        $image_width = $image[1];
        $image_height = $image[2]
        ?>

        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo $image_url;?>" width="<?php echo $image_width;?>" height="<?php echo $image_height;?>"/> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <?php
        /*
         * 'menu'                 => '',
    'container'            => 'div',
    'container_class'      => '',
    'container_id'         => '',
    'container_aria_label' => '',
    'menu_class'           => 'menu',
    'menu_id'              => '',
    'echo'                 => true,
    'fallback_cb'          => 'wp_page_menu',
    'before'               => '',
    'after'                => '',
    'link_before'          => '',
    'link_after'           => '',
    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'item_spacing'         => 'preserve',
    'depth'                => 0,
    'walker'               => '',
    'theme_location'       => '',
         */


        ?>
        <?php $args = [
            "container" => "div",
            "container_class" => "collapse navbar-collapse",
            "container_id" => "navbarResponsive",
            "menu_class" => "navbar-nav ms-auto py-4 py-lg-0",


        ];?>
        <?php wp_nav_menu( $args );?>

    </div>
</nav>

