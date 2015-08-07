                <aside id="aside" class="pull-left hidden-s">
                	<div class="aside-inner-wrap">
                    	<nav id="sub-nav"><!--
                            <h3>SOLUTIONS</h3>
                            <div class="submenu-widget">
                                <ul>
                                    <li><a href="#">Intelligence</a></li>
                                    <li class="current-page-ancestor"><a href="#">Liquidity</a>
                                        <ul>
                                            <li><a href="#">POSIT</a></li>
                                            <li><a href="#">Net</a></li>
                                            <li class="current-menu-item"><a href="#">Algorithms</a></li>
                                            <li><a href="#">Smart Routing</a></li>
                                            <li><a href="#">Trading Services</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Platforms</a></li>
                                    <li><a href="#">Analytics</a></li>
                                </ul>
                            </div>-->
                            
                            <?php if(check_is_subpage() == false){ ?>         
                                <h3><?php bloginfo('name'); ?></h3>
                                <div class="submenu-widget">
                                    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => '', 'menu_class' => 'menu', 'menu_id' => '', 'depth' => 2)); ?>
                                </div>
                            <?php } else { ?>
                                <h3><?php $anc = get_ancestors(get_the_ID(),'page'); $count = count($anc); if($count > 0){ $anc_pg = get_post($anc[($count - 1)]); echo $anc_pg->post_title; } else the_title(); ?></h3>
                                <div class="submenu-widget">
                                    <?php echo jrd_tertiary_menu(array('theme_location' => 'main-menu', 'container' => '', 'menu_class' => 'menu', 'menu_id' => '', 'depth' => 3)); ?>
                                </div>
                            <?php } ?>
                            
                        </nav>
                    </div>
                    
                    <?php if(get_field('promo_banners')): ?>
                    <div class="left-box pull-left promos ">
                    	<div id="promo-slider" >
                        <?php while(has_sub_field('promo_banners')): ?>
                        <div class="promo">
                            <?php $img = get_sub_field('promo_image'); ?>
                        	<div class="top-image" style="background-image:url(<?php if(isset($img['sizes']['promo'])){ echo $img['sizes']['promo']; }?>)"></div>
                            <div class="wrapper">
                            	<h4><?php the_sub_field('promo_headline'); ?></h4>
                                <p><?php the_sub_field('promo_description'); ?></p>
                                <?php if(get_sub_field('promo_link') != ''): ?><a href="<?php the_sub_field('promo_link'); ?>" class="read-more bold uppercase">LEARN more <!-- <span>&#62;</span> --></a><?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile; ?>

                    </div>
                    
                	</div>
                	<div class="promo-pager"></div>
                    <?php endif; ?>
                </aside>