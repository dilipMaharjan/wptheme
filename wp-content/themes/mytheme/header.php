  <?php //header template      ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <?php wp_head(); ?>
    </head>

    <body class="page-template-two-column">
        <header class="header">
            <nav class="main-navigation-container">
                <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/glass-eye-logo.png" alt="" class="logo"></a>
                    <?php
                    wp_nav_menu($args = array(
                        'menu_class' => 'main-navigation',
                        'theme_location' => 'primary'
                    ));
                    ?>
            </nav>
        </header>

 