<?php

/*------------------------------------*\
  Home AJAX Support
\*------------------------------------*/
function hatch_get_tiles()
{
  //start output buffering
  ob_start();

  get_template_part('includes/tile-hero-2');

  //get the contents in a string that JavaScript can use
  $tiles = ob_get_contents();

  //clean everything up to preserve memory.
  ob_end_clean();

  return $tiles;
}

function hatch_get_carousel()
{
  //start output buffering
  ob_start();

  get_template_part('includes/carousel-hero-2');

  //get the contents in a string that JavaScript can use
  $carousel = ob_get_contents();

  //clean everything up to preserve memory.
  ob_end_clean();

  return $carousel;
}

/*------------------------------------*\
  Homepage Posts
\*------------------------------------*/

function hatch_home_pagesize($query)
{
  if (is_home()) {
    $query->set('showposts', 14);
    return;
  }
}
