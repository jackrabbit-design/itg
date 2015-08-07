<?php get_header(); the_post(); $P = $post->ID; global $P; ?>

    <?php get_template_part('content','page-banner'); ?>

    <div id="content" class="pg-content">
    	<div class="container">
        	<div class="container-inner clearfix">
            	<?php get_template_part('content','sidebar-menu-left'); ?>

            	<article id="article" class="pull-right">
            	    <?php if(get_field('sub_title') != ''): ?>
            	    <div class="pgwp-content">
                        <h2 class="pg-title"><?php the_field('sub_title'); ?></h2>
                    </div>
            	    <?php endif; ?>
                	<?php get_template_part('content','general-layers'); ?>
                </article>
            </div>
        </div>
    </div>

    <?php get_template_part('content','bottom-layers'); ?>

<?php get_footer(); ?>
