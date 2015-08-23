<?php 

/*

	template name: GO跳转页面

	description: template for imiwan.com Yusi theme 

*/
?>
		<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php comments_template('', true); endwhile;  ?>