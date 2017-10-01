<?php
/**
 * The search template
 *
 * Displays the content portion of the search results page
 *
 * @package Simple Blog Theme
 * Template Name: search
 */

get_header();?>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

		<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()): ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf(__('Search Results for: %s', 'twentyfifteen'), get_search_query());?></h1>
			</header><!-- .page-header -->

			<?php
// Start the loop.
while (have_posts()): the_post();?>

						<?php
    /*
     * Run the loop for the search to output the results.
     * If you want to overload this in a child theme then include a file
     * called content-search.php and that will be used instead.
     */
    get_template_part('content', 'search');

    // End the loop.
endwhile;

// Previous/next page navigation.
the_posts_pagination(array(
    'prev_text' => __('Previous page', 'twentyfifteen'),
    'next_text' => __('Next page', 'twentyfifteen'),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyfifteen') . ' </span>',
));

// If no content, include the "No posts found" template.
else:
    get_template_part('content', 'none');

endif;
?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->









      <h1 class="page-header"><?php printf('Search : %s', '<span>' . esc_html(get_search_query()) . '</span>');?></h1>
		<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/search')); ?>">
			<label>
				<span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'twentysixteen'); ?></span>
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentysixteen'); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'twentysixteen'); ?>" />
			</label>
			<button type="submit" class="btns"><span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'twentysixteen'); ?></span></button>
		</form>


		<hr>
    </div>

</div>
  <?php get_footer();?>