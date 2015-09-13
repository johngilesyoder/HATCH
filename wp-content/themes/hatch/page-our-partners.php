<?php get_header(); ?>

	<main role="main">
		<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/banner-apply.jpg');background-position: 50% 50%;">
			<div class="page-title">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php if($post->post_parent): ?>
				<div class="page-content">
					<span class="parent-page"><?php echo get_the_title($post->post_parent);?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-parent-chevron.svg"></span>
				<?php else: ?>
				<div class="page-content page-full">
				<?php endif; ?>
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						<div class="partners partners-innovation">
				      <h3 class="partners-title">Innovation Partner</h3>
				      <div class="partner-logos">
				        <div class="partner">
				          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner-intel.png">
				        </div>
				      </div>
				    </div>
				    <div class="partners partners-founding">
				      <h3 class="partners-title">Founding Partner</h3>
				      <div class="partner-logos">
				        <div class="partner">
				          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partner-moonlight-basin.png">
				        </div>
				        <br>
				        <a href="/partners/founding-partner-moonlight-basin/">Learn more</a> about our Founding Partner, Moonlight Basin
				      </div>
				    </div>
						<div class="partners partners-platinum">
				      <h3 class="partners-title">Platinum</h3>
				      <div class="partner-logos">
				        <?php $args = array( 'category_name' => 'platinum', 'post_type' => 'sponsor', 'posts_per_page' => 10 );
				        $loop = new WP_Query( $args );
				        while ( $loop->have_posts() ) : $loop->the_post();
				        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				        <div class="partner">
				          <img src="<?php echo $image[0]; ?>">
				          <span class="partner-title"><?php the_title(); ?></span>
				        </div>
				        <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
				      </div>
				    </div>
				    <div class="partners partners-gold">
				      <h3 class="partners-title">Gold</h3>
				      <div class="partner-logos">
				        <?php $args = array( 'category_name' => 'gold', 'post_type' => 'sponsor', 'posts_per_page' => 10 );
				        $loop = new WP_Query( $args );
				        while ( $loop->have_posts() ) : $loop->the_post();
				        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				        <div class="partner">
				          <img src="<?php echo $image[0]; ?>">
				          <span class="partner-title"><?php the_title(); ?></span>
				        </div>
				        <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
				      </div>
				    </div>
				    <div class="partners partners-silver">
				      <h3 class="partners-title">Silver</h3>
				      <div class="partner-logos">
				        <?php $args = array( 'category_name' => 'silver', 'post_type' => 'sponsor', 'posts_per_page' => 10 );
				        $loop = new WP_Query( $args );
				        while ( $loop->have_posts() ) : $loop->the_post();
				        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				        <div class="partner">
				          <img src="<?php echo $image[0]; ?>">
				          <span class="partner-title"><?php the_title(); ?></span>
				        </div>
				        <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
				      </div>
				    </div>
				    <div class="partners partners-supporters">
				      <h3 class="partners-title">Supporters</h3>
				      <ul>
				        <?php $args = array( 'category_name' => 'supporters', 'post_type' => 'sponsor', 'posts_per_page' => 10 );
				        $loop = new WP_Query( $args );
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <li><?php the_title(); ?></li>
				        <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
				      </ul>
				    </div>
				    <div class="partners partners-friends">
				      <h3 class="partners-title">Friends of HATCH</h3>
				      <ul>
				        <?php $args = array( 'category_name' => 'friends', 'post_type' => 'sponsor', 'posts_per_page' => 10 );
				        $loop = new WP_Query( $args );
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <li><?php the_title(); ?></li>
				        <?php endwhile; ?>
				        <?php wp_reset_query(); ?>
				      </ul>
				    </div>

				    <?php the_content(); ?>

					</article>
					<?php endwhile; ?>
					<?php else: ?>
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<?php endif; ?>

				</div>

				<?php
				  if($post->post_parent) {
				  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				  $titlenamer = get_the_title($post->post_parent);
				  }

				  else {
				  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  $titlenamer = get_the_title($post->ID);
				  }
				  if ($children) : ?>
				  <div class="page-sidebar">
					  <h2><?php echo $titlenamer; ?></h2>
					  <ul>
					  	<?php echo $children; ?>
					  </ul>
					</div>

					<?php else: ?>
					
					<?php endif; ?>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
