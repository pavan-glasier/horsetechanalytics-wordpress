<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package horsetechanalytics
 */

get_header(); ?>

<section class="breadcrumb-area bg-primary-gradient">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2 class="mb-3"><?php the_title(); ?></h2>
        </div>
    </div>
</section>

<?php if( have_rows('sections') ) : 
$count = 1; ?>
<?php while ( have_rows('sections') ) : the_row(); 
 $count++; ?>
  <?php if( get_row_layout() == 'content_image_section' ) :
  $content_group = get_sub_field('content_group');
  $image = get_sub_field('image'); ?>
<section class="sh-about-section pt-120 pb-120 overflow-hidden position-relative zindex-1">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-right.png" alt="shape" class="position-absolute right-bottom logo-dark">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-right-dark.png" alt="shape" class="position-absolute right-bottom logo-white">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-circle.png" alt="shape" class="position-absolute sh-about-circle">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-circle-small.png" alt="shape" class="position-absolute sh-about-circle-small">
   <div class="container">
      <div class="row align-items-center g-5">
         <div class="col-lg-6<?php echo $reverse = ($count%2 == 0) ? ' order-2 order-lg-1' : ' order-1 order-lg-2';?>">
            <?php if( $content_group ) :?>
            <div class="sh-about-content">
                <?php if(!empty($content_group['title'])): ?>
                <h2 class="mb-30"><?php echo $content_group['title'];?></h2>
                <?php endif; ?>

                <?php if(!empty($content_group['content'])): ?>
               <p class="mb-40"><?php echo $content_group['content'];?></p>
               <?php endif; ?>

               <?php 
                $link = $content_group['button_link'];
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="template-btn hm2-primary-btn rounded-pill me-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
            <div class="hero-btns mt-5">
                <?php if(!empty($content_group['app_store'])): ?>
                <a href="<?php echo $content_group['app_store'];?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/App-Store-eng@2x.svg">
                </a>
                <?php endif; ?>

                <?php if(!empty($content_group['google_play'])): ?>
                <a href="<?php echo $content_group['google_play'];?>" target="_blank">
                    <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/Google-Play-eng@2x.svg">
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
         </div>
         <div class="col-lg-6<?php echo $reverse = ($count%2 == 0) ? ' order-1 order-lg-2' : ' order-2 order-lg-1';?>">
            <?php if( $image ) :?>
            <div class="sh-about-img text-center">
               <img src="<?php echo esc_url( $image['url'] );?>" alt="<?php echo esc_attr( $image['alt'] );?>" class="img-fluid" style="max-height: 450px;">
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
   <!--End Container-->
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>



<?php if( have_rows('sections') ) : ?>
<?php while ( have_rows('sections') ) : the_row(); ?>
  <?php if( get_row_layout() == 'content_multi_images' ) :
  $contents = get_sub_field('contents'); 
  
  ?>
<section class="sh-about-section pb-120 overflow-hidden position-relative zindex-1">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-right.png" alt="shape" class="position-absolute right-bottom logo-dark">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-right-dark.png" alt="shape" class="position-absolute right-bottom logo-white">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-circle.png" alt="shape" class="position-absolute sh-about-circle">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/sh-about-circle-small.png" alt="shape" class="position-absolute sh-about-circle-small">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-9">
            <div class="section-title text-center">
               <h2 class="mb-20"><?php echo $contents['heading'];?></h2>
               <p><?php echo $contents['description'];?></p>
            </div>
         </div>
      </div>
      <div class="row align-items-center g-5 mt-2 justify-content-center">
      <?php
        if( have_rows('images') ): ?>
        <?php while( have_rows('images') ) : the_row();
                $image = get_sub_field('image');
                ?>
                <div class="col-lg-3">
                   <div class="sh-about-img marchaimg1">
                      <img src="<?php echo esc_url( $image['url'] );?>" alt="<?php echo esc_attr( $image['alt'] );?>" class="img-fluid mer">
                   </div>
                </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
   </div>
   <!--End Container-->
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>