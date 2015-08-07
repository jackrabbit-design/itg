<?php get_header(); the_post(); ?>
    
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
                    
                    
                    <article id="article" class="pull-right">
                		<div class="pgwp-content">
                        	<h2 class="pg-title"><?php the_title(); ?></h2>
                     </article>
                     
                     <section id="resource-content" class="right-main-box pull-right">
                     	<div id="member-desc-row" class="clearfix">
                     	       <?php $dtime = get_the_time('F d, Y'); $posts = get_field('article_authors'); if(isset($posts[0]->ID)){ if(count($posts) == 1){ foreach( $posts as $p ): ?>
                            	<div class="pull-left member-photo">
                                	<?php //the_post_thumbnail('team-thumb'); ?>
                                	<?php echo get_the_post_thumbnail( $p->ID, 'team-thumb' ); ?>
                                </div>
                                <div class="pull-left name-box">
                                	<span><?php echo $dtime; ?></span>
                                    <a href="#<?php the_slug(true,$p->ID); ?>"><?php echo get_the_title($p->ID); ?></a>
                                </div> 
                                <?php endforeach; } else if(count($posts) > 1){ ?>
                                <ul class="member-thumbs">
                                <?php  foreach( $posts as $p ): ?>
                                    <li><a href="#<?php the_slug(true,$p->ID); ?>"><?php echo get_the_post_thumbnail( $p->ID, 'team-thumb' ); ?><span><?php echo get_the_title($p->ID); ?></span></a></li>
                                <?php endforeach;  ?>
                                </ul>
                                <?php } } ?>
                                <div class="pull-right share-article">
                                	<span>Share Article</span>
                                    <a href="#"><i class="social-sharethis-round"></i></a>
                                    <a href="#"><i class="social-twitter-round"></i></a>
                                    <a href="#"><i class="social-facebook-round"></i></a>
                                    <a href="#"><i class="social-linkedin-round"></i></a>
                                    <a href="#"><i class="social-googleplus-round"></i></a>
                                </div>
                            </div><!--member-desc-row-->
                            
                        	<?php if(get_field('sub_headline') != ''): ?>
                            <h6 class="sub-headline"><?php the_field('sub_headline'); ?></h6>
                            <?php endif; ?>
                            <?php get_template_part('content','general-layers'); ?>
                         
                         <!--
                         <div class="bottom-view-link">
                         	<a href="#" class="read-more bold uppercase">VIEW ALL RESOURCES <span>&#62;</span></a>
                         </div>
                         -->
                         
                         <div id="team-members" class="module">
                         	<ul>
                         	<?php $posts = get_field('article_authors'); if(isset($posts[0]->ID)){ foreach( $posts as $post ): setup_postdata($post); ?>
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
                                        <div class="all-content"><?php the_field('bio_content'); ?></div>
                                        <a href="#" class="read-more bio-more">read more <span>&#62;</span></a>
                                        
                                    </div>
                                </li>
                            <?php endforeach; } wp_reset_postdata(); ?>
                            </ul>
                         </div><!-- team members-->
                         
                         <?php comments_template( '', true ); ?> 
                     </section><!-- right main box-->
                  </div>
              </div>
          </div>
          
          
<?php get_footer(); ?>