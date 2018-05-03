<? // Template Name: Announcements ?>

<? get_header() ?>
<div class="row mt-2 mb-4">
    <div class="col-xs-12 col-md-9 offset-md-1">
        <div class="card w-100 h-100 rounded-0">
            <div class="card-body">
                <?
                    $args = array(
                        'orderby' => 'date',
                        'order'   => 'DESC',
                        'posts_per_page' => '4'
                    );
                    $query = new WP_Query($args);
                    $posts = $query->posts;
                    foreach($posts as $post) { ?>
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-0"><a class="announement-title-home" href="<? the_permalink(); ?>"><? the_title() ?></a></h4>
                                <!-- <h4 class="mb-0"><a class="announement-title-home" href="#"><? the_title() ?></a></h4> -->
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
                    <? };
                ?>
            </div>
        </div>
    </div>
</div>
<? get_footer() ?>
