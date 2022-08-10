<?php

/**
 * Template Name: Contact Us
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

<?php 
$formId = get_field('form');
$contact_info = get_field('contact_info');
?>
<section class="hm-contact-area position-relative pt-60 pb-120 overflow-hidden bg-white zindex-1">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/contact-bg-left-1.png" alt="bg" class="position-absolute left-bottom">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/contact-bg-right-2.png" alt="bg" class="position-absolute right-bottom">
   <div class="container">
      <div class="hm-contact-form mt-5" id="contact">
         <div class="row justify-content-center mt-3">
            <?php if(!empty($formId)) : ?>
            <div class="col-md-6">
               <?php echo do_shortcode('[contact-form-7 id="'.$formId.'" html_class="contact-us-form"]')?>
            </div>
            <?php endif; ?>
            <div class="col-md-1"></div>
            <div class="col-md-5">
               <?php if($contact_info) : ?>
               <div class="question-box-content">
                  <?php if(!empty($contact_info['heading'])) : ?>
                     <h3 class="h2"><?php echo $contact_info['heading'];?></h3>
                  <?php endif; ?>

                  <?php if(!empty($contact_info['phone'])) : ?>
                  <span class="phone fw-bold d-block mb-30"> <i class="fa-solid fa-phone"></i> &nbsp;&nbsp; <?php echo $contact_info['heading'];?> </span>
                  <?php endif; ?>

                  <?php if(!empty($contact_info['email'])) : ?>
                     <span class="phone fw-bold d-block mb-30"> <i class="fa-solid fa-envelope"></i> &nbsp;&nbsp; <?php echo $contact_info['email'];?> </span>
                  <?php endif; ?>

                  <?php if(!empty($contact_info['address'])) : ?>
                     <span class="phone fw-bold d-block mb-30"> <i class="fa-solid fa-location-dot"></i> &nbsp;&nbsp; <?php echo $contact_info['address'];?> </span>
                  <?php endif; ?>

               </div>
               <?php endif; ?>
            </div>
         </div>
         <!--End Form Row-->
      </div>
   </div>
</section>
<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'technologies' ) : ?>

<?php endif; ?>
<?php endwhile; ?>
<?php get_footer(); ?>