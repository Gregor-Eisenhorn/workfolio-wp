<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('<', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/png">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>


<body id="body">



    <header>

        <nav data-is="navAnimate">
            <div class='nav-container'>
                <div class="logo">
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/images/favicon.png" alt=""></a>
                </div>
                <div class="anchors" data-is="smoothScroll">
                    <a href="<?= get_home_url() ?>" data-scroll>Workfolio</a>

                </div>
            </div>
        </nav>

    </header>



    <main>



        <div class='about-container'>
            <div class="gallery" data-is="gallery">
                <input type="file" id="input" multiple>

            </div>
        </div>





        <?php get_footer(); ?>