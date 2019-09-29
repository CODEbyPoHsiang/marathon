// ActionScript Document
$(function(){		
	set_toggle_menu();	
	set_go_top();
	set_mobile_menu_toggle();
	set_countdown();
	set_signup_gift_check();
	set_purchase_quantity();
	set_open_close();
	set_sidebar();
	set_carousel();
});


function set_toggle_menu(){
	$('.toggle_btn').click(function(){
		$('.toggle_btn').toggleClass('active');
		$('body').toggleClass('nav_active');		
		$('#body_overly').toggle();
	});
}
function set_mobile_menu_toggle(){
	$('#mobile_nav li .list .sub_title').click(function(){
		$(this).parent().toggleClass('active');
	});
}

function set_go_top(){
	
	var iScrollPos = 0;

	$(window).scroll(function () {
		var iCurScrollPos = $(this).scrollTop();
		if (iCurScrollPos > iScrollPos) {
			//Scrolling Down
			$('.back_top').addClass('show');
		} else {
		 $('.back_top').removeClass('show');
		}		
		//iScrollPos = iCurScrollPos;敺�銝见停�枂�𣶹
	});
	$('.back_top').click(function(){ 
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false; 
    });
}
function set_countdown(){
	if($('.countdown').length>0){
		$('.countdown').countdown('2019/06/30', function(event) {
	  $(this).html(event.strftime('%D 憭� %H �� %M �� %S 蝘�'));
	});
	}
}

function set_signup_gift_check(){
	if($('.keyin_list .item .item_signup .item_row .controll_box .control.radio').length>0){
		$('.keyin_list .item .item_signup .item_row .controll_box .control.radio .box input').click(function(){
			$(this).parent().parent().parent().find('.control.radio').removeClass('active');
			$(this).parent().parent().addClass('active');
		});
	}
	if($('.keyin_list .item .item_gift .item_row .controll_box .control.radio').length>0){
		$('.keyin_list .item .item_gift .item_row .controll_box .control.radio .box input').click(function(){
			$(this).parent().parent().parent().find('.control.radio').removeClass('active');
			$(this).parent().parent().addClass('active');
		});
		$('.keyin_list .item .item_gift .item_row .controll_box .control.radio').click(function(){
			$(this).parent().find('.control.radio').removeClass('active');
			$(this).addClass('active');
			$(this).parent().find('input[type="radio"]').attr('checked', false);
			$(this).find('input[type="radio"]').attr('checked', true);
		});
	}
	
}
function set_purchase_quantity(){
	if($('.keyin_list .item .item_purchase_detail .col .right .quantity').length>0){
		$('.keyin_list .item .item_purchase_detail .col .right .quantity .btn_add').click(function(){
			var total = Number($(this).parent().find('input').val());			
			$(this).parent().find('input').val(total+1);
		});
		$('.keyin_list .item .item_purchase_detail .col .right .quantity .btn_subtract').click(function(){
			var total = Number($(this).parent().find('input').val());
			if(total>0){		
				$(this).parent().find('input').val(total-1);
			}
		});
		
	}
}
function set_open_close(){
	$('.keyin_list .item .title h3').click(function(){
		$(this).parent().parent().toggleClass('close');
	});
	$('.pay_list .item .title h3').click(function(){
		$(this).parent().parent().toggleClass('close');
	});
	
	
}
//.main .outer .row02 .countdown_div .gray_bg
function set_sidebar(){	

	set_sidebar_pos(".main .outer .row01 .navi_outer");	
	if($(window).width()>767){
		set_sidebar_pos(".main .outer .row02 .countdown_div .countdown_outer");
	}
	$(window).resize(function(){
		set_sidebar_pos(".main .outer .row01 .navi_outer");	
		if($(window).width()>767){
			set_sidebar_pos(".main .outer .row02 .countdown_div .countdown_outer");
		}
	});
}

function set_sidebar_pos(sidebar_id){
	var mainBannerHeight = $(".header_banner").height();
	var mainHeader = $(".header").height();
	var sidebarHeight = $(".main .outer .row01").height();
	var sidebar = $(sidebar_id);
	var wid = $(sidebar_id).parent().width();
	$(sidebar_id).width(wid);
	$(document).on("scroll", function() {
	//'stick' sidebar to the bottom of main block if we scroll 'too far'
	if ($(window).scrollTop()  > mainBannerHeight + mainHeader) {
	  sidebar.css({
		position: 'fixed',
		top:  mainHeader
	  });
	}
	//'stick' sidebar to the top of main block 
	else if ($(window).scrollTop() < mainHeader) {
	  sidebar.css({
		position: 'relative',
		top: 0
	  });
	}
	//fixed sidebar until it won't reach top or bottom of the main content block
	else {
	  sidebar.css({
		position: 'relative',
		top: 0
	  });
	}
	});
}
function set_carousel(){
	if($('.news_div .owl-carousel').length>0){
		$('.news_div .owl-carousel').owlCarousel({
			loop:true,			
			responsiveClass:true,
			items:1,
			dots:false,
			responsive:{
				0:{					
					nav:true
				},
				768:{					
					nav:false
				},
				1000:{					
					nav:false,
					autoplay:true
				}
			}
		});
	}	
	if($('.run_event .owl-carousel').length>0){
		$('.run_event .owl-carousel').owlCarousel({
			loop:true,	
			margin:30,			
			responsiveClass:true,
			nav:true,
			dots:false,
			responsive:{
				0:{					
					items:1	
				},
				600:{					
					items:2
				},
				1000:{	
					items:3				
					
				}
			}
		});
	}
	if($('.photo_event .owl-carousel').length>0){
		$('.photo_event .owl-carousel').owlCarousel({
			loop:true,	
			margin:30,		
			responsiveClass:true,
			nav:true,
			dots:false,
			responsive:{
				0:{					
					items:1	
				},
				600:{					
					items:2
				},
				1000:{	
					items:3				
					
				}
			}
		});
	}
	if($('.video_mobile .owl-carousel').length>0){
		
		$('.video_mobile .owl-carousel').owlCarousel({
			loop:true,	
			margin:0,
			nav:true,
			dots:false,
			items:1	
		});
	
	}
	if($('.commodity_mobile .owl-carousel').length>0){
		$('.commodity_mobile .owl-carousel').owlCarousel({
			loop:true,	
			margin:30,		
			responsiveClass:true,
			nav:true,
			dots:false,
			responsive:{
				0:{					
					items:1	
				},
				600:{					
					items:2
				},
				1000:{	
					items:3				
					
				}
			}
		});
	}
	
	
}