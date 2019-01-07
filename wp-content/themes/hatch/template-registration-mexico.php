<?php /* Template Name: Mexico Registration Page Template */ get_template_part( 'includes/registration-header' );
$form_id = get_field('gravity_form_id');
$photo_gallery_id = get_field('photo_gallery_id');
?>
<?php //the_field('photo_gallery_id'); ?>


<!-- HERO =================== -->
<!-- ======================== -->
<header class="registration-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/registration/hero-mexico.png');">
  <div class="form-title">
    <span class="site-logo"><em>HATCH</em> Mexico 2019 Registration</span>
    <span class="site-logo-date"><?php the_field('event_date'); ?> &bull; <?php the_field('event_location'); ?></span>
  </div>
  <h1>Welcome.</h1>
</header>

<!-- BUTTON ================= -->
<!-- ======================== -->
<div class="registration-button-wrapper">
  <button id="registration-toggle" class="btn btn-secondary btn-registration">Register Now</button>
  <!-- <span style='display:inline-block;background:#111111;color:#ffffff;font-size:21px;font-weight:500;padding: 10px 30px;border-radius:10px;'>Hello!  We're sorry, but this HATCH Summit Cohort is now full. If you have any questions contact Yarrow.</span> -->
</div>

<!-- REGISTRATION CONTENT === -->
<!-- ======================== -->
<section id="registration-content" class="registration-content">
  <div class="container">
    <!-- SUMMARY ============== -->
    <div class="registration-summary">
      <div class="row">
        <div class="col-md-12">					
          <p><img class="alignleft size-full wp-image-2884" src="https://hatchexperience.org/wp-content/uploads/2018/12/HATCH-MX-Rodavento-.jpg" alt="" data-wp-pid="2884" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/HATCH-MX-Rodavento-.jpg 1471w, https://hatchexperience.org/wp-content/uploads/2018/12/HATCH-MX-Rodavento--250x79.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/HATCH-MX-Rodavento--700x220.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/HATCH-MX-Rodavento--120x38.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/HATCH-MX-Rodavento--768x241.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/HATCH-MX-Rodavento--800x251.jpg 800w" sizes="(max-width: 1471px) 100vw, 1471px"><b>WHEN: &nbsp;Mar 27 – 31 </b>&nbsp;or <b>April 3 – 7</b>&nbsp;or <strong>April 10-14</strong> &nbsp;You can select your preference during registration.</p>
          <p><b>WHERE:&nbsp; <a href="http://rodavento.com/">RODAVENTO</a>, an hour and half outside Mexico City.</b></p>
          <p><b>INCLUDES:</b></p>
          <ul>
          <li><span style="font-weight: 400;">4 NIGHTS OF HOSPITALITY</span></li>
          <li><span style="font-weight: 400;">3 MEALS / DAY</span></li>
          <li><span style="font-weight: 400;">3 DAYS OF USE OF SALON FOR SESSION AND GARDENS FOR ACTIVITIES</span></li>
          <li><span style="font-weight: 400;">TAXES, SERVICE AND TRAVELER INSURANCE</span></li>
          </ul>
          <p><b>THE FEELING OF RODAVENTO</b></p>
          <ul>
          <li style="font-weight: 400;"><span style="font-weight: 400;">An Origin of Nurturing – A beautiful story of place – origins and how it came to be – this place nurtures one of the largest cities in the world, layerd systems</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Instills an instant sense of peace – feels like zen</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Spaciousness</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Water &amp; Running streams</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Firepits</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Wellness</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Meditation</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Diversity</span></li>
          </ul>
          <p><b>THEMES / CONTENT</b></p>
          <ul>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Mastery of Life</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Transformation / Growth</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Creative Problem Solving</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Environment</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Nature / Water / Biodiversity</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Good Energy</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;">Food &amp; Food systems</span></li>
          </ul>
          <p><b>ACTIVITIES</b></p>
          <ul>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Morning Walks</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Yoga</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Meditation</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Spa Treatments</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Archery</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Canoe</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Zipline</span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Sailing </span></li>
          <li style="font-weight: 400;"><span style="font-weight: 400;"> Horseback Riding</span></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- QUOTE ============== -->
    <aside class="section-aside hard-to-explain">
      <div class="row">
        <div class="section-aside-title">
          <h3>It's hard to explain</h3>
        </div>
        <div class="section-aside-content">
          <div class="section-aside-content-wrapper">
            <div class="quote-block">
              <div class="quote-statement">
                <p>“HATCH is something you can’t really put into words because there doesn’t seem to be an adequate way to verbally describe something that is so genuinely life changing for everyone there — It truly is. The people that are curated are brilliant, smart, talented, and giving. HATCH is beyond a doubt the best thing I have ever experienced. It’s changed how I do business — and how I live life.”</p>
              </div>
              <cite>&mdash;&nbsp; <span class="cite-person"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/grace-davis.png"> Grace Davis</span> <span class="cite-organization">INTEL</span></cite>
            </div>
          </div>
        </div>
    </aside>

    <!-- LEARN MORE ============== -->
    <div class="learn-more">
      <div class="well">
        <h3>Learn more:</h3>
        <a href="/the-experience/">The Experience</a>
      </div>
    </div>

    <!-- ALUMNI ============== -->
    <div class="registration-alumni">
      <h3>The <span class="hatch-logo">HATCH</span> Network Alumni includes ...</h3>
      <div class="alumni-wrapper">
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-thaller.png">
          <span class="alumnus-name">Michelle Thaller</span>
          <span class="alumnus-title">Nasa Scientist</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-hardy.png">
          <span class="alumnus-name">John Hardy</span>
          <span class="alumnus-title">Founder, Greenschool Bali</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-altringer.png">
          <span class="alumnus-name">Dr. Beth Altringer</span>
          <span class="alumnus-title">Lead, Desirabilty Lab, Harvard</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-gruber.png">
          <span class="alumnus-name">Tom Gruber</span>
          <span class="alumnus-title">Inventor, Siri, Apple</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-bridges.png">
          <span class="alumnus-name">Jeff Bridges</span>
          <span class="alumnus-title">Oscar-winning actor</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/registration/alumni-kuhr.png">
          <span class="alumnus-name">Barbara Kuhr</span>
          <span class="alumnus-title">Co-founder, WIRED mag</span>
        </div>
      </div>
    </div>
  </div>
  <!-- GALLERY ============== -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="gallery">
          <img class="alignleft size-full wp-image-2885" src="https://hatchexperience.org/wp-content/uploads/2018/12/1083240.jpg" alt="" data-wp-pid="2885" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/1083240.jpg 1072w, https://hatchexperience.org/wp-content/uploads/2018/12/1083240-150x150.jpg 150w, https://hatchexperience.org/wp-content/uploads/2018/12/1083240-250x250.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/1083240-700x700.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/1083240-120x120.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/1083240-768x768.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/1083240-800x800.jpg 800w, https://hatchexperience.org/wp-content/uploads/2018/12/1083240-600x600.jpg 600w" sizes="(max-width: 1072px) 100vw, 1072px">
          <img class="alignleft size-full wp-image-2886" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4784-Edit-14.jpg" alt="" data-wp-pid="2886" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4784-Edit-14.jpg 1000w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4784-Edit-14-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4784-Edit-14-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4784-Edit-14-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4784-Edit-14-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4784-Edit-14-800x534.jpg 800w" sizes="(max-width: 1000px) 100vw, 1000px">
          <img class="alignleft size-full wp-image-2887" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4792-16.jpg" alt="" data-wp-pid="2887" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4792-16.jpg 1000w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4792-16-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4792-16-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4792-16-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4792-16-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_4792-16-800x534.jpg 800w" sizes="(max-width: 1000px) 100vw, 1000px">
          <img class="alignleft size-full wp-image-2888" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8551.jpg" alt="" data-wp-pid="2888" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8551.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8551-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8551-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8551-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8551-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8551-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">
          <img class="alignleft size-full wp-image-2889" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8563.jpg" alt="" data-wp-pid="2889" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8563.jpg 1280w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8563-250x375.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8563-700x1050.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8563-120x180.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8563-768x1152.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8563-800x1200.jpg 800w" sizes="(max-width: 1280px) 100vw, 1280px">
          <img class="alignleft size-full wp-image-2890" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8619.jpg" alt="" data-wp-pid="2890" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8619.jpg 1280w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8619-250x375.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8619-700x1050.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8619-120x180.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8619-768x1152.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8619-800x1200.jpg 800w" sizes="(max-width: 1280px) 100vw, 1280px">
          <img class="alignleft size-full wp-image-2891" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8739-Edit.jpg" alt="" data-wp-pid="2891" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8739-Edit.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8739-Edit-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8739-Edit-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8739-Edit-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8739-Edit-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8739-Edit-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">
          <img class="alignleft size-full wp-image-2892" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8768-Edit.jpg" alt="" data-wp-pid="2892" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8768-Edit.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8768-Edit-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8768-Edit-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8768-Edit-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8768-Edit-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_8768-Edit-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">
          <img class="alignleft size-full wp-image-2893" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9189.jpg" alt="" data-wp-pid="2893" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9189.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9189-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9189-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9189-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9189-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9189-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">
          <img class="alignleft size-full wp-image-2894" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9402.jpg" alt="" data-wp-pid="2894" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9402.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9402-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9402-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9402-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9402-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9402-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">
          <img class="alignleft size-full wp-image-2895" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9540-Edit.jpg" alt="" data-wp-pid="2895" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9540-Edit.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9540-Edit-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9540-Edit-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9540-Edit-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9540-Edit-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9540-Edit-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">
          <img class="alignleft size-full wp-image-2896" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9561.jpg" alt="" data-wp-pid="2896" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9561.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9561-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9561-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9561-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9561-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9561-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">
          <img class="alignleft size-full wp-image-2897" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9608.jpg" alt="" data-wp-pid="2897" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9608.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9608-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9608-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9608-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9608-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9608-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px"> 
          <img class="alignleft size-full wp-image-2898" src="http://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9678-Edit.jpg" alt="" data-wp-pid="2898" srcset="https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9678-Edit.jpg 1920w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9678-Edit-250x167.jpg 250w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9678-Edit-700x467.jpg 700w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9678-Edit-120x80.jpg 120w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9678-Edit-768x512.jpg 768w, https://hatchexperience.org/wp-content/uploads/2018/12/Copia-de-DSC_9678-Edit-800x533.jpg 800w" sizes="(max-width: 1920px) 100vw, 1920px">    
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORM WRAPPER =========== -->
<!-- ======================== -->
<section id="form-wrapper">
  <div class="container">
    <!-- FORM ================== -->
    <div class="form-wrapper">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_content(); ?>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php endif; ?>

      <?php gravity_form($form_id, false, false, false, '', true); ?>
    </div>
  </div>
</section>

<!-- FOOTER ================= -->
<!-- ======================== -->
<?php get_template_part( 'includes/registration-footer' ); ?>
