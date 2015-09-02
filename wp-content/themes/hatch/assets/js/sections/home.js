(function ($, root, undefined) {
  
  $(function () {
    
    'use strict';

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
    
  });
  
})(jQuery, this);