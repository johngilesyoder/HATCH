<?php if( have_rows('homepage_features', 'option') ): ?>
	<div class="mobile-carousel">
	<?php while( have_rows('homepage_features', 'option') ): the_row();
		// vars
		$title = get_sub_field('feature_title');
		$image = get_sub_field('feature_image');
		$link  = get_sub_field('feature_link');
		?>
		<div class="gallery-cell">
			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>
        <article class="article-wrapper" style="background-image:url('<?php echo $image['url']; ?>');">
          <div class="gradient-wrapper">
            <h1 class="post-title"><?php echo $title; ?></h1>
          </div>
        </article>
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
  </div>
<?php endif; ?>
