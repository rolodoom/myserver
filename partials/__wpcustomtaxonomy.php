<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>custom-taxonomy.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item">includes</li>
                <li class="breadcrumb-item active" aria-current="page">custom-taxonomy.php</li>
            </ol>
        </nav>


        <pre><code class="language-php">&lt;?php

function textdomain_custom_taxonomy() {
    /*************************************
    *   Like Categories
    *   Add new taxonomy, make it hierarchical (like categories)
    *************************************/

    $labels = array(
        'name'              =&gt; _x( '__TAXONOMY__ category', 'taxonomy general name', 'textdomain' ),
        'singular_name'     =&gt; _x( '__TAXONOMY__ category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      =&gt; __( 'Search __TAXONOMY__ categories', 'textdomain' ),
        'all_items'         =&gt; __( 'All __TAXONOMY__ categories', 'textdomain' ),
        'parent_item'       =&gt; __( 'Parent __TAXONOMY__ category', 'textdomain' ),
        'parent_item_colon' =&gt; __( 'Parent __TAXONOMY__ category:', 'textdomain' ),
        'edit_item'         =&gt; __( 'Edit __TAXONOMY__ category', 'textdomain' ),
        'update_item'       =&gt; __( 'Update __TAXONOMY__ category', 'textdomain' ),
        'add_new_item'      =&gt; __( 'Add New __TAXONOMY__ category', 'textdomain' ),
        'new_item_name'     =&gt; __( 'New __TAXONOMY__ category Name', 'textdomain' ),
        'menu_name'         =&gt; __( '__TAXONOMY__ category', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      =&gt; true,
        'labels'            =&gt; $labels,
        'show_ui'           =&gt; true,
        'show_admin_column' =&gt; true,
        'query_var'         =&gt; true,
        'rewrite'           =&gt; array( 
                                        'slug' =&gt; '__TAXONOMY__-category',
                                        'with_front' =&gt; false
                                    ),
    );

    register_taxonomy( '__TAXONOMY__-category', '__POST-TYPE__', $args );


    /*************************************
    *   Like Tags
    *   Add new taxonomy, NOT hierarchical (like tags)
    *************************************/

    $labels = array(
        'name'                       =&gt; _x( '__TAXONOMY__', 'taxonomy general name', 'rolodoom' ),
        'singular_name'              =&gt; _x( '__TAXONOMY__', 'taxonomy singular name', 'rolodoom' ),
        'search_items'               =&gt; __( 'Search __TAXONOMY__', 'rolodoom' ),
        'popular_items'              =&gt; __( 'Popular __TAXONOMY__', 'rolodoom' ),
        'all_items'                  =&gt; __( 'All __TAXONOMY__', 'rolodoom' ),
        'parent_item'                =&gt; null,
        'parent_item_colon'          =&gt; null,
        'edit_item'                  =&gt; __( 'Edit __TAXONOMY__', 'rolodoom' ),
        'update_item'                =&gt; __( 'Update __TAXONOMY__', 'rolodoom' ),
        'add_new_item'               =&gt; __( 'Add New __TAXONOMY__', 'rolodoom' ),
        'new_item_name'              =&gt; __( 'New __TAXONOMY__ Name', 'rolodoom' ),
        'separate_items_with_commas' =&gt; __( 'Separate __TAXONOMY__ with commas', 'rolodoom' ),
        'add_or_remove_items'        =&gt; __( 'Add or remove __TAXONOMY__', 'rolodoom' ),
        'choose_from_most_used'      =&gt; __( 'Choose from the most used __TAXONOMY__', 'rolodoom' ),
        'not_found'                  =&gt; __( 'No __TAXONOMY__ found.', 'rolodoom' ),
        'menu_name'                  =&gt; __( '__TAXONOMY__', 'rolodoom' ),
    );

    $args = array(
        'hierarchical'          =&gt; false,
        'labels'                =&gt; $labels,
        'show_ui'               =&gt; true,
        'show_admin_column'     =&gt; true,
        'update_count_callback' =&gt; '_update_post_term_count',
        'query_var'             =&gt; true,
        'rewrite'               =&gt; array( 'slug' =&gt; '__TAXONOMY__' ),
    );

    register_taxonomy( '__TAXONOMY__', '__POST-TYPE__', $args );

}  

add_action( 'init', 'textdomain_custom_taxonomy');

?&gt;</code></pre>
        </div>
    </div>
</div> 