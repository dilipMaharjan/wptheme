<?php //header template      ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel=stylesheet>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body class="page-template-two-column">
        <header class="header">
            <nav class="main-navigation-container">
                <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/glass-eye-logo.png" alt="" class="logo"></a>
                    <?php
                    wp_nav_menu($args = array(
                        'menu_class' => 'main_navigation',
                        'theme_location' => 'primary'
                    ));
                    ?>
            </nav>
        </header>

