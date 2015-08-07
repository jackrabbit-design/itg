<?php 

/* ========================================================================= */
/* !WORDPRESS COMMENTS HTML FUNCTION */
/* ========================================================================= */

function jrd_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;  
    //print_r($comment);

    /* Check if post is by Author for special styling */
    $isByAuthor = false; 
    if($comment->comment_author_email == get_the_author_meta('email')) {  
      $isByAuthor = true;  
    }  
?>  

<li class="clearfix">
    <div class="author">
        <h6><?php echo $comment->comment_author; ?></h6>
        <p class="timestamp"><?php printf(__('%1$s at %2$s'), get_comment_date('n/j/Y'),  get_comment_time('g:ia')); ?></p>
    </div>
    <div class="commenttext">
        <?php comment_text(); ?>
    </div>
</li>

<?php }