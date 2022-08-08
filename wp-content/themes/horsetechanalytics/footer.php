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
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo"><img src="<?php echo esc_url( get_template_directory_uri() );?>/img/footer-logo.png" class="footer-logo" alt="logo"></a>
                  <p class="text-white mt-30">Our facilities transcend various geographical boundaries. They include various trade associations, retail businesses, medical research
                     institutions, media companies, Ecommerce, and data entry
                  </p>
                  <p class="text-white mt-30"><strong>Email :</strong> hrd1@horsetechanalytics.com </p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
               <div class="footer-widget footer-widget-2 mt-2">
                  <h5 class="text-white position-relative mb-5 widget-title">Quick Links</h5>
                  <ul class="footer-nav">
                     <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                     <li><a href="aboutus.php">About Us</a></li>
                     <li><a href="consumer.php">Product</a></li>
                     <li><a href="technology.php">Technology</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="career.php">Career</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-4 col-md-8">
               <div class="footer-widget footer-sb-widget mt-2">
                  <h5 class="text-white position-relative mb-5 widget-title">Contact us</h5>
                  <div class="fotter-form">
                     <form id="contactForm" class="footer-sb-form position-relative">
                        <input type="text" id="contact-name" value="" placeholder="Name*" class="mt-2"><span id="contact-name-error"></span>
                        <input type="text" id="contact-email" value="" placeholder="Email*" class="mt-2"> <span id="contact-email-error"></span>
                        <input type="number" id="contact-phone" value="" placeholder="Phone*" class="mt-2"><span id="contact-phone-error"></span>
                        <div id="g-recaptcha-response" class="g-recaptcha mt-2" data-sitekey="6Lfi3aoZAAAAAFYdtzTJvh3URCyH4G3o6hIjaEu2"></div>
                        <button type="submit" class="template-btn primary-btn border-0 mt-3" id="contactsubmit">Send Message<i class="fa-solid fa-chevron-right ms-2"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="row small-footer">
            <div class="col-lg-6 col-md-6">
               <p class="text-white">&copy; 2022 HourseTechAnalytics all right reserved </p>
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="footer-widget footer-widget-1" style="margin: 0px !important">
                  <div class="footer-social mt-5" style="margin: 0px !important">
                     <ul class="social-nav mt-3" style="margin: 0px !important; display: flex; justify-content: end;">
                        <li><a href="https://www.facebook.com/horsetechanalyticsHTA/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_transition=0&show_community_review_changes=0&show_follower_visibility_disclosure=0" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <!-- <li><a href="#" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white"><i class="fab fa-twitter"></i></a></li> -->
                        <li><a href="https://www.instagram.com/accounts/login/?next=/horsetechanalytics/" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/horsetech-analytics/" class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                     </ul>
                  </div>
               </div>
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
            <form method="POST" id="applyForm" class="contact-us-form" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="row g-4">
                              <div class="col-md-6">
                                  <div class="input-field">
                                      <label for="name">Name<span style="color:red; font-size:20px !important;">*</span></label>
                                      <input type="text" class="" name="name" id="apply-name" placeholder="John Doe">
                                      <span id="apply-name-error"></span>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="input-field">
                                      <label for="email">Email address<span style="color:red; font-size:20px !important;">*</span></label>
                                      <input type="email" class="" name="email" id="apply-email" placeholder="example@domain.com">
                                      <span id="apply-email-error"></span>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="input-field">
                                      <label for="phone">Contact Number<span style="color:red; font-size:20px !important;">*</span></label>
                                      <input type="text" class="" name="phone" id="apply-phone" placeholder="+1-999-999-9999">
                                      <span id="apply-phone-error"></span>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="input-field">
                                      <label for="subject">Current Designation<span style="color:red; font-size:20px !important;">*</span></label>
                                      <input type="text" class="" name="subject" id="apply-subject" placeholder="Java Developer">
                                      <span id="apply-designation-error"></span>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="input-field">
                                      <label for="message">Upload your resume<span style="color:red; font-size:20px !important;">*</span></label>
                                      <input class="form-control" type="file" id="formFile">
                                  </div>
                              </div>
                              <div id="g-recaptcha-response" class="g-recaptcha" data-sitekey="6Lfi3aoZAAAAAFYdtzTJvh3URCyH4G3o6hIjaEu2"></div>
                          </div>
                      </div>
                  </div>
                  <div class="submit-btn text-center mt-4">
                      <button type="submit" class="template-btn primary-btn border-0 rounded-pill" id="applysubmit">Submit<i class="fa-solid fa-chevron-right ms-2"></i></button>
                  </div>
              </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
