<?php

/**
 * Template Name: Career Page
 *
 */

get_header(); ?>

<section class="breadcrumb-area bg-primary-gradient">
  <div class="container">
    <div class="breadcrumb-content text-center">
      <h2 class="mb-3"><?php the_title(); ?></h2>
    </div>
  </div>
</section>

<?php 
$heading = get_field('heading');
$display_career_post = get_field('display_career_post');
if($display_career_post): ?>

<?php 
   $args = array(
       'post_type' => 'career',
       'order' => 'DESC',
       'posts_per_page' => -1,
      ); 
      ?>
<?php $career_query = new WP_Query($args);
if ($career_query->have_posts()) : ?>
<section class="service-section light-bg pt-120 pb-120 overflow-hidden position-relative zindex-1">
  <img src="<?php echo esc_url( get_template_directory_uri() );?>/img/shapes/service-shape.png" alt="not found" class="position-absolute right-bottom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-8">
        <?php if(!empty($heading)) : ?>
        <div class="section-title text-center">
          <h2><?php echo $heading;?></h2>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="services-bottom mt-40">
      <div class="row g-4 justify-content-center">
      <?php while ($career_query->have_posts()) : $career_query->the_post(); ?>
        <div class="col-lg-4 col-md-6" id="<?php echo $post->post_name;?>">
          <div class="service-card bg-white deep-shadow rounded-2">
            <div class="icon-wrapper">
            <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="<?php echo $post->post_name;?>" class="img-fluid" />
                <?php }
                else { ?>
                    <img src="<?=site_url();?>/wp-content/uploads/2022/08/no-image-icon-4.png" >
                <?php }
                ?>
            </div>
            <div class="card-content">
              <a href="<?php the_permalink();?>">
                <h3 class="h4 mb-4 careetitle"><?php the_title();?></h3>
              </a>
              <div class="mb-2 textjus maxheight"><?php echo get_the_content();?></div>
              <button 
                class="template-btn primary-btn border-0 rounded-pill openmodel" 
                style="color: #fff; padding: 10px 21px;" 
                data-bs-toggle="modal" 
                data-bs-target="#exampleModal" onclick="jobTitle('<?php the_title();?>');" >Apply Now <i class="fa-solid fa-chevron-right ms-2"></i></button>
              <a href="<?php the_permalink();?>" class="template-btn" target="_blank">View Details</a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        
      </div>
    </div>
  </div>
</section>
<?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>