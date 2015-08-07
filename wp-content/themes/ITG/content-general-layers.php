    <?php 
    while(the_flexible_field("page_content")):
    
        if(get_row_layout() == "general_content"): 
    ?>  
                    <div class="pgwp-content">
                        <?php the_sub_field('content'); ?>
                    </div>
    
    <?php 
        elseif(get_row_layout() == "video"):
    ?> 
                    <div class="video-player-wrap clearfix"> 
                    <?php $vscreen = get_sub_field('video_screenshot'); ?>                   	
                        <div class="video-player pull-left" style="background-image:url(<?php if(isset($img['sizes']['team'])){ echo $img['sizes']['team']; } ?>)">
                            <a href="#"><div class="play-btn"><span>&#9654;</span></div></a>
                        </div>
                        
                        <div class="video-title pull-right">
                        	<?php the_sub_field('video_description'); ?>
                        </div>
                     </div><!--video-player-wrap-->
    
    <?php 
        elseif(get_row_layout() == "two_column_content"):
    ?> 
                    <div class="box-wrap clearfix">
                    	<div class="pull-left box">
                        	<?php the_sub_field('left_column_content'); ?>
                        </div>
                        <div class="pull-right box">
                        	<?php the_sub_field('right_column_content'); ?>
                        </div>
                    </div>
    
    
    <?php   endif; endwhile; ?>