<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>index.php</h1>

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
 
&lt;?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?&gt;
 
&lt;h3&gt;&lt;?php the_title(); ?&gt;&lt;/h3&gt;
 
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