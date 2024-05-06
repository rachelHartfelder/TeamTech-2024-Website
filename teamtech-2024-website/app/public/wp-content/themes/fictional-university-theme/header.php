<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
            <a href="<?php echo site_url() ?>"><strong>Team</strong> Tech</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                    <li>
                        <a class="drop" href="#">Our Product ▾</a>
                        <ul class="dropdown">
                            <li><a class="normal" href="/product/how-it-works">How it Works</a></li>
                            <li><a class="normal" href="/product/safety">Safety</a></li>
                        </ul>
                    </li>
                    <li><a class="normal" href="<?php echo site_url('/partner') ?>">Partner with Us</a></li>
                    <li><a class="normal" href="<?php echo site_url('/about/about-us') ?>">About Us</a></li>    
                </ul>
            </nav>
        </div>
        </header>
