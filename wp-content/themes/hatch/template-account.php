<?php /* Template Name: Account */ get_header(); ?>

<main role="main">

  <div class="account-header" style="background-image: url('');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hero-content">
            <h1>Your HATCH+ Membership</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="account-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
          <?php else: ?>
            <article>
              <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
            </article>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>