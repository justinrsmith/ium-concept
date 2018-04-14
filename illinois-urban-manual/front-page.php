<? get_header() ?>
<div class="row mt-2 row-eq-height">
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
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search term" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="pull-right btn btn-outline-info" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
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
                <div id="newsletter-card" class="card rounded-0">
                    <div class="card-body">
                        <h4 class="card-title">SIGN UP FOR OUR NEWSLETTER <i class="fa fa-newspaper-o" aria-hidden="true"></i></h4>
                        <h6 class="card-subtitle mb-2">If you would like to receive our newsletter regarding the Illinois Urban Manual please sign up below.</h6>
                        <div class="col px-0">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Valid Email" aria-describedby="basic-addon2">
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
                                'posts_per_page' => '4'
                            );
                            $query = new WP_Query($args);
                            $posts = $query->posts;
                            foreach($posts as $post) { ?>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="mb-0"><a class="announement-title-home" href="<? the_permalink(); ?>"><? the_title() ?></a></h4>
                                        <!-- <h4 class="mb-0"><a class="announement-title-home" href="#"><? the_title() ?></a></h4> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-muted mb-0"><? echo get_the_date(); ?></p>
                                    </div>
                                </div>
                                <div class="row mb-auto">
                                    <div class="col">
                                        <p><? echo my_trim_excerpt( $post->post_content, 20 ); ?></p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <a href="#">Continue reading</a>
                                    </div>
                                </div>
                            <? };
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="d-block d-md-none d-lg-none d-xl-none col-lg col-md-12 mt-3">
        <div id="newsletter-card" class="card rounded-0">
            <div class="card-body">
                <h4 class="card-title">SIGN UP FOR OUR NEWSLETTER <i class="fa fa-newspaper-o" aria-hidden="true"></i></h4>
                <h6 class="card-subtitle mb-2">If you would like to receive our newsletter regarding the Illinois Urban Manual please sign up below.</h6>
                <div class="col px-0">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Valid Email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="pull-right btn btn-outline-info" type="submit">Sign Up <i class="fa fa-paper-plane-o" aria-hidden="true"></i></i></button>
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
                            <div class="col-xs-12 col-md-6">
                                <h5 class="card-title">Sections</h5>
                                <ol class="pl-4">
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
                                <ol class="pl-4">
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
        </div>
    </div>
</div>

<?php get_footer(); ?>
