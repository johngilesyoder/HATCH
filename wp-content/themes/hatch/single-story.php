<?php get_header(); ?>
<?php
  $project_description = get_field('project_description');
  $leader_name = get_field('leader_name');
  $leader_bio = get_field('leader_short_bio');
  $leader_avatar = get_field('leader_headshot');
  $video = get_field('video');
  $donate = get_field('donate');
  $needs = get_field('project_needs');
  $contact = get_field('contact_information');
  $categories = get_the_term_list( $post->ID, 'story_category', '<li>', '</li><li>', '</li>' );
  $categories = strip_tags( $categories, '<li>' );
  $sdgs = get_the_terms( $post->ID, 'sdg' );
  $the_content = apply_filters('the_content', get_the_content());
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
                <span class="project-name"><?php the_title(); ?></span>
              </div>
            </header>
            <?php if ($leader_name && $leader_avatar && $leader_bio) : ?>
              <div class="project-leader lab-section">
                <label>Project Leader</label>
                <div class="leader">
                  <img class="leader-avatar" src="<?php echo $leader_avatar['url']; ?>">
                  <div class="leader-details">
                    <span class="leader-name"><?php echo $leader_name; ?></span>
                    <div class="leader-bio">
                      <?php echo $leader_bio; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
            <div class="classifications">
              <?php if (! empty( $categories )) : ?>
                <div class="categories lab-section">
                  <label>Categories</label>
                  <ul>
                    <?php echo $categories; ?>
                  </ul>
                </div>
              <?php endif; ?>
              <?php if (! empty( $sdgs )) : ?>
                <div class="sdgs lab-section">
                  <label>SDGs <small>(UN Sustainable Development Goals)</small></label>
                  <div class="sdgs">
                    <?php foreach ($sdgs as $sdg) : ?>
                      <?php $sdg_tiles = apply_filters( 'taxonomy-images-get-terms', '', array(
                          'taxonomy' => 'sdg',
                            'term_args' => array(
                              'slug' => $sdg->slug,
                            )
                          ) 
                        );
                      ?>
                      <?php foreach( (array) $sdg_tiles as $sdg_tile) : ?>
                        <div class="sdg">
                          <?php echo wp_get_attachment_image( $sdg_tile->image_id, 'full', array('class' => 'sdg-image')); ?>
                        </div>
                      <?php endforeach; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            
              <div class="summary lab-section">
                <label>Summary</label>
                <div><?php the_content(); ?></div>
              </div>
         
            <?php if ($project_description) : ?>
            <div class="project-description lab-section">
              <label>Project Description</label>
              <div>
                <?php echo $project_description; ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if ($needs) : ?>
              <div class="project-needs lab-section">
                <label>Project Needs</label>
                <div><?php echo $needs; ?></div>
              </div>
            <?php endif; ?>
            <div class="actions">
              <div class="links lab-section">
                <label>Links</label>
                <?php if( have_rows('links') ): ?>
                  
                  <ul>
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
              <?php if ($contact) : ?>
                <div class="contact lab-section">
                  <label>Contact</label>
                  <div><?php echo $contact; ?></div>
                </div>
              <?php endif; ?>


              <?php if( have_rows('project_updates') ): ?>

                <div class="lab-section updates">
                  <label>Project Updates</label>

                  <?php while( have_rows('project_updates') ): the_row(); 

                    // vars
                    $title = get_sub_field('update_title');
                    $date = get_sub_field('update_date');
                    $text = get_sub_field('update_text');

                    ?>

                    <div class="update">
                      <div class="update-title"><?php echo $title; ?></div>
                      <div class="update-date"><?php echo $date; ?></div>
                      <div class="update-content"><?php echo $text; ?></div>
                    </div>

                  <?php endwhile; ?>

                </div>

              <?php endif; ?>

            </div>
            <?php if ($video) : ?>
              <div class="lab-section project-video">
                <div class="iframe-container">
                  <?php echo $video; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php comments_template(); ?>
    </div>
	</main>

<?php get_footer(); ?>