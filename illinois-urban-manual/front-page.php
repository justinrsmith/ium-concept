<? get_header() ?>

<div class="container-fluid">
    <div id="home-page-header" class="jumbotron text-center">
        <h1>Illinois Urban Manual</h1>
        <p id="text-description" class="lead text-muted">Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.</p>
        <img height="139" width="137" src="<? echo get_theme_file_uri( 'assets/images/ium_logo.png' ); ?>" alt="">
        <div class="col-lg-8 offset-lg-2 col-xs-12 input-group">
            <input type="text" class="form-control" placeholder="Search the Illinois Urban Manual" aria-label="" aria-describedby="search-button">
            <button class="input-group-addon" id="search-button">Search</button>
        </div>
    </div>
</div>

<div class="container">
    <div id="layout-row" class="row">
        <div class="col-lg-9">
            <div class="row">
                <div id="latest-news" class="col-lg">
                    <div class="row">
                        <h4>Latest News</h4>
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
                <div id="latest-updates" class="col-lg">
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
                </div>
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
                                    <a href="<? !the_field('pdf_to_link') ? the_field('page_to_link') : the_field('pdf_to_link') ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 section-title"><? the_title() ?><? if (get_field('pdf_to_link')): ?> <i class="fa fa-file-pdf-o" aria-hidden="true"></i><? endif; ?></h6>
                                        </div>
                                        <small class="text-muted"><? echo get_the_date() ?></small>
                                    </a>
                                <? endwhile; else: ?> <p>Sorry, there are no sections to display</p> <? endif; ?>
                                  <a href="http://localhost:8000/wp-content/uploads/2018/03/urbse_31.pdf" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                          <h6 class="mb-1 section-title">Planning Procedures <i class="fa fa-file-pdf-o" aria-hidden="true"></i></h6>
                                      </div>
                                      <p class="mb-1">Introduction</p>
                                      <p class="mb-1">Planning Process</p>
                                      <p class="mb-1">Criteria for BMP Selection</p>
                                      <p class="mb-1">Practices and Systems</p>
                                      <small class="text-muted"><? echo get_the_date() ?></small>
                                  </a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg"></div>
        <? get_sidebar() ?>
    </div>
</div>
<?php get_footer(); ?>
