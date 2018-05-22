<?php
  $rows = get_field('homepage_features', 'option' );
  // Tile 1
  $tile_one = $rows[0];
  $tile_one_image = $tile_one['feature_image' ];
  $tile_one_title = $tile_one['feature_title' ];
  $tile_one_link  = $tile_one['feature_link' ];
  // Tile 2
  $tile_two = $rows[1];
  $tile_two_image = $tile_two['feature_image' ];
  $tile_two_title = $tile_two['feature_title' ];
  $tile_two_link  = $tile_two['feature_link' ];
  // Tile 3
  $tile_three = $rows[2];
  $tile_three_image = $tile_three['feature_image' ];
  $tile_three_title = $tile_three['feature_title' ];
  $tile_three_link  = $tile_three['feature_link' ];
  // Tile 4
  $tile_four = $rows[3];
  $tile_four_image = $tile_four['feature_image' ];
  $tile_four_title = $tile_four['feature_title' ];
  $tile_four_link  = $tile_four['feature_link' ];
  // Tile 5
  $tile_five = $rows[4];
  $tile_five_image = $tile_five['feature_image' ];
  $tile_five_title = $tile_five['feature_title' ];
  $tile_five_link  = $tile_five['feature_link' ];
  // Tile 6
  $tile_six = $rows[5];
  $tile_six_image = $tile_six['feature_image' ];
  $tile_six_title = $tile_six['feature_title' ];
  $tile_six_link  = $tile_six['feature_link' ];
?>

<div class="tiles">
  <div class="tile-column">
    <div class="tile-row">
      <a href="<?php echo $tile_one_link; ?>" class="tile" style="background-image: url('<?php echo $tile_one_image['url']; ?>');">
        <h3><?php echo $tile_one_title; ?></h3>
      </a>
      <a href="<?php echo $tile_two_link; ?>" class="tile" style="background-image: url('<?php echo $tile_two_image['url']; ?>');">
        <h3><?php echo $tile_two_title; ?></h3>
      </a>
    </div>
    <div class="tile-row">
      <a href="<?php echo $tile_three_link; ?>" class="tile" style="background-image: url('<?php echo $tile_three_image['url']; ?>');">
        <h3><?php echo $tile_three_title; ?></h3>
      </a>
    </div>
  </div>
  <div class="tile-column">
    <div class="tile-row">
      <a href="<?php echo $tile_four_link; ?>" class="tile" style="background-image: url('<?php echo $tile_four_image['url']; ?>');">
        <h3><?php echo $tile_four_title; ?></h3>
      </a>
    </div>
  </div>
  <div class="tile-column">
    <div class="tile-row">
      <a href="<?php echo $tile_five_link; ?>" class="tile" style="background-image: url('<?php echo $tile_five_image['url']; ?>');">
        <h3><?php echo $tile_five_title; ?></h3>
      </a>
    </div>
    <div class="tile-row">
      <a href="<?php echo $tile_six_link; ?>" class="tile" style="background-image: url('<?php echo $tile_six_image['url']; ?>');">
        <h3><?php echo $tile_six_title; ?></h3>
      </a>
    </div>
  </div>
</div>
