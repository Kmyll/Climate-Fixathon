'use strict'


OS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

/***** SLIDERS *****/

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}






/*** TIMELINE GOVERNMENT ***/


(function() {

			  'use strict';

			  // define variables
			  var timelines= document.querySelectorAll('.timeline2');

				function debounce(func, wait, immediate) {
					var timeout;
					return function() {
						var context = this, args = arguments;
						var later = function() {
							timeout = null;
							if (!immediate) func.apply(context, args);
						};
						var callNow = immediate && !timeout;
						clearTimeout(timeout);
						timeout = setTimeout(later, wait);
						if (callNow) func.apply(context, args);
					};
				}
				function callbackFunc() {
					  var h,timeline, li,rect,parent_rect,i,items;
					for(h=0;h<timelines.length;h++){
						  timeline=timelines[h];
							parent_rect=timeline.getBoundingClientRect();
						   items = timeline.querySelectorAll(".timeline2 li");
						for (  i = 0; i < items.length; i++) {
							/*
						  if (isElementInViewport(items[i])) {
							items[i].classList.add("in-view");
						  }
						  */
							li=items[i];
							rect = li.getBoundingClientRect();

							if( (rect.bottom<=(parent_rect.top+(rect.height/2) ) ) || (rect.top >=(parent_rect.bottom-(rect.height/2)) ) ){
								//debugger;
								//li.style['background']='red';
								li.classList.remove("in-view");

							}else{
								//li.style['background']='white';
								li.classList.add("in-view");
							}

						}
					}
				}
				var updateLayout =debounce(function(e) {

					// Does all the layout updating here
					callbackFunc();

				}, 500); // Maximum run of once per 500 milliseconds

				// listen for events
				window.addEventListener("load", callbackFunc);
				window.addEventListener("resize", updateLayout);
				window.addEventListener("scroll", callbackFunc);
				for(var h=0;h<timelines.length;h++){
						var  timeline=timelines[h];
					timeline.addEventListener("scroll",callbackFunc );
				}

			 })();
