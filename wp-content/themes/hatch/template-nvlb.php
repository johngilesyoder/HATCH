<?php /* Template Name: No Vote Left Behind Landing */ get_header(); ?>

<main role="main">

  <div class="nvlb-hero">
    <img alt="No Vote Left Behind" src="<?php echo get_template_directory_uri(); ?>/assets/img/nvlb-header.jpg">
  </div>

  <section class="nvlb-section invest">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <a target="_blank" href="https://www.eventbrite.com/e/no-vote-left-behind-virtual-rally-tickets-124598538583" class="btn btn-secondary btn-support">RSVP Now</a>
        </div>
      </div>
    </div>
  </section>

  <section class="nvlb-section resources">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title">Information & Resources</h2>
          <div class="resources-wrapper">
            <a class="resource" target="_blank" href="https://www.vote.org/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nvlb-tile-1.jpg">
              <h3>Voting Toolbox <i class="material-icons">launch</i></h3>
              <p>Provided by Vote.org</p>
            </a>
            <a class="resource" target="_blank" href="https://hatchexperience.org/no-votes-left-behind-featured-guests/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nvlb-tile-2.jpg">
              <h3>Featured Guests <i class="material-icons">launch</i></h3>
              <p>We'll be hearing from Aloe Blocc, Shepard Fairey, Tim Daly, Reggie Watts, Rising Appalachia, and more.</p>
            </a>
            <a class="resource" target="_blank" href="https://hatchexperience.org/vote-partners/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nvlb-tile-3.jpg">
              <h3>Partner Organizations <i class="material-icons">launch</i></h3>
              <p>The Future Coalition, National Chiildren's Campaign, Artists for Amazonia, and more.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="living-room-section calendar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"><?php echo $calendarSectionTitle; ?></h2>
          <div class="row">

            <div class="col-md-12">
              <?php echo $calendarSectionContent; ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="support" class="living-room-section support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"><?php echo $supportSectionTitle; ?></h2>
          <div class="row">

            <div class="col-md-12">
              <?php echo $supportSectionContent; ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>