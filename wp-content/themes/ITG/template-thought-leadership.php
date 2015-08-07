<?php /* Template Name: Thought Leadership */
get_header(); the_post(); 

$sterm = '';
if(isset($_GET['sterm'])){
    $sterm = $_GET['sterm'];
}

$ntype = '';
if(isset($_GET['ntype'])){
    $ntype = $_GET['ntype'];
}

$ntopic = '';
if(isset($_GET['ntopic'])){
    $ntopic = $_GET['ntopic'];
}

$nmarket = '';
if(isset($_GET['nmarket'])){
    $nmarket = $_GET['nmarket'];
}

$nregion = '';
if(isset($_GET['nregion'])){
    $nregion = $_GET['nregion'];
}
?>
    
    <?php get_template_part('content','page-banner'); ?>
    
    <div id="content">
    	<div class="container">
        	<div class="container-inner clearfix">
            	<aside id="aside" class="pull-left">
                	<div class="aside-inner-wrap">
                    	<h3>Filters</h3>
                        
                        <div id="resource-filters">
                        	<form method="GET" action="<?php the_permalink(); ?>">
                            	<div class="form-body">
                                	<ul>
                                    	<li class="full-width">
                                        	<label>Search</label>
                                            <div class="control-wrap">
                                            	<input type="text" placeholder="Enter search term..." name="sterm" />
                                            </div>
                                        </li>
                                        <li class="half-left">
                                        	<label>Type</label>
                                            <div class="select-wrap">
                                            	<select name="ntype">
                                                	<option value="">Show All</option>
                                                	<?php $types = get_terms( 'news-type', '' ); foreach ( $types as $type ) { ?>
                                                	    <option value="<?php echo $type->slug; ?>" <?php if($ntype == $type->slug){ ?>selected="selected"<?php } ?>><?php echo $type->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="half-right">
                                        	<label>Topic</label>
                                            <div class="select-wrap">
                                            	<select name="ntopic">
                                                	<option value="">Show All</option>
                                                	<?php $topics = get_terms( 'news-topic', '' ); foreach ( $topics as $topic ) { ?>
                                                	    <option value="<?php echo $topic->slug; ?>" <?php if($ntopic == $topic->slug){ ?>selected="selected"<?php } ?>><?php echo $topic->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="half-left">
                                        	<label>Market</label>
                                            <div class="select-wrap">
                                            	<select name="nmarket">
                                                	<option value="">Show All</option>
                                                	<?php $markets = get_terms( 'news-market', '' ); foreach ( $markets as $market ) { ?>
                                                	    <option value="<?php echo $market->slug; ?>" <?php if($nmarket == $market->slug){ ?>selected="selected"<?php } ?>><?php echo $market->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="half-right">
                                        	<label>Region</label>
                                            <div class="select-wrap">
                                            	<select name="nregion">
                                                	<option value="">Show All</option>
                                                	<?php $regions = get_terms( 'news-region', '' ); foreach ( $regions as $region ) { ?>
                                                	    <option value="<?php echo $region->slug; ?>" <?php if($nregion == $region->slug){ ?>selected="selected"<?php } ?>><?php echo $region->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom">
                                	<button class="submit" type="submit"><span>Search</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
                
                <article id="article" class="pull-right">
                <!--
                	<div class="pgwp-content">
                    	<h2 class="pg-title">Management</h2>
                    </div> -->
                    
                    <div id="resource">
                    <?php
                    $args = array('post_status' => 'publish', 'post_type' => 'news-article', 'posts_per_page' => 5, 'paged' => $paged); 
                    if($sterm != ''){
                        $args = array_merge($args, array('s' => $sterm ));
                    }
                    if($ntype != ''){
                        $args = array_merge($args, array('news-type' => $ntype ));
                    }
                    if($ntopic != ''){
                        $args = array_merge($args, array('news-topic' => $ntopic ));
                    }
                    if($nmarket != ''){
                        $args = array_merge($args, array('news-market' => $nmarket ));
                    }
                    if($nregion != ''){
                        $args = array_merge($args, array('news-region' => $nregion ));
                    }
                    $pquery = new WP_Query( $args ); $page = $paged; if($paged == 0){ $page = 1; } 
                    if ( $pquery->have_posts() ) : $i = 1; ?>
                    	<ul class="all-posts">
                    	<?php while ( $pquery->have_posts() ) : $pquery->the_post(); ?>
                        	<li class="item">
                            	<div class="top pull-right">
                                	<div class="rw-one">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                     <div class="rw-two"><strong><?php the_time('F d, Y'); ?> </strong><?php $posts = get_field('article_authors'); if(isset($posts[0]->ID)){ foreach( $posts as $p ): ?> <a href="<?php echo get_the_permalink(54); ?>#<?php the_slug(true,$p->ID); ?>"><?php echo get_the_title($p->ID); ?></a><?php endforeach; } ?></div>
                                </div>
                                 <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'team'); ?>
                                 <div class="pull-left photo" style="background-image:url(<?php if(isset($img[0])){ echo $img[0]; } ?>)"></div>
                                 
                                 <div class="desc pull-right">
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="read-more">read more <span>&#62;</span></a>
                                    
                                </div>
                            </li>
                        <?php $i++; endwhile; ?>
                        </ul>
                        
                        <?php endif; if($page < $pquery->max_num_pages){ ?>
                        <div class="pag">
                            <a href="<?php echo get_next_posts_page_link(); ?>" class="load-more">Load More <span class="theme-arrow-head-down"></span></a>
                        </div>
                        <?php } wp_reset_postdata(); ?>
                        <!--<a class="load-more" href="#">load more <span class="theme-arrow-head-down"></span></a>-->
                    </div>
                </article>
                
            </div>
        </div>
    </div>
    
    
<?php get_footer(); ?>