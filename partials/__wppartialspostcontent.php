<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>content.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item">partials</li>
                <li class="breadcrumb-item">post</li>
                <li class="breadcrumb-item active" aria-current="page">content.php</li>
            </ol>
        </nav>


        <pre><code class="language-php">&lt;h3&gt;&lt;?php the_title(); ?&gt;&lt;/h3&gt;

&lt;?php if( has_post_thumbnail()): ?&gt;
    &lt;?php the_post_thumbnail('size'); ?&gt;
&lt;?php else: ?&gt;
    &lt;img src=&quot;&lt;?php echo PACEHOLDER_IMG; ?&gt;&quot; alt=&quot;&quot;&gt;
&lt;?php endif; ?&gt;        

&lt;?php the_content(); ?&gt;

&lt;?php wp_link_pages(); ?&gt;
&lt;?php edit_post_link(); ?&gt;</code></pre>
        
        </div>
    </div>
</div> 