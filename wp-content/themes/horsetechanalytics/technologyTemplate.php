<?php

/**
 * Template Name: Technologies
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

<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'technologies' ) : ?>
<section class="hosting-server ptb-120 pt-120 position-relative overflow-hidden light-bg zindex-1">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/feature-right.png" alt="server-bg" class="position-absolute right-top top-380">
   <div class="container">
      <div class="our-technology">
         <div class="row tabs"  data-aos="zoom-out" data-aos-duration="1200">
            <div class="col-12">
            <?php
               if( have_rows('technology') ): 
                  $tabs = 1;
                  $tabCont = 1;
               ?>
               <ul class="nav nav-pills mb-3  nav-justified" id="pills-tab" role="tablist">
                  <?php while( have_rows('technology') ) : the_row(); ?>
                  <li class="nav-item" role="presentation">
                     <button 
                     class="nav-link <?php echo $tabsClass = ($tabs == 1) ? ' active' : '' ; ?>" 
                     data-bs-toggle="pill" 
                     data-bs-target="#pills_<?php echo $tabs;?>" 
                     type="button" 
                     role="tab" 
                     aria-controls="pills-home" 
                     aria-selected="true"><?php echo get_sub_field('tab_name');?></button>
                  </li>
                  <?php $tabs++; endwhile; ?>
               </ul>
               
               <div class="tab-content" id="pills-tabContent">
                  <?php while( have_rows('technology') ) : the_row(); ?>
                  <div class="tab-pane fade <?php echo $tabsClass2 = ($tabCont == 1) ? ' show active' : '' ; ?>" id="pills_<?php echo $tabCont;?>" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="<?php echo esc_attr($tabCont-1);?>">
                     <?php
                     if( have_rows('tab_content') ): ?>
                     <div class="row logo-slider">
                     <?php while( have_rows('tab_content') ) : the_row(); 
                        $techno_icon = get_sub_field('icon');
                        $techno_name = get_sub_field('name');
                     ?>
                        <div class="col-lg-3 col-sm-6">
                           <div class="dis-flex">
                              <div class="img">
                                 <img src="<?php echo esc_url( $techno_icon['url'] );?>" alt="<?php echo esc_attr( $techno_icon['alt'] );?>" >
                              </div>
                              <label><?php echo $techno_name; ?> </label>
                           </div>
                        </div>
                        <?php endwhile; ?>
                     </div>
                     <?php endif; ?>
                  </div>
                  <?php $tabCont++; endwhile; ?>
               </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php get_footer(); ?>