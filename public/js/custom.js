jQuery(document).ready(function() {
	
	"use strict";
	$(document).ready(function(){
    
	$(".largeGrid").click(function(){											
    $(this).find('a').addClass('active');
    $('.smallGrid a').removeClass('active');
    
    $('.product').addClass('large').each(function(){											
		});						
		setTimeout(function(){
			$('.info-large').show();	
		}, 200);
		setTimeout(function(){

			$('.view_gallery').trigger("click");	
		}, 400);								
		
		return false;				
	});
	
	$(".smallGrid").click(function(){		        
    $(this).find('a').addClass('active');
    $('.largeGrid a').removeClass('active');
    
		$('div.product').removeClass('large');
		$(".make3D").removeClass('animate');	
    $('.info-large').fadeOut("fast");
		setTimeout(function(){								
				$('div.flip-back').trigger("click");
		}, 400);
		return false;
	});		
	
	$(".smallGrid").click(function(){
		$('.product').removeClass('large');			
		return false;
	});
  
  $('.colors-large a').click(function(){return false;});
	
	
	$('.product').each(function(i, el){					

		// Lift card and show stats on Mouseover
		$(el).find('.make3D').hover(function(){
				$(this).parent().css('z-index', "20");
				$(this).addClass('animate');
				$(this).find('div.carouselNext, div.carouselPrev').addClass('visible');			
			 }, function(){
				$(this).removeClass('animate');			
				$(this).parent().css('z-index', "1");
				$(this).find('div.carouselNext, div.carouselPrev').removeClass('visible');
		});	
		
		// Flip card to the back side
		$(el).find('.view_gallery').click(function(){	
			
			$(el).find('div.carouselNext, div.carouselPrev').removeClass('visible');
			$(el).find('.make3D').addClass('flip-10');			
			setTimeout(function(){					
			$(el).find('.make3D').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
					$(el).find('.product-front, .product-front div.shadow').hide();															
				});
			}, 50);
			
			setTimeout(function(){
				$(el).find('.make3D').removeClass('flip90').addClass('flip190');
				$(el).find('.product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
				setTimeout(function(){				
					$(el).find('.make3D').removeClass('flip190').addClass('flip180').find('div.shadow').hide();						
					setTimeout(function(){
						$(el).find('.make3D').css('transition', '100ms ease-out');			
						$(el).find('.cx, .cy').addClass('s1');
						setTimeout(function(){$(el).find('.cx, .cy').addClass('s2');}, 100);
						setTimeout(function(){$(el).find('.cx, .cy').addClass('s3');}, 200);				
						$(el).find('div.carouselNext, div.carouselPrev').addClass('visible');				
					}, 100);
				}, 100);			
			}, 150);			
		});			
		
		// Flip card back to the front side
		$(el).find('.flip-back').click(function(){		
			
			$(el).find('.make3D').removeClass('flip180').addClass('flip190');
			setTimeout(function(){
				$(el).find('.make3D').removeClass('flip190').addClass('flip90');
		
				$(el).find('.product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
					$(el).find('.product-back, .product-back div.shadow').hide();
					$(el).find('.product-front, .product-front div.shadow').show();
				});
			}, 50);
			
			setTimeout(function(){
				$(el).find('.make3D').removeClass('flip90').addClass('flip-10');
				$(el).find('.product-front div.shadow').show().fadeTo( 100 , 0);
				setTimeout(function(){						
					$(el).find('.product-front div.shadow').hide();
					$(el).find('.make3D').removeClass('flip-10').css('transition', '100ms ease-out');		
					$(el).find('.cx, .cy').removeClass('s1 s2 s3');			
				}, 100);			
			}, 150);			
			
		});				
	
		makeCarousel(el);
	});
	
	$('.add-cart-large').each(function(i, el){
		$(el).click(function(){
			var carousel = $(this).parent().parent().find(".carousel-container");
			var img = carousel.find('img').eq(carousel.attr("rel"))[0];						
			var position = $(img).offset();	

			var productName = $(this).parent().find('h4').get(0).innerHTML;				
	
			$("body").append('<div class="floating-cart"></div>');		
			var cart = $('div.floating-cart');		
			$("<img src='"+img.src+"' class='floating-image-large' />").appendTo(cart);
			
			$(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');		
			setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);
			
			setTimeout(function(){
			$('div.floating-cart').remove();
			$("body").removeClass("MakeFloatingCart");


			var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+img.src+"' alt='' /></div><span>"+productName+"</span><strong>$39</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";			

			$("#cart .empty").hide();			
			$("#cart").append(cartItem);
			$("#checkout").fadeIn(500);
			
			$("#cart .cart-item").last()
				.addClass("flash")
				.find(".delete-item").click(function(){
					$(this).parent().fadeOut(300, function(){
						$(this).remove();
						if($("#cart .cart-item").size() == 0){
							$("#cart .empty").fadeIn(500);
							$("#checkout").fadeOut(500);
						}
					})
				});
 		    setTimeout(function(){
				$("#cart .cart-item").last().removeClass("flash");
			}, 10 );
			
		}, 1000);
			
			
		});
	})
	
	/* ----  Image Gallery Carousel   ---- */
	function makeCarousel(el){
	
		
		var carousel = $(el).find('.carousel ul');
		var carouselSlideWidth = 315;
		var carouselWidth = 0;	
		var isAnimating = false;
		var currSlide = 0;
		$(carousel).attr('rel', currSlide);
		
		// building the width of the casousel
		$(carousel).find('li').each(function(){
			carouselWidth += carouselSlideWidth;
		});
		$(carousel).css('width', carouselWidth);
		
		// Load Next Image
		$(el).find('div.carouselNext').on('click', function(){
			var currentLeft = Math.abs(parseInt($(carousel).css("left")));
			var newLeft = currentLeft + carouselSlideWidth;
			if(newLeft == carouselWidth || isAnimating === true){return;}
			$(carousel).css({'left': "-" + newLeft + "px",
								   "transition": "300ms ease-out"
								 });
			isAnimating = true;
			currSlide++;
			$(carousel).attr('rel', currSlide);
			setTimeout(function(){isAnimating = false;}, 300);			
		});
		
		// Load Previous Image
		$(el).find('div.carouselPrev').on('click', function(){
			var currentLeft = Math.abs(parseInt($(carousel).css("left")));
			var newLeft = currentLeft - carouselSlideWidth;
			if(newLeft < 0  || isAnimating === true){return;}
			$(carousel).css({'left': "-" + newLeft + "px",
								   "transition": "300ms ease-out"
								 });
			isAnimating = true;
			currSlide--;
			$(carousel).attr('rel', currSlide);
			setTimeout(function(){isAnimating = false;}, 300);						
		});
	}
	
	$('.sizes a span, .categories a span').each(function(i, el){
		$(el).append('<span class="x"></span><span class="y"></span>');
		
		$(el).parent().on('click', function(){
			if($(this).hasClass('checked')){				
				$(el).find('.y').removeClass('animate');	
				setTimeout(function(){
					$(el).find('.x').removeClass('animate');							
				}, 50);	
				$(this).removeClass('checked');
				return false;
			}
			
			$(el).find('.x').addClass('animate');		
			setTimeout(function(){
				$(el).find('.y').addClass('animate');
			}, 100);	
			$(this).addClass('checked');
			return false;
		});
	});
	
	$('.add_to_cart').click(function(){
		var productCard = $(this).parent();
		var position = productCard.offset();
		var productImage = $(productCard).find('img').get(0).src;
		var productName = $(productCard).find('.product_name').get(0).innerHTML;				

		$("body").append('<div class="floating-cart"></div>');		
		var cart = $('div.floating-cart');		
		productCard.clone().appendTo(cart);
		$(cart).css({'top' : position.top + 'px', "left" : position.left + 'px'}).fadeIn("slow").addClass('moveToCart');		
		setTimeout(function(){$("body").addClass("MakeFloatingCart");}, 800);
		setTimeout(function(){
			$('div.floating-cart').remove();
			$("body").removeClass("MakeFloatingCart");


			var cartItem = "<div class='cart-item'><div class='img-wrap'><img src='"+productImage+"' alt='' /></div><span>"+productName+"</span><strong>$39</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";			

			$("#cart .empty").hide();			
			$("#cart").append(cartItem);
			$("#checkout").fadeIn(500);
			
			$("#cart .cart-item").last()
				.addClass("flash")
				.find(".delete-item").click(function(){
					$(this).parent().fadeOut(300, function(){
						$(this).remove();
						if($("#cart .cart-item").size() == 0){
							$("#cart .empty").fadeIn(500);
							$("#checkout").fadeOut(500);
						}
					})
				});
 		    setTimeout(function(){
				$("#cart .cart-item").last().removeClass("flash");
			}, 10 );
			
		}, 1000);
	});
});

});


