!function($,e,o){$(function(){"use strict";function e(){switch($(window).width()>992){case!0:$("#posts-hero").html(template.tile).promise().done(function(){$(".tile-carousel").flickity({contain:!0,pageDots:!1,setGallerySize:!1}).flickity("reloadCells")}),$(window).width()>=1200?$(".isotope").isotope({layoutMode:"masonryHorizontal",itemSelector:".item",masonryHorizontal:{rowHeight:144,gutter:30}}):$(".isotope").isotope({layoutMode:"masonryHorizontal",itemSelector:".item",masonryHorizontal:{rowHeight:111,gutter:30}});break;default:$("#posts-hero").html(template.carousel).promise().done(function(){$(".mobile-carousel").flickity({imagesLoaded:!0,autoPlay:4e3,pageDots:!1,setGallerySize:!1}).flickity("reloadCells")})}}var o=!1;e(),$(window).resize(e)})}(jQuery,this);