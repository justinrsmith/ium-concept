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
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Practice Standards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Construction Specifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Material Specifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Standard Drawings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">IUM Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Field Manual</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quick Links
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Active</a>
                            <a class="dropdown-item" href="#">Link</a>
                            <a class="dropdown-item" href="#">Link</a>
                            <a class="dropdown-item" href="#">Disabled</a>
                        </nav><br>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid" id="search-container">
            <div class="jumbotron text-center">
                <h1>Illinois Urban Manual</h1>
                <p class="lead text-muted">Funding source for the IUM update initiative is provided by the Illinois Environmental Protection Agency (IEPA) Clean Water Act, Section 604b grant funds.</p>
                <img height="139" width="137" src="<?php echo get_template_directory_uri(); ?>/images/ium_logo.png" alt="">
                <div class="input-group">
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
                    <div class="row" style="border-radius: 10px; padding: 10px; background-color: #f8f8f8;">
                        <div class="col-lg">
                            <div class="row">
                                <h4>Sections</h4>
                            </div>
                            <div id="sections">
                                <div class="row">
                                    <p>
                                        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Introduction/Preface</a><br>
                                        <small>Last Updated: Mar 25, 2017</small><br>
                                    </p>
                                </div>
                                <div class="row">
                                    <p>
                                        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Non-point Source Pollution Control Processes and Planning Principles</a></strong><br>
                                        <small>Last Updated: Mar 25, 2017</small>
                                    </p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Planning Procedures</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="ium2-standard.html">Practice Standards</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#">Construction Specifications</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#">Material Specification</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#">Standard Drawings</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Evaluation</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> References</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Glossary</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="row">
                                <h4>Appendix</h4>
                            </div>
                            <div id="appendix">
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> NPDES – Permits for Construction Site Stormwater Discharge</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Soil Quality – Urban Technical Notes</a></strong><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Methods for Establishing Receiving Water Quality Impacts of Urban and Suburban Development</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> NPDES Phase II Stormwater Permit Program for Small Municipal Separate Storm Sewer Systems (MS4s)</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sample Natural Resource Protection Ordinances</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> USDA Programs – Applicable to Urban or Urbanizing Areas</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                                <div class="row">
                                    <p>
                                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Grant Information Summary for Conservation Projects</a><br>
                                    <small>Last Updated: Mar 25, 2017</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <? get_sidebar() ?>
            </div>
        </div>
        <?php get_footer(); ?>
    </body>

</html>
