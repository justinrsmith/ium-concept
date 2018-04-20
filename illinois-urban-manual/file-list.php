<? // Template Name: File List ?>

<?php get_header(); ?>

<div class="row mt-2">
    <div class="mt-2 col">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <h4><? the_title() ?></h4>
                    </div>
                    <div class="offset-md-2 col-sm-12 col-md-5">
                        <input class="form-control" type="text" name="" value="" placeholder="Search here for a standard">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <table class="table table-hover">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Additional Information</div>
                    <div class="card-body">
                        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Introduction</a><br>
                        <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Urban Standards List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
