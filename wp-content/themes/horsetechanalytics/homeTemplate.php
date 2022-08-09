<?php 

/**
* Template Name: Home
*
*/

get_header();?>


<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'banner' ) :
  $content_col = get_sub_field('content_col');
  $images = get_sub_field('images');
?>
<!--banner section  start-->
<section class="hero-style-2 overflow-hidden position-relative zindex-2">
   <div class="contact-shape-wrap">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape1.png" class="shape shape1" alt="shape1">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape2.png" class="shape shape2" alt="shape2">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape3.png" class="shape shape3" alt="shape3">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape1.png" class="shape shape4" alt="shape4">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape2.png" class="shape shape5" alt="shape5">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape3.png" class="shape shape6" alt="shape6">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape1.png" class="shape shape7" alt="shape7">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape2.png" class="shape shape8" alt="shape8">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape3.png" class="shape shape9" alt="shape9">
   </div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-12 col-md-6">
            <?php
            if($content_col) : ?>
            <div class="hero2-content-wrapper">
               <?php if(!empty($content_col['content'])) : ?>
               <h1 class="display-font text-white" 
                  data-aos="fade-right" 
                  data-aos-duration="1200">
                  <?php echo $content_col['content']; ?>
               </h1>
               <?php endif; ?>
               <?php
                  $link_button = $content_col['link_button'];
                  if( $link_button ): 
                     $link_button_url = $link_button['url'];
                     $link_button_title = $link_button['title'];
                     $link_button_target = $link_button['target'] ? $link_button['target'] : '_self';
                     ?>
                     <div class="hero-btns mt-5">
                        <a class="template-btn outline-btn rounded-pill" href="<?php echo esc_url( $link_button_url ); ?>" target="<?php echo esc_attr( $link_button_target ); ?>"><?php echo esc_html( $link_button_title ); ?></a>
                     </div>
                  <?php endif; ?>
            </div>
            <?php endif; ?>
         </div>
         <div _ngcontent-mtb-c6="" class="col-12 col-md-6" data-aos="fade-left" data-aos-duration="1200">
         <?php
            if($images) : ?>
            <div _ngcontent-mtb-c6="" class="welcome-thumb-wrapper mt-5 mt-md-0">
               <?php if($images['image_3']) :
                  $image_3 = $images['image_3']; ?>
               <span _ngcontent-mtb-c6="" class="welcome-thumb-1">
                  <img _ngcontent-mtb-c6="" 
                     src="<?php echo esc_url( $image_3['url'] );?>" 
                     alt="<?php echo esc_attr($image_3['alt']); ?>" 
                     class="welcome-animation d-block ml-auto" />
               </span>
               <?php endif; ?>

               <?php if($images['image_4']) :
                  $image_4 = $images['image_4']; ?>
               <span _ngcontent-mtb-c6="" class="welcome-thumb-2">
                  <img _ngcontent-mtb-c6="" 
                     src="<?php echo esc_url( $image_4['url'] );?>" 
                     alt="<?php echo esc_attr($image_4['alt']); ?>" 
                     class="welcome-animation d-block" />
               </span>
               <?php endif; ?>

               <?php if($images['image_5']) :
                  $image_5 = $images['image_5']; ?>
               <span _ngcontent-mtb-c6="" class="welcome-thumb-3">
                  <img _ngcontent-mtb-c6="" 
                     src="<?php echo esc_url( $image_5['url'] );?>" 
                     alt="<?php echo esc_attr($image_5['alt']); ?>" 
                     class="welcome-animation d-block" />
               </span>
               <?php endif; ?>

               <?php if($images['image_6']) :
                  $image_6 = $images['image_6']; ?>
               <span _ngcontent-mtb-c6="" class="welcome-thumb-4">
                  <img _ngcontent-mtb-c6="" 
                     src="<?php echo esc_url( $image_6['url'] );?>" 
                     alt="<?php echo esc_attr($image_6['alt']); ?>" 
                     class="welcome-animation d-block" />
               </span>
               <?php endif; ?>

               <?php if($images['image_1']) :
                  $image_1 = $images['image_1']; ?>
               <span _ngcontent-mtb-c6="" class="welcome-thumb-5">
                  <img _ngcontent-mtb-c6="" 
                     src="<?php echo esc_url( $image_1['url'] );?>" 
                     alt="<?php echo esc_attr($image_1['alt']); ?>" 
                     class="welcome-animation d-block" />
               </span>
               <?php endif; ?>
            
               <?php if($images['image_2']) :
                  $image_2 = $images['image_2']; ?>
               <span _ngcontent-mtb-c6="" class="welcome-thumb-6">
                  <img _ngcontent-mtb-c6="" 
                     src="<?php echo esc_url( $image_2['url'] );?>" 
                     alt="<?php echo esc_attr($image_2['alt']); ?>" 
                     class="welcome-animation d-block" />
               </span>
               <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php
            if($content_col) : ?>
            <?php
               if($content_col['image_mobile']) : 
                  $image_mobile = $content_col['image_mobile'];
               ?>
            <div class="welcome-img">
               <img 
                  src="<?php echo esc_url( $image_mobile['url'] );?>" 
                     alt="<?php echo esc_attr($image_mobile['alt']); ?>" 
                />
            </div>
               <?php endif; ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'about_us' ) :
  $about_contents = get_sub_field('contents_col');
  $about_image = get_sub_field('image_col');
