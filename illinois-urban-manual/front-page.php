<? get_header() ?>

<div class="container-fluid">
    <div id="container-row" class="row">
        <? get_sidebar() ?>
        <div class="col">
            <div class="row">
                <div class="px-0 col">
                    <nav class="py-0 py-md-2 navbar navbar-expand-md navbar-light">
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

                            <div class="d-none d-lg-block ml-auto col-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="pull-right btn btn-outline-light" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row mt-2 row row-eq-height">
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col text-center">
                            <h1>Illinois Urban Manual</h1>
                            <p id="text-description" class="lead">Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.</p>
                            <!-- <img height="139" width="137" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt=""> -->
                        </div>
                    </div>

                    <div class="row">
                        <!-- Main content search bar only shows when viewport less than large, easier for mobile/tablets. -->
                        <div class="col-12 d-lg-none my-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="pull-right btn btn-outline-info" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row bottom">
                        <div class="col d-none d-md-block">
                            <div id="carousel-front" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<? echo get_theme_file_uri( 'assets/images/dirt.jpg' ); ?>" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<? echo get_theme_file_uri( 'assets/images/creek.jpg' ); ?>" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="//placehold.it/505x336/cc09f0" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="row">
                        <div class="col">
                            <div id="announcements-card" class="card w-100 rounded-0">
                                <div class="card-body">
                                    <h4 class="card-title">Latest Announcements</h4>
                                    <?
                                        $args = array(
                                            'orderby' => 'date',
                                            'order'   => 'DESC',
                                            'posts_per_page' => '3'
                                        );
                                        $query = new WP_Query($args);
                                        $posts = $query->posts;
                                        foreach($posts as $post) { ?>
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="mb-0"><a href="<? the_permalink(); ?>"><? the_title() ?></a></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <small><strong><? echo get_the_date(); ?></strong></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <small><? echo my_trim_excerpt( $post->post_content, 20 ); ?></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#">Continue reading...</a>
                                                </div>
                                            </div>
                                        <? };
                                    ?>
                                </div>
                            </div>
                            <!-- <h4>Latest Announcements</h4>
                            <hr class="my-1">
                            <?
                                $args = array(
                                    'orderby' => 'date',
                                    'order'   => 'DESC',
                                    'posts_per_page' => '3'
                                );
                                $query = new WP_Query($args);
                                $posts = $query->posts;
                                foreach($posts as $post) { ?>
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="mb-0"><a href="<? the_permalink(); ?>"><? the_title() ?></a></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <small><strong><? echo get_the_date(); ?></strong></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <small><? echo my_trim_excerpt( $post->post_content, 20 ); ?></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#">Continue reading...</a>
                                        </div>
                                    </div>
                                <? };
                            ?>
                            <div class="row">
                                <div class="col">
                                    <a href="#">View More Announcements</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg col-md-12 mt-3">
                            <div id="newsletter-card" class="card rounded-0">
                                <div class="card-body">
                                    <h4 class="card-title">SIGN UP FOR OUR NEWSLETTER</h4>
                                    <h6 class="card-subtitle mb-2">If you would like to receive our newsletter regarding the Illinois Urban Manual please sign up below.</h6>
                                    <div class="col px-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Valid Email" aria-label="Valid Email" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="pull-right btn btn-outline-info" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 mb-4 row">
                    <div class="col">
                        <!-- <h4>Illinois Urban Manual Contents</h4> -->
                        <!-- <hr> -->
                        <div class="row">
                            <div class="col">
                                <div id="manual-card" class="card rounded-0">
                                  <h4 class="card-header">Illinois Urban Manual Contents</h4>
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col-xs-12 col-md-6">
                                              <h5 class="card-title">Sections</h5>
                                              <ol class="manual">
                                                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                                  <li><a href="#">Non-point Source Pollution Control Processes and Planning Principles</a></li>
                                                  <li><a href="#">Planning Procedures
                                                      <ul>
                                                          <li><a href="#">Introduction</a></li>
                                                          <li><a href="#">Planning Process</a></li>
                                                          <li><a href="#">Criteria for BMP Selection</a></li>
                                                      </ul>
                                                  </a></li>
                                                  <li><a href="#">Facilisis in pretium nisl aliquet</a></li>

                                                  <li><a href="#">Nulla volutpat aliquam velit</a></li>
                                                  <li><a href="#">Faucibus porta lacus fringilla vel</a></li>
                                                  <li><a href="#">Aenean sit amet erat nunc</a></li>
                                                  <li><a href="#">Eget porttitor lorem</a></li>
                                              </ol>
                                          </div>
                                          <div class="col-xs-12 col-md-6">
                                              <h5 class="card-title">Appendices</h5>
                                              <ol class="manual">
                                                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                                  <li><a href="#">Consectetur adipiscing elit</a></li>
                                                  <li><a href="#">Integer molestie lorem at massa</a></li>
                                                  <li><a href="#">Facilisis in pretium nisl aliquet</a></li>
                                                  <li><a href="#">Nulla volutpat aliquam velit</a></li>
                                                  <li><a href="#">Faucibus porta lacus fringilla vel</a></li>
                                                  <li><a href="#">Aenean sit amet erat nunc</a></li>
                                                  <li><a href="#">Eget porttitor lorem</a></li>
                                              </ol>
                                          </div>
                                      </div>

                                  </div>
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-md-6">
                                <h5>Sections</h5>
                                <ol class="manual">
                                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                    <li><a href="#">Non-point Source Pollution Control Processes and Planning Principles</a></li>
                                    <li><a href="#">Planning Procedures
                                        <ul>
                                            <li><a href="#">Introduction</a></li>
                                            <li><a href="#">Planning Process</a></li>
                                            <li><a href="#">Criteria for BMP Selection</a></li>
                                        </ul>
                                    </a></li>
                                    <li><a href="#">Facilisis in pretium nisl aliquet</a></li>

                                    <li><a href="#">Nulla volutpat aliquam velit</a></li>
                                    <li><a href="#">Faucibus porta lacus fringilla vel</a></li>
                                    <li><a href="#">Aenean sit amet erat nunc</a></li>
                                    <li><a href="#">Eget porttitor lorem</a></li>
                                </ol>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h5>Appendicies</h5>
                                <ol class="manual">
                                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                    <li><a href="#">Consectetur adipiscing elit</a></li>
                                    <li><a href="#">Integer molestie lorem at massa</a></li>
                                    <li><a href="#">Facilisis in pretium nisl aliquet</a></li>
                                    <li><a href="#">Nulla volutpat aliquam velit</a></li>
                                    <li><a href="#">Faucibus porta lacus fringilla vel</a></li>
                                    <li><a href="#">Aenean sit amet erat nunc</a></li>
                                    <li><a href="#">Eget porttitor lorem</a></li>
                                </ol>
                            </div> -->

                            <!-- <div class="col-xs-12 col-md-6">
                                <h5>Sections</h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 1: Introduction <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 2: Non-point Source Pollution Control Processes and Planning Principles <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 3: Planning Procedures <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 4: Practice Standards</h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 5: Construction Specifications <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 6: Material Specification <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 7: Standard Drawings <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 8: Evaluation <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 9: References <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Section 10: Glossary <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h5 class="mt-3 mt-md-0">Appendices</h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Appendix A: National Pollution Discharge Elimination System (NPDES) <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>                        </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Appendix B: Soil Quality – Urban Technical Notes  <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Appendix C: Methods for Establishing Receiving Water Quality Impacts of Urban and Suburban Development <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Appendix D: NPDES Phase II Stormwater Permit Program for Small Municipal Separate Storm Sewer Systems (MS4s) <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Appendix E: Sample Natural Resource Protection Ordinances <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Appendix F: USDA Programs – Applicable to Urban or Urbanizing Areas <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <h6>Appendix G: Grant Information Summary for Conservation Projects <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
