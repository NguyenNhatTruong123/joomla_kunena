jQuerOs(document).ready(function () {

  //if (jQuerOs("[rel=tooltip]").length) {jQuerOs("[rel=tooltip]").tooltip();}
 // jQuerOs('button').addClass('btn');
// ____________________________________________________________________________________________ resize display

        // var myWidth = 0;
        // myWidth = window.innerWidth;
        // jQuerOs('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        // jQuerOs(window).resize(function(){
        //     var myWidth = 0;
        //     myWidth = window.innerWidth;
        //     jQuerOs('#size').remove();
        //     jQuerOs('body').prepend('<div id="size" style="background:#000;padding:5px;position:fixed;z-index:999;color:#fff;">Width = '+myWidth+'</div>');
        // });

// ____________________________________________________________________________________________ responsive menu

	var mainMenu = jQuerOs('.main_menu ul.navu');
  mainMenu.find('li.parent > a').append('<span class="arrow"></span>');
  mainMenu.find(' > li').last().addClass('lastChild');
// ____________________________________________________________________________________________

 var headerHeight = jQuerOs('.header .header_contacts').height();

   jQuerOs(window).scroll(function(){

      if(jQuerOs(window).scrollTop() >= headerHeight) {
       jQuerOs('#header').addClass('top_fixed_menu'); 
      } else {
       jQuerOs('#header').removeClass('top_fixed_menu'); 
     }
    });

// ____________________________________________________________________________________________ responsive menu


 var mainMenu = jQuerOs('ul.nav');

  mainMenu.find('li.parent > a').next('ul').hide();
  mainMenu.find('li.parent > span.separator').next('ul').hide();
  mainMenu.find('li.parent > a').append('<span class="arrow"></span>');
  mainMenu.find('li.parent > span.separator').append('<span class="arrow"></span>');

    jQuerOs(function() {
    mainMenu.find('li.parent').hover(function() {
      if (!jQuerOs(this).children('ul').is(':visible')) {
      jQuerOs(this).children('ul').stop().slideDown(10);
      }
    },
      function() {
    if (jQuerOs(this).children('ul').is(':visible')) {
      jQuerOs(this).children('ul').slideUp(10);
    }
      });
    });

// ____________________________________________________________________________________________ menu icon
    jQuerOs('.top_menu button.navbar-toggle').click(function() {
        if (jQuerOs('.top_menu #top-navbar-collapse').hasClass("in")) {
            jQuerOs('.top_menu button.navbar-toggle i').addClass('fa-bars');
           jQuerOs('.top_menu button.navbar-toggle i').removeClass('fa-times');
        } else {
            jQuerOs('.top_menu button.navbar-toggle i').removeClass('fa-bars');
            jQuerOs('.top_menu button.navbar-toggle i').addClass('fa-times');
        }
    });

    jQuerOs('.main_menu button.navbar-toggle').click(function() {
        if (jQuerOs('.main_menu #main-navbar-collapse').hasClass("in")) {
            jQuerOs('.main_menu button.navbar-toggle i').addClass('fa-bars');
           jQuerOs('.main_menu button.navbar-toggle i').removeClass('fa-times');
        } else {
            jQuerOs('.main_menu button.navbar-toggle i').removeClass('fa-bars');
            jQuerOs('.main_menu button.navbar-toggle i').addClass('fa-times');
        }
    });

    jQuerOs('.footer_menu button.navbar-toggle').click(function() {
        if (jQuerOs('.footer_menu #footer-navbar-collapse').hasClass("in")) {
            jQuerOs('.footer_menu button.navbar-toggle i').addClass('fa-bars');
           jQuerOs('.footer_menu button.navbar-toggle i').removeClass('fa-times');
        } else {
            jQuerOs('.footer_menu button.navbar-toggle i').removeClass('fa-bars');
            jQuerOs('.footer_menu button.navbar-toggle i').addClass('fa-times');
        }
    });


});




window.addEvent('load', function() {
 document.getElements('.sixteen, .swipe-wrap, .rowAnim2').each(function(element, i) {
  elementsToAnimate.push(['queue_anim', element, element.getPosition().y]);
 });
});
// scroll effects
//
// animations
var elementsToAnimate = [];
// scroll event
window.addEvent('scroll', function() {
 // animate all right sliders
 if(elementsToAnimate.length > 0) {  
  // get the necessary values and positions
  var currentPosition = window.getScroll().y;
  var windowHeight = window.getSize().y;
  // iterate throught the elements to animate
  if(elementsToAnimate.length) {
   for(var i = 0; i < elementsToAnimate.length; i++) {
    if(elementsToAnimate[i][2] < currentPosition + (windowHeight / 1)) {
     // create a handle to the element
     var element = elementsToAnimate[i][1];
     // if there is a queue animation
     if(elementsToAnimate[i][0] == 'queue_anim') {
      element.getElements('.section_featured_texts, .span4Anim').each(function(item, j) {
       AddClass(item, 'animations-effects', j);
      });
      // clean the array element
      elementsToAnimate[i] = null;
     }
    }
   }
   // clean the array
   elementsToAnimate = elementsToAnimate.clean();
  }
 }
});


window.addEvent('load', function() {
 // animate all right sliders
 if(elementsToAnimate.length > 0) {  
  // get the necessary values and positions
  var currentPosition = window.getScroll().y;
  var windowHeight = window.getSize().y;
  // iterate throught the elements to animate
  if(elementsToAnimate.length) {
   for(var i = 0; i < elementsToAnimate.length; i++) {
    if(elementsToAnimate[i][2] < currentPosition + (windowHeight / 1)) {
     // create a handle to the element
     var element = elementsToAnimate[i][1];
     // if there is a queue animation
     if(elementsToAnimate[i][0] == 'queue_anim') {
      element.getElements('.slide-text').each(function(item, j) {
       AddClass(item, 'animations-effects', j);
      });
     }
    }
   }
  }
 }
});
//
function AddClass(element, cssclass, i) {
 var delay = element.getProperty('');
 if(!delay) {
  delay = (i !== false) ? i * 200 : 0;
 }
 setTimeout(function() {
  element.addClass(cssclass);
 }, delay);
}
