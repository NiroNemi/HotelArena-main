<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?>
      <div class="r_title">
          <h3><?php comments_number( esc_html__('Comments (0)', 'charlostin'), esc_html__('Comment (1)', 'charlostin'), esc_html__('Comments (%)', 'charlostin')); ?></h3>
      </div>
      <div class="s_comment_list_inner">
          <?php wp_list_comments('callback=charlostin_theme_comment'); ?>
      </div>
      <?php
              // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <div class="text-center">
          <ul class="pagination">
            <li>
              <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
              paginate_comments_links( array(
                'prev_text' => wp_specialchars_decode(esc_html__('<i class="fa fa-angle-left"></i>','charlostin'),ENT_QUOTES),
                 'next_text' => wp_specialchars_decode(esc_html__('<i class="fa fa-angle-right"></i>','charlostin'),ENT_QUOTES)
               ));  ?>
            </li> 
          </ul>
        </div>
      <?php endif; // Check for comment navigation ?>
<?php endif; ?>
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'contactForm',        
                'class_form' => 'row contact_us_form',                         
                'title_reply'=> esc_html__( 'Leave a comment', 'charlostin' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="'.esc_attr__('Your name', 'charlostin').'" name="author" id="name">
                                  </div>',
                    'email' => '<div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="'.esc_attr__('Email address', 'charlostin').'" name="email" id="email2">
                                </div>', 
                                                              
                ) ),   
                'comment_field' => '<div class="form-group col-md-12">
                                        <textarea name="comment"'.$aria_req.' class="form-control" row="1" placeholder="'.esc_attr__('Comment', 'charlostin').'"></textarea>
                                    </div>',                    
                 'label_submit' => ''.esc_attr__('submit', 'charlostin').'',
                 'class_submit' => 'btn submit_btn form-control',
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
?>
<?php if ( comments_open() ) : ?>
  <div class="s_comment_area">
    <?php comment_form($comment_args); ?>
  </div>
<?php endif; ?> 