// checkout formmmm

$(document).ready(function () {
//Initialize tooltips
// $('.nav-tabs > li a[title]').tooltip();
//Wizard
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

var $target = $(e.target);

if ($target.parent().hasClass('disabled')) {
return false;
}
});

$(".next-step").click(function (e) {

var $active = $('.wizard .breadcrumb_checkout li.active');
$active.next().removeClass('disabled');
nextTab($active);

});
$(".prev-step").click(function (e) {

var $active = $('.wizard .breadcrumb_checkout li.active');
prevTab($active);

});
});

function nextTab(elem) {
$(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
$(elem).prev().find('a[data-toggle="tab"]').click();
}




// loginnnnnn


$( document ).ready(function() {
    // DOM ready

    // Test data
    /*
     * To test the script you should discomment the function
     * testLocalStorageData and refresh the page. The function
     * will load some test data and the loadProfile
     * will do the changes in the UI
     */
    // testLocalStorageData();
    // Load profile if it exits
    loadProfile();
});

/**
 * Function that gets the data of the profile in case
 * thar it has already saved in localstorage. Only the
 * UI will be update in case that all data is available
 *
 * A not existing key in localstorage return null
 *
 */
function getLocalProfile(callback){
    var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
    var profileName        = localStorage.getItem("PROFILE_NAME");
    var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

    if(profileName !== null
            && profileReAuthEmail !== null
            && profileImgSrc !== null) {
        callback(profileImgSrc, profileName, profileReAuthEmail);
    }
}

/**
 * Main function that load the profile if exists
 * in localstorage
 */
function loadProfile() {
    if(!supportsHTML5Storage()) { return false; }
    // we have to provide to the callback the basic
    // information to set the profile
    getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
        //changes in the UI
        $("#profile-img").attr("src",profileImgSrc);
        $("#profile-name").html(profileName);
        $("#reauth-email").html(profileReAuthEmail);
        $("#inputEmail").hide();
        $("#remember").hide();
    });
}

/**
 * function that checks if the browser supports HTML5
 * local storage
 *
 * @returns {boolean}
 */
function supportsHTML5Storage() {
    try {
        return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
        return false;
    }
}

/**
 * Test data. This data will be safe by the web app
 * in the first successful login of a auth user.
 * To Test the scripts, delete the localstorage data
 * and comment this call.
 *
 * @returns {boolean}
 */
function testLocalStorageData() {
    if(!supportsHTML5Storage()) { return false; }
    localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
    localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
    localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
}