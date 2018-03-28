<!DOCTYPE html>
<html>
    <head>
        <title><? bloginfo( 'name' ) ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <?php wp_head(); ?>
    </head>
    <body>
            <div class="px-0 col d-none d-md-block">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="<? echo get_theme_file_uri( 'assets/images/AISWCDLogo.png' ); ?>" width="250" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Educational Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input id="navbar-search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                   </form>
                </nav>
            </div>

            <div class="px-0 col d-md-none d-lg-none">
                <nav id="mobile-nav" class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="<? echo get_theme_file_uri( 'assets/images/AISWCDLogo.png' ); ?>" width="200" alt="">
                    </a>
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