?>
<!----start About us--->
<section class="hm2-feature-area position-relative overflow-hidden">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/feature-right.png" alt="triangle" class="position-absolute right-bottom">
   <div class="container">
      <div class="row">
         <?php if($about_image) : ?>
         <div class=" col-lg-6 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="1200">
            <div class="left-about">
               <img src="<?php echo esc_url( $about_image['url'] );?>" alt="<?php echo esc_attr($about_image['alt']); ?>"/>
            </div>
         </div>
         <?php endif; ?>

         <?php if($about_contents) : ?>
         <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-left" data-aos-duration="1200">
            <div class="right-about">
               <?php if(!empty($about_contents['heading'])) : ?>
               <h3><?php echo $about_contents['heading'];?></h3>
               <?php endif; ?>

               <?php if(!empty($about_contents['title'])) : ?>
               <span><?php echo $about_contents['title'];?></span>
               <?php endif; ?>

               <?php if(!empty($about_contents['content'])) : ?>
               <p><?php echo $about_contents['content'];?></p>
               <?php endif; ?>

               <?php 
               $about_link = $about_contents['link'];
               if( $about_link ): 
                  $about_link_url = $about_link['url'];
                  $about_link_title = $about_link['title'];
                  $about_link_target = $about_link['target'] ? $about_link['target'] : '_self';
                  ?>
                  <a class="template-btn hm2-primary-btn rounded-pill me-4" href="<?php echo esc_url( $about_link_url ); ?>" target="<?php echo esc_attr( $about_link_target ); ?>"><?php echo esc_html( $about_link_title ); ?></a>
               <?php endif; ?>
            </div>
         </div>
         <?php endif; ?>
      </div>
   </div>
</section>
<!----end About us--->
<?php endif ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'products' ) :
?>
<!-----Start our product----->
<section class="our-product hm2-feature-area position-relative pb-120 overflow-hidden">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/feature-right.png" alt="triangle" class="position-absolute left-bottom">
   <div class="bg-our-product">
   <div class="container">
      <?php if(!empty(get_sub_field('main_heading'))) : ?>
      <h3 data-aos="fade-up" data-aos-duration="1200"><?php echo get_sub_field('main_heading');?></h3>
      <?php endif; ?>
   <div class="row">
      <div class="col-md-12" data-aos="fade-down" data-aos-duration="1200">
      <?php
      if( have_rows('products') ):
         $a = 1;
         $b = 1;
         ?>
         <div class="tabs animated-slide-2">
            <ul class="tab-links">
               <?php while( have_rows('products') ) : the_row();
                  $tab_pane = get_sub_field('tab_pane'); ?>
               <li class="<?php echo $class = ($a == 1) ? 'active' : '' ; ?> ">
                  <a href="#tab<?php echo $a;?>"><?php echo $tab_pane['tab_name'];?></a>
               </li>
               <?php $a++; endwhile; ?>
            </ul>
            
            
            <div class="tab-content">
            <?php while( have_rows('products') ) : the_row();
                  $tab_pane = get_sub_field('tab_pane'); 
                  $tab_image = $tab_pane['image'];
                  $tab_content = get_sub_field('tab_content'); 
                  ?>
               <div class="tab<?php echo $class1 = ($b == 1) ? ' active' : '' ; ?>" id="tab<?php echo $b;?>" >
                  <div class="blog-slider">
                     <div class="blog-slider__wrp swiper-wrapper">
                        <div class="blog-slider__item swiper-slide row">
                           <div class="col-lg-4 col-md-5 col-sm-12">
                              <img src="<?php echo esc_url( $tab_image['url'] );?>" alt="<?php echo esc_attr( $tab_image['alt'] );?>">
                           </div>
                           <div class="col-lg-8 col-md-7 col-sm-12">
                              <div class="blog-slider__content">
                                 <div class="blog-slider__title"><?php echo $tab_content['title'];?></div>
                                 <div class="blog-slider__text"><?php echo $tab_content['content'];?></div>
                                 <?php 
                                 $tab_link = $tab_content['button'];
                                 if( $tab_link ): 
                                    $tab_link_url = $tab_link['url'];
                                    $tab_link_title = $tab_link['title'];
                                    $tab_link_target = $tab_link['target'] ? $tab_link['target'] : '_self';
                                    ?>
                                    <a class="template-btn hm2-primary-btn rounded-pill me-4" href="<?php echo esc_url( $tab_link_url ); ?>" target="<?php echo esc_attr( $tab_link_target ); ?>"><?php echo esc_html( $tab_link_title ); ?></a>
                                    
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="blog-slider__pagination"></div>
                  </div>
               </div>
               <?php $b++; endwhile; ?>
            </div>
         </div>
         <?php endif; ?>
      </div>
   </div>
