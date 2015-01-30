<?php

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages and that

 * other 'pages' on your WordPress site will use a different template.

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */



get_template_part( 'templates/header-sche' ); ?>



<section class="wellness">

<div class="container">

<div class="row">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="col-md-12"> 

    <!-- ===== Start Services ===== -->

    <h1>

      <?php the_title();?>

    </h1>

    <?php the_content(); ?>

    <!-- ===== End Services ===== --> 

    

  </div>

  <?php endwhile; ?>

  <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>

  <?php else: ?>

  <?php endif; ?>

</div>
  </div>
</section>

<?php get_template_part( 'templates/footer'); ?>

