<?php
    // check if the repeater field has rows of data
    if( have_rows('icons', 'option') ): ?>
    <ul>
		<?php // loop through the rows of data
        while ( have_rows('icons', 'option') ) : the_row();?>
			<li>
            	<a href="<?php the_sub_field('social_link','option') ?>">
            	<?php the_sub_field('icon','option') ?>
            		
            	</a>
            </li>
        
        <?php endwhile;

        else : ?>
    <!-- no rows found -->
    </ul>
<?php
    endif;
?>