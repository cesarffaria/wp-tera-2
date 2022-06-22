<?php
/**
 * Index file for the TERASTUDIO WordPress default theme.
 *
 * @link https://terastudio.pt/
 *
 * @package TERASTUDIO
 * @subpackage TERASTUDIO
 * @since TERASTUDIO 2.0
 */

get_header(); ?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>