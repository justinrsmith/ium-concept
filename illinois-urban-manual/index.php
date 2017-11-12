<!DOCTYPE html>
<html>
    <? get_header() ?>
    <body>
        <img src="<? echo get_template_directory_uri(); ?>/images/AISWCDLogo.png" alt="">

        <!-- mobile nav -->
        <nav class="d-lg-none navbar navbar-expand-lg navbar-light bg-light">
            <div></div>
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

        <div class="container-fluid" id="search-container">
            <div class="jumbotron text-center">
                <h1>Illinois Urban Manual</h1>
                <p class="lead text-muted">Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.</p>
                <img height="139" width="137" src="<?php echo get_template_directory_uri(); ?>/images/ium_logo.png" alt="">
                <div class="col-lg-8 offset-lg-2 col-xs-12 input-group">
                    <input type="text" class="form-control" placeholder="Search the Illinois Urban Manual" aria-label="" aria-describedby="search-button">
                    <button class="input-group-addon" id="search-button">Search</button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
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
                                            <a target="_blank" href="<? !the_field('pdf_to_link') ? the_field('page_to_link') : the_field('pdf_to_link') ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1"><? if (get_field('pdf_to_link')): ?><i class="fa fa-file-pdf-o" aria-hidden="true"><? endif; ?></i> <? the_title() ?></h6>
                                                </div>
                                                <small><? echo get_the_date() ?></small>
                                            </a>
                                        <? endwhile; else: ?> <p>Sorry, there are no sections to display</p> <? endif; ?>
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
                                            <a target="_blank" href="<? the_field('pdf_to_link')?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <? the_title() ?></h6>
                                                </div>
                                                <small><? echo get_the_date() ?></small>
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
    </body>
</html>
