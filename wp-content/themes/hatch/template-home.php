<?php /* Template Name: Home Page Template */ get_header(); ?>

  <!-- Posts hero -->
  <section id="posts-hero" class="posts-hero">
    <div id="hero-loading" class="isLoaded"></div>
  </section>

  <div class="container">
    <!-- Conference -->
  	<section class="section-block section-conference">
      <div class="section-header">
        <h2 class="section-title">HATCH <?php the_field('current_hatch_big_sky_year', 'option'); ?></h2>
      </div>
      <div class="row">
        <div class="conference-photo">
          <div class="conference-photo-wrapper">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/conference-photo.jpg">
            <span class="conference-photo-title">OFF THE GRID // ON THE GRID</span>
          </div>
        </div>
        <div class="conference-info">
          <h3 class="hatch-logo conference-title">HATCH<span><?php the_field('current_hatch_big_sky_year', 'option'); ?></span></h3>
          <?php if( have_rows('hatch_event', 'option') ): ?>
            
            <div class="events">
            
              <?php while( have_rows('hatch_event', 'option') ): the_row(); 

                // vars
                $date = get_sub_field('date');
                $title = get_sub_field('locationtitle');

                ?>

                <span class="event"><?php echo $date; ?> &nbsp;·&nbsp; <?php echo $title; ?></span>

              <?php endwhile; ?>
            
            </div>

          <?php endif; ?>
          <p>Imagine gathering up a hundred innovators, artists, makers, creators, educators, risk-takers, influencers, and mavericks… people who want to shake the world by its ankles. And are. Imagine them in a room together, teased out of their cocoons, grids off, brains on, glass flying everywhere:</p>
          <p>A musician tackles a problem for an entrepreneur. A scientist cracks open an idea for music distribution. An ad-guy delivers insight to a health-care play. An inventor, architect, and educator sketching new models for learning…  Imagine that. Or just find yourself at HATCH.</p>
          <div class="conference-actions">
            <!-- <a href="/apply" class="btn btn-primary btn-apply">Apply for an invite</a> -->
            <a href="/the-experience" class="">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Mentorship -->
    <section class="section-block section-mentorship">
      <div class="section-header">
        <h2 class="section-title">Programs</h2>
      </div>
      <div class="row">
        <div class="mentorship-block">
          <div class="block-wrapper">
            <a href="/hatching-a-better-world/" class="mentorship-block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/homepage-habw.jpg');">
              <h3 class="mentorship-block-title gradient">
                <span>HATCH a Better World</span>
              </h3>
            </a>
            <p>The HATCH network consists of world-shapers that mentor and mutually invest in one another. The HATCH A Better World program is designed to foster and support projects, initiatives, and collaborations from within the HATCH network.This program serves as the amplifier for creative solutions for good. <a href="/hatching-a-better-world/">Learn More</a></p>
          </div>
        </div>
        <div class="mentorship-block">
          <div class="block-wrapper">
            <a href="/nextgen-2/" class="mentorship-block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/homepage-nextgen.jpg');">
              <h3 class="mentorship-block-title gradient">
                <span>NextGen</span>
              </h3>
            </a>
            <p>Central to HATCH is cultivating the next generation of creative leaders. Each year, HATCH connects students to global leaders and mentors at the top of their industries.  As a community of innovators and influencers, HATCH works to support NextGen students and expand their horizons of what’s possible. <a href="/home/nextgen-2/">Learn more about 360° Mentorships</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Upcoming Hatchings -->
    <!-- <section class="section-block section-hatchings">
      <div class="section-header">
        <h2 class="section-title">Upcoming (&amp; Past) Hatchings</h2>
        <div class="section-header-links">
          <a href="/events/">View Calendar<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-link-chevron.svg"></a>
        </div>
      </div>
      <div class="row">
        <?php
        // Ensure the global $post variable is in scope
        global $post;

        // Retrieve the next 5 upcoming events
        $events = tribe_get_events( array(
            'posts_per_page' => 3
        ) );

        // Loop through the events: set up each one as
        // the current post then use template tags to
        // display the title and content
        foreach ( $events as $post ) {
          setup_postdata( $post );
      ?>

      <a href="<?php the_permalink(); ?>" class="hatching-block">
        <div class="block-wrapper">
          <div class="hatching-block-img" style="background-image:url('<?php echo hatch_tribe_event_featured_image(); ?>');"></div>
          <h1 class="hatching-title"><?php the_title(); ?></h1>
          <span class="hatching-date"><?php echo tribe_get_start_date(); ?></span>
          <span class="hatching-location"><?php echo tribe_get_city(); ?>, <?php echo tribe_get_stateprovince(); ?></span>
        </div>
      </a>

      <?php } ?>
      </div>
    </section> -->

    <!-- Partners -->
    <?php get_template_part( 'includes/partners-block' ); ?>
  </div>

  <!-- What is HATCH -->
  <?php get_template_part( 'includes/what-is-hatch' ); ?>


<?php get_footer(); ?>
