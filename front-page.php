<?php get_header();  ?>

<header id="hero" style="background: linear-gradient(rgba(0,13,8,0.3),rgba(0,13,8,0.3)), url('<?php the_post_thumbnail_url('large'); ?>');
  background-size: cover; background-position: center">
  
  <?php include('topnav.php') ?>

  <div class="hero-info">
    
    <h1><?php echo get_field('hero_title'); ?></h1>
    <p><?php echo get_field('hero_blurb'); ?></p>

  </div>
  
</header><!--/.header--> 

<section class="about-me" id="about">
  <div class="container">

      <?php $aboutQuery = new WP_Query( array('page_id' => 26) ); ?>
      <?php if ( $aboutQuery->have_posts() ) {

          while ( $aboutQuery->have_posts() ) {
            $aboutQuery->the_post();?>

            <div class="about-photo">
              <img src="<?php echo hackeryou_featured_image_url($post); ?>" alt="Photo of Johnathan">
            </div>
            <div class="about-description">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>            
            </div>
          
          <?php
          } //endn while
          wp_reset_postdata();
        } //end if
        ?>

</div><!-- end container -->
</section>

<section class="services" id="services">
  <div class="container">
    <h2>Services</h2>
    <?php include('services.php') ?>
  </div>
</section>

<section class="toolbox" id="toolbox">
  <div class="container">
    <h2>Creative Toolbox</h2>
    <?php include('toolbox.php') ?>
  </div>
</section>

<section class="portfolio" id="portfolio">
  <div id="portfolio-intro">
  <article class="container">
      <h2>My Portfolio</h2>
    </article>
  </div>
      <?php include('archive-portfolio.php') ?>
</section>

<article class="contact-form" id="contact">
  <div class="container">
    <?php include('contactform.php') ?>
  </div>
</article>

<?php get_footer(); ?>