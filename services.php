<?php
    // check if the repeater field has rows of data
    if( have_rows('services', 'option') ): ?>
        <?php // loop through the rows of data
        while ( have_rows('services', 'option') ) : the_row();?>
        <div class="service">
			<?php the_sub_field('icon','option') ?>
            <h3>
            <?php the_sub_field('service','option') ?>
            </h3>
            <p><?php the_sub_field('description','option') ?></p>
        </div>
        
        <?php endwhile;
        else : ?>
    <!-- no rows found -->
<?php
    endif;
?>