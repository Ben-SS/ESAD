<?php
/*
The comments page for Bones
*/

// don't load it if you can't comment
if ( post_password_required() ) {
  return;
}

?>

<?php // You can start editing here. ?>

  <?php if ( have_comments() ) : ?>





  

    <h2 id="comments-title"><?php comments_number();?></h2>

    <section class="commentlist">
      <?php
        wp_list_comments( array(
          'style'             => 'ul',
          'short_ping'        => true,
          'max_depth'         => '5',
          'avatar_size'       => 35,
          'callback'          => '',
          'type'              => 'all',
          'page'              => '',
          'per_page'          => '',
          'reverse_top_level' => null,
          'reverse_children'  => '',
          'format'            => 'html5'
        ) );
      ?>
    </section>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    	<nav class="navigation comment-navigation" role="navigation">
      	<div class="comment-nav-prev"><?php previous_comments_link( __( '&larr; Previous Comments', 'bonestheme' ) ); ?></div>
      	<div class="comment-nav-next"><?php next_comments_link( __( 'More Comments &rarr;', 'bonestheme' ) ); ?></div>
    	</nav>
    <?php endif; ?>

    <?php if ( ! comments_open() ) : ?>
    	<p class="no-comments"><?php _e( 'Comments are closed.' , 'bonestheme' ); ?></p>
    <?php endif; ?>

  <?php endif; ?>

  <?php

  $args = array(
  'id_form'           => 'commentform',
  'class_form'        => 'comment-form',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Leave a Reply' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => '',
  'label_submit'      => __( 'Post Comment' ),
  'format'            => 'html5',

  'comment_field' =>  '<p class="comment-form-comment"><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

  'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-info">%4$s</button>'
);

  comment_form($args);


?>

