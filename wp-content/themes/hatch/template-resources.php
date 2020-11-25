<?php /* Template Name: Resources */
  get_header(); 
  $resourcesSectionTitle = get_field('resources_section_title');
?>

<main role="main">

		<div class="container">
			<div class="row">
				<div class="page-content page-full col-md-13">
          <div class="page-title">
            <h1><?php the_title(); ?></h1>
          </div>

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

    <section class="section resources">
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
        

</main>

<?php get_footer(); ?>