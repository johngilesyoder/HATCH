<?php /* Template Name: Impact Labs */
get_header(); 
$resourcesSectionTitle = get_field('resources_section_title');
$calendarSectionTitle = get_field('calendar_section_title');
$calendarSectionContent = get_field('calendar_section_content');
$highlightsSectionTitle = get_field('highlights_section_title');
$supportSectionTitle = get_field('support_section_title');
$supportSectionContent = get_field('support_section_content');
?>

<main role="main">

  <div class="living-room-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="hero-content">
      <h1><?php //the_title(); ?></h1>
    </div>
  </div>

  <section class="living-room-section invest">
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
          <a href="https://us02web.zoom.us/meeting/register/tZIudOGgrzkqHtT3LnfFk8-RrWiiWQFPtR3N" class="btn btn-secondary btn-support">Register</a>
        </div>
      </div>
    </div>
  </section>

  <section class="living-room-section resources">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"><?php echo $resourcesSectionTitle; ?></h2>
          <div class="resources-wrapper">

            <?php if( have_rows('resources') ): ?>

              <?php while( have_rows('resources') ): the_row(); 

                // vars
                $image = get_sub_field('resource_image');
                $label = get_sub_field('resource_label');
                $description = get_sub_field('resource_description');
                $link = get_sub_field('resource_link');
                ?>

                <a class="resource" target="_blank" href="<?php echo $link; ?>">
                  <img src="<?php echo $image['url']; ?>">
                  <h3><?php echo $label; ?> <i class="material-icons">launch</i></h3>
                  <p><?php echo $description; ?></p>
                </a>

              <?php endwhile; ?>

            <?php endif; ?>
            
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