<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>setup.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item">includes</li>
                <li class="breadcrumb-item active" aria-current="page">setup.php</li>
            </ol>
        </nav>

        <pre><code class="language-php">&lt;?php

// Register Theme Features
function textdomain_theme_setup()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'aside','image','gallery','video','audio','link','quote','status' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add custom Logo
	add_theme_support( 'custom-logo', [
        'height'      =&gt; __HEIGHT__,
        'width'       =&gt; __WIDTH__
    ]);

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	// Add theme support for Translation
    load_theme_textdomain( 'textdomain', get_template_directory() . '/language' );
    
    // Custom size images
	add_image_size( 'custom_size', __WIDTH__, __HEIGHT__, true );
    
}

add_action( 'after_setup_theme', 'textdomain_theme_setup' );

?&gt;</code></pre>
        
        </div>
    </div>
</div> 