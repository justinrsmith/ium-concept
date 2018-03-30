<? get_header() ?>

<div class="container-fluid">
    <div class="row">
        <? get_sidebar() ?>
        <div class="col">
            <div class="row mt-2">
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
                        <div class="col-md-12 d-lg-none my-3">
                            <div class="row">
                                <div class="col-md-8 col-8">
                                    <input aria-label="Search" type="text" class="form-control" placeholder="Search">
                                </div>
                                <div class="col-4">
                                    <button class="pull-right btn btn-outline-info" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12 d-md-none my-3">
                            <div class="row align-items-center">
                                <div class="col-8 ml-1">
                                    <input aria-label="Search" type="text" class="form-control" placeholder="Search">
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
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
                            <h4>Latest Announcements</h4>
                            <hr>
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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg col-md-12 mt-md-2">
                            <div id="newsletter-card" class="card">
                                <div class="card-body">
                                    <h4 class="card-title">SIGN UP FOR OUR NEWSLETTER</h4>
                                    <h6 class="card-subtitle mb-2">If you would like to receive our newsletter regarding the Illinois Urban Manual please sign up below.</h6>
                                    <form class="mt-4">
                                        <div class="form-row align-items-center">
                                            <div class="col-sm-12 col-lg-9">
                                                <input class="form-control" type="email" placeholder="Please provide a valid email address" aria-label="Search">
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-outline-info my-2" type="submit">Sign Up <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-4 row">
                    <div class="col">
                        <h4>Illinois Urban Manual Contents</h4>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>
