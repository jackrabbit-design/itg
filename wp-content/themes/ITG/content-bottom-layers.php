    <?php 
    while(the_flexible_field("bottom_content")):
    
        if(get_row_layout() == "thought_leadership"): 
    ?>  
                    
                    <?php $layout = get_sub_field('layout'); if($layout == 'simple'){ ?>
                    <section id="pg-leadership">
                    	<div class="container">
                        	<div class="container-inner clearfix">
                            	<div class="col-one pull-left">
                                	<h2 class="lrg-head-line">thought leadership</h2>
                                </div>
                                <div class="col-two pull-left">
                                	<ul>
                                        <li>
                                            <a href="#"><p>Garbage In, Garbage Out: An Optical Tour of the Role of Strategy in Venue Analysis</p></a>
                                            <span class="date">October 2, 2014 </span> <a class="name" href="#">Ian Domowitz</a>
                                        </li>
                                        <li>
                                            <a href="#"><p>Measuring the Trading Activity at the Open and Close Auctions Around the Globe</p></a>
                                            <span class="date">October 2, 2014</span> <a class="name" href="#">Milan Borkovec</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php } else { ?>
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
                                            <span class="date">October 2, 2014 </span> <a href="#" class="name">Ian Domowitz</                               
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
                    <?php } ?>
    
    <?php 
        elseif(get_row_layout() == "recent_updates"):
    ?> 
                    <section id="pg-updates">
                    	<div class="container">
                        	<div class="container-inner clearfix">
                            	<div class="col-one pull-left">
                                	<h2 class="lrg-head-line">RECENT UPDATES</h2>
                                </div>
                                
                                <div class="col-two pull-right">
                                	<ul>
                                        <li>
                                            <a href="#"><h2>Investment Technology Group To Launch Dark Pool For Bond Trading</h2></a>
                                            <span class="news-date">September 3, 2014 </span>
                                            <a class="cat" href="#">News</a>
                                        </li>
                                        <li>
                                            <a href="#"><h2>ITG Increases Share Repurchase Authorization and Provides Third Quarter 2014 Earnings Guidance</h2></a>
                                            <span class="news-date">October 15, 2014  </span>
                                            <a class="cat" href="#">Press Release</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
    
    <?php 
        elseif(get_row_layout() == "awards"):
    ?> 
                    <section id="recent-award" class="three-column">
                    	<div class="container">
                        	<div class="container-inner clearfix">
                            	<div class="col-one pull-left"><h2 class="lrg-head-line">RECENT AWARDS</h2></div>
                                <div class="col-two pull-left">
                                	<h3>Best Customization</h3>
                                    <strong>THE TRADE </strong><span>Leaders in Trading 2014</span>
                                </div>
                                <div class="col-three pull-left">
                                	<img src="ui/images/awward.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </section>
    
    
    <?php   endif; endwhile; ?>