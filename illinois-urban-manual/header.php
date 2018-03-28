<!DOCTYPE html>
<html lang="en">
    <head>
        <title><? bloginfo( 'name' ) ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <?php wp_head(); ?>
    </head>
    <body>
        <div class="px-0 col">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="<? echo get_theme_file_uri( 'assets/images/AISWCDLogo.png' ); ?>" width="250" alt="AISWCD Organization Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Educational Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- If user gets to small/extra small view quick links side menu goes away so we move into a dropdown in the mobile menu. -->
                            <div class="d-md-none d-lg-none">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Quick Links
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?
                                        $quick_links = wp_get_nav_menu_items('quick links');
                                        foreach($quick_links as $menu_item){
                                            echo '<a class="dropdown-item" href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
                                        }
                                    ?>
                                    <a class="dropdown-item" href="#">Action</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- In medium or lower view size we move the search into the main content and out of the navbar. -->
                    <div class="d-none d-lg-block">
                        <form class="form-inline">
                            <input id="header-search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>

                </div>
            </nav>
        </div>