</section>
<!---End Our product---->
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'our_work' ) :
  $our_work_heading = get_sub_field('heading');
  $display_our_work = get_sub_field('display_our_work');
  if ($display_our_work) : ?>
<!----Start our works--->
<section class="hm2-pricing-section bg-works  pt-120 pb-50  overflow-hidden">
   <div class="contact-shape-wrap">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape1.png" class="shape shape10" alt="shape10">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape2.png" class="shape shape11" alt="shape11">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape3.png" class="shape shape12" alt="shape12">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape1.png" class="shape shape13" alt="shape13">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape2.png" class="shape shape14" alt="shape14">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape3.png" class="shape shape15" alt="shape15">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape1.png" class="shape shape16" alt="shape16">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape2.png" class="shape shape17" alt="shape17">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shape3.png" class="shape shape18" alt="shape18">
   </div>
   <div class="container position-relative zindex-1">
      <div class="row justify-content-center">
         <div class="col-lg-5">
            <?php if(!empty($our_work_heading)) : ?>
            <div class="section-title text-center">
               <h3 data-aos="fade-up" data-aos-duration="1200"><?php echo $our_work_heading;?></h3>
            </div>
            <?php endif; ?>
         </div>
      </div>
      <div class="hm2-pricing-tab text-center mt-4">
      
         <?php 
         $portfolio_cat = get_terms( 'portfolio_category' );
         if ($portfolio_cat) {
            $count1 = 1;
            $count2 = 1;
             ?>
         <ul class="nav nav-tabs justify-content-center deep-shadow" data-aos="fade-left" data-aos-duration="1200">
            <?php foreach($portfolio_cat as $cat) { ?>
               <li><button class="<?php echo $classActive1 = ($count1 == 1) ? ' active' : '' ; ?>" 
               data-bs-toggle="tab" data-bs-target="#<?php echo $cat->slug;?>"><?php echo $cat->name;?></button></li>
            <?php $count1++; } ?>
         </ul>
         
         <div class="tab-content text-start mt-50" data-aos="fade-right" data-aos-duration="1200">
         <?php foreach($portfolio_cat as $cat2) { ?>
            <div class="tab-pane fade <?php echo $classActive2 = ($count2 == 1) ? ' active show' : '' ; ?>" id="<?php echo $cat2->slug;?>">
               <div class="row g-4 justify-content-center">
               <?php 
					$portfolio = new WP_Query( array(
					   'post_type' => 'portfolio',
					   'posts_per_page' => 9,
                  'tax_query' => array(
                     array (
                         'taxonomy' => 'portfolio_category',
                         'field' => 'term_id',
                         'terms' => $cat2->term_id,
                     )
                 ),
               ) ); ?>
               <?php if ( $portfolio->have_posts() ) : ?>
                  <?php while($portfolio->have_posts()) : $portfolio->the_post(); ?>
                  <div class="col-lg-4 col-md-6 col-sm-12 p-30">
                     <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" />
                  </div>
                  <?php endwhile; wp_reset_postdata(); ?>
               <?php endif; ?>
               </div>
            </div>
            <?php $count2++; } ?>
         </div>
         <?php } ?>
      </div>
   </div>
</section>
<!----End our works--->
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>



<?php while ( have_rows('sections') ) : the_row();?>
  <?php if( get_row_layout() == 'technologies' ) : ?>
<section class="hosting-server ptb-120 pt-120 position-relative overflow-hidden light-bg zindex-1">
   <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/feature-right.png" alt="server-bg" class="position-absolute right-top top-380">
   <div class="container">
      <div class="our-technology">
         <?php if( !empty(get_sub_field('main_heading')) ): ?>
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="section-title text-center">
                  <h3 data-aos="zoom-in" data-aos-duration="1200"><?php echo get_sub_field('main_heading');?></h3>
               </div>
            </div>
         </div>
         <?php endif; ?>
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