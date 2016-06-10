<?php
    // check if the repeater field has rows of data
    if( have_rows('toolbox', 'option') ): ?>
        <?php // loop through the rows of data
        while ( have_rows('toolbox', 'option') ) : the_row();?>
        <div class="tools">
			<?php the_sub_field('tool_icon','option') ?>
            <h3><?php the_sub_field('tool_name','option') ?></h3>
        </div>
        
        <?php endwhile;
        else : ?>
    <!-- no rows found -->
<?php
    endif;
?>