<? get_header() ?>
<? if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row mt-2 mb-4">
        <div class="col-xs-12 col-md-10 offset-md-1">
            <div class="card w-100 h-100 rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"><a href="<? the_permalink(); ?>"><? the_title() ?></a></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-muted mb-0"><? echo get_the_date(); ?></p>
                        </div>
                    </div>
                    <div class="row mb-auto">
                        <div class="col">
                            <p><? the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? endwhile; endif; ?>
<? get_footer() ?>
