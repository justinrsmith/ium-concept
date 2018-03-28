<? get_header() ?>

<div class="container-fluid">
    <div class="row">
        <? get_sidebar() ?>
        <div class="mt-2 col-md-10 col-xs-12">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1>Illinois Urban Manual</h1>
                    <p id="text-description" class="lead text-muted">Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.</p>
                    <img height="139" width="137" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt="">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<? echo get_theme_file_uri( 'assets/images/dirt.jpg' ); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<? echo get_theme_file_uri( 'assets/images/creek.jpg' ); ?>" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-2">
                <div class="col">
                    <h4>Announcements</h4>
                    <hr>
                    <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="news-item">
                            <div class="row">
                                <div class="col">
                                    <h5><a href="<? the_permalink(); ?>"><? the_title() ?></a></h5>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <? the_excerpt() ?>
                                </div>

                            </div>
                        </div>
                    <? endwhile; endif; ?>
                    <div class="row">
                        <div class="col">
                            <a href="#">View All News</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col">
                    <h4>Sections</h4>
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 1: Introduction <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 2: Non-point Source Pollution Control Processes and Planning Principles <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 3: Planning Procedures <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 4: Practice Standards <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 5: Construction Specifications <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 6: Material Specification <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 7: Standard Drawings <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 8: Evaluation <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 9: References <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Section 10: Glossary <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4>Appendix</h4>
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Appendix A: National Pollution Discharge Elimination System (NPDES) <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Appendix B: Soil Quality – Urban Technical Notes <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Appendix C: Methods for Establishing Receiving Water Quality Impacts of Urban and Suburban Development <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Appendix D: NPDES Phase II Stormwater Permit Program for Small Municipal Separate Storm Sewer Systems (MS4s) <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Appendix E: Sample Natural Resource Protection Ordinances <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Appendix F: USDA Programs – Applicable to Urban or Urbanizing Areas <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <h6><a href="#">Appendix G: Grant Information Summary for Conservation Projects <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
