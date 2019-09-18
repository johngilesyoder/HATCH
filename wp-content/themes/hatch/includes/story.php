<?php
  $project_description = get_field('project_description');
  $leader_name = get_field('leader_name');
  $categories = get_the_term_list( $post->ID, 'story_category', '<li>', '</li><li>', '</li>' );
  $categories = strip_tags( $categories, '<li>' );
  $sdgs = get_the_term_list( $post->ID, 'sdg', '<li>', '</li><li>', '</li>' );
  $sdgs = strip_tags( $sdgs, '<li>' );
?>

<div class="lab">
  <?php if(has_post_thumbnail()) : ?>
    <header class="lab-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
  <?php else : ?>
    <header class="lab-header">
  <?php endif; ?>
    <a href="<?php the_permalink(); ?>" class="header-content">
      <span class="leader-name"><?php echo $leader_name; ?></span>
      <span class="project-name"><?php the_title(); ?></span>
    </a>
  </header>
  <div class="categories lab-section">
    <label>Categories</label>
    <ul>
      <?php echo $categories; ?>
    </ul>
  </div>
  <div class="sdgs lab-section">
    <label>SDGs <small>(UN Sustainable Development Goals)</small></label>
    <ul>
      <?php echo $sdgs; ?>
    </ul>
  </div>
  <div class="summary lab-section">
    <label>Summary</label>
    <div><?php the_excerpt(); ?></div>
  </div>
  <div class="project-description lab-section">
    <label>Project Description</label>
    <div>
      <?php echo $project_description; ?>
    </div>
  </div>
  <div class="links lab-section">
    <label>Links</label>
    <?php if( have_rows('links') ): ?>

    <?php while( have_rows('links') ): the_row(); 

      // vars
      $link_label = get_sub_field('link_label');
      $link_url = get_sub_field('link_url')

      ?>

      <li>

        <?php if( $link_label ): ?>
          <a href="<?php echo $link_url; ?>"><?php echo $link_label; ?></a>
        <?php endif; ?>

      </li>

    <?php endwhile; ?>

    </ul>

    <?php endif; ?>
  </div>
  <div class="action">
    <a href="<?php the_permalink(); ?>" class="btn btn-default">Find out more</a>
  </div>
</div>