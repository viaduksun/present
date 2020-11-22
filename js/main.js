(function ($) {
 "use strict";

/*----------------------------
    jQuery MeanMenu
    ------------------------------ */
        $('nav#dropdown').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu",
    });	
/*--------------------------
 menu a active jquery
---------------------------- */
	var pgurl = window.location.href.substr(window.location.href
		.lastIndexOf("/")+1);
		$("ul li a").each(function(){
		if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		$(this).addClass("active");
	})
	$( "header ul li ul,.header-bottom-two ul li ul ,.magamenu " ).parent('li').addClass('drop-icon re-icon');

/*----------------------------
 owl active
------------------------------ */  
    $("#view-gallery").owlCarousel({
      autoPlay: false, 
	  slideSpeed:500,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  transitionStyle : "backSlide",     /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [991,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
    $(".what-client-say").owlCarousel({
      autoPlay: false, 
	  slideSpeed:500,
	  pagination:false,
	  navigation:true,	  
      items : 1,
	  transitionStyle : "backSlide",     /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [991,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $("#testimonials").owlCarousel({
      autoPlay: false, 
	  slideSpeed:500,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  transitionStyle : "backSlide",     /* [This code for animation ] */
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [991,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $("#testimonials-two").owlCarousel({
      autoPlay: false, 
	  slideSpeed:500,
	  pagination:false,
	  navigation:true,	  
      items : 2,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,2],
	  itemsDesktopSmall : [991,2],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $("#new-products,#tab-carousel-1,#tab-carousel-2,#tab-carousel-3,#tab-carousel-4,#tab-carousel-5").owlCarousel({
      autoPlay: false, 
	  slideSpeed:1000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [991,3],
	  itemsTablet: [767,2],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $("#tabs-details").owlCarousel({
      autoPlay: false, 
	  slideSpeed:1000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [991,3],
	  itemsTablet: [767,3],
	  itemsMobile : [479,3],
  });
/*----------------------------
 owl active
------------------------------ */  
  $(".re-testimonials-all").owlCarousel({
      autoPlay: false, 
	  slideSpeed:1000,
	  pagination:false,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [991,1],
	  itemsTablet: [767,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $("#blog").owlCarousel({
      autoPlay: false, 
	  slideSpeed:1000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [991,2],
	  itemsTablet: [767,2],
	  itemsMobile : [479,1],
  });
/*----------------------------
 owl active
------------------------------ */  
  $("#brand-logo").owlCarousel({
      autoPlay: false, 
	  slideSpeed:1000,
	  pagination:true,
	  navigation:false,	  
      items : 6,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
      itemsDesktop : [1199,6],
	  itemsDesktopSmall : [991,4],
	  itemsTablet: [767,3],
	  itemsMobile : [479,2],
  });
    /*--
	Pro Slider for Pro Details
------------------------*/
$(".pro-img-tab-slider").owlCarousel({
	items : 4,
	itemsDesktop : [1199,4],
	itemsDesktopSmall : [768,4],
	itemsTablet: [767,3],
	itemsMobile : [479,3],
	slideSpeed : 1500,
	paginationSpeed : 1500,
	rewindSpeed : 1500,
	navigation : true,
	navigationText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	pagination : false,
	addClassActive: true,
});
/*----------------------------
 plus-minus-button
------------------------------ */
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
/*--------------------------
 tooltip active jquery
---------------------------- */
	$('.actions-btn a').tooltip({
        container: 'body'
    });
 /*---------------------
    price slider
--------------------- */  
	
    $( "#slider-range" ).slider({
        range: true,
        min: 40,
        max: 600,
        values: [ 20, 1560 ],
        slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - "+ "$" + ui.values[ 1 ] );
        $('input[name="first_price"]').val( "$" + ui.values[0]);
        $('input[name="last_price"]').val( "$" + ui.values[1]);
    },
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - "+"$" + $( "#slider-range" ).slider( "values", 1 ) );
    $('input[name="first_price"]').val( "$" + $( "#slider-range" ).slider( "values", 0 ));
    $('input[name="last_price"]').val( "$" + $( "#slider-range" ).slider( "values", 1 ));
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
/*--------------------------
 tablist
---------------------------- */
	$('.quick-thumb .tablist a').on('click', function(){
		$('.quick-thumb .tablist a').removeClass('active');
		$('.quick-thumb .tablist').removeClass('active');
		$(this).addClass('active');
	});
	$('#reviews-tab a').on('click',function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	
	/*---------------------
    countdown
  --------------------- */
    $('[data-countdown]').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown day">%-D <p>Days</p></span> <span class="cdown hour">%-H <p>Hour</p></span> <span class="cdown minutes">%M <p>Min</p></span class="cdown second"> <span>%S <p>Sec</p></span>'));
		});
    });
    
    /*-------------------------
    checkout showcoupon toggle function
    --------------------------*/
        $( '#showcoupon' ).on('click', function() {
            $( '#checkout_coupon' ).slideToggle(900);
        });
    
    /*-------------------------
    checkout showcoupon toggle function
    --------------------------*/
    $( '#showcoupon2 input' ).on('click', function() {
        $( '#checkout_coupon2' ).slideToggle(900);
    });
    
    /*-------------------------
    checkout showcoupon toggle function
    --------------------------*/
    $( '#showcoupon3' ).on('click', function() {
        $( '#checkout_coupon3' ).slideToggle(900);
    });
    
    /*-------------------------
    checkout one click toggle function
    --------------------------*/
    var checked = $( '.sin-payment input:checked' )
    if(checked){
        $(checked).siblings( '.payment_box' ).slideDown(900);
    };
	 $( '.sin-payment input' ).on('change', function() {
        $( '.payment_box' ).slideUp(900);
        $(this).siblings( '.payment_box' ).slideToggle(900);
    });
    /*--
    Simple Lens and Lightbox
    ------------------------*/
	$('.simpleLens-lens-image').simpleLens({
		loading_image: 'img/loading.gif'
	}); 
    
    /*-------------------------
    single-product count
    --------------------------*/
    
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
     $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
     $(".qtybutton").on("click", function() {
      var $button = $(this);
      var oldValue = $button.parent().find("input").val();
      if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
         // Don't allow decrementing below zero
        if (oldValue > 0) {
       var newVal = parseFloat(oldValue) - 1;
       } else {
       newVal = 0;
        }
        }
      $button.parent().find("input").val(newVal);
     });
    
    
	
})(jQuery); 

var siteURL = "http://present.local/";

function categorySelect(category) {
// Вывод в консоль ID категории по которой кликнули (dataset - занесли пользовательский атрибут)
// console.dir(category.dataset.category_id);
// console.dir(category.dataset.prod_count);
// console.dir(category.dataset.category_id);
// console.dir(category);


// выбираем все элементы с классом "current-cat" и запускаем цикл-функцию
// которая либо добавит либо удалит текст(тот что в скобках) в классе искомых элементов
document.querySelectorAll('.current-cat').forEach(function(item){
  item.classList.toggle("current-cat");
});  

// Формируем AJAX 
var ajax = new XMLHttpRequest();
// Задаем характеристики ajax
ajax.open("POST", siteURL + "parts/shop/select_category.php", false);
// Метод XMLHttpRequest.setRequestHeader() устанавливает значения HTTP заголовков. так как не читался 'send'
ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// Посылаем в $_GET - id категории для последующей обработки в sql запросе в select_category.php 
ajax.send("current_category_id=" + category.dataset.category_id);

// console.dir(ajax);
// console.dir(ajax.response);
var response = ajax.response;


// Выбираем ДИВ с карточками продуктов
var productsBlock = document.querySelector("#shop_place_for_cards");
// Вставляем в этот ДИВ новую порцию продуктов (HTML который получили в AJAX response)
  productsBlock.innerHTML = response;

// var activecategory = document.getElementsByClassName('cat-item current-cat');
// console.dir(activecategory)
// activecategory.className = "cat-item";
// category.parentNode.parentNode.parentNode.childNodes[3].children.className = "cat-item"; 
// category.parentNode.parentNode.children.className = "cat-item";
category.parentNode.className = "cat-item current-cat";
// console.dir(response);
}

function cookie_remove(all) { 
 // выбираем все элементы с классом "current-cat" и запускаем цикл-функцию
 // которая либо добавит либо удалит текст(тот что в скобках) в классе искомых элементов
document.querySelectorAll('.current-cat').forEach(function(item){
  item.classList.toggle("current-cat");
});  
// console.dir(all);
// Формируем AJAX 
var ajax = new XMLHttpRequest();
// Задаем характеристики ajax
ajax.open("POST", siteURL + "parts/shop/show_all.php", false);
// Метод XMLHttpRequest.setRequestHeader() устанавливает значения HTTP заголовков. так как не читался 'send'
ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// Посылаем в $_GET - id категории для последующей обработки в sql запросе в select_category.php 
ajax.send();

// console.dir(ajax);
// console.dir(ajax.response);
var response = ajax.response;

// Выбираем ДИВ с карточками продуктов
var productsBlock = document.querySelector("#shop_place_for_cards");
// Вставляем в этот ДИВ новую порцию продуктов (HTML который получили в AJAX response)
// productsBlock.innerHTML = response;

// console.dir(all.parentNode.parentNode.parentNode.childNodes[3].children);
// all.parentNode.parentNode.parentNode.childNodes[3].children.className = "cat-item"; 
// category.parentNode.parentNode.children.className = "cat-item";


// var activecategory = document.getElementsByClassName('cat-item current-cat');
// console.dir(activecategory)
// activecategory.className = "cat-item";
all.parentNode.className = "cat-item current-cat";
// console.dir(response);
}
