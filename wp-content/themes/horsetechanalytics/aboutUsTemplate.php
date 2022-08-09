<?php

/**
 * Template Name: About Us
 *
 */

get_header(); ?>


<section class="breadcrumb-area bg-primary-gradient">
   <div class="container">
      <div class="breadcrumb-content text-center">
         <h2 class="mb-3"><?php the_title();?></h2>
      </div>
   </div>
</section>

<?php if( have_rows('sections') ): ?>

   <section class="dm-about-section ptb-120 position-relative zindex-1 overflow-hidden">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/dm-about-left.png" alt="shape" class="position-absolute left-top">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/dm-about-bg.png" alt="shape" class="position-absolute right-bottom">
      <div class="container">
      <?php 
      $count = 1;
      while (have_rows('sections')) : the_row(); 
      $count++;
      ?>
         <?php if (get_row_layout() == 'about_sections') :
            $about_image = get_sub_field('image');
            $about_contents = get_sub_field('contents');
         ?>
         <div class="row mt-5 align-items-center justify-content-between<?php echo $reverse = ($count%2 == 1) ? ' flex-row-reverse' : '';?>" >
            <div class="col-lg-6">
               <div class="dm-about-img">
                  <img src="<?php echo esc_url( $about_image['url'] );?>" 
                  alt="<?php echo esc_attr( $about_image['alt'] );?>" 
                  class="img-fluid">
               </div>
            </div>
            <div class="col-lg-5">
               <div class="dm-about-content mt-40 mt-lg-0">
                  <?php if(!empty($about_contents['heading'])): ?>
                  <h5 style="color: #6d4da5;"><?php echo $about_contents['heading'];?></h5>
                  <?php endif; ?>

                  <?php if(!empty($about_contents['sub_heading'])): ?>
                  <h2 class="mb-4"><?php echo $about_contents['sub_heading'];?></h2>
                  <?php endif; ?>

                  <?php if(!empty($about_contents['content'])): ?>
                  <p class="aboutper"><?php echo $about_contents['content'];?></p>
                  <?php endif; ?>
               </div>
            </div>
         </div>

         <?php endif; ?>
      <?php endwhile; ?>
   </section>
<?php endif; ?>
<?php get_footer(); ?>