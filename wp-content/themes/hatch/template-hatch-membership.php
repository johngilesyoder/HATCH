<?php /* Template Name: HATCH Membership Template */
get_header(); 
$investmentSectionTitle = get_field('investment_section_title');
$investmentSectionContent = get_field('investment_section_content');
$levelsSectionTitle = get_field('levels_section_title');
?>

<main role="main">

  <div class="membership-hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="hero-content">
      <h1><?php the_title(); ?></h1>
      <a href="#join" class="btn btn-secondary">Join Now</a>
    </div>
  </div>

  <section class="membership-section invest">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"><?php echo $investmentSectionTitle; ?></h2>
          <?php echo $investmentSectionContent; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="membership-section benefits">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title">Member Benefits</h2>
          <div class="row">

          <?php if( have_rows('membership_benefits') ): ?>

            <?php while( have_rows('membership_benefits') ): the_row(); 

              // vars
              $image = get_sub_field('benefit_image');
              $label = get_sub_field('benefit_label');
              $description = get_sub_field('benefit_description');
              ?>

              <div class="col-md-4">
                <div class="member-benefit">
                  <img src="<?php echo $image['url']; ?>">
                  <h3><?php echo $label; ?></h3>
                  <p><?php echo $description; ?></p>
                </div>
              </div>

            <?php endwhile; ?>

            <?php endif; ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="join" class="membership-section levels">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"><?php echo $levelsSectionTitle; ?></h2>
          <p class="section-summary">Membership is only as powerful as the members themselves. We want to ensure that HATCH is accessible to everyone regardless of one’s financial circumstance – even if that’s $10/month! HATCHers can choose the price point that best reflects their ability to pay using a sliding scale.</p>

          <!-- Membership Options -->
          <div class="membership-options">

            <div class="membership-option">
              <h4 class="option-title">HATCH+ Hero – Lifetime Membership</h4>
              <p class="option-cost">$5000</p>
              <a href="/register/hatch-hero-lifetime-membership/" class="btn btn-secondary">Join now</a>
            </div>
            
            <div class="membership-option">
              <h4 class="option-title">HATCH+ (Annual)</h4>
              <p class="option-cost">$1000 / year</p>
              <a href="/register/hatch-annual-1000/" class="btn btn-secondary">Join now</a>
            </div>

            <div class="membership-option">
              <h4 class="option-title">HATCH+ (Annual)</h4>
              <p class="option-cost">$100 / year</p>
              <a href="/register/hatch-annual-membership/" class="btn btn-secondary">Join now</a>
            </div>

            <div class="membership-option">
              <h4 class="option-title">HATCH+ (Monthly)</h4>
              <p class="option-cost">$50 / month</p>
              <a href="/register/hatch-monthly-50/" class="btn btn-secondary">Join now</a>
            </div>

            <div class="membership-option">
              <h4 class="option-title">HATCH+ (Monthly)</h4>
              <p class="option-cost">$25 / month</p>
              <a href="/register/hatch-membership-monthly-25/" class="btn btn-secondary">Join now</a>
            </div>

            <div class="membership-option">
              <h4 class="option-title">HATCH+ (Monthly)</h4>
              <p class="option-cost">$10 / month</p>
              <a href="/register/hatch-monthly-10/" class="btn btn-secondary">Join now</a>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  
  <div class="container">
    <div class="row">
      <div class="page-content page-full col-md-13">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>