<?php if (!Yusi_is_mobile() ): ?>
<div id="wowslider-container1">
	<div id="featured">
	<?php $sticky = get_option('sticky_posts'); rsort( $sticky );
		query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1, 'showposts' => dopt('d_sticky_count')?dopt('d_sticky_count'):4 ) );
		while (have_posts()) : the_post(); 
		echo '<a data-caption="#htmlCaption'.get_the_id().'" class="orbit-item"  target="_blank" href="'.get_permalink().'" title="'.get_the_title().'">';
		echo '<img src="';echo post_thumbnail_src();echo '" title="'.get_the_title().'" alt="'.get_the_title().'" /></a>';
		endwhile; 
		wp_reset_query(); 
	?>
</div>
<?php $sticky = get_option('sticky_posts'); rsort( $sticky );
	query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1, 'showposts' => dopt('d_sticky_count')?dopt('d_sticky_count'):4 ) );
	while (have_posts()) : the_post(); 
	echo '<span class="orbit-caption" id="htmlCaption'.get_the_id().'">'.get_the_title().'</span>';
	endwhile; 
	wp_reset_query(); 
?>
</div><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.orbit.min.js"></script>
<script>$(window).load(function() {$('#featured').orbit({bullets : true,startClockOnMouseOut : true,captionAnimation : 'slideOpen'});});</script>
<?php endif ;?>