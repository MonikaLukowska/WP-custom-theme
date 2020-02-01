

<?php

/**
 * Template Name: Portfolio
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<h2 class="headline headline--medium"><?php the_field('page_title') ?></h2>

   <div class="wrapper">
     <p><?php the_field('page_description') ?></p>
   </div>
   <?php endwhile; // end of the loop. ?>
   <div class="gallery">
   <?php
          $eventCarousel = new WP_Query(array(
            'post_type' => 'Event'
          ));

          while ($eventCarousel->have_posts()) {
            $eventCarousel->the_post(); ?>
 <div class="gallery__event">
         <figure>
          <img src="<?php echo get_the_post_thumbnail(); ?>" alt="" />
          <a class="overlay" href="<?php the_permalink(); ?>"> 
          <figcaption class="overlay"><p><?php the_title(); ?></p></figcaption>
           </a>
         </figure>       
    </div>

  <?php }wp_reset_postdata();
   ?>
  
   </div>

   <div class="page-section">
     <div class="wrapper">
   <?php 
    if(have_rows('brands')) :
      while(have_rows('brands')) :the_row();
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $brands = get_sub_field('b_group');
   ?>
   <h2 class="headline headline--medium"><?php echo $title ?></h2>
     <h5 class="headline headline--subtitle"><?php echo $subtitle ?></h5>
    
    
     <?php if($brands): ?>
     <div class="row row--medium-6">
     <?php foreach ($brands as $brand) : ?>
     <div class="paragraph-block">
            <div class="paragraph-block__border"></div>
            <p class="paragraph-block__content"><?php echo $brand ?></p>
        </div>
        <?php endforeach; ?>
        </div>
        <?php endif ?>
        
      <?php endwhile ?>
      <?php endif ?>
     </div>
   </div>
   <div class="page-section">
   <?php 
   if (have_rows('artists')) :
    while(have_rows('artists')) :the_row();
    $title =  get_sub_field('title');
    $bgc = get_sub_field('background_image');
    $g1 = get_sub_field('group1');
    $g2 = get_sub_field('group2');
    $g3 = get_sub_field('group3');
    $g4 = get_sub_field('group4');
    $g5 = get_sub_field('group5');
   ?>
   <div class="banner banner--artists" style="background-image: url(<?php echo $bgc ?>)">
       <h5 class="headline headline--subtitle"><?php echo $title ?></h5>
       <div class="row row--medium-12">
       <?php if($g1): ?>
           <ul class="artists">
           <?php foreach($g1 as $art1) : ?>
             <li><?php echo $art1 ?></li>
             <?php endforeach; ?>
           </ul>
           <?php endif ?>
           <?php if($g2): ?>
           <ul class="artists">
           <?php foreach($g2 as $art2) : ?>
             <li><?php echo $art2 ?></li>
             <?php endforeach; ?>
           </ul>
           <?php endif ?>
           <?php if($g3): ?>
           <ul class="artists">
           <?php foreach($g3 as $art3) : ?>
             <li><?php echo $art3 ?></li>
             <?php endforeach; ?>
           </ul>
           <?php endif ?>
           <?php if($g4): ?>
           <ul class="artists">
           <?php foreach($g4 as $art4) : ?>
             <li><?php echo $art4 ?></li>
             <?php endforeach; ?>
           </ul>
           <?php endif ?>
           <?php if($g5): ?>
           <ul class="artists">
           <?php foreach($g5 as $art5) : ?>
             <li><?php echo $art5 ?></li>
             <?php endforeach; ?>
           </ul>
           <?php endif ?>
     </div>
     <?php endwhile ?>
      <?php endif ?>
     </div>
     <div class="page-section">
        <?php 
        if (have_rows('logotypes_section')) :
          while(have_rows('logotypes_section')) :the_row();
          $title = get_sub_field('title');
          $logos = get_sub_field('logotypes');

        ?>

     <h5 class="headline headline--subtitle"><?php echo $title ?></h5>
     
     <?php if($logos): ?>
     <div class="testimonials__logo-container">
     <?php foreach ($logos as $logo) : ?>
        <li class="testimonials__logo-item"><img src="<?php echo $logo ?>" /></li>
        <?php endforeach; ?>
        </div>
        <?php endif ?>
     <?php endwhile  ?>
     <?php endif ?>
  
   </div>

   

    <?php get_footer();

    ?>

    