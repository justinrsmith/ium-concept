<?
/* enqueue styles and scripts */
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'carouselfade_css', get_template_directory_uri() . '/carousel-fade.css' );

// Help with using bootstrap for menus
// https://github.com/wp-bootstrap/wp-bootstrap-navwalker
require_once('wp-bootstrap-navwalker.php');

function my_trim_excerpt( $text, $length = 55, $more = ' [&hellip;]'  ) {
     $text = strip_shortcodes( $text );
     $text = apply_filters( 'the_content', $text );
     $text = str_replace(']]>', ']]&gt;', $text);

     $excerpt = wp_trim_words( $text, $length, $more );
     return $excerpt;
}

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

// ACF
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_appendencies',
        'title' => 'Appendencies',
        'fields' => array (
            array (
                'key' => 'field_5a083064b075a',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5a083ddc902e2',
                'label' => 'Appendix Letter',
                'name' => 'appendix_letter',
                'type' => 'text',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => 1,
            ),
            array (
                'key' => 'field_5a083da70e6fd',
                'label' => 'PDF to Link',
                'name' => 'pdf_to_link',
                'type' => 'file',
                'required' => 1,
                'save_format' => 'url',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'appendix',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_sections',
        'title' => 'Sections',
        'fields' => array (
            array (
                'key' => 'field_5a082aa7ebb37',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_5a083631dd3cd',
                'label' => 'Section Number',
                'name' => 'section_number',
                'type' => 'number',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_5a08325854774',
                'label' => 'Type',
                'name' => 'type',
                'type' => 'radio',
                'required' => 1,
                'choices' => array (
                    'pdf' => 'PDF',
                    'page' => 'Page',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'vertical',
            ),
            array (
                'key' => 'field_5a0832b749e67',
                'label' => 'Page to Link',
                'name' => 'page_to_link',
                'type' => 'page_link',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_5a08325854774',
                            'operator' => '==',
                            'value' => 'page',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'post_type' => array (
                    0 => 'page',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_5a08354bce240',
                'label' => 'PDF to Link',
                'name' => 'pdf_to_link',
                'type' => 'file',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_5a08325854774',
                            'operator' => '==',
                            'value' => 'pdf',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'save_format' => 'url',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'sections',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
}
?>
