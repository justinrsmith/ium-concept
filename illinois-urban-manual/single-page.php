<? // Template Name: Single Page ?>

<?php get_header(); ?>

<img src="<? echo get_template_directory_uri(); ?>/images/AISWCDLogo.png" alt="">
<hr>
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
<div class="container" id="single-page-container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card bg-light mb-3">
                <div class="card-header">Related Documents</div>
                <div class="card-body">
                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Introduction</a><br>
                    <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Urban Standards List</a>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="row">
                <div class="col-5">
                    <h4>Practice Standards</h4>
                </div>
                <div class="offset-1 col-6">
                    <input class="form-control" type="text" name="" value="" placeholder="Search here for a standard">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Standard</th>
                                <th scope="col">Code</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                            <tr>
                                <td>Backcut Curb</td>
                                <td>801</td>
                                <td>August 2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <? get_sidebar() ?>
    </div>
</div>
