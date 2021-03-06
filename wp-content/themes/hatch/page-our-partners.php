<?php get_header(); ?>

	<main role="main">
		<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/banner-partners.jpg');background-position: 50% 25%;">
			<div class="page-title">
				<div class="container">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php if($post->post_parent): ?>
				<div class="page-content col-md-9 order-last">
					<span class="parent-page"><?php echo get_the_title($post->post_parent);?><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/icon-parent-chevron.svg"></span>
				<?php else: ?>
				<div class="page-content page-full col-md-13">
				<?php endif; ?>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<div class="partners partners-founding">
				      <h3 class="partners-title">Hosting Partner</h3>
				      <div class="partner-logos">
				        <div class="partner">
				          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/partner-mountainsky.gif">
				        </div>
				      </div>
				    </div>
						<div class="partners partners-innovation">
				      <h3 class="partners-title">Innovation Partner</h3>
				      <div class="partner-logos">
				        <a href="/partners/kauffman-foundation-hatch/" class="partner partner-intel">
				          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/partner-kauffman.png">
				        </a>
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
				        	<div class="partner-content">
					          <img src="<?php echo $image[0]; ?>">
					          <span class="partner-title"><?php the_title(); ?></span>
					         </div>
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
						<div class="partners partners-bronze">
				      <h3 class="partners-title">Bronze</h3>
				      <div class="partner-logos">
				        <?php $args = array( 'category_name' => 'bronze', 'post_type' => 'sponsor', 'posts_per_page' => 10 );
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

						<div class="row">
							<div class="col-md-6">
								<div id="friends" class="partners partners-friends">
						      <h3 class="partners-title">Friends of HATCH / Individual Contributors</h3>
						      <ul>
										<li>Alicia &amp; Mike Alford</li>
										<li>George Bradt</li>
										<li>Ania Bulis</li>
										<li>Elias Cattan (#becauseofHATCH 1% supporter)</li>
										<li>Tim Christensen</li>
										<li>Charles Cumbaa </li>
										<li>Paul Decker, Music Villa</li>
										<li>Kathy &amp; Martin Dudley</li>
										<li>Per Emanuelsson, CEO of Soundtrap.com</li>
										<li>Stephanie &amp; Greg Guyette</li>
										<li>William “Whurley” Hurley</li>
										<li>Kirsten &amp; Mike King</li>
										<li>Brad &amp; Melissa Levine</li>
										<li>Mark &amp; Jenny Mummert</li>
										<li>Lee &amp; Lathie Poole</li>
										<li>Phil &amp; Jennifer Satre</li>
										<li>Tim &amp; Robin Sheehan</li>
										<li>Jeremiah Slovarp, Jereco Studios and Montana State University</li>
										<li>Madeline Valgenti</li>
										<li>John Yoder</li>
										<li>John Zirkle, Music Educator</li>
										<li>Josh and Amy Vance</li>
										<li>James Nam and Sun Park</li>
										<li>Lynn and Kurt Kelley</li>
										<li>Hunter Parks (MMH 48 LLC)</li>
										<li>Raj Garapati and Jyoti Patel</li>
										<li>David and Kate Mortenson</li>
										<li>Carl and Barbara Ueland</li>
										<li>Tarpon Dreams, LLC</li>
						      </ul>
						    </div>
							</div>
							<div class="col-md-6">
								<div class="partners partners-friends">
						      <h3 class="partners-title">Patreon Supporters (<a href="https://www.patreon.com/HATCH">Become a patron</a>)</h3>
						      <ul>
						        <li>Mark Brand</li>
										<li>Elias Cattan</li>
										<li>Fred Dent</li>
										<li>Steven Duong</li>
										<li>Elysa Fenenbock</li>
										<li>Elke Govertsen</li>
										<li>Shannon Hughes</li>
										<li>Eric James</li>
										<li>Holly Janssen</li>
										<li>Amber Jean</li>
										<li>Rory O-Connor</li>
										<li>Beno Oppenheimer</li>
										<li>Mary Anne Richman</li>
										<li>Marilu Salvador</li>
										<li>Jennifer Sparks</li>
										<li>Pete Strom</li>
										<li>Raquel Villarreal</li>
						      </ul>
						    </div>
							</div>
						</div>

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
				  <div class="page-sidebar col-md-3 order-first">
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
