<?php /* Template Name: Team */ get_header(); the_post(); ?>

    <?php get_template_part('content','page-banner'); ?>

    <div id="content">
    	<div class="container">
        	<div class="container-inner clearfix">
            	<?php get_template_part('content','sidebar-menu-left'); ?>

                <article id="article" class="pull-right">
                	<div class="pgwp-content">
                    	<h2 class="pg-title">All Team Members</h2>
                    </div>

                    <?php
                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'team-member',
                        'team-category' => array('board-of-directors','managing-team'),
                        'meta_key' => 'last_name',
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'posts_per_page' => 5,
                        'paged' => $paged);
                    $pquery = new WP_Query( $args ); $page = $paged; if($paged == 0){ $page = 1; };
                    if ( $pquery->have_posts() ) : $i = 1; ?>
                    <div id="team-members">
                    	<ul class="all-posts">
                    	<?php while ( $pquery->have_posts() ) : $pquery->the_post(); ?>
                        	<li id="<?php the_slug(); ?>" class="item">
                            	<div class="top pull-right">
                                	<div class="rw-one">
                                        <h2><?php the_title(); ?></h2> <?php if(get_field('linked_in_url')): ?><a href="<?php the_field('linked_in_url'); ?>" class="linkedin"><i class="social-linkedin-round"></i></a><?php endif; ?>
                                    </div>
                                    <div class="rw-two"><strong><?php echo get_the_term_list( $post->ID, 'team-category', '', ', ', '' ); ?></strong> <span><?php the_field('job_title'); ?></span></div>
                                </div>
                                 <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'team'); ?>
                                 <div class="pull-left photo" style="background-image:url(<?php if(isset($img[0])){ echo $img[0]; } ?>)"></div>

                                 <div class="desc pull-right">
                                    <?php the_field('intro_content'); ?>
                                    <div class="all-content">
                                        <?php the_field('bio_content'); ?>
                                        <?php if(get_field('accolades')): ?>
                                        <div class="accolades">
                                            <?php while(has_sub_field('accolades')): ?>
                                                <span><?php the_sub_field('accolade'); ?></span>
                                            <?php endwhile; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <a href="#" class="read-more bio-more">read more <span>&#62;</span></a>

                                </div>
                            </li>
                        <?php $i++; endwhile; ?>
                        </ul>

                        <?php if($page < $pquery->max_num_pages){ ?>
                        <div class="pag">
                            <a href="<?php echo get_next_posts_page_link(); ?>" class="load-more">Load More <span class="theme-arrow-head-down"></span></a>
                        </div>
                        <?php } wp_reset_postdata(); ?>
                    </div><?php endif; ?>
                </article>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
