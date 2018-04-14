<!DOCTYPE html>
<html lang="en">
    <head>
        <title><? bloginfo( 'name' ) ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container-fluid">
            <div id="container-row" class="row">
                <? get_sidebar() ?>
                <div class="col">
                    <div class="row">
                        <div class="px-0 col">
                            <nav class="py-0 py-md-2 navbar navbar-expand-md navbar-dark">
                                <a class="py-0 d-block d-md-none navbar-brand" href="#">
                                    <img height="80" width="78" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
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
                                    <div class="d-none d-lg-block ml-auto col-5 pr-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" aria-label="Search term" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="pull-right btn btn-outline-light" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
