<?php /* Template Name: Product Detail */
get_header(); the_post(); ?>
    
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
                    
                    <?php if(get_field('tabs')): ?>
                    <section id="product-tabs" class="pull-right">
                    	<h3><?php the_sub_field('section_title'); ?></h3>
                        <div id="tabselect-wrap" class="clearfix">
                            <nav class="tabs-select">
                                <div class="drop-wrap visible-s">
                                    <span class="m-title">a</span>
                                    <span class="select-arrow"></span>
                                </div>
                                
                                <ul>
                                <?php $t = 1; while(has_sub_field('tabs')): ?>
                                    <li><a href="#tab<?php echo $t; ?>" class="theme-arrow-head-right"><?php the_sub_field('tab_label'); ?></a></li>
                                <?php $t++; endwhile; ?>
                                </ul>
                            </nav>
                            
                            <div class="tab-container">
                            <?php $t = 1; while(has_sub_field('tabs')): ?>
                                <div id="tab<?php echo $t; ?>" class="tab-content">
                                	<?php if(get_sub_field('tab_content_title') != ''): ?><h3><?php the_sub_field('tab_content_title'); ?></h3><?php endif; ?>
                                    <?php the_sub_field('tab_content'); ?>
                                </div>
                            <?php $t++; endwhile; ?>
                            </div>
                        </div>
                    </section>
					<?php endif; ?>
                    
                  </div>
              </div>
          </div>
          
          <?php get_template_part('content','bottom-layers'); ?>
          
<?php get_footer(); ?> 