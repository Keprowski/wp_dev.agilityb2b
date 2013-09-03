<?php
/*
  Template Name: Post
 */
get_header();
?>

<div class="row-fluid">
    
    <div class="span9">
        $myposts = get_posts('');
        foreach($myposts as $post) :
        setup_postdata($post);
        ?>
        <div class="post-item">
            <div class="post-info">
                <h2 class="post-title">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <p class="post-meta">Posted by <?php the_author(); ?></p>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php comments_template(); ?>
       
        wp_reset_postdata(); ?>
    </div>
    <div class="span3">
<?php get_sidebar('right'); ?>
    </div>
    
</div>
<?php get_footer(); ?>