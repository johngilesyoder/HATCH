<?php get_header(); ?>

	<main role="main">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <section>

            <h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>

          </section>
        </div>
      </div>
    <div>
  </main>

<?php get_footer(); ?>
