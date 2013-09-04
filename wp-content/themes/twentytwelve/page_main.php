<?php
/*
  Template Name: Main
 */
get_header();
?>

<div class="row-fluid">

    
    <div class="span9">
        
        <?php /* The loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <h2 class="entry-title" style="font-size: 3em;
                        margin: 0 0 0.5em;"><?php the_title(); ?></h2>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentythirteen') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
                </div><!-- .entry-content -->

                <<footer class="entry-meta">
                <?php edit_post_link(__('Edit', 'twentythirteen'), '<span class="edit-link">', '</span>'); ?>
                </footer><!-- .entry-meta -->
            </article><!-- #post -->

            <?php comments_template(); ?>
        <?php endwhile; ?> 
       
    </div>
    <div class="span3">
        <?php get_sidebar('right'); ?>
    </div>
    
</div>

<?php wpbeginner_numeric_posts_nav(); ?>
<?php get_footer(); ?>


