<?php /* Template Name: Mexico Registration Page Template */ get_template_part( 'includes/registration-header' );
$form_id = get_field('gravity_form_id');
$photo_gallery_id = get_field('photo_gallery_id');
?>
<?php //the_field('photo_gallery_id'); ?>


<!-- HERO =================== -->
<!-- ======================== -->
<header class="registration-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/hero-mexico.png');">
  <div class="form-title">
    <span class="site-logo"><em>HATCH</em> Mexico 2020 Registration</span>
    <span class="site-logo-date"><?php the_field('event_date'); ?> &bull; <?php the_field('event_location'); ?></span>
  </div>
  <h1>Welcome.</h1>
</header>

<!-- BUTTON ================= -->
<!-- ======================== -->
<div class="registration-button-wrapper">
  <!-- <button id="registration-toggle" class="btn btn-secondary btn-registration">Register Now</button> -->
  <span style='display:inline-block;background:#111111;color:#ffffff;font-size:21px;font-weight:500;padding: 10px 30px;border-radius:10px;margin: 0 60px;'>We recently made the tough decision to cancel our HATCH Mexico Summit this year due to the global crisis surrounding the CoronaVirus. We are however, allowing people to roll their invitation (or registration) over to HATCH Montana 2020. To register for HATCH Montana 2020, please <a href="/2020-hatch-montana-registration/">click here</a>.</span>
</div>

<!-- REGISTRATION CONTENT === -->
<!-- ======================== -->
<section id="registration-content" class="registration-content">
  <div class="container">
    <!-- SUMMARY ============== -->
    <div class="registration-summary">
      <div class="row">
        <div class="col-md-12">					
          <?php the_content(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="welcome-section">
            <h4>Welcome to the HATCH network</h4>
            <p>The cost of this invite-only Summit is zero, as a gift to you for HATCHing a Better World. You will need to cover hard costs, which includes 4 nights accommodations, 3 meals a day, drinks, entertainment, and shuttles to and from the airport. This totals $1950 for HATCH Mexico.</p>
            <p>Note - we do not want finances to be the barrier of entry, so if you need to request a partial scholarship, <a href="https://hatchexperience.org/hatch-scholarship-application/">click here</a>.  Scholarships are limited and preference will be offered to students, educators, marginalized communities, and those in social impact / non-profit sectors.</p>
            <p>HATCH is a non-profit designed to benefit you and expand our network to HATCH a Better World, as well as mentor the next generation of our global leaders.</p>          </div>
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
              <cite>&mdash;&nbsp; <span class="cite-person"><img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/grace-davis.png"> Grace Davis</span> <span class="cite-organization">INTEL</span></cite>
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
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-thaller.png">
          <span class="alumnus-name">Michelle Thaller</span>
          <span class="alumnus-title">Nasa Scientist</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-hardy.png">
          <span class="alumnus-name">John Hardy</span>
          <span class="alumnus-title">Founder, Greenschool Bali</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-altringer.png">
          <span class="alumnus-name">Dr. Beth Altringer</span>
          <span class="alumnus-title">Lead, Desirabilty Lab, Harvard</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-gruber.png">
          <span class="alumnus-name">Tom Gruber</span>
          <span class="alumnus-title">Inventor, Siri, Apple</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-bridges.png">
          <span class="alumnus-name">Jeff Bridges</span>
          <span class="alumnus-title">Oscar-winning actor</span>
        </div>
        <div class="alumnus">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/asset/img/registration/alumni-kuhr.png">
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
      <?php gravity_form($form_id, false, false, false, '', true); ?>
    </div>
  </div>
</section>

<!-- FOOTER ================= -->
<!-- ======================== -->
<?php get_template_part( 'includes/registration-footer' ); ?>
