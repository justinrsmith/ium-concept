<?
/* enqueue styles and scripts */
wp_enqueue_style( 'style', get_stylesheet_uri() );

// Help with using bootstrap for menus
// https://github.com/wp-bootstrap/wp-bootstrap-navwalker
require_once('wp-bootstrap-navwalker.php');

function create_posttype() {
    register_post_type( 'sections',
        array(
            'labels' => array(
                'name' => __( 'Sections' ),
                'singular_name' => __( 'Section' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sections'),
        )
    );
	register_post_type( 'appendix',
        array(
            'labels' => array(
                'name' => __( 'Appendices' ),
                'singular_name' => __( 'Appendix' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'appendix'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// https://support.advancedcustomfields.com/forums/topic/delete-wp-title-and-use-acf-title/
// hide wp title field
add_action('admin_head', 'hide_wp_title_input');
function hide_wp_title_input() {
	$screen = get_current_screen();
	if ($screen->id != 'sections' && $screen->id != 'appendix') {
		return;
	}
	?>
	<style type="text/css">
		#post-body-content {
			display: none;
		}
	</style>
	<?
}
// set post title behind the scences with title given by user
add_action('acf/save_post', 'save_sections_post', 20); // fires after ACF
function save_sections_post($post_id) {
	$post_type = get_post_type($post_id);
	if ($post_type != 'sections' && $post_type != 'appendix') {
		return;
	}
	$post_title = get_field('title', $post_id);
	$post_name = sanitize_title($post_title);
	$post = array(
		'ID' => $post_id,
		'post_name' => $post_name,
		'post_title' => $post_title
	);
	wp_update_post($post);
}
?>
