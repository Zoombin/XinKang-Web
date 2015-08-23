<?php 
/**
 * Template name: 网址导航
 * Description:   A site navigation page
 */

get_header();

?>
	<nav class="flinksnav">
		<h2><?php echo get_option('blogname'); ?>
		<?php if( dopt('d_navtitle_b') ){ ?> - <?php echo dopt('d_navtitle');?><?php } else { ?> - 一个有用的网址导航<?php }?>
		</h2>
	</nav>
	<div class="items">
		<?php 
			wp_list_bookmarks(array(
				'show_description' => true,
				'between'  => '<br>',
				'title_li'  => __(''),
				'category_before'  => '<div class="item">',
				'category_after'   => '</div>'
			));
		?>
	</div>

<?php

get_footer();