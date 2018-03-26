<? get_header() ?>

<!-- <div class="container-fluid">
    <div id="home-page-header" class="jumbotron text-center">
        <h1>Illinois Urban Manual</h1>
        <p id="text-description" class="lead text-muted">Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.</p>
        <img height="139" width="137" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt="">
        <div class="col-lg-8 offset-lg-2 col-xs-12 input-group">
            <input type="text" class="form-control" placeholder="Search the Illinois Urban Manual" aria-label="" aria-describedby="search-button">
            <button class="input-group-addon" id="search-button">Search</button>
        </div>
    </div>
</div> -->

<div class="container">
    <div id="layout-row" class="row">
        <? get_sidebar() ?>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-6 text-center">
                    <h1>Illinois Urban Manual</h1>
                    <p id="text-description" class="lead text-muted">Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.</p>
                    <img height="139" width="137" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt="">
                </div>
                <div class="col-6">
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
            <div class="row">
                <div id="latest-news" class="col-lg">
                    <div class="row">
                        <h4>Announcements</h4>
                    </div>
                    <hr class="latest-hr">
                    <? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="news-item">
                            <div class="row">
                                <h5><a href="<? the_permalink(); ?>"><? the_title() ?></a></h5>
                            </div>
                            <div class="row">
                                <? the_excerpt() ?>
                            </div>
                        </div>
                    <? endwhile; endif; ?>
                    <div class="row">
                        <a href="#">View All News</a>
                    </div>
                </div>
                <!-- <div id="latest-updates" class="col-lg">
                    <div class="row">
                        <h4>Latest Updates</h4>
                    </div>
                    <hr class="latest-hr">
                    <div class="new-item">
                        <div class="row">
                            <h5><a href="#">New Standard Drawing Added</a></h5>
                        </div>
                        <div class="row">
                            <h5><a href="#">Manual Page Updated</a></h5>
                        </div>
                        <div class="row">
                            <h5><a href="#">Backcut curb</a></h5>
                        </div>
                        <div class="row">
                            <h5><a href="#">New Standard Drawing Added</a></h5>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row" id="section-appendix-container">
                <div class="col-lg">
                    <div class="row">
                        <h4>Sections</h4>
                    </div>
                    <div class="row">
                        <div id="sections">
                            <div class="list-group">
                                <?
                                $args = array(
                                    'post_type' => 'sections',
                                    'orderby' => the_field('section_number'),
                                    'order' => 'ASC'
                                );
                                $the_query = new WP_Query( $args );
                                ?>
                                <? if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <!-- <a href="<? !the_field('pdf_to_link') ? the_field('page_to_link') : the_field('pdf_to_link') ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 section-title"><? the_title() ?><? if (get_field('pdf_to_link')): ?> <i class="fa fa-file-pdf-o" aria-hidden="true"></i><? endif; ?></h6>
                                        </div>
                                        <small class="text-muted"><? echo get_the_date() ?></small>
                                    </a> -->
                                <? endwhile; else: ?> <p>Sorry, there are no sections to display</p> <? endif; ?>
                                  <!-- <a href="http://localhost:8000/wp-content/uploads/2018/03/urbse_31.pdf" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                          <h6 class="mb-1 section-title">Planning Procedures <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                      </div>
                                      <p class="mb-1">Introduction</p>
                                      <p class="mb-1">Planning Process</p>
                                      <p class="mb-1">Criteria for BMP Selection</p>
                                      <p class="mb-1">Practices and Systems</p>
                                      <small class="text-muted"><? echo get_the_date() ?></small>
                                  </a> -->
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
                                  <!-- <div class="list-group-item list-group-item-action flex-column align-items-start">
                                      <h5>Section 4: Construction Specifications</h5>
                                      <p class="mb-1"><a href="#">View Construction Specifications Page</a></p>
                                      <p class="mb-1"><a href="#">Introduction</a> <i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                      <p class="mb-1"><a href="#">General Discussion</a> <i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                      <p class="mb-1"><a href="#">Construction Specifications and Instructions for Use</a> <i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                      <small class="text-muted"><? echo get_the_date() ?></small>
                                  </div>
                                  <div class="list-group-item list-group-item-action flex-column align-items-start">
                                      <a href="http://localhost:8000/?page_id=8" class="">
                                          <div class="d-flex w-100 justify-content-between">
                                              <h6 class="mb-1 section-title">Construction Specifications</h6>
                                          </div>
                                      </a>
                                      <p class="mb-1">Introduction <i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                      <p class="mb-1">General Discussion <i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                      <p class="mb-1">Construction Specifications and Instructions for Use <i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                      <small class="text-muted"><? echo get_the_date() ?></small>
                                  </div> -->

                                  <!-- <a href="http://localhost:8000/wp-content/uploads/2018/03/urbse_31.pdf" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                          <h5 class="mb-1 section-title">Section 4 <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h5>
                                      </div>
                                      <h6 class="mb-1 section-title">Practice Standards</h6>
                                      <p class="mb-1">Introduction</p>
                                      <p class="mb-1">Planning Process</p>
                                      <p class="mb-1">Criteria for BMP Selection</p>
                                      <p class="mb-1">Practices and Systems</p>
                                      <small class="text-muted"><? echo get_the_date() ?></small>
                                  </a> -->
                                <? wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="row">
                        <h4>Appendix</h4>
                    </div>
                    <div class="row">
                        <div id="appendix">
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
                            <!-- <div class="list-group">
                                <?
                                $args = array(
                                    'post_type' => 'appendix',
                                    'orderby' => the_field('appendix_letter'),
                                    'order' => 'ASC'
                                );
                                $the_query = new WP_Query( $args );
                                ?>
                                <? if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <a href="<? the_field('pdf_to_link')?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 appendix-title"><? the_title() ?> <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                        </div>
                                        <small class="text-muted"><? echo get_the_date() ?></small>
                                    </a>
                                <? endwhile; else: ?> <p>Sorry, there are no sections to display</p> <? endif; ?>
                                <? wp_reset_query(); ?>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>
