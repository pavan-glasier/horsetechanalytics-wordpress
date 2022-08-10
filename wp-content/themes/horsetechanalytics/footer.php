<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package horsetechanalytics
 */

?>
<footer class="footer pt-100">
   <div class="footer-top pb-60">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="footer-widget footer-widget-1">
                  <?php $footer_logo = get_field('logo', 'option');
                  if (!empty($footer_logo['url'])) { ?>
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
                        <img src="<?php echo esc_url( $footer_logo['url'] );?>" class="footer-logo" 
                        alt="<?php echo esc_attr($footer_logo['alt']); ?>">
                     </a>
                  <?php } ?>

                  <?php $about_content = get_field('about_content', 'option'); 
                  if (!empty($about_content)) { ?>
                     <p class="text-white mt-30">
                        <?php echo $about_content; ?>
                     </p>
                  <?php } ?>

                  <?php $email_id = get_field('email_id', 'option'); 
                  if (!empty($email_id)) : ?>
                  <p class="text-white mt-30"><strong>Email :</strong> <?php echo $email_id;?> </p>
                  <?php endif; ?>

                  <?php $phone_no = get_field('phone_no', 'option'); 
                  if (!empty($phone_no)) : ?>
                  <p class="text-white mt-0"><strong>Phone :</strong> <?php echo $phone_no;?> </p>
                  <?php endif; ?>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="footer-widget footer-widget-2 mt-2">
               <?php $col_2_heading = get_field('col_2_heading', 'option'); 
                  if (!empty($col_2_heading)) :  ?>
                  <h5 class="text-white position-relative mb-5 widget-title"><?php echo $col_2_heading;?></h5>
                  <?php endif; ?>
                  <?php $quick_links = get_field('quick_links', 'option'); ?>
						   <?php 
						   wp_nav_menu( array(
                        'theme_location'    => $quick_links['value'],
                        'container'         => 'ul',
                        'menu_class'        => 'footer-nav',
                           )
                     ); ?>
               </div>
            </div>
            <div class="col-lg-4 col-md-8">
               <div class="footer-widget footer-sb-widget mt-2">
                  <?php $col_3_heading = get_field('col_3_heading', 'option'); 
                  if (!empty($col_3_heading)) :  ?>
                  <h5 class="text-white position-relative mb-5 widget-title"><?php echo $col_3_heading;?></h5>
                  <?php endif; ?>
                  <div class="fotter-form">
                  <?php $contact_form = get_field('contact_form', 'option'); 
                  if (!empty($contact_form)) :
                     echo do_shortcode('[contact-form-7 id="'.$contact_form.'" html_class="footer-sb-form position-relative"]');
                  endif; ?>                     
                  </div>
               </div>
            </div>
         </div>
         <div class="row small-footer">
            <div class="col-lg-6 col-md-6">
               <?php $copyright_text = get_field('copyright_text', 'option'); 
                  if (!empty($copyright_text)) :  ?>
                  <p class="text-white"><?php echo $copyright_text;?></p>
                  <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6">
            <?php $social_media_links = get_field('social_media_links', 'option');
                  if ($social_media_links) : ?>
               <div class="footer-widget footer-widget-1" style="margin: 0px !important">
                  <div class="footer-social mt-5" style="margin: 0px !important">
                     <ul class="social-nav mt-3" style="margin: 0px !important; display: flex; justify-content: end;">
                        <?php if(!empty($social_media_links['facebook'])) : ?>
                        <li>
                           <a href="<?php echo esc_url($social_media_links['facebook']);?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
                              <i class="fab fa-facebook-f"></i>
                           </a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty($social_media_links['twitter'])) : ?>
                        <li>
                           <a href="<?php echo esc_url($social_media_links['twitter']);?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
                              <i class="fab fa-twitter"></i>
                           </a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty($social_media_links['instagram'])) : ?>
                        <li>
                           <a href="<?php echo esc_url($social_media_links['instagram']);?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
                              <i class="fab fa-instagram"></i>
                           </a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty($social_media_links['linkedin'])) : ?>
                        <li>
                           <a href="<?php echo esc_url($social_media_links['linkedin']);?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
                              <i class="fab fa-linkedin"></i>
                           </a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty($social_media_links['pinterest'])) : ?>
                        <li>
                           <a href="<?php echo esc_url($social_media_links['pinterest']);?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
                              <i class="fab fa-pinterest"></i>
                           </a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty($social_media_links['youtube'])) : ?>
                        <li>
                           <a href="<?php echo esc_url($social_media_links['youtube']);?>" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank">
                              <i class="fab fa-youtube"></i>
                           </a>
                        </li>
                        <?php endif; ?>
                     </ul>
                  </div>
               </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</footer>
</div>
<!-- main content wrapper ends -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Fill in your details to apply</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="hm-contact-form mt-4" id="contact">
               <div class="col-12 pb-3 message-box d-none">
                  <div class="alert alert-danger"></div>
               </div>
               <?php echo do_shortcode('[contact-form-7 id="229" title="Career Form"]');?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
