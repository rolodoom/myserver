<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>comments.php</h1>

        <pre><code class="language-php">&lt;?php

if( ! empty( $_SERVER['SCRIPT_FILENAME']) &amp;&amp; basename( $_SERVER['SCRIPT_FILENAME']) == 'comments.php' ){
    die();
}

if ( post_password_required() ) {
    _e('Password is required to view this content' , 'textdomain');
	return;
}

?&gt;

&lt;div id=&quot;comments&quot;&gt;

    &lt;?php if ( $comments ) : ?&gt;
    &lt;?php
    $comments_number = absint( get_comments_number() );
    ?&gt;
    &lt;a href=&quot;#respond&quot; class=&quot;article-add-comment&quot;&gt;&lt;/a&gt;
    &lt;h3 class=&quot;comments-title&quot;&gt;
    &lt;?php
    if ( ! have_comments() ) {
        _e( 'Leave a comment', 'textdomain' );
    } elseif ( 1 === $comments_number ) {
        /* translators: %s: Post title. */
        printf( _x( 'One reply on &ldquo;%s&rdquo;', 'comments title', 'textdomain' ), get_the_title() );
    } else {
        printf(
            /* translators: 1: Number of comments, 2: Post title. */
            _nx(
                '%1$s reply on &ldquo;%2$s&rdquo;',
                '%1$s replies on &ldquo;%2$s&rdquo;',
                $comments_number,
                'comments title',
                'textdomain'
            ),
            number_format_i18n( $comments_number ),
            get_the_title()
        );
    }

    ?&gt;
    &lt;/h3&gt;
    
    &lt;ol id=&quot;comments-list&quot;&gt;
        &lt;?php
            wp_list_comments(
				array(
					'walker'      =&gt; new Comments_Walker_Comment(),
					'avatar_size' =&gt; 80,
				)
			);
        ?&gt;
    &lt;/ol&gt;&lt;!-- /#comments-list --&gt;

    &lt;?php
    $comment_pagination = paginate_comments_links(
        array(
            'echo'      =&gt;  false,
            'end_size'  =&gt;  0,
            'mid_size'  =&gt;  0,
            'next_text' =&gt;  __( 'Newer Comments', 'textdomain' ) . ' &lt;i class=&quot;fa fa-arrow-right&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;',
            'prev_text' =&gt;  '&lt;i class=&quot;fa fa-arrow-left&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; ' . __( 'Older Comments', 'textdomain' ),
            'before_page_number'    =&gt;  '&lt;span class=&quot;d-none&quot;&gt;',
            'after_page_number'     =&gt;  '&lt;/span&gt;',
            'show_all'  =&gt;  false,
        )
    );

    if ( $comment_pagination ) {
        $pagination_classes = '';

        // If we're only showing the &quot;Next&quot; link, add a class indicating so.
        if ( false === strpos( $comment_pagination, 'prev page-numbers' ) ) {
            $pagination_classes = ' only-next';
        }
        ?&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;div class=&quot;post-navigation&quot;&gt;
                    &lt;nav class=&quot;nav justify-content-between&quot;&gt;
                        &lt;?php echo $comment_pagination; ?&gt;
                    &lt;/nav&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;?php
    }
    ?&gt;

    &lt;?php endif;?&gt;

    &lt;?php if ( comments_open() ) : ?&gt;
    &lt;?php comment_form(); ?&gt;
    &lt;?php elseif( is_single()) : ?&gt;
    &lt;div id=&quot;respond&quot; class=&quot;comment-respond&quot;&gt;
        &lt;h3 class=&quot;comment-close-title&quot;&gt;&lt;?php _e( 'Comments are closed.', 'textdomain' ); ?&gt;&lt;/h3&gt;
    &lt;/div&gt;
    &lt;?php endif;?&gt;
&lt;/div&gt;&lt;!-- /#comments --&gt;          
        </code></pre>
        
        </div>
    </div>
</div> 