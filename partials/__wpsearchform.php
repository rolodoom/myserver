<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>searchform.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item active" aria-current="page">searchform.php</li>
            </ol>
        </nav>


        <pre><code class="language-php">&lt;form action=&quot;&lt;?php echo home_url(); ?&gt;&quot;  method=&quot;get&quot;&gt;
    &lt;input type=&quot;text&quot; name=&quot;s&quot; id=&quot;s&quot; 
    value=&quot;&lt;?php the_search_query(); ?&gt;&quot; 
    placeholder=&quot;&lt;?php _e('Write the search term', 'textdomain'); ?&gt;&quot;&gt;
    &lt;button type=&quot;submit&quot;&gt;
        &lt;i class=&quot;fas fa-search&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/form&gt;</code></pre>
        
        </div>
    </div>
</div> 