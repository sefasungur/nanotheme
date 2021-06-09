<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <?php if(get_theme_mod("social_facebook") != "") { ?>
                    <li class="list-inline-item">
                        <a href="<?php echo get_theme_mod("social_facebook");?>" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if(get_theme_mod("social_twitter") != "") { ?>
                        <li class="list-inline-item">
                            <a href="<?php echo get_theme_mod("social_twitter");?>" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(get_theme_mod("social_instagram") != "") { ?>
                        <li class="list-inline-item">
                            <a href="<?php echo get_theme_mod("social_instagram");?>" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                    <?php } ?>

                </ul>
                <div class="small text-center text-muted fst-italic"><?php echo get_theme_mod("copyright_text");?></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>

