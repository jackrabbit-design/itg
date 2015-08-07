<?php /* Template Name: Accordions */
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
            	    <?php the_field('content_above_accordions'); ?>
                	<?php if(get_field('accordion_content')): ?>
                	<div class="top-links">
                	    <ul>
                	    <?php $a = 1; while(has_sub_field('accordion_content')): ?>
                	        <li><a href="#accordion<?php echo $a; ?>" class="scrollto theme-arrow-head-right"><?php the_sub_field('accordion_section_title'); ?></a></li>
                	    <?php $a++; endwhile; ?>
                	    </ul>
                	</div>
                	    <?php $a = 1; while(has_sub_field('accordion_content')): ?>
                	    <div class="accordion-section"><a id="accordion<?php echo $a; ?>" name="accordion<?php echo $a; ?>"></a>
                	    <h3><?php the_sub_field('accordion_section_title'); ?></h3>
                	    <ul class="accordions">
                	    <?php while(has_sub_field('accordions')): ?>
                	        <li>
                	            <h6><?php the_sub_field('accordion_label'); ?> <a href="#" class="theme-arrow-head-down">SEE MORE</a></h6>
                	            <div class="accordion-content">
                	                <?php the_sub_field('accordion_description'); ?>
                	            </div>
                	        </li>
                	    <?php endwhile; ?>
                	    </ul>
                	    </div>
                	    <?php $a++; endwhile; ?>
                	<?php endif; ?>
                </article>                
            </div>
        </div>
    </div>
    
    <?php get_template_part('content','bottom-layers'); ?>
    
<?php get_footer(); ?> 