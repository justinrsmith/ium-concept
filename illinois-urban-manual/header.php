<!DOCTYPE html>
<html>
    <head>
        <title><? bloginfo( 'name' ) ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="header-row" class="row">
            <div class="col">
                <div id="logo" class="container-fluid">
                    <img src="<? echo get_theme_file_uri( 'assets/images/AISWCDLogo.png' ); ?>" alt="">
                </div>
            </div>
            <div class="col d-lg-none">
                <nav id="mobile-nav" class="navbar navbar-expand-lg navbar-light bg-light">
                    <div></div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <? /* Primary navigation */
                    wp_nav_menu( array(
                        'menu' => 'quick_links',
                        'menu_class' => 'nav navbar-nav',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarNavDropdown',
                        'depth' => 2,
                        'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                </nav>
            </div>
            <!-- mobile nav -->
        </div>
