<?php get_header(); ?>
<?php
  $project_description = get_field('project_description');
  $leader_name = get_field('leader_name');
  $donate = get_field('donate');
  $categories = get_the_term_list( $post->ID, 'story_category', '<li>', '</li><li>', '</li>' );
  $categories = strip_tags( $categories, '<li>' );
  $sdgs = get_the_term_list( $post->ID, 'sdg', '<li>', '</li><li>', '</li>' );
  $sdgs = strip_tags( $sdgs, '<li>' );
?>

	<main role="main" aria-label="Content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="because-title">
            <strong>HATCHing a Better World</strong>
            <p>HATCH is a network of world-shapers that mentor and mutually invest in one another. As positive things happen #becauseOfHATCH, the tag is used to help track the many projects and initiatives that grow from HATCH to create a global movement for good.</p>
            <a href="/hatching-a-better-world/">&larr; Back to all Stories</a>
          </div>
          <div class="lab">
            <?php if(has_post_thumbnail()) : ?>
              <header class="lab-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <?php else : ?>
              <header class="lab-header">
            <?php endif; ?>
              <div class="header-content">
                <span class="leader-name"><?php echo $leader_name; ?></span>
                <span class="project-name"><?php the_title(); ?></span>
              </div>
            </header>
            <div class="classifications">
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
            </div>
            <div class="summary lab-section">
              <label>Summary</label>
              <div><?php the_content(); ?></div>
            </div>
            <div class="project-description lab-section">
              <label>Project Description</label>
              <div>
                <?php echo $project_description; ?>
              </div>
            </div>
            <div class="actions">
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
              <?php if ($donate) : ?>
                <div class="donate lab-section">
                  <label>Donate</label>
                  <div><?php echo $donate; ?></div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php comments_template(); ?>
    </div>
	</main>

<?php get_footer(); ?>