<?php $aboutQuery = new WP_Query( array('page_id' => 61) ); ?>

<?php if ( $aboutQuery->have_posts() ) {

  while ( $aboutQuery->have_posts() ) {
    $aboutQuery->the_post();?>

    <div class="form-fields">
      <?php the_content(); ?>   
      	<!-- FOCUS POCUS LOVE -->  
		<form action="http://www.focuspocus.io/magic/hello@jfong.design" method="POST" enctype="multipart/form-data" id="contact-form">
			<input type="text" name="Full Name" placeholder="Full Name" required>
			<input type="email" name="email" placeholder="Your Email" required>
			<textarea name="comments" placeholder="Your Message" required></textarea>
			<input type="submit" value="Submit">
		</form>      
    </div>
  <?php
  } //endn while
  wp_reset_postdata();
} //end if
?>