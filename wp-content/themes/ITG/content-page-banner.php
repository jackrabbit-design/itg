    <?php global $P;
        $alt_title = '';
        if($P != ''){
            $banner = get_field('page_banner',$P);
            $alt_title = get_the_title($P);
        } else if(get_field('page_banner') != ''){
            $banner = get_field('page_banner');
        } else if('blog-post' == get_post_type()){
            $banner = get_field('page_banner',57);
            $alt_title = get_the_title(57);
        } else if('news-article' == get_post_type()){
            $banner = get_field('page_banner',16);
            $alt_title = get_the_title(16);
        } else if('event' == get_post_type()){
            $banner = get_field('page_banner',9);
            $alt_title = get_the_title(9);
        }
        if(empty($banner)) {
            $banner = get_field('interior_page_banner_default','options');
        } ?>

    <div id="pgBanner" style="background-image:url(<?php if(isset($banner['sizes']['page-banner'])){ echo $banner['sizes']['page-banner']; } ?>)">
    	<div class="container">
        	<div class="container-inner">
            	<h2><?php $id = get_queried_object_id(); if($alt_title != ''){ echo $alt_title; } else if($id == 0){ $thispost = get_post( 140 ); echo $thispost->post_title; } else if(is_tax()){ $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; }else if(get_field('page_title_override') != ''){ the_field('page_title_override'); } else if(get_field('title_image') != ''){ ?><img src="<?php the_field('title_image'); ?>" alt="" /><?php } else { the_title(); } ?></h2>
            </div>
        </div>
    </div>
