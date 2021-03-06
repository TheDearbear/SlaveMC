<!DOCTYPE html>
<html class="background">
    <head>
        <script>if (window.location == "<?php echo esc_url(site_url('/'))?>") window.location = "<?php echo esc_url(site_url('/?p=1'))?>"</script>
        <meta charset="utf-8">
        <title>News</title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/logo-btn-box.png" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

        <?php if (!is_user_logged_in()) echo '<script src="' . get_template_directory_uri() . '/static/js/login.js" async="" defer=""></script>
';?>        <script src="<?php echo get_template_directory_uri();?>/static/js/base.js" async="" defer=""></script>
        <?php wp_head();?>
    </head>
    <body>
        <?php wp_body_open();?>
        <?php get_header();?>
        <div class="content" style="padding-top: 7%;">
            <?php 
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        get_template_part('content', get_post_format());
                    endwhile;
                endif;
            ?>
        </div>
        <?php get_footer();?>
    </body>
</html>
