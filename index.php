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
<div class="row">
<h1><?php the_title(); ?></h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(__('(more...)')); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>