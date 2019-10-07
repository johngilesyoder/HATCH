<?php /* Template Name: Labs Voting Template */ ?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=740887432614704&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script>try{Typekit.load();}catch(e){}</script>

	</head>

	<body <?php body_class(); ?>>

    <header class="form-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <h1 class="logo">
              <span class="site-logo">HATCH Montana Lab Sprints</span>
              <span class="form-name">2019</span>
            </h1>
            <div class="instructions">
              <strong>INSTRUCTIONS:</strong> Upvote up to <strong>three</strong> proposed Labs that you'd like to see come to fruition. And don't forget to select <strong>one</strong> Lab that you prefer to participate in. Your selections will help us shape the 2019 HATCH Labs which will be tracked and nurtured at <a href="#">hatch.com/because-of-hatch</a>. After you have made your selections, please submit the form via the button at the bottom of this page. Thanks!
            </div>
            <div class="user-name">
              <label>First things first &mdash; Who are you? <small>(required)</small></label>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" id="input-first-name" class="form-control input-lg" data-input-id="195_3" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" id="input-last-name" class="form-control input-lg" data-input-id="195_6" placeholder="Last name">
                </div>
              </div>
              <input type="text" id="input-email" class="form-control input-lg" data-input-id="196" placeholder="Your email address">
            </div>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <?php the_content(); ?>

            </article>
            <!-- /article -->

            <?php endwhile; ?>

            <?php endif; ?>
          </div>
        </div>
      </div>
    </header>

    <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
		      <div class="form-wrapper">

            <div class="labs">
              <div class="lab">
                <header class="lab-header" style="background-image: url('https://www.humanityfirstcanada.ca/wp-content/uploads/2018/07/water-for-life.jpg');">
                  <div class="header-content">
                    <span class="leader-name">Jeff Ament</span>
                    <span class="project-name">Water For Life</span>
                  </div>
                </header>
                <div class="categories lab-section">
                  <label>Categories</label>
                  <ul>
                    <li class="category">Design</li>
                    <li class="category">Humanity</li>
                    <li class="category">Sustainability</li>
                  </ul>
                </div>
                <div class="sdgs lab-section">
                  <label>SDGs <small>(UN Sustainable Development Goals)</small></label>
                  <ul>
                    <li class="sdg">1 - No Poverty</li>
                    <li class="sdg">3 - Good Health & Well-being</li>
                    <li class="sdg">6 - Clean Water and Sanitation</li>
                  </ul>
                </div>
                <div class="summary lab-section">
                  <label>Summary</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
                <div class="project-description lab-section">
                  <label>Project Description</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper.</p>
                </div>
                <div class="links lab-section">
                  <label>Links</label>
                  <ul>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                  </ul>
                </div>
                <div class="voting">
                  <div class="upvoting">
                    <button class="btn btn-default" data-project-title="Water For Life" data-type="btn-upvote"><i class="material-icons">thumb_up</i> Upvote this Lab</button>
                  </div>
                  <div class="participate-button">
                    <button class="btn btn-default" data-project-title="Water For Life" data-type="btn-participate">Participate</button>
                  </div>
                </div>
              </div>

              <div class="lab">
                <header class="lab-header" style="background-image: url('http://whm2q99smo2ozzei318jpo8e.wpengine.netdna-cdn.com/wp-content/uploads/2015/08/Niger_Water-Supply-and-Irrigation-Program_main.jpg');">
                  <div class="header-content">
                    <span class="leader-name">Jeff Ament</span>
                    <span class="project-name">Water For Life</span>
                  </div>
                </header>
                <div class="categories lab-section">
                  <label>Categories</label>
                  <ul>
                    <li class="category">Design</li>
                    <li class="category">Humanity</li>
                    <li class="category">Sustainability</li>
                  </ul>
                </div>
                <div class="sdgs lab-section">
                  <label>SDGs <small>(UN Sustainable Development Goals)</small></label>
                  <ul>
                    <li class="sdg">1 - No Poverty</li>
                    <li class="sdg">3 - Good Health & Well-being</li>
                    <li class="sdg">6 - Clean Water and Sanitation</li>
                  </ul>
                </div>
                <div class="summary lab-section">
                  <label>Summary</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
                <div class="project-description lab-section">
                  <label>Project Description</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper.</p>
                </div>
                <div class="links lab-section">
                  <label>Links</label>
                  <ul>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                  </ul>
                </div>
                <div class="voting">
                  <div class="upvoting">
                    <button class="btn btn-default" data-project-title="Space Jam" data-type="btn-upvote"><i class="material-icons">thumb_up</i> Upvote this Lab</button>
                  </div>
                  <div class="participate-button">
                    <button class="btn btn-default" data-project-title="Space Jam" data-type="btn-participate">Participate</button>
                  </div>
                </div>
              </div>

              <div class="lab">
                <header class="lab-header">
                  <div class="header-content">
                    <span class="leader-name">Jeff Ament</span>
                    <span class="project-name">Water For Life</span>
                  </div>
                </header>
                <div class="categories lab-section">
                  <label>Categories</label>
                  <ul>
                    <li class="category">Design</li>
                    <li class="category">Humanity</li>
                    <li class="category">Sustainability</li>
                  </ul>
                </div>
                <div class="sdgs lab-section">
                  <label>SDGs <small>(UN Sustainable Development Goals)</small></label>
                  <ul>
                    <li class="sdg">1 - No Poverty</li>
                    <li class="sdg">3 - Good Health & Well-being</li>
                    <li class="sdg">6 - Clean Water and Sanitation</li>
                  </ul>
                </div>
                <div class="summary lab-section">
                  <label>Summary</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
                <div class="project-description lab-section">
                  <label>Project Description</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper.</p>
                </div>
                <div class="links lab-section">
                  <label>Links</label>
                  <ul>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                  </ul>
                </div>
                <div class="voting">
                  <div class="upvoting">
                    <button class="btn btn-default" data-project-title="Book Of Mormon" data-type="btn-upvote"><i class="material-icons">thumb_up</i> Upvote this Lab</button>
                  </div>
                  <div class="participate-button">
                    <button class="btn btn-default" data-project-title="Book Of Mormon" data-type="btn-participate">Participate</button>
                  </div>
                </div>
              </div>

              <div class="lab">
                <header class="lab-header" style="background-image: url('https://www.humanityfirstcanada.ca/wp-content/uploads/2018/07/water-for-life.jpg');">
                  <div class="header-content">
                    <span class="leader-name">Jeff Ament</span>
                    <span class="project-name">Water For Life</span>
                  </div>
                </header>
                <div class="categories lab-section">
                  <label>Categories</label>
                  <ul>
                    <li class="category">Design</li>
                    <li class="category">Humanity</li>
                    <li class="category">Sustainability</li>
                  </ul>
                </div>
                <div class="sdgs lab-section">
                  <label>SDGs <small>(UN Sustainable Development Goals)</small></label>
                  <ul>
                    <li class="sdg">1 - No Poverty</li>
                    <li class="sdg">3 - Good Health & Well-being</li>
                    <li class="sdg">6 - Clean Water and Sanitation</li>
                  </ul>
                </div>
                <div class="summary lab-section">
                  <label>Summary</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
                <div class="project-description lab-section">
                  <label>Project Description</label>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  <p>Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper.</p>
                </div>
                <div class="links lab-section">
                  <label>Links</label>
                  <ul>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                    <li><a href="#">waterforlife.com</a></li>
                  </ul>
                </div>
                <div class="voting">
                  <div class="upvoting">
                    <button class="btn btn-default" data-project-title="Always Sunny" data-type="btn-upvote"><i class="material-icons">thumb_up</i> Upvote this Lab</button>
                  </div>
                  <div class="participate-button">
                    <button class="btn btn-default" data-project-title="Always Sunny" data-type="btn-participate">Participate</button>
                  </div>
                </div>
              </div>
            </div>

		      </div>
				</div>
			</div>
    </div>

    <div class="submit-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
			      <!-- THE GRAVITY FORM -->
			      <!-- ================ -->
			      <?php gravity_form( 55, false, false, false, '', true ); ?>
          </div>
          <div class="alert alert-danger" id="alert-container" style="display: none;">
            
          </div>
				</div>
			</div>
      <!-- FOOTER ================= -->
      <!-- ======================== -->
      <footer class="form-footer">
        <div class="container">
          <span>© <?php echo date('Y'); ?> HATCHfest. All rights reserved.</span> &nbsp;|&nbsp; <a href="/contact">Contact Us</a>
        </div>
      </footer>
    </div>




    <?php wp_footer(); ?>

  </body>
</html>
