<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>index.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item active" aria-current="page">index.php</li>
            </ol>
        </nav>


        <pre><code class="language-php">&lt;!DOCTYPE html&gt;
&lt;html &lt;?php language_attributes(); ?&gt;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;&lt;?php bloginfo( 'charset' ); ?&gt;&quot;&gt;
    &lt;title&gt;&lt;?php wp_title( '|', true, 'right' ); ?&gt;&lt;/title&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;&lt;?php echo esc_url( get_stylesheet_uri() ); ?&gt;&quot; type=&quot;text/css&quot; /&gt;
    &lt;?php wp_head(); ?&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;&lt;?php bloginfo( 'name' ); ?&gt;&lt;/h1&gt;
&lt;h2&gt;&lt;?php bloginfo( 'description' ); ?&gt;&lt;/h2&gt;

&lt;?php if( is_category()): ?&gt;
    &lt;h1&gt;&lt;?php _e('Category:', 'textdomain');?&gt; &lt;?php single_cat_title(); ?&gt;&lt;/h1&gt;
&lt;?php elseif( is_tag()): ?&gt;
    &lt;h1&gt;&lt;?php _e('Tag:', 'textdomain');?&gt; &lt;?php single_tag_title(); ?&gt;&lt;/h1&gt;
&lt;?php elseif( is_tax()): ?&gt;
    &lt;h1&gt;&lt;?php single_term_title(); ?&gt;&lt;/h1&gt;    
&lt;?php elseif( is_search() ): ?&gt;
    &lt;h1&gt;&lt;?php _e('Search results for:', 'textdomain');?&gt; &lt;?php the_search_query(); ?&gt;&lt;/h1&gt;
&lt;?php elseif( is_day() ): ?&gt;
    &lt;h1&gt;&lt;?php _e('Archive:', 'textdomain');?&gt; &lt;?php the_time( get_option('date_format')); ?&gt;&lt;/h1&gt;
&lt;?php elseif( is_month() ): ?&gt;
    &lt;h1&gt;&lt;?php _e('Archive:', 'textdomain');?&gt; &lt;?php the_time('F Y'); ?&gt;&lt;/h1&gt;
&lt;?php elseif( is_year() ): ?&gt;
    &lt;h1&gt;&lt;?php _e('Archive:', 'textdomain');?&gt; &lt;?php the_time('Y'); ?&gt;&lt;/h1&gt;
&lt;?php elseif( is_author() ): ?&gt;
    &lt;h1&gt;
    &lt;?php _e('Written by:', 'textdomain');?&gt; 
    &lt;?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?&gt;
    &lt;?php echo $curauth-&gt;display_name; ?&gt;
    &lt;/h1&gt;
&lt;?php elseif( is_404() ): ?&gt;
    &lt;h1&gt;&lt;?php _e('Page not found', 'textdomain');?&gt;&lt;/h1&gt;
&lt;?php elseif( is_home()): ?&gt;
    &lt;?php if(is_front_page()):?&gt;
    &lt;h1&gt;&lt;?php _e('Blog', 'textdomain');?&gt;&lt;/h1&gt;
    &lt;?php else: ?&gt;
        &lt;h1&gt;&lt;?php bloginfo( 'name' ); ?&gt;&lt;/h1&gt;
        &lt;h2&gt;&lt;?php bloginfo( 'description' ); ?&gt;&lt;/h2&gt;
    &lt;?php endif; ?&gt;
&lt;?php else: ?&gt;
    &lt;h1&gt;&lt;?php bloginfo( 'name' ); ?&gt;&lt;/h1&gt;
    &lt;h2&gt;&lt;?php bloginfo( 'description' ); ?&gt;&lt;/h2&gt;
&lt;?php endif; ?&gt;
 
&lt;?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?&gt;
 
    &lt;?php //get_template_part( 'partials/post/content', 'excerpt' ); ?&gt;

    &lt;!-- content.php--&gt;
    &lt;h3&gt;&lt;?php the_title(); ?&gt;&lt;/h3&gt;

    &lt;?php if( has_post_thumbnail()): ?&gt;
        &lt;?php the_post_thumbnail('size'); ?&gt;
    &lt;?php else: ?&gt;
        &lt;img src=&quot;&lt;?php echo PACEHOLDER_IMG; ?&gt;&quot; alt=&quot;&quot;&gt;
    &lt;?php endif; ?&gt;        

    &lt;?php the_content(); ?&gt;

    &lt;?php wp_link_pages(); ?&gt;
    &lt;?php edit_post_link(); ?&gt;

&lt;?php endwhile; ?&gt;
 
&lt;?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?&gt;
&lt;?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?&gt;
 
&lt;?php else: ?&gt;
 
&lt;p&gt;No posts found. :(&lt;/p&gt;
 
&lt;?php endif; ?&gt;
&lt;?php wp_footer(); ?&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
        
        </div>
    </div>
</div> 