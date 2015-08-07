<?php /* Template Name: Product Search Results */
get_header(); the_post(); 

$role = '';
if(isset($_GET['role'])){
    $role = $_GET['role'];
}

$type = '';
if(isset($_GET['type'])){
    $type = $_GET['type'];
}

$asset = '';
if(isset($_GET['asset'])){
    $asset = $_GET['asset'];
}

$region = '';
if(isset($_GET['region'])){
    $region = $_GET['region'];
}

?>
    
    <?php get_template_part('content','page-banner'); ?>
    
      <div id="content" class="pg-content">
    	<div class="container">
        	<div class="container-inner clearfix">
                <aside id="aside" class="pull-left">
                        <div class="aside-inner-wrap">
                            <nav id="sub-nav">
                                <h3>CONTACT ITG</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare enim neque, a sollicitudin massa eleifend ac. </p>	
                                
                                <div id="contact-form">
                                	<form>
                                    	<div class="form-body">
                                        	<ul>
                                            	<li class="half-left">
                                                	<label>Name</label>
                                                    <div class="control-wrap">
                                                    	<input type="text" name="" placeholder="" />
                                                    </div>
                                                </li>
                                                <li class="half-right">
                                                	<label>Email Address</label>
                                                    <div class="control-wrap">
                                                    	<input type="text" name="" placeholder="" />
                                                    </div>
                                                </li>
                                                <li class="half-left">
                                                	<label>Company</label>
                                                    <div class="control-wrap">
                                                    	<input type="text" name="" placeholder="" />
                                                    </div>
                                                </li>
                                                <li class="half-right">
                                                	<label>Telephone</label>
                                                    <div class="control-wrap">
                                                    	<input type="text" name="" placeholder="" />
                                                    </div>
                                                </li>
                                                <li class="full-width">
                                                	<label>Comments</label>
                                                    <div class="control-wrap">
                                                    	<textarea></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="bottom">
                                            <button class="submit"><span>Search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </aside>
                    
                    
                    
                    <div class="pull-right right-main-box">
                        
                        <section id="product">
                        	<div class="container">
                            	<div class="container-inner clearfix">
                                    <form class="find-products clearfix" action="<?php echo get_the_permalink(650); ?>" method="GET">
                                        <div class="selectbox">
                                        <?php $t1 = get_terms('product-role',''); ?>
                                        	<select name="role">
                                            	<option value="">Role/Department</option>
                                            <?php foreach($t1 as $t1b): ?>
                                                <option value="<?php echo $t1b->slug; ?>" <?php if($role == $t1b->slug){ ?>selected="selected"<?php } ?>><?php echo $t1b->name; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="selectbox">
                                        <?php $t2 = get_terms('product-firm-type',''); ?>
                                        	<select name="type">
                                            	<option value="">Firm Type</option>
                                            <?php foreach($t2 as $t2b): ?>
                                                <option value="<?php echo $t2b->slug; ?>" <?php if($type == $t2b->slug){ ?>selected="selected"<?php } ?>><?php echo $t2b->name; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="selectbox">
                                        <?php $t3 = get_terms('product-asset',''); ?>
                                        	<select name="asset">
                                            	<option value="">Assets</option>
                                            <?php foreach($t3 as $t3b): ?>
                                                <option value="<?php echo $t3b->slug; ?>" <?php if($asset == $t3b->slug){ ?>selected="selected"<?php } ?>><?php echo $t3b->name; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="selectbox">
                                        <?php $t4 = get_terms('product-region',''); ?>
                                        	<select name="region">
                                            	<option value="">Region</option>
                                            <?php foreach($t4 as $t4b): ?>
                                                <option value="<?php echo $t4b->slug; ?>" <?php if($region == $t4b->slug){ ?>selected="selected"<?php } ?>><?php echo $t4b->name; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <button type="submit">Search Again</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                        
                		
                        <?php $p_args = array('post_type' => 'product','post_status' => 'publish', 'posts_per_page' => 8, 'paged' => $paged);
                        if($role != ''){
                            $p_args = array_merge($p_args, array('product-role' => $role ));
                        }
                        if($type != ''){
                            $p_args = array_merge($p_args, array('product-firm-type' => $type ));
                        }
                        if($asset != ''){
                            $p_args = array_merge($p_args, array('product-asset' => $asset ));
                        }
                        if($region != ''){
                            $p_args = array_merge($p_args, array('product-region' => $region ));
                        }
                        $pquery = new WP_Query( $p_args ); $page = $paged; if($paged == 0){ $page = 1; }
                        if ( $pquery->have_posts() ) : ?>
                        <div class="search-result-top clearfix">
                        	<div class="col-one pull-left">
                            	<p><?php echo $pquery->found_posts; ?> result(s) found</p>
                            </div>
                        </div><!-- search result top-->
                        <div id="search-result">
                        	<ul>
                        	<?php while ( $pquery->have_posts() ) : $pquery->the_post(); ?>
                            	<li>
                                	<h3>Nulla Pellentesque urna Lorem Eget Ultrices Mauris Maecenas</h3>
                                    <p>Maecenas tincidunt accumsan libero, pellentesque porttitor ligula. Integer ac porttitor urna. Pellentesque sagittis <strong>tristique</strong> vitae magna pretium, non consequat quam.</p>
                                    <a class="read-more" href="#">read more <span>&gt;</span></a>
                                </li>
                            <?php $v++; endwhile; ?>
                            </ul>
                        </div><!-- search result-->
                        <?php else: ?><span class="no-result">No products were found matching the selected filters.</span>
                        <?php endif; if($page < $pquery->max_num_pages){ ?>
                        <div class="pag">
                            <a href="<?php echo get_next_posts_page_link(); ?>" class="load-more">Load More <span class="theme-arrow-head-down"></span></a>
                        </div>
                        <?php } wp_reset_postdata(); ?>
                     </div>
                     
                  </div>
              </div>
          </div>
          
<?php get_footer(); ?> 