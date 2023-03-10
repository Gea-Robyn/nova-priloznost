<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$args = array(
	'post_type' => array('product','product_variable'),
	'posts_per_page' => $n_of_posts,
	'orderby' => 'date',
	'order' => 'DESC',
	'paged' => 1
  );
  $test_query = new WP_Query( $args );
  if($test_query->have_posts()){
	while ( $test_query->have_posts() ) {
		$test_query->the_post();
	  var_dump(get_the_title());
	}
  }
  
$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

  <div class="<?php echo esc_attr($container); ?>">

    <div class="row">

      <div class="col-md-12">

        <footer class="site-footer" id="colophon">

          <div class="site-info">

            <?php understrap_site_info(); ?>

          </div><!-- .site-info -->

        </footer><!-- #colophon -->

      </div>
      <!--col end -->

    </div><!-- row end -->

  </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>