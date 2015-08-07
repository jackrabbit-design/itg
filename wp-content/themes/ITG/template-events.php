<?php /* Template Name: Events */
get_header(); the_post(); ?>
    
    <?php get_template_part('content','page-banner'); ?>
    
      <div id="content" class="pg-content">
    	<div class="container">
        	<div class="container-inner clearfix">
                <aside id="aside" class="pull-left">
                        <div class="hidden-s">
                            <div class="aside-inner-wrap">
                                <nav id="sub-nav">
                                    <h3>NEWS & EVENTS</h3>
                                    <div class="submenu-widget">
                                        <ul>
                                            <li><a href="#">News</a></li>
                                            <li class="current-menu-item"><a href="#">Events</a></li>
                                            <li><a href="#">Awards</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                         </div>
                        
                        <div id="left-cat-box" class="pull-left">
                            <h3>Categories</h3>
                            
                            <div class="checkbox-wrap">
                                <ul>
                                    <li>
                                    	<input type="checkbox" id="ck1" checked>
                                        <label for="ck1"><span style="background-color:#2bb0e9"></span> Category 1</label>
                                    </li>
                                    <li>
                                    	<input type="checkbox" id="ck2" checked>
                                        <label for="ck2"><span style="background-color:#8cc63e"></span> Category 2</label>
                                    </li>
                                    <li>
                                    	<input type="checkbox" id="ck3">
                                        <label for="ck3"><span style="background-color:#f9981d"></span> Category 3</label>
                                    </li>
                                    <li>
                                    	<input type="checkbox" id="ck4" checked>
                                        <label for="ck4"><span style="background-color:#ec068e"></span> Category 4</label>
                                    </li>
                                    <li>
                                    	<input type="checkbox" id="ck5">
                                        <label for="ck5"><span style="background-color:#06c898"></span> Category 5</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>                    
                    
                    <div class="right-main-box pull-right">
                    	<div class="events-top clearfix">
                        	<div class="pull-left">
                            	<h2 class="pg-title">Calender</h2>
                            </div>
                            <div class="pull-right box-two">
                            	<!--
                            	<form>
                                	<ul>
                                    	<li>
                                        	<div class="select-wrap">
                                            	<select>
                                                	<option>Filter by Category</option>
                                                    <option>cat one</option>
                                                    <option>cat two</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </form>-->
                            </div>
                        </div>
                    </div><!-- main right box-->
                    
                    <div class="right-main-box pull-right">
                    	 <div id="calender">
                        	<?php //echo do_shortcode('[events_calendar long_events=1 full=1]'); ?>
                        	<?php echo WP_FullCalendar::calendar('long_events=1'); ?>
                        </div>
                    
                    	<h2 class="pg-title">Upcoming events</h2>
                        <div id="events">
                        <?php $args = 'post_type=event&post_status=publish&posts_per_page=5&paged='.$paged;
                        	$pquery = new WP_Query( $args ); $page = $paged; if($paged == 0){ $page = 1; } 
                            if ( $pquery->have_posts() ) : ?>
                        	<ul class="all-posts">
                        	<?php while ( $pquery->have_posts() ) : $pquery->the_post(); ?>
                            	<li class="item">
                                	<h3><a href="#"><?php the_title(); ?></a></h3>
                                    <div class="cat-links"><?php echo get_the_term_list( $post->ID, 'event-categories', '', ', ', '' ); ?></div>
                                    
                                    <div class="three-column clearfix">
                                    	<div class="col-one pull-left">
                                        	<span>DATE</span>
<?php
$old_date = get_post_meta($post->ID, '_event_start_date', true);              // returns Saturday, January 30 10 02:06:34
$old_date_timestamp = strtotime($old_date);
$new_date = date('F d, Y', $old_date_timestamp); 
$old_time = get_post_meta($post->ID, '_event_start_time', true);              // returns Saturday, January 30 10 02:06:34
$old_time_timestamp = strtotime($old_time);
$new_time = date('h:iA', $old_time_timestamp); 
?>
                                            <strong><?php echo $new_date; ?></strong>
                                            <strong><?php echo $new_time ?></strong>
                                        </div>
                                        
                                        <div class="col-two pull-left">
                                        <?php $location = em_get_location(get_post_meta($post->ID, '_location_id', true)); if($location->location_name != ''){ ?>
                                        	<span>Location</span>
                                            <strong><?php echo $location->location_name; ?></br>
                                            <?php echo $location->location_address; ?></br>
                                            <?php echo $location->location_town; ?>, <?php echo $location->location_state; ?></strong>
                                            <?php } else { ?><br /><?php } ?>
                                        </div>
                                        
                                        <div class="col-three pull-left">
                                        	<?php if(get_field('register_link')): ?><a href="<?php the_field('register_link'); ?>" target="_blank">Register <span>&#62;</span></a><?php endif; ?>
                                            <a href="<?php bloginfo('url'); ?>/ui/scripts/generate_ics.php?e=<?php echo $post->ID; ?>" target="_blank">Add to Calendar <span>&#62;</span></a>
                                            <?php if(get_field('contact_link')): ?><a href="<?php the_field('contact_link'); ?>" target="_blank">Contact <span>&#62;</span></a><?php endif; ?>
                                        </div>
                                    </div> <!--three-column-->
                                    
                                    <div class="short-desc">
                                    	<?php the_excerpt(); ?>
                                        
                                        <a href="<?php the_permalink(); ?>" class="bold uppercase read-more">read more<span>&#62;</span></a>
                                    </div>
                                </li>
                                
                                <?php 
                                        endwhile; 
                                ?>
                            </ul>
                            <?php endif; if($page < $pquery->max_num_pages){ ?>
                        <div class="pag">
                            <a href="<?php echo get_next_posts_page_link(); ?>" class="load-more">Load More <span class="theme-arrow-head-down"></span></a>
                        </div>
                        <?php } wp_reset_postdata(); ?>
                            <!--<a href="#" class="load-more">load more <span class="theme-arrow-head-down"></span></a>-->
                        </div>
                    </div>
                     
                  </div>
              </div>
          </div>
          
<?php get_footer(); ?>