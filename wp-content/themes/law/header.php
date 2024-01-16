<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Md H H Martin" />
        <title><?php bloginfo("name");?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <?php wp_head();?>
    </head>
    <body id="page-top" <?php body_class();?>>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container align-items-center">
                <a href="<?php echo get_site_url(); ?>" class="navbar-brand" style="color: #ff005c">LAW Firm</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'       => 'top_menu',
                            'container'            => 'section',
                            'menu_id'              => 'navbarResponsive',
                            'menu_class'           => 'navbar-nav text-uppercase ms-auto py-4 py-lg-0 primary__menu', //ul class
                            'link_before'          => '',
                            'link_after'           => '',
                            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )
                    )
                    ?>
                </div>


            </div>
        </nav>
