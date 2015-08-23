<?php 
add_action('admin_menu', 'youpzt_optimize_admin');
add_action('admin_menu', 'youpzt_optimize_scripts');
function youpzt_optimize_admin(){
	add_menu_page('youpzt-optimizer', '网站优化(优品版)','edit_private_posts','optimize_page', 'youpzt_optimize_page','dashicons-hammer',73);
	add_action( 'admin_init', 'youpzt_optimize_settings' );
}
function youpzt_optimize_scripts(){	
	$optimize_get = isset($_GET['page']) ? $_GET['page'] : '';
	if($optimize_get=='optimize_page'){
		wp_enqueue_style('optimize-normalize',WP_YPOPTIMIZE_PLUGIN_URL.'/css/normalize.css', array(), WP_YPOPTIMIZE_VERSION);
		wp_enqueue_style('optimize-checkbox-button',WP_YPOPTIMIZE_PLUGIN_URL.'/css/checkbox-button.css', array(), WP_YPOPTIMIZE_VERSION);
		wp_enqueue_style('style',WP_YPOPTIMIZE_PLUGIN_URL.'/css/style.css', array(), WP_YPOPTIMIZE_VERSION);
		
		wp_enqueue_script( 'jquery2-1',WP_YPOPTIMIZE_PLUGIN_URL.'/js/jquery2.1.min.js', array(), WP_YPOPTIMIZE_VERSION);
		wp_enqueue_script( 'optimize-main',WP_YPOPTIMIZE_PLUGIN_URL.'/js/main.js', array('jquery2-1'), WP_YPOPTIMIZE_VERSION);
	}
}

/*settings*/
function youpzt_optimize_settings() {
	register_setting('youpzt-optimize-options-group', 'optimize_options' );
	register_setting('youpzt-optimize-settings-group', 'optimize_setting' );
}

function youpzt_optimize_showMessage($message, $errormsg = false)
{
	if ($errormsg) {
		echo '<div id="message" class="error">';
	}else{
		echo '<div id="message" class="updated fade">';
	}
	echo "$message</div>";
}
//check update version 
function ypzt_optimize_showAdminMessages()
{
		if(function_exists('file_get_contents')){
			 $check_obj=check_youpzt_plugins_optimize();
			 $check_version=$check_obj->version;
			if($check_version!=WP_YPOPTIMIZE_VERSION){
				
				youpzt_optimize_showMessage('<p>网站优化工具插件已经有更新，请点击<a class="color-red" href="'.$check_obj->homepage.'" target="_blank" title="更新插件"><strong>插件页面</strong></a>下载最新版</p>', false);
			}
			}else{
				echo '如果您看到这句话，证明你的file_get_contents函数被禁用了，请开启此函数！';
			}
}

add_action('admin_notices', 'ypzt_optimize_showAdminMessages');//后台显示更新信息

function youpzt_optimize_page(){
?>
<div class="wrap">
<h2>网站优化工具<?php echo WP_YPOPTIMIZE_VERSION;?></h2>	

<p class="f13"><a href="http://www.youpzt.com" target="_blank">问题反馈</a></p>
<?php	
$switch_action=isset($_GET['tab'])? $_GET['tab']:'general';
//切换
if($switch_action=='tables'){//数据库优化
	
	require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/youpzt-optimize-tables.php');
	
}elseif($switch_action=='general'||$switch_action=='switch'){//开关

	require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/youpzt-optimize-switch.php');

}elseif($switch_action=='setting'){
	require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/youpzt-optimize-setting.php');
}

?>
<hr/>
<p style="text-align:center;">&copy; <?php echo date("Y"); ?>专业WordPress建站平台， <a href="http://www.youpzt.com" target="_blank" rel="nofollow" title="WordPress优品主题建站平台">优品主题</a>(查看更多)</p>

</div>

<?php };?>