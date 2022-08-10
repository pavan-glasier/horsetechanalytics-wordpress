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

<section class="wp-about pb-80 ">
    <div class="container">
        <div class="row justify-content-center g-4">
            <div class="col-lg-4 col-md-6">
                <div class="wp-about-item position-relative zindex-1 bg-white deep-shadow rounded-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rocket-bg.png" alt="not found" class="position-absolute item-bg">
                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded-circle bg-white">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rocket.png" alt="rocket" class="img-fluid logo-black">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/rocket-white.png" alt="rocket" class="img-fluid logo-white">
                    </span>
                    <h4 class="mt-4 mb-20">Department</h4>
                    <p class="mb-0"><?php echo get_field('department'); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="wp-about-item position-relative zindex-1 bg-white deep-shadow rounded-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone-bg.png" alt="not found" class="position-absolute item-bg">
                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded-circle bg-white">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone.png" alt="phone" class="img-fluid logo-black">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone-white.png" alt="phone" class="img-fluid logo-white">
                    </span>
                    <h4 class="mt-4 mb-20">Job Location(s)</h4>
                    <p class="mb-0"><?php echo get_field('job_locations'); ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="wp-about-item position-relative zindex-1 bg-white deep-shadow rounded-2">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/award-bg.png" alt="not found" class="position-absolute item-bg">
                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded-circle bg-white">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/award.png" alt="award" class="img-fluid logo-black">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/award-white.png" alt="award" class="img-fluid logo-white">
                    </span>
                    <h4 class="mt-4 mb-20">Job Type</h4>
                    <p class="mb-0"><?php echo get_field('job_type'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('contents')) : ?>
<section class="career-section wp-highlights pb-80">
    <div class="container">
        <div class="row g-4 justify-content-center">
             <?php while (have_rows('contents')) : the_row(); ?>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="highlight-item wp-about-item position-relative zindex-1 bg-white deep-shadow rounded-2">
                    <?php echo get_sub_field('content'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php 
$form_group = get_field('form_group');
if($form_group): ?>
<section class="career-section wp-highlights pb-120">
    <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="highlight-item wp-about-item position-relative zindex-1 bg-white deep-shadow rounded-2">
                <?php if(!empty($form_group['form_heading'])) : ?>
                <h4 class="mt-4 mb-20"><?php echo $form_group['form_heading'];?></h4>
                <?php endif; ?>

                <?php if(!empty($form_group['select_form'])) : ?>
                <div class="hm-contact-form mt-5" id="contact">
                    <?php echo do_shortcode('[contact-form-7 id="'.$form_group['select_form'].'" title="Career Form"]');?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php edit_post_link( __( 'Edit Post', 'glasierinc' ), '<span class="edit-link float-right">', '</span>' ); ?>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>