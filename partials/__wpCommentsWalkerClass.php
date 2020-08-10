<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h1><i class="fa fa-file-code mr-2"></i>CommentsWalkerClass.php</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Theme</li>
                <li class="breadcrumb-item">includes</li>
                <li class="breadcrumb-item">classes</li>
                <li class="breadcrumb-item active" aria-current="page">CommentsWalkerClass.php</li>
            </ol>
        </nav>


        <pre><code class="language-php">&lt;?php
/**
 * Custom comment walker for this theme.
 *
 * @package Package
 * @subpackage SubPackage
 * @since 1.0
 */

if ( ! class_exists( 'Comments_Walker_Comment' ) ) {
	/**
	 * CUSTOM COMMENT WALKER
	 * A custom walker for comments, based on the walker in Twenty Twenty.
	 */
	class textdomain_Walker_Comment extends Walker_Comment {

		/**
		 * Outputs a comment in the HTML5 format.
		 *
		 * @see wp_list_comments()
		 * @see https://developer.wordpress.org/reference/functions/get_comment_author_url/
		 * @see https://developer.wordpress.org/reference/functions/get_comment_author/
		 * @see https://developer.wordpress.org/reference/functions/get_avatar/
		 * @see https://developer.wordpress.org/reference/functions/get_comment_reply_link/
		 * @see https://developer.wordpress.org/reference/functions/get_edit_comment_link/
		 *
		 * @param WP_Comment $comment Comment to display.
		 * @param int        $depth   Depth of the current comment.
		 * @param array      $args    An array of arguments.
		 */
		protected function html5_comment( $comment, $depth, $args ) {


			?&gt;
			&lt;li id=&quot;comment-&lt;?php comment_ID(); ?&gt;&quot; &lt;?php comment_class( $this-&gt;has_children ? 'parent' : '', $comment ); ?&gt;&gt;
                &lt;div id=&quot;div-comment-&lt;?php comment_ID(); ?&gt;&quot; class=&quot;comment-body&quot;&gt;
                    &lt;div class=&quot;comment-author vcard&quot;&gt;
                        &lt;?php
                        $comment_author_url = get_comment_author_url( $comment );
                        $comment_author     = get_comment_author( $comment );
                        $avatar             = get_avatar( $comment, $args['avatar_size'] );
                        if ( 0 !== $args['avatar_size'] ) {
                            if ( empty( $comment_author_url ) ) {
                                echo wp_kses_post( $avatar );
                            } else {
                                printf( '&lt;a href=&quot;%s&quot; rel=&quot;external nofollow&quot; class=&quot;url&quot;&gt;', $comment_author_url ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped --Escaped in https://developer.wordpress.org/reference/functions/get_comment_author_url/
                                echo wp_kses_post( $avatar );
                                echo '&lt;/a&gt;';
                            }
                        }

                        if ( ! empty( $comment_author_url ) ) {
                            printf( '&lt;a href=&quot;%s&quot; rel=&quot;external nofollow&quot; class=&quot;url&quot;&gt;', $comment_author_url ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped --Escaped in https://developer.wordpress.org/reference/functions/get_comment_author_url/
                        }
                        
                        printf(
                            '&lt;cite class=&quot;fn&quot;&gt;%1$s&lt;/cite&gt; ',
                            esc_html( $comment_author ),
                        );

                        if ( ! empty( $comment_author_url ) ) {
                            echo '&lt;/a&gt;';
                        }

                        printf(
                            '&lt;span class=&quot;screen-reader-text says&quot;&gt;%1$s&lt;/span&gt;',
                            __( 'says:', 'textdomain' )
                        );

                        ?&gt;
                    &lt;/div&gt;&lt;!-- .comment-author --&gt;

                    &lt;div class=&quot;comment-meta commentmetadata&quot;&gt;
                        &lt;a href=&quot;&lt;?php echo esc_url( get_comment_link( $comment, $args ) ); ?&gt;&quot;&gt;
                            &lt;?php
                            /* translators: 1: Comment date, 2: Comment time. */
                            $comment_timestamp = sprintf( __( '%1$s at %2$s', 'textdomain' ), get_comment_date( '', $comment ), get_comment_time() );
                            ?&gt;
                            &lt;time datetime=&quot;&lt;?php comment_time( 'c' ); ?&gt;&quot; title=&quot;&lt;?php echo esc_attr( $comment_timestamp ); ?&gt;&quot;&gt;
                                &lt;?php echo esc_html( $comment_timestamp ); ?&gt;
                            &lt;/time&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;&lt;!-- .commentmetadata--&gt;

                    &lt;div class=&quot;comment-content entry-content&quot;&gt;

                    &lt;?php

                    comment_text();

                    if ( '0' === $comment-&gt;comment_approved ) {
                        ?&gt;
                        &lt;p class=&quot;comment-awaiting-moderation&quot;&gt;&lt;?php _e( 'Your comment is awaiting moderation.', 'textdomain' ); ?&gt;&lt;/p&gt;
                        &lt;?php
                    }

                    ?&gt;

                    &lt;/div&gt;&lt;!-- .comment-content --&gt;

                    &lt;?php

					$comment_reply_link = get_comment_reply_link(
						array_merge(
							$args,
							array(
								'add_below' =&gt; 'div-comment',
								'depth'     =&gt; $depth,
								'max_depth' =&gt; $args['max_depth'],
								'before'    =&gt; '&lt;span class=&quot;comment-reply&quot;&gt;',
								'after'     =&gt; '&lt;/span&gt;',
							)
						)
					);


					if ( $comment_reply_link  ) {
						?&gt;

						&lt;div class=&quot;reply&quot;&gt;

							&lt;?php
							if ( $comment_reply_link ) {
								echo $comment_reply_link; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Link is escaped in https://developer.wordpress.org/reference/functions/get_comment_reply_link/
							}
							?&gt;

						&lt;/div&gt;

						&lt;?php
					}
					?&gt;


                &lt;/div&gt;
            &lt;/li&gt;&lt;!-- #comment-## --&gt;



			&lt;?php
		}
	}
}</code></pre>
        
        </div>
    </div>
</div> 