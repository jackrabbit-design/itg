/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($){

    /* ====== Twitter API Call ============================================= 
        Note: Script Automatically adds <li> before and after template. Don't forget to setup Auth info in /twitter/index.php */
    /*
    $('#tweets-loading').tweet({       
        modpath: '/path/to/twitter/', // only needed if twitter folder is not in root
        username: 'jackrabbits',
        count: 1,
		template: '<p>{text}</p><p class="tweetlink">{time}</p>' 
	});
    */
    _biomore();
	_searchToggle();
	_languageBox();
	_sliderHeight();
	_selectStyle();
	_mobilemenu();
	_tabSelect();
	_landing();
	_infiniteScroll();
	_accordions();
});

function _biomore(){
	$(document).on('click', '.bio-more', function(e){
	    e.preventDefault();
	    $(this).prev().toggleClass('open');
		$(this).prev().slideToggle('fast');
		if($(this).prev().hasClass('open')){
    		$(this).html('Read Less <span>&gt;</span>');
		} else { $(this).html('Read More <span>&gt;</span>'); }
	});
}

function _languageBox(){
	$('.language-toggle').click( function(){
		$(this).parent().toggleClass('open');
		$('.languages-box-wrap ul').slideToggle('fast');
	});
}

function _searchToggle(){
	$('#searchIcon').click( function(){
		$(this).parent().toggleClass('open');
		$('.search input').focus();
	});
}


function _sliderHeight(){
	var wh = $(window).height();
	$('#sliderWrap > li').height(wh);
}

function _selectStyle(){
	$('#product select').chosen({
		"disable_search": true,
		 width: '100%'
	});
}

function _mobilemenu(){
	var menubox 	= $('#mobile_menu');//main menu wrap
	var menu_btn	= $("#toggle_menu_btn"); // menu btn
	
	// toggle menu arrow 
	var dropDownicon	= 	"theme-caret-right";
	var dropUpicon		= 	"theme-caret-down";
	var arrowClass		=	dropDownicon+" dropdwn-btn";
	
	function hidesub_menu(){
		$('#mobilenav ul li').each(function() {
			$(this).children( "ul" ).hide().removeClass("active-submenu");
			$(this).children( "span" ).addClass(dropDownicon).removeClass(dropUpicon);
		});
	}	
	
	menu_btn.click(function(e){ 
		$(this).toggleClass("exit");
		hidesub_menu();
		e.stopImmediatePropagation();
		menubox.slideToggle();
		menubox.toggleClass('opened');
	});
	
	menubox.click(function(e){
		e.stopImmediatePropagation();
	});
	
	$( 'html,body' ).click(function(e){
		menu_btn.removeClass("active");
		if(menubox.hasClass('opened')){
			hidesub_menu();
			menubox.removeClass('opened');
			menubox.slideToggle();
		}
	});
	
	//click inner links
	
	$( "#mobilenav ul li" ).each(function() {
		$(this).has( "ul" ).addClass( "menu-parent" ).append("<span class='dropdwn-btn'></span>" );
		var sub_menu	=	$(this).children( "ul" );
		$(this).children( 'span' ).click(function(event){
			var current_submenu	=	$(this).parent().children( "ul" );
			var sub_menu		=	$( ".menu-parent ul" );
			$(".dropdwn-btn").addClass(dropDownicon).removeClass(dropUpicon);
			
			if( current_submenu.hasClass("active-submenu") ){
				$(this).removeClass(dropUpicon).addClass(dropDownicon);
				sub_menu.slideUp();
				sub_menu.removeClass("active-submenu");
			} else {
				$(this).removeClass(dropDownicon).addClass(dropUpicon);
				sub_menu.removeClass("active-submenu");
				$(this).parent().children( "ul" ).addClass("active-submenu");
				sub_menu.slideUp();
				current_submenu.slideDown();
			}
		});
		
	});
}
$(window).resize(function(){
	if( $(window).innerWidth() > 767 ){
		$("#mobile_menu").removeAttr("style");
		$("#toggle_menu_btn").removeClass("exit");
	}
});

