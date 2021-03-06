<? get_header() ?>
<div class="row mt-2">
    <div class="col-md-6 col-xs-12">
        <div class="row">
            <div class="col text-center">
                <h1>Illinois Urban Manual</h1>
                <p id="text-description" class="lead">
                    Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.
                </p>
            </div>
        </div>
        <div class="row">
            <!-- Main content search bar only shows when viewport less than large, easier for mobile/tablets. -->
            <div class="col-12 d-lg-none my-3">
                <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search term" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="pull-right btn btn-outline-info" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div> -->
                <div id="ium-search-container-mobile" class="ml-auto col px-0">
                    <ium-search></ium-search>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-none d-md-block">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
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
        <div class="row">
            <div class="d-none d-md-block col-lg col-md-12 mt-3">
                <div class="newsletter-card card rounded-0">
                    <div class="card-body">
                        <h4 class="card-title">SIGN UP FOR OUR NEWSLETTER <i class="far fa-newspaper" aria-hidden="true"></i></h4>
                        <h6 class="card-subtitle mb-2">If you would like to receive our newsletter regarding the Illinois Urban Manual please sign up below.</h6>
                        <div class="col px-0">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Valid Email">
                                <div class="input-group-append">
                                    <button class="pull-right btn btn-outline-info" type="submit">Sign Up <i class="fa fa-paper-plane-o" aria-hidden="true"></i></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        <div class="row h-100">
            <div class="col">
                <div id="announcements-card" class="card w-100 h-100 rounded-0">
                    <div class="card-body">
                        <h4 class="card-title">LATEST ANNOUNCEMENTS</h4>
                        <hr class="mt-0">
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
                                        <h4 class="mb-0 announcement-title-home"><? the_title() ?></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-muted mb-0"><? echo get_the_date(); ?></p>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col">
                                        <p class="mb-0"><? echo my_trim_excerpt( $post->post_content, 50 ); ?></p>
                                    </div>
                                </div>
                                <div class="row mt-1 mb-2">
                                    <div class="col">
                                        <a href="<? the_permalink(); ?>">Continue Reading Announcement</a>
                                    </div>
                                </div>
                            <? };
                        ?>
                        <div class="row">
                            <div class="col text-right">
                                <a href="<? echo get_permalink( get_page_by_title( 'announcements' ) ); ?>">View All News <i class="fas fa-arrow-right"></i></a>
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
        <div class="row">
            <div class="col">
                <div id="manual-card" class="card rounded-0">
                    <div class="card-body">
                        <h4 class="card-title">Illinois Urban Manual Contents</h4>
                        <hr class="mt-0">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <h5>Sections</h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        1: Introduction <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        2: Non-point Source Pollution Control Processes and Planning Principles <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        3: Planning Procedures <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="<? echo get_permalink( get_page_by_title( 'practice standards' ) ); ?>" class="list-group-item list-group-item-action list-group-item-secondary">
                                        4: Practice Standards
                                    </a>
                                    <a href="<? echo get_permalink( get_page_by_title( 'construction specifications' ) ); ?>" class="list-group-item list-group-item-action list-group-item-secondary">
                                        5: Construction Specifications
                                    </a>
                                    <a href="<? echo get_permalink( get_page_by_title( 'material specification' ) ); ?>" class="list-group-item list-group-item-action list-group-item-secondary">
                                        6: Material Specification
                                    </a>
                                    <a href="<? echo get_permalink( get_page_by_title( 'standard drawings' ) ); ?>" class="list-group-item list-group-item-action list-group-item-secondary">
                                        7: Standard Drawings
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        8: Evaluation <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        9: References <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        10: Glossary <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <h5>Appendices</h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        A: National Pollution Discharge Elimination System (NPDES) <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        B: Soil Quality – Urban Technical Notes  <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        C: Methods for Establishing Receiving Water Quality Impacts of Urban and Suburban Development <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        D: NPDES Phase II Stormwater Permit Program for Small Municipal Separate Storm Sewer Systems (MS4s) <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        E: Sample Natural Resource Protection Ordinances <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        F: USDA Programs – Applicable to Urban or Urbanizing Areas <i class="far fa-file-pdf" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                        G: Grant Information Summary for Conservation Projects <i class="far fa-file-pdf" aria-hidden="true"></i>
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
<div class="row">
    <div class="d-block d-md-none d-lg-none d-xl-none col-lg col-md-12 mb-3">
        <div class="newsletter-card card rounded-0">
            <div class="card-body">
                <h4 class="card-title">SIGN UP FOR OUR NEWSLETTER <i class="fa fa-newspaper-o" aria-hidden="true"></i></h4>
                <h6 class="card-subtitle mb-2">If you would like to receive our newsletter regarding the Illinois Urban Manual please sign up below.</h6>
                <div class="col px-0">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Valid Email">
                        <div class="input-group-append">
                            <button class="pull-right btn btn-outline-info" type="submit">Sign Up <i class="fa fa-paper-plane-o" aria-hidden="true"></i></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
