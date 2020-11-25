var jQueryBridget = require('jquery-bridget');
var Flickity = require('flickity');
var asNavFor = require('flickity-as-nav-for');
var hash = require('flickity-hash');
var Masonry = require('masonry-layout');
var Isotope = require('isotope-layout');


// Use Flickity with jQuery via jQuery Bridget
Flickity.setJQuery( $ );
jQueryBridget( 'flickity', Flickity, $ );

jQueryBridget( 'masonry', Masonry, $ );
jQueryBridget( 'isotope', Isotope, $ );




$(document).ready(() => {

  var isLoaded = false;

  //Function to the css rule
  function checkSize(){
    switch( $(window).width() > 992 )
    {
      case true:
        //Get template from localized data in function.php::223
        $('#posts-hero').html(template.tile).promise().done(function(){
          $('.tile-carousel').flickity({
            contain: true,
            pageDots: false,
            setGallerySize: false
          }).flickity('reloadCells');
        });
        
        //Do magic based on screen size
        if( $(window).width() >= 1200 )
        {
          
          $('.isotope').isotope({
            layoutMode: 'masonryHorizontal',
            itemSelector: '.item',
            masonryHorizontal: {
              rowHeight: 144,
              gutter: 30
            }
          });

        } else {
          $('.isotope').isotope({
            layoutMode: 'masonryHorizontal',
            itemSelector: '.item',
            masonryHorizontal: {
              rowHeight: 111,
              gutter: 30
            }
          });
        }
        break;
      default:
        //If below 992 load carousel from localized data in function.php::223

        $('#posts-hero').html(template.carousel).promise().done(function(){
          $('.mobile-carousel').flickity({
            imagesLoaded: true,
            autoPlay: 4000,
            pageDots: false,
            setGallerySize: false
          }).flickity('reloadCells');
        });
    }
  }

  // run test on initial page load
  checkSize();

  // run test on resize of the window
  $(window).resize(checkSize);













  
  // var $carousel = $('.main-carousel').flickity({
  //   // options
  //   pageDots: false,
  //   prevNextButtons: false,
  //   hash: true,
  //   initialIndex: 0
  // });

  // // get instance
  // var flkty = $carousel.data('flickity');

  // var $cellButtons = $('.nav-categories');

  // $cellButtons.on( 'click', '.nav-link', function() {
  //   var index = $(this).index();
  //   $carousel.flickity( 'select', index );
  //   // Find previous active button
  //   var $prevActiveBtn = $cellButtons.find('.active');
  //   // Remove active class from prev button
  //   $prevActiveBtn.removeClass('active');
  //   // Get current slide index and update active button
  //   $($('[data-type="nav-link"]').get(flkty.selectedIndex)).addClass('active');
  // });

});
