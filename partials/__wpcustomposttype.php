<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>custom-post-type.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item">includes</li>
                <li class="breadcrumb-item active" aria-current="page">custom-post-type.php</li>
            </ol>
        </nav>


        <pre><code class="language-php">&lt;?php
        
function textdomain_create_posttypes() {
            
/**
*   SLIDE
*/	
$labels = array(
    'name'               =&gt; _x( '__POST__', 'post type general name', 'textdomain' ),
    'singular_name'      =&gt; _x( '__POST__', 'post type singular name', 'textdomain' ),
    'menu_name'          =&gt; _x( '__POST__', 'admin menu', 'textdomain' ),
    'name_admin_bar'     =&gt; _x( '__POST__', 'add new on admin bar', 'textdomain' ),
    'add_new'            =&gt; _x( 'Add New', 'singular', 'textdomain' ),
    'add_new_item'       =&gt; __( 'Add New __POST__', 'textdomain' ),
    'new_item'           =&gt; __( 'New __POST__', 'textdomain' ),
    'edit_item'          =&gt; __( 'Edit __POST__', 'textdomain' ),
    'view_item'          =&gt; __( 'View __POST__', 'textdomain' ),
    'all_items'          =&gt; __( 'All __POST__', 'textdomain' ),
    'search_items'       =&gt; __( 'Search __POST__', 'textdomain' ),
    'parent_item_colon'  =&gt; __( 'Parent __POST__:', 'textdomain' ),
    'not_found'          =&gt; __( 'No __POST__ found.', 'textdomain' ),
    'not_found_in_trash' =&gt; __( 'No __POST__ found in Trash.', 'textdomain' )
);

$args = array(
    'labels'             =&gt; $labels,
    'description'        =&gt; __( 'Description.', 'textdomain' ),
    'public'             =&gt; true,
    'publicly_queryable' =&gt; false,
    'show_ui'            =&gt; true,
    'show_in_menu'       =&gt; true,
    'query_var'          =&gt; true,
    'rewrite'            =&gt; array( 'slug' =&gt; '__POST-TYPE__' ),
    'capability_type'    =&gt; 'post',
    'has_archive'        =&gt; true,
    'hierarchical'       =&gt; false,
    'menu_position'      =&gt; null,
    'supports'           =&gt; array( 'title' , 'editor', 'thumbnail'),
    'menu_icon'          =&gt; 'dashicons-icon',
);

register_post_type( '__POST-TYPE__', $args );

} 

add_action( 'init', 'textdomain_create_posttypes');

?&gt;</code></pre>
        
        </div>
    </div>
</div> 