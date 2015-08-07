<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/><meta name="MSSmartTagsPreventParsing" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no target-densitydpi=device-dpi" />
    <title><?php wp_title(); ?></title>
    <link type="text/plain" rel="author" href="<?php bloginfo('url'); ?>/authors.txt" />
    <link type="image/x-icon" rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!--[if lte IE 7]><iframe src="<?php bloginfo('url'); ?>/unsupported.html" frameborder="0" scrolling="no" id="no_ie6"></iframe><![endif]-->

	<header id="header">
    	<div class="container">
        	<div class="container-inner clearfix">
            
                <?php if(is_front_page()){ ?>
            	<h1 id="logo" class="pull-left is-home">
                	<a href="<?php bloginfo('url'); ?>/">
                    	<img src="<?php bloginfo('url'); ?>/ui/images/logo.png" alt="" />
                    </a>
                </h1>      
                <?php } else { ?>
                <h1 id="logo" class="pull-left innerpg">
                	<a href="<?php bloginfo('url'); ?>/">
                    	<img src="<?php bloginfo('url'); ?>/ui/images/logo-innerpg.png" alt="" />
                    </a>
                </h1>
                <?php } ?>
                
                <div id="toggle_menu_btn"> </div>
                
                <div class="pull-right header-top-right desktop">
                	<div class="inner-wrap clearfix">
                    	
                    	<div class="languages-box-wrap pull-right">
                            <span id="languageToggle">Languages <i class="theme-arrow-head-down"></i></span>
                                <?php wp_nav_menu( array('theme_location' => 'language-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                        </div> <!--languages-box-wrap-->
                        <div class="languages-box-wrap pull-right mircro-desk">
                            <span id="mircoDesktop">Knowledge Centers<i class="theme-arrow-head-down"></i></span>
                                <?php wp_nav_menu( array('theme_location' => 'microsite-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                        </div> <!--languages-box-wrap-->
                        <div class="top-nav-wrap pull-right">
                            <div class="clearfix">
                                <div class="top-nav pull-left">
                                    <?php wp_nav_menu( array('theme_location' => 'utility-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                                </div><!--top-nav-->
                                
                                <div class="pull-left social-links">
                                    <a href="#" title=""><i class="social-twitter-round"></i></a>
                                    <a href="#" title=""><i class="social-facebook-round"></i></a>
                                    <a href="#" title=""><i class="social-linkedin-round"></i></a>
                                    <a href="#" title=""><i class="social-googleplus-round"></i></a>
                                </div><!--social-links-->
                                
                                <div class="search pull-left">
                                    <span id="searchIcon"></span>
                                    <div class="search-form">
                                        <form>
                                            <ul>
                                                <li>
                                                    <input type="text" name="s" placeholder="Search" />
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div><!--search-->
                            </div>                          
                        </div><!--top-nav-wrap-->
                        
                        
                        <div class="main-nav-wrap pull-right">
                        	<div class="clearfix">
                                <nav id="nav" class="pull-left">
                                    <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 2 )); ?>
                                </nav>
                            
                                <?php /* <div class="visual-insight pull-right">
                                    <div class="inner-wrap">
                                        <span id="visualIcon"></span>
                                        <?php wp_nav_menu( array('theme_location' => 'microsite-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                                    </div>
                                </div> */ ?>
                            </div>
                        </div><!-- main nav wrap -->                        
                    </div>
                </div><!-- desktop -->
                
                
                <div class="mobile" id="mobile_menu">
                	<div class="inner-wrap">
                    	<div class="languages-box-wrap">
                           <span id="languageMobToggle" class="language-toggle">Languages <i class="theme-arrow-head-down"></i></span>
                                <?php wp_nav_menu( array('theme_location' => 'language-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                       		</div> <!--languages-box-wrap-->

                       		
						
                        
                        
                        <nav id="mobilenav">
                            <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 2 )); ?>
                        </nav>
                        <div class="languages-box-wrap micro">
                           <span id="microMobToggle" class="language-toggle">Knowledge Centers<i class="theme-arrow-head-down"></i></span>
                                <?php wp_nav_menu( array('theme_location' => 'microsite-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                       		</div> <!--languages-box-wrap-->
                      <!--  <div class="visual-insight">-->
                        	<?php //wp_nav_menu( array('theme_location' => 'microsite-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                      <!--   </div>visual-insight-->
                        
                        <div class="top-nav">
                            <?php wp_nav_menu( array('theme_location' => 'utility-menu', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'depth' => 1 )); ?>
                        </div><!--top-nav-->
                        
                        <div class="social-links">
                            <a href="#" title=""><i class="social-twitter-round"></i></a>
                            <a href="#" title=""><i class="social-facebook-round"></i></a>
                            <a href="#" title=""><i class="social-linkedin-round"></i></a>
                            <a href="#" title=""><i class="social-googleplus-round"></i></a>
                        </div><!--social-links-->
                        
                        <div class="m-search">
                        	<div class="search-wrap clearfix">
                            	<i class="search-icon pull-left"></i>
                            	<div class="search-form pull-left">
                                	<form action="<?php bloginfo('url'); ?>" method="GET">
                                        <ul>
                                            <li>
                                                <input type="text" name="s" placeholder="Search" />
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--mobile_menu-->
                
            </div>
        </div>
    </header>