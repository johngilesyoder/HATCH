<?php get_header(); ?>
<!-- Modal -->
<div class="modal fade" id="categoriesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Categories</h4>
      </div>
      <div class="modal-body">
        <?php wp_list_categories('title_li=&orderby=count&order=DESC&taxonomy=post_tag'); ?>
      </div>
    </div>
  </div>
</div>

<div class="container container-blog">
  <div class="blog-roll-wrapper">

		<main role="main">
			<div class="view-all-posts">
				<a href="/blog">&larr;&nbsp; View all posts</a>
			</div>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post title -->
					<h1 class="post-title">
						<?php if ( in_category( 'profiles' ) ) : ?>
							Profile &nbsp;//&nbsp; 
						<?php endif; ?>
						<?php the_title(); ?>
					</h1>
					<div class="post-meta">
						<span class="author"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> &nbsp;&bull;&nbsp; <span class="date"><?php the_time('F j, Y'); ?></p></span>
					</div>

					<div class="share-post">
						<div class="tweet-button">
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="kindkudos" data-count="none">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>
						<div class="like-button">
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('full'); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>

					<div class="post-content">
						<!-- Profile intro statement -->
						<?php if ( get_post_meta( get_the_ID(), 'wpcf-profile-introduction-statement', true ) ) : ?>
					    <div class="profile-intro-statement">
					    	<?php echo get_post_meta( get_the_ID(), 'wpcf-profile-introduction-statement', true ); ?>
					    </div>
					  <?php endif; ?>

						<?php the_content(); // Dynamic Content ?>

						<!-- Profile intro statement -->
						<?php if ( get_post_meta( get_the_ID(), 'wpcf-profile-closing-statement', true ) ) : ?>
					    <div class="profile-closing-statement">
					    	<?php echo get_post_meta( get_the_ID(), 'wpcf-profile-closing-statement', true ); ?>
					    </div>
					  <?php endif; ?>
					</div>

					<?php comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php endif; ?>

		</main>
	</div>

			
  <div class="blog-sidebar-wrapper">
    <aside class="blog-sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>