<?php 

//Define your custom post type name in the arguments
 
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 5,
    'order' => 'ASC',
    // checking for featured posts
    'meta_query' => array(
        array(
            'key' => 'featured', // name of custom field
            'value' => '"featured"', // matches exactly "featured"
            'compare' => 'LIKE'
        )
    ));
 
//Define the loop based on arguments
 
$loop = new WP_Query( $args );?>

<?php 
//Display the contents 
while ( $loop->have_posts() ) : $loop->the_post();
?>

<div class="project-container" style="background:<?php echo get_field('background_color') ?>;">
    <div class="container">
        <img src="<?php echo hackeryou_featured_image_url($post); ?>" alt="">
        
        <div class="project-details">    
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <ul class="tags">
                <button class="view-demo">View Live Site</button>
                <?php
                $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                ?>
                <li>
                    <?php echo $tag->name . ' / '; ?>
                </li>
                <?php 
                  }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php endwhile;?>