function animatedBanner(){
	var width, height, largeHeader, canvas, ctx, points, target, animateHeader = true;
    largeHeader = document.getElementById('mainSlider');
        if(largeHeader != null){
    // Main
    initHeader();
    initAnimation();
    addListeners();
}
    function initHeader() {
        width = window.innerWidth;
        height = window.innerHeight;
        target = {x: width/2, y: height/2};

        largeHeader = document.getElementById('mainSlider');
        largeHeader.style.height = height+'px';
        
        canvas = document.getElementById('canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');
        
        // create points
        points = [];
        for(var x = 0; x < width; x = x + width/20) {
            for(var y = 0; y < height; y = y + height/20) {
                var px = x + Math.random()*width/20;
                var py = y + Math.random()*height/20;
                var p = {x: px, originX: px, y: py, originY: py };
                points.push(p);
            }
        }

        // for each point find the 5 closest points
        for(var i = 0; i < points.length; i++) {
            var closest = [];
            var p1 = points[i];
            for(var j = 0; j < points.length; j++) {
                var p2 = points[j]
                if(!(p1 == p2)) {
                    var placed = false;
                    for(var k = 0; k < 5; k++) {
                        if(!placed) {
                            if(closest[k] == undefined) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }

                    for(var k = 0; k < 5; k++) {
                        if(!placed) {
                            if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
        }

        // assign a circle to each point
        for(var i in points) {
            var c = new Circle(points[i], 2+Math.random()*2, 'rgba(255,255,255,0.3)');
            points[i].circle = c;
        }
    }

    // Event handling
    function addListeners() {
        /*if(!('ontouchstart' in window)) {
            window.addEventListener('mousemove', mouseMove);
        }*/
        window.addEventListener('scroll', scrollCheck);
        window.addEventListener('resize', resize);
    }

   /* function mouseMove(e) {
        var posx = posy = 0;
        if (e.pageX || e.pageY) {
            posx = e.pageX;
            posy = e.pageY;
        }
        else if (e.clientX || e.clientY)    {
            posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
        target.x = posx;
        target.y = posy;
    }*/

    function scrollCheck() {
        if(document.body.scrollTop > height) animateHeader = false;
        else animateHeader = true;
    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        largeHeader.style.height = height+'px';
        canvas.width = width;
        canvas.height = height;
    }

    // animation
    function initAnimation() {
        animate();
        for(var i in points) {
            shiftPoint(points[i]);
        }
    }

    function animate() {
        if(animateHeader) {
            ctx.clearRect(0,0,width,height);
            for(var i in points) {
                // detect points in range
                if(Math.abs(getDistance(target, points[i])) < 4000) {
                    points[i].active = 0.3;
                    points[i].circle.active = 0.6;
                } else if(Math.abs(getDistance(target, points[i])) < 20000) {
                    points[i].active = 0.1;
                    points[i].circle.active = 0.3;
                } else if(Math.abs(getDistance(target, points[i])) < 40000) {
                    points[i].active = 0.02;
                    points[i].circle.active = 0.1;
                } else {
                    points[i].active = 0;
                    points[i].circle.active = 0;
                }

                drawLines(points[i]);
                points[i].circle.draw();
            }
        }
        requestAnimationFrame(animate);
    }

    function shiftPoint(p) {
        TweenLite.to(p, 1+1*Math.random(), {x:p.originX-50+Math.random()*100,
            y: p.originY-50+Math.random()*100, ease:Circ.easeInOut,
            onComplete: function() {
                shiftPoint(p);
            }});
    }

    // Canvas manipulation
    function drawLines(p) {
        if(!p.active) return;
        for(var i in p.closest) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p.closest[i].x, p.closest[i].y);
            ctx.strokeStyle = 'rgba(156,217,249,'+ p.active+')';
            ctx.stroke();
        }
    }

    function Circle(pos,rad,color) {
        var _this = this;

        // constructor
        (function() {
            _this.pos = pos || null;
            _this.radius = rad || null;
            _this.color = color || null;
        })();

        this.draw = function() {
            if(!_this.active) return;
            ctx.beginPath();
            ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'rgba(156,217,249,'+ _this.active+')';
            ctx.fill();
        };
    }

    // Util
    function getDistance(p1, p2) {
        return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
    }
}

function _tabSelect(){
    var newSelection = '';
    $('.tabs-select > .drop-wrap').click(function(){
        $(this).parent().toggleClass('open');
    });
	
    var currentActive		=	$(".tabs-select ul li:first a").addClass('current');
	var currentactiveTab 	= 	currentActive.attr("href");
	var currentTxt			=	currentActive.text();
		
	$(".tab-content").hide(); //Hide all tab content
    $(currentactiveTab).fadeIn();
	
	$('.tabs-select > .drop-wrap > span.m-title').html(currentTxt);
	
    $(".tabs-select ul li a").click(function(e){
        if($(this).hasClass('current')){
			
        } else {
            $(".tabs-select li a").removeClass("current");
            $(this).addClass("current");
            var portfolioItems = $('.tabs-select ul li a.current').text();
			var activeTab = $(this).attr("href"); //Find the rel attribute value to identify the active tab + content
            $(this).parent().parent().parent().removeClass('open');
            $('.tabs-select > .drop-wrap > span.m-title').html(portfolioItems);
			$(".select-arrow").toggleClass("azcicon-thin-arrow-down").toggleClass("azcicon-thin-arrow-up");
			$(".tab-content").hide(); //Hide all tab content
            $(activeTab).fadeIn(); //Fade in the active content
            
        };
        e.preventDefault();
    });   
    $('a[href="' + $(location).attr('hash') + '"]').trigger('click');
}

function _landing(){
	$('#landing ul li .bg-image').click(function(){
		$('#landing ul li .bg-image').removeClass('active');
		$(this).addClass('active');
	});
}

function _infiniteScroll(){

   // $container = $('.all-post');  
    $container = $('.all-posts'); 
    $container.infinitescroll({
        navSelector  : '.pag',    // selector for the paged navigation 
        nextSelector : '.pag .load-more',  // selector for the NEXT link (to page 2)
        //itemSelector : '.item',     // selector for all items you'll retrieve
        itemSelector : '.item',
        loading: {
            finishedMsg: "",
            img: '/ui/images/loader.gif',
            msgText: "<span class='load-more'>Load More <span class='theme-arrow-head-down'></span></span>"
          }
    },
    // trigger Masonry as a callback
    function( newElements ) {
        // hide new items while they are loading
        var $newElems = $( newElements ).css({ opacity: 0 });
        
        // ensure that images load before adding to masonry layout
        $newElems.imagesLoaded(function(){
            $newElems.animate({ opacity: 1 });
        });
    });
}

function _accordions(){
    $('.accordions li h6 a').on('click',function(e){
        e.preventDefault();
        $(this).parent().next().toggleClass('on');
        if($(this).parent().next().hasClass('on')){
            $(this).parent().next().slideDown(100);
            $(this).text('SEE LESS').addClass('theme-arrow-head-up');
        } else {
            $(this).parent().next().slideUp(100);
            $(this).text('SEE MORE').removeClass('theme-arrow-head-up');
        }
    });
    
    $(".scrollto").on('click',function(e) {
	    e.preventDefault();
	    var anchor = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(anchor).offset().top
        }, 800);
    });
}