<?php /* Template Name: HATCHBack Template */ get_header(); ?>

<main role="main">

  <div class="hatchback-banner">
    <div class="container">
      <div class="banner-left">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hatchback/hatchback-logo.svg" alt="HATCHBack"></h1>
        <span class="hashtag">#BecauseOfHatch</span>
      </div>
      <div class="banner-right">
        <img class="hatchback-badge" src="<?php echo get_template_directory_uri(); ?>/assets/img/hatchback/badge-one-percent.svg" alt="1% HATCHBack">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="hatchback-intro">
      <div class="intro-left">
        <div class="hero-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hatchback/hatchback-feature-img.png');"></div>
      </div>
      <div class="intro-right">
        <h2>Redefining a better future #becauseofhatch.</h2>
        <p>
          HATCH is a conduit for incredible opportunity. A worldwide network of connections that fosters innovation and venture growth becomes accessible. World changing ideas and projects are born. Globally adopted technologies take their first steps from concepts to products.    
        </p>
        <p>
          HATCH BACK is the platform for reinvesting 1% or more of profits from projects and products that come to being through the HATCH community.
        </p>
      </div>
    </div>
    <div class="hatchback-stories-donation">
      <div class="stories">
        <h2 class="stories-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hatchback/stories-title.svg" alt="Amazing things happen when HATCHers give back. Story time…"></h2>
        <div class="story">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hatchback/story-1.png" alt="">
          <p>
            <strong>When Rafi heard Elias</strong> Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.
          </p>
        </div>
        <div class="story">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hatchback/story-2.png" alt="">
          <p>
            <strong>When Rafi heard Elias</strong> Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.
          </p>
        </div>
      </div>
      <div class="donation">
        <h2>HATCHBack Donation</h2>
        <p class="tax-deductible">HATCH is a 501c3 tax-deductible non-profit.</p>
        <div class="donation-wrapper">
          <?php echo do_shortcode('[give_form id="1526"]'); ?>
        </div>
        <div class="other-ways">
          <h3>Other ways to give back...</h3>
          <a href="/partners/support-contribute/" class="btn btn-donation">Conventional HATCH donation</a>
          <span class="or">Or</span>
          <a href="https://www.patreon.com/HATCH" class="btn btn-patreon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/hatchback/logo-patreon.png" alt=""> Become a patron</a>
          <p>
            <em><strong>Patreon</strong> is the world's largest crowdfunding site for organizations. It allows HATCH to obtain operational funding on a recurring basis. Consider becoming a patron if you’ve benefited from HATCH.</em>
          </p>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- What is HATCH -->
<?php get_template_part( 'includes/what-is-hatch' ); ?>

<?php get_footer(); ?>