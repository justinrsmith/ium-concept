<? // Template Name: Announcements ?>

<? get_header() ?>
<div class="row mt-2 mb-4">
    <div class="col-xs-12 col-md-10 offset-md-1">
        <div class="card w-100 h-100 rounded-0">
            <div class="card-body">
                <?
                    // https://stackoverflow.com/a/4795366/2126218
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'orderby' => 'date',
                        'order'   => 'DESC',
                        'posts_per_page' => '3',
                        'paged' => $paged
                    );
                    $query = new WP_Query($args);
                    $posts = $query->posts;
                    foreach($posts as $post) { ?>
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
                                <p><? echo $post->post_content; ?></p>
                            </div>
                        </div>
                        <hr>
                    <? }; ?>
                    <div class="row">
                        <div class="col">
                            <?
                                $prev_link = get_previous_posts_link('<i class="fas fa-arrow-left"></i> Previous Page');
                                if(!$prev_link){ ?>
                                    <a href="#" class="btn btn-outline-primary disabled"><i class="fas fa-arrow-left"></i> Previous Page</a>
                                <? } else {
                                    echo $prev_link;
                                }
                            ?>
                        </div>
                        <div class="col text-right">
                            <?
                                $next_link = get_next_posts_link('Next Page <i class="fas fa-arrow-right"></i>', $query->max_num_pages);
                                if(!$next_link){ ?>
                                    <a href="#" class="btn btn-outline-primary disabled">Next Page <i class="fas fa-arrow-right"></i></a>
                                <? } else {
                                     echo $next_link;
                                }
                            ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<? get_footer() ?>
