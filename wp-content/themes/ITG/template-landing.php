<?php /* Template Name: Landing */
get_header(); the_post(); ?>
    
    <?php get_template_part('content','page-banner'); ?>
    
      <div id="content" class="pg-content">
    	<div class="container">
        	<div class="container-inner clearfix">
                <aside id="aside" class="pull-left">
                        <div class="aside-inner-wrap">
                            <nav id="sub-nav">
                                <h3><?php the_field('sidebar_heading'); ?></h3>
                                <?php the_field('sidebar_description'); ?>
                            </nav>
                        </div>
                    </aside>
                    
                    <?php if(get_field('page_callouts')): ?>
                    <div id="landing" class="right-main-box pull-right">
                    	<ul>
                    	<?php 
                    	    $pn = 1; while(has_sub_field('page_callouts')): 
                            $color = '';
                        	if($pn % 4 == 1){
                                $color = '#8cc63e';	
                        	} else if($pn % 4 == 2){
                        	    $color = '#ec068e';
                        	} else if($pn % 4 == 3){
                        	    $color = '#f9981d';
                        	} else {
                            	$color = '#2bb0e9';
                        	}
                        	$bimg = get_sub_field('page_image'); 
                        	$bimgurl = '';
                        	if(isset($bimg['sizes']['landing'])){ $bimgurl = $bimg['sizes']['landing']; }
                    	?>
                        	<li>
                                <div class="bg-image" style="background-image:url(<?php echo $bimgurl; ?>)">
                                    <span class="number"><?php if($pn < 10){ $num_padded = sprintf("%02d", $pn); echo $num_padded; } else { echo $pn; } ?></span>
                                    <h3><?php the_sub_field('page_title'); ?></h3>
                                    
                                    <div class="hover-box" style="background-color:<?php echo $color; ?>">
                                        <div class="inner-wrap">
                                            <p><?php the_sub_field('page_description'); ?></p>
                                            <a href="<?php the_sub_field('page_link'); ?>">Learn more <span>&#62;</span></a>
                                        </div>
                                    </div>
                                    
                                </div>                                    
                            </li>
                            <?php $pn++; endwhile; ?>
                        </ul>
                    </div>
                     <?php endif; ?>
                  </div>
              </div>
          </div>     
          
<?php get_footer(); ?> 