<?php /* Template Name: HATCH Living Room */
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
      <h1><?php the_title(); ?></h1>
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
          <a href="#support" class="btn btn-secondary btn-support">Support HATCH</a>
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
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup">
                <form action="https://hatchexperience.us12.list-manage.com/subscribe/post?u=80e369f4604bb2b82d06aebf5&amp;id=bc2abe573d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                    <div class="form-group">
                      <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                      <input type="email" value="" name="EMAIL" class="required form-control" id="mce-EMAIL">
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="mce-FNAME">First Name </label>
                          <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="mce-LNAME">Last Name </label>
                          <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
                        </div>
                      </div>
                    </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                      <input type="text" name="b_80e369f4604bb2b82d06aebf5_bc2abe573d" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                      <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">Subscribe</button>
                    </div>
                  </div>
                </form>
              </div>
              <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='MMERGE5';ftypes[5]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
              <!--End mc_embed_signup-->

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
              <a 
                class="btn btn-secondary" 
                href="https://calendar.google.com/calendar?cid=aGF0Y2hleHBlcmllbmNlLm9yZ19rNDRlajdzbjhxdGRhNDFwZW5nOHNsNXZuOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t"
              >
                <i class="material-icons">add</i> Add to my calendar
              </a>
              <?php echo $calendarSectionContent; ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="living-room-section highlights">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"><?php echo $highlightsSectionTitle; ?></h2>
          <div class="row">
            <?php if( have_rows('highlights') ): ?>

            <?php while( have_rows('highlights') ): the_row(); 

              // vars
              $iframe = get_sub_field('video_url');

              // Add extra attributes to iframe HTML.
              $attributes = 'class="resp-iframe"';
              $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

              ?>

              <div class="col-md-4">
                <div class="resp-container">
                  <?php echo $iframe; ?>
                </div>
              </div>

            <?php endwhile; ?>

            <?php endif; ?>
            
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