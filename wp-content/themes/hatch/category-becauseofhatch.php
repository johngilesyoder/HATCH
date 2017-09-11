<?php get_header(); ?>

<div class="container container-blog">
  <div class="blog-roll-wrapper">
    <main role="main">
      <div class="because-title">
        <strong>#BecauseOfHatch</strong>
        <p>You were invited to HATCH — 100 at a time — because you are amazing. As you inspire others, you are inspired.</p>
        <p>HATCH is a network in which we mutually invest in one another. Few things promote this movement of good more effectively than a collective and shared social tissue, showcasing the work we are doing throughout the world, under one hash tag.</p>
        <p>#becauseOfHATCH brings all of our work collectively full circle. Use it.</p>
        <p>Let's start a collective movement.  Attach #becauseOfHATCH to your projects, ideas, creations, speaking engagements, etc. By attaching the #becauseofHATCH hashtag to social media posts, packaging, conferences and causes, it creates a trackable MOVEMENT, and serves as a metric for securing future partners and funding.</p>
        <p>Used consistently, #becauseOfHATCH not only promotes YOU, via HATCH, but serves as a trackable node in which each of you are supporting one other and the global HATCH community.</p>
      </div>
      <?php get_template_part('loop'); ?>

      <div class="blog-pagination">
        <div class="nav-previous"><?php next_posts_link( '&larr;&nbsp; Older posts' ); ?></div>
        <div class="nav-next"><?php previous_posts_link( 'Newer posts &nbsp;&rarr;' ); ?></div>
      </div>

    </main>
  </div>
  <div class="blog-sidebar-wrapper sidebar-becauseofhatch">
    <aside class="blog-sidebar">

      <div class="sidebar-widget">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
      </div>

      <div class="widget_twitter">
        <h3>#BecauseOfHatch</h3>
        <a class="twitter-timeline" href="https://twitter.com/search?q=%23becauseofhatch%20OR%20%23HATCHedu%20OR%20%23HATCHdsel" data-widget-id="590628620504326144">Tweets about #becauseofhatch OR #HATCHedu OR #HATCHdsel</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>

      <footer class="sidebar-footer">
        <div class="sidebar-footer-logo">
          <span class="hatch-logo">Hatch</span>
        </div>
        <div class="sidebar-footer-social">
          <div class="sidebar-footer-social-links">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-blog-footer-twitter.svg"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-blog-footer-facebook.svg"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-blog-footer-instagram.svg"></a>
          </div>
          <a href="mailto:hatchinfo@hatchexperience.org" class="sidebar-footer-email">hatchinfo@hatchexperience.org</a>
        </div>
        <div class="sidebar-footer-company">
          © HATCHfest 2004-<?php echo date('Y'); ?>. “HATCH” is a registered trademark. All rights reserved.
        </div>
      </footer>
    </aside>
  </div>
</div>
