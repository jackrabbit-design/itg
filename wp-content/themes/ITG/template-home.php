<?php /* Template Name: Home */
get_header(); the_post(); ?>
    
    <div id="mainSlider" style="background-image:url(ui/images/banner.jpg)">
    	<div class="overlay"></div>
        <canvas id="canvas"></canvas>
    </div>
    
    <div id="hmslides">
    	<ul id="sliderWrap" class="cycle-slideshow" data-cycle-fx="fade" 
    		data-cycle-pager=".pager"
            data-cycle-prev="#prev"
            data-cycle-next="#next"
            data-cycle-swipe=true
            data-cycle-swipe-fx=scrollHorz
    		data-cycle-slides=">li">
        	<li>
            	<div class="slider-headline">
                	<div class="container">
                    	<div class="container-inner">
                        	<h2>&nbsp;&nbsp;&nbsp;&nbsp;SHIF<br/>TYOU<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RPAR<br/>&nbsp;&nbsp;&nbsp;ADIGM</h2>
                        </div>
                    </div>
                </div><!--slider-headline-->
                
                <div class="slider-info">
                	<div class="container">
                    	<div class="info-box">
                        	<h3>Take the lead.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt nec nibh sit amevt consectetur. Nulla vel urna euismod.</p>
                            <a href="#" class="more">TELL ME MORE</a>
                            
                        </div>
                    </div>
                </div><!--slider-info-->
            </li>
            <li>
            	<div class="slider-headline">
                	<div class="container">
                    	<div class="container-inner">
                        	<h2>&nbsp;&nbsp;&nbsp;&nbsp;SHIF<br/>TYOU<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RPAR<br/>&nbsp;&nbsp;&nbsp;ADIGM</h2>
                        </div>
                    </div>
                </div><!--slider-headline-->
                
                <div class="slider-info">
                	<div class="container">
                    	<div class="info-box">
                        	<h3>Take the lead.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt nec nibh sit amevt consectetur. Nulla vel urna euismod.</p>
                            <a href="#" class="more">TELL ME MORE</a>
                            
                        </div>
                    </div>
                </div><!--slider-info-->
            </li>
            <li>
            	<div class="slider-headline">
                	<div class="container">
                    	<div class="container-inner">
                        	<h2>&nbsp;&nbsp;&nbsp;&nbsp;SHIF<br/>TYOU<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RPAR<br/>&nbsp;&nbsp;&nbsp;ADIGM</h2>
                        </div>
                    </div>
                </div><!--slider-headline-->
                
                <div class="slider-info">
                	<div class="container">
                    	<div class="info-box">
                        	<h3>Take the lead.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt nec nibh sit amevt consectetur. Nulla vel urna euismod.</p>
                            <a href="#" class="more">TELL ME MORE</a>
                            
                        </div>
                    </div>
                </div><!--slider-info-->
            </li>
        </ul>
        
         <div class="slider-control">
        	<div class="inner-wrap">
            	<span class="slider-btn pull-left theme-circle-arrow-prev" id="prev"></span>
            	<span class="slider-btn pull-right theme-circle-arrow-next" id="next"></span>
            </div>
        </div>
        
        <div class="pager-wrap">
        	<div class="container">
            	<div class="pager"></div>
            </div>
        </div>
    </div>
    
    <article id="article">
    	<section id="services">
        	<div class="container">
            	<div class="container-inner">
                	<h2 class="head-line"><?php the_field('section_headline'); ?></h2>
                    <?php if(get_field('section_callouts')): ?>
                    <ul>
                    <?php while(has_sub_field('section_callouts')): ?>
                    	<li>
                        	<h3><?php if(get_sub_field('callout_link') != ''): ?><a href="<?php the_sub_field('callout_link'); ?>"><?php endif; ?><?php the_sub_field('callout_title'); ?><?php if(get_sub_field('callout_link') != ''): ?></a><?php endif; ?></h3>
                            <h4><?php the_sub_field('callout_sub_title'); ?></h4>
                            <p><?php the_sub_field('callout_description'); ?></p>
                            <?php if(get_sub_field('callout_link') != ''): ?><a href="<?php the_sub_field('callout_link'); ?>" class="more"><?php the_sub_field('callout_link_text'); ?> <i class="theme-arrow-head-right"></i></a><?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        
        <section id="markets">
        	<div class="container">
            	<div class="container-inner">
                	<h2 class="head-line"><?php the_field('link_section_headline'); ?></h2>
                	<?php if(get_field('links')): ?>
                	<ul>
                	<?php while(has_sub_field('links')): ?>
                    	<li><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?> <i class="theme-arrow-head-right"></i></a></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        
        <section id="product">
        	<div class="container">
            	<div class="container-inner clearfix">
                	<div class="col-one pull-left">
                    	<p><b><?php the_field('product_section_headline'); ?></b> <br/>
                        <?php the_field('product_section_description'); ?></p>
                    </div>
                    <form class="find-products clearfix" action="<?php echo get_the_permalink(650); ?>" method="GET">
                        <div class="selectbox">
                        <?php $t1 = get_terms('product-role',''); ?>
                        	<select name="role">
                            	<option value="">Role/Department</option>
                            <?php foreach($t1 as $t1b): ?>
                                <option value="<?php echo $t1b->slug; ?>"><?php echo $t1b->name; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="selectbox">
                        <?php $t2 = get_terms('product-firm-type',''); ?>
                        	<select name="type">
                            	<option value="">Firm Type</option>
                            <?php foreach($t2 as $t2b): ?>
                                <option value="<?php echo $t2b->slug; ?>"><?php echo $t2b->name; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="selectbox">
                        <?php $t3 = get_terms('product-asset',''); ?>
                        	<select name="asset">
                            	<option value="">Assets</option>
                            <?php foreach($t3 as $t3b): ?>
                                <option value="<?php echo $t3b->slug; ?>"><?php echo $t3b->name; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="selectbox">
                        <?php $t4 = get_terms('product-region',''); ?>
                        	<select name="region">
                            	<option value="">Region</option>
                            <?php foreach($t4 as $t4b): ?>
                                <option value="<?php echo $t4b->slug; ?>"><?php echo $t4b->name; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
        </section>
        
        
        <section id="leaderShip">
        	<div class="container">
            	<div class="container-inner clearfix">
                	<div class="col-one pull-left">
                    	<h2 class="lrg-head-line">thought leadership</h2>
                    </div>
                    
                    <div class="col-two pull-right">
                    	<div class="clearfix">
                        	<div class="box-one pull-left">
                            	<span class="date">October 2, 2014</span>
                                <h3>The Art and the Science of Leveraging Cloud Infrastructure: Making Cloud Computing Work in the Trading Environment</h3>
                                <p>Having demonstrated an initial, and understandable, wariness of cloud services, trading firms and other players such as proprietary infrastructure that can keep up with this level of growth is comparable to painting the Golden Gate Bridge: a never-ending task.</p>
                            </div>
                            <div class="box-two pull-right">
                            	<div class="photo" style="background-image:url(ui/images/leadership-photo.jpg)"></div>
                                <div class="desc">
                                	<h3>David Meitz</h3>
                                    <h4>Managing Director</h4>
                                    <span>Chief Technology Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-three pull-right">
                    	<ul>
                        	<li>
                            	
                                	<a href="#"><p>Garbage In, Garbage Out: An Optical Tour of the Role of Strategy in Venue Analysis</p></a>
                                    <span class="date">October 2, 2014 </span> <a href="#" class="name">Ian Domowitz</a>
                                
                            </li>
                            <li>
                            	
                                	<a href="#"><p>Measuring the Trading Activity at the Open and Close Auctions Around the Globe</p></a>
                                    <span class="date">October 2, 2014</span> <a href="#" class="name">Milan Borkovec</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="updates">
        	<div class="container">
            	<div class="container-inner clearfix">
                	<div class="col-one pull-left">
                    	<h2 class="lrg-head-line">RECENT UPDATES</h2>
                    </div>
                    
                    <div class="col-two pull-left">
                    	<div class="news">
                        	<ul>
                            	<li>
                                    <a href="#"><h2>Investment Technology Group To Launch Dark Pool For Bond Trading</h3></a>
                                    <span class="news-date">September 3, 2014 </span>
                                    <a href="#" class="cat">News</a>
                                </li>
                                <li>
                                    <a href="#"><h2>ITG Increases Share Repurchase Authorization and Provides Third Quarter 2014 Earnings Guidance</h3></a>
                                    <span class="news-date">October 15, 2014  </span>
                                    <a href="#" class="cat">Press Release</a>
                                </li>
                                <li>
                                	
                                    	<a href="#"><h2>ITG Launches POSIT Marketplace 3.0</h3></a>
                                        <span class="news-date">October 15, 2014 </span>
                                        <a href="#" class="cat">Event</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-three pull-left">
                    	<div class="tweets">
                        	<ul>
                            	<li>
                                	<p>ITG's Rob Boardman speaks with <a href="#">@FTTradingRoom</a> about the dark pool trading caps under MIFID II: <a href="#">http://tinyurl.com/mte8jjb</a> </p>
                                    <span>2 hours ago</span>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="tweeterhandle"><i class="social-twitter"></i> @ITGinc</a>
                    </div>
                </div>
            </div>
        </section>
    </article>
    
<?php get_footer(); ?> 