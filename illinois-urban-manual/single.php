<? get_header() ?>
<? if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row mt-2 mb-4">
        <div class="col-xs-12 col-md-10 offset-md-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<? echo get_home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<? echo get_permalink( get_page_by_title( 'announcements' ) ); ?>">Announcements</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><? the_title() ?></li>
                </ol>
            </nav>
            <div class="card w-100 h-100 rounded-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"><? the_title() ?></h4>
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
