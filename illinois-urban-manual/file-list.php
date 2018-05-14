<? // Template Name: File List ?>

<?php get_header(); ?>

<div class="row mt-2">
    <div class="mt-2 col">
        <nav class="ium-breadcrumbs" aria-label="breadcrumb">
            <ol class="breadcrumb px-0">
                <li class="breadcrumb-item"><a href="<? echo get_home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-3">
                <div class="d-lg-none my-3" id="ium-search-container-file-list">
                    <ium-search></ium-search>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <h4><? the_title() ?></h4>
                    </div>
                </div>
                <? if(get_the_title() == 'Standard Drawings'){ ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-info" role="alert">
                                All drawing are available below as well as in our <a href="#"><i class="fab fa-dropbox"></i> Dropbox</a>.
                            </div>
                        </div>
                    </div>
                <? } ?>
                <div class="row mt-2">
                    <div class="col">
                        <?
                            // If mobile and not Standard Drawings or Construction specs we want to make the
                            // columsn bigger.
                            $name_col_val = 'col-9 col-md-6';
                            $code_col_val = 'col-2 col-md-2';
                            $pages_with_additional_doc = array('Standard Drawings', 'Construction Specifications');
                            if (in_array(get_the_title(), $pages_with_additional_doc)) {
                                $name_col_val = 'col-5';
                                $code_col_val = 'col-2';
                            }
                        ?>
                        <div class="row">
                            <div class="<? echo $name_col_val; ?>">
                                <strong>Name</strong>
                            </div>
                            <div class="<? echo $code_col_val; ?>">
                                <strong>Code</strong>
                            </div>
                            <? if(get_the_title() == 'Standard Drawings'){ ?>
                                <div class="col-5 col-md-3">
                                    <strong><i class="fab fa-dropbox"></i> Drawing</strong>
                                </div>
                            <? } ?>
                            <? if(get_the_title() == 'Construction Specifications'){ ?>
                                <div class="col-5 col-md-3">
                                    <strong><i class="far fa-file-pdf"></i> Instructions</strong>
                                </div>
                            <? } ?>
                            <div class="d-none d-md-block col-2">
                                <strong><i class="far fa-calendar-alt"></i> Date</strong>
                            </div>
                        </div>
                        <hr id="file-table-header-divider" class="mt-1">
                        <div class="row">
                            <div class="<? echo $name_col_val; ?>">
                                <a href="#"><i class="far fa-file-pdf" aria-hidden="true"></i> Establishment of Trees, Shrubs and Vines</a>
                            </div>
                            <div class="<? echo $code_col_val; ?>">
                                8012
                            </div>
                            <? if(get_the_title() == 'Construction Specifications'){ ?>
                                <div class="col-5 col-md-3">
                                    <a href="#"><i class="far fa-file-pdf" aria-hidden="true"></i> Download</a>
                                </div>
                            <? } ?>
                            <? if(get_the_title() == 'Standard Drawings'){ ?>
                                <div class="col-5 col-md-3">
                                    <a href="#"><i class="fas fa-download"></i> Drawing</a>
                                </div>
                            <? } ?>
                            <div class="col-2 d-none d-md-block">
                                06/25/18
                            </div>
                        </div>
                        <hr class="my-1">
                        <div class="row">
                            <div class="<? echo $name_col_val; ?>">
                                <a href="#"><i class="far fa-file-pdf" aria-hidden="true"></i> Back Cut Curb</a>
                            </div>
                            <div class="<? echo $code_col_val; ?>">
                                8012
                            </div>
                            <? if(get_the_title() == 'Construction Specifications'){ ?>
                                <div class="col-5 col-md-3">
                                    <a href="#"><i class="far fa-file-pdf" aria-hidden="true"></i> Download</a>
                                </div>
                            <? } ?>
                            <? if(get_the_title() == 'Standard Drawings'){ ?>
                                <div class="col-5 col-md-3">
                                    <a href="#"><i class="fas fa-download"></i> Drawing</a>
                                </div>
                            <? } ?>
                            <div class="col-2 d-none d-md-block">
                                06/25/18
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card bg-light mb-3">
                    <div id="additional-information-header" class="card-header"><strong>Additional Information</strong></div>
                    <div class="card-body">
                        <a href="#"><i class="far fa-file-pdf" aria-hidden="true"></i> Introduction</a><br>
                        <a href="#"><i class="far fa-file-pdf" aria-hidden="true"></i> Urban Standards List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
