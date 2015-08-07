    <footer id="footer">
    	<div class="container">
        	<div class="container-inner">
            	<div class="clearfix rw-one">
                    <div class="col-two pull-right">
                    <?php 
                            query_posts('post_type=fact&post_status=publish&order=rand&posts_per_page=1');
                            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    ?>
                        <h2><?php the_field('fact_content'); ?></h2>
                    <?php 
                            endwhile; else: endif; wp_reset_query(); 
                    ?>
                    </div>
                    <div class="col-one pull-left">
                        <?php if(get_field('footer_email_address') != ''): ?><a href="mailto:<?php the_field('footer_email_address'); ?>" class="mail"><?php the_field('footer_email_address'); ?></a><?php endif; ?>
                        
                        <nav id="footer-nav">
                            <ul>
                                <li><a href="#">Locations</a>
                                    <ul>
                                        <li><a href="#">Asia Pacific</a></li>
                                        <li><a href="#">Canada</a></li>
                                        <li><a href="#">EMEA</a></li>
                                        <li><a href="#">Latin America</a></li>
                                        <li><a href="#">United States</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Solutions</a>
                                    <ul>
                                        <li><a href="#">Intelligence</a></li>
                                        <li><a href="#">Liquidity</a></li>
                                        <li><a href="#">Platforms</a></li>
                                        <li><a href="#">Analytics</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Microsites</a>
                                    <ul>
                                        <li><a href="#">Visual Insight</a></li>
                                        <li><a href="#">Innovation</a></li>
                                        <li><a href="#">Transparency</a></li>
                                        <li><a href="#">Analytics Incubator</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">subsidiaries</a>
                                    <ul>
                                        <li><a href="#">Market Research </a></li>
                                        <li><a href="#">TriAcct</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                  </div><!-- rw-one-->
                  
                  <div class="rw-two clearfix">
                  	<div class="pull-left col-one">
                    	<a href="#">Support </a>
                        <a href="#">Compliance</a>
                        <a href="#">Site Map</a>
                        <a href="#">Terms of Use</a>
                        
                        <div class="copy-right"> &copy; <?php echo date('Y'); ?> <?php the_field('copyright_text','options'); ?></div>
                    </div>
                    
                    <div class="col-two pull-right">
                    	<a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Website Design</a> by <a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Jackrabbit</a>
                    </div>
                  </div>
            </div>
        </div>
    </footer>
        
    <?php wp_footer(); ?> 
    <script type="text/javascript">
    	animatedBanner();
    </script>   
</body>
</html>