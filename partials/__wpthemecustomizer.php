<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>theme-customizer.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item">includes</li>
                <li class="breadcrumb-item active" aria-current="page">theme-customizer.php</li>
            </ol>
        </nav>


        <pre><code class="language-php">&lt;?php

function textdomain_customize_register( $wp_customize ){
    // echo '&lt;pre&gt;';
    // var_dump( $wp_customize );
    // echo '&lt;/pre&gt;';

    // Change title of default WP Section to General
    $wp_customize-&gt;get_section( 'title_tagline' )-&gt;title    =   'General';

    // Add Section
    textdomain_customizer_section( $wp_customize );
}

// New Section Function
function textdomain_customizer_section( $wp_customize ){

    // Add Panel
    $wp_customize-&gt;add_panel( 'panel_id', array(
        'title'         =&gt;  __( 'Title', 'textdomain' ),
        'description'   =&gt;  __('Description', 'textdomain'),
        'priority'      =&gt;  10
    ));

    // Create the section - to hold the controllers on the customizer
    $wp_customize-&gt;add_section( 'section_id', array(
        'title'             =&gt;  __( 'Section title', 'textdomain' ),
        'description'       =&gt;  __( 'Section description', 'textdomain' ),
        'priority'          =&gt;  10,
        'panel'             =&gt;  'panel_id'
    ));

    // Create the setting - Creates a database value
    $wp_customize-&gt;add_setting( 'section_settings[setting_id]', [ 
        'default'   =&gt;  ''
    ]);

    // Create the controller - to modify the setting value with an input field
    $wp_customize-&gt;add_control(new WP_Customize_Control(
        $wp_customize,
        'setting_id_input',
        array(
            'label'                     =&gt;  __( 'Control label', 'textdomain' ),
            'description'               =&gt;  __( 'Control description', 'textdomain' ),
            'section'                   =&gt; 'section_id',
            'settings'                  =&gt; 'section_settings[setting_id]'
        )
    ));

}

add_action( 'customize_register' , 'textdomain_customize_register' );

?&gt;</code></pre>
        
        </div>
    </div>
</div> 