<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
<title><?php wp_title('-', true, 'right'); echo get_option('blogname'); if (is_home ()) echo ' - ' , get_option('blogdescription'); if ($paged > 1) echo ' - 第', $paged ,'页' ;?></title>
<?php
$sr_1 = 0; $sr_2 = 0; $commenton = 0; 
if( dopt('d_sideroll_b') ){ 
    $sr_1 = dopt('d_sideroll_1');
    $sr_2 = dopt('d_sideroll_2');
}
if( is_singular() ){ 
    if( comments_open() ) $commenton = 1;
}
?>
<script>
window._deel = {name: '<?php bloginfo('name') ?>',url: '<?php echo get_bloginfo("template_url") ?>', ajaxpager: '<?php echo dopt('d_ajaxpager_b') ?>', commenton: <?php echo $commenton ?>, roll: [<?php echo $sr_1 ?>,<?php echo $sr_2 ?>]}
</script>
<?php 
wp_head(); 
if( dopt('d_headcode_b') ) echo dopt('d_headcode'); ?>
<!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script><![endif]-->
<?php if( dopt('d_fixedMenu_b') ){ ?><style>.fixed {position: fixed;top: 0px;width: 100%;background:#FFF;box-shadow: 0 1px 4px rgba(0,0,0,.09);border-color: rgba(0,0,0,.08);box-shadow: 0 1px 3px rgba(0,0,0,.09);}.widgetRoller{top:62px;}</style><?php } else { ?><style>.widgetRoller{top:10px;}</style><?php }?>
</head>
<body <?php body_class(); ?>>

<header id="header" class="header">
<div class="container-inner">
 <div class="yusi-logo">
    <a href="/">
        <h1>
            <span class="yusi-mono"><?php bloginfo('name'); ?></span>
            <span class="yusi-bloger"><?php bloginfo('description'); ?></span>
        </h1>
    </a>
 </div>
</div>

	<div id="nav-header" class="navbar">
		
		<ul class="nav">
			<?php echo str_replace("</ul></div>", "", ereg_replace("<div[^>]*><ul[^>]*>", "", wp_nav_menu(array('theme_location' => 'nav', 'echo' => false)) )); ?>
<li style="float:right;">
                    <div class="toggle-search"><i class="fa fa-search"></i></div>
<div class="search-expand" style="display: none;"><div class="search-expand-inner"><form method="get" class="searchform themeform" onSubmit="location.href='<?php echo home_url('/search/'); ?>' + encodeURIComponent(this.s.value).replace(/%20/g, '+'); return false;" action="/"><div> <input type="ext" class="search" name="s" onBlur="if(this.value=='')this.value='搜索如此便捷';" onFocus="if(this.value=='搜索如此便捷')this.value='';" value="搜索如此便捷"></div></form></div></div>
</li>
		</ul>
	</div>
	</div>
</header>
<section class="container"><div class="speedbar">
		<?php 
		if( dopt('d_sign_b') ){ 
			global $current_user; 
			get_currentuserinfo();
			$uid = $current_user->ID;
			$u_name = get_user_meta($uid,'nickname',true);
		?>
			<div class="pull-right">
				<?php if(is_user_logged_in()){echo '<i class="fa fa-user"></i> '.$u_name.' &nbsp; '; echo ' &nbsp; &nbsp; <i class="fa fa-power-off"></i> ';}else{echo '<i class="fa fa-user"></i> ';}; wp_loginout(); ?>				<?php if( is_super_admin() ){ ?>				&nbsp; &nbsp; <a target="_blank" href="<?php echo site_url('/wp-admin/') ?>">后台管理</a>				<?php } ?>
			</div>
		<?php } ?>
		<div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?php echo dopt('d_tui'); ?></div>
	</div>
	<?php if( dopt('d_adsite_01_b') ) echo '<div class="banner banner-site">'.dopt('d_adsite_01').'</div>'; ?>