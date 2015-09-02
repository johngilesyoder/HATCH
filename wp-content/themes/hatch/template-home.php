<?php /* Template Name: Home Page Template */ get_header(); ?>

  <!-- Posts hero -->
  <section id="posts-hero" class="posts-hero">
    <div id="hero-loading" class="isLoaded"></div>
  </section>
  
  <div class="container">
    <!-- Conference -->
  	<section class="section-block section-conference">
      <div class="section-header">
        <h2 class="section-title">HATCH 15</h2>
      </div>
      <div class="row">
        <div class="conference-photo"> 
          <div class="conference-photo-wrapper">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/conference-photo.jpg">
            <span class="conference-photo-title">OFF THE GRID // ON THE GRID</span>
          </div>
        </div>
        <div class="conference-info">
          <h3 class="hatch-logo conference-title">HATCH<span>2015</span></h3>
          <span class="conference-date">Sep 16-20, 2015 &nbsp;·&nbsp; Big Sky, Montana</span>
          <p>Imagine gathering up a hundred innovators, artists, makers, creators, educators, risk-takers, influencers, and mavericks… people who want to shake the world by its ankles. And are. Imagine them in a room together, teased out of their cocoons, grids off, brains on, glass flying everywhere:</p>
          <p>A musician tackles a problem for an entrepreneur. A scientist cracks open an idea for music distribution. An ad-guy delivers insight to a health-care play. An inventor, architect, and educator sketching new models for learning…  Imagine that. Or just find yourself at HATCH.</p>
          <div class="conference-actions">
            <a href="/apply" class="btn btn-primary btn-apply">Apply for an invite</a>
            <a href="/the-experience" class="btn btn-link btn-learn-more">Learn more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Mentorship -->
    <section class="section-block section-mentorship">
      <div class="section-header">
        <h2 class="section-title">Mentorship</h2>
      </div>
      <div class="row">
        <div class="mentorship-block">
          <div class="block-wrapper">
            <a href="#" class="mentorship-block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/mentorship-1.png');">
              <h3 class="mentorship-block-title gradient">
                <span>Groundbreakers</span>
              </h3>
            </a>
            <p>Central to hatch is cultivating the next generation of creative leaders. Each year, HATCH selects up to 10 “Groundbreakers” who have shown exceptional talent and dedication to their work. So far, HATCH has sponsored more than 100 Groundbreakers and has impacted over 5,000 students directly. <a href="#">See Groundbreakers Alumni</a></p> 
          </div>
        </div>
        <div class="mentorship-block">
          <div class="block-wrapper">
            <a href="#" class="mentorship-block-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/mentorship-2.png');">
              <h3 class="mentorship-block-title gradient">
                <span>360&deg; Mentorship</span>
              </h3>
            </a>
            <p>Mentoring is a Hatch cornerstone. What began as top-down mentorship has evolved into a ‘360’ mentorship approach; bottom-up and peer to peer. We encourage — if not expect — all HATCH community members to mentor, share, and challenge one another. <a href="#">Learn more about 360° Mentorships</a></p> 
          </div>
        </div>
      </div>
    </section>

    <!-- Upcoming Hatchings -->
    <section class="section-block section-hatchings">
      <div class="section-header">
        <h2 class="section-title">Upcoming Hatchings</h2>
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
    </section>

    <!-- Partners -->
    <?php get_template_part( 'includes/partners-block' ); ?>
  </div>

  <!-- What is HATCH -->
  <?php get_template_part( 'includes/what-is-hatch' ); ?>


<?php get_footer(); ?>
