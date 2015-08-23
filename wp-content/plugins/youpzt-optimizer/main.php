<?php
/*
Plugin Name:youpzt-optimizer
Plugin URI: http://www.youpzt.com/267.html
Description:WordPress网站优化工具是优品主题建站出品一款包括各类系统开关优化和数据库清理为一体的网站优化插件。
Version: 1.2.1
Author: 优品主题
Author URI: http://www.youpzt.com/
Text Domain:WordPress全面网站优化
*/
$plugin_version = '1.2.1';
define('WP_YPOPTIMIZE_VERSION', $plugin_version);
define('WP_YPOPTIMIZE_SITE_URL', site_url());
define('WP_YPOPTIMIZE_HOME_URL', home_url());
define('WP_YPOPTIMIZE_PLUGIN_URL', plugins_url('', __FILE__));
define('WP_YPOPTIMIZE_PLUGIN_DIR', WP_PLUGIN_DIR.'/'. dirname(plugin_basename(__FILE__)));
define('WP_YPOPTIMIZE_PLUGIN_FILE',  __FILE__);
function youpzt_optimizer_settings_link($action_links,$plugin_file){
	if($plugin_file==plugin_basename(__FILE__)){
		$wcu_settings_link = '<a href="admin.php?page=switch">' . __("Settings") . '</a>';
		array_unshift($action_links,$wcu_settings_link);
	}
	return $action_links;
}
add_filter('plugin_action_links','youpzt_optimizer_settings_link',10,2);
$youpzt_optimize_options =get_option('optimize_options');//开关
$youpzt_optimize_setting =get_option('optimize_setting');//设置
//卸载插件删除数据
if (isset($youpzt_optimize_setting['del-optimizer-options']) && $youpzt_optimize_setting['del-optimizer-options']==true){
	register_uninstall_hook(WP_YPOPTIMIZE_PLUGIN_FILE, 'delete_options' );
	function delete_options(){
		delete_option('optimize_options');
		delete_option('optimize_setting');	
	}
}
if(is_admin()){
	require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/functions/functions-admin.php');//后台需要的函数
	require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/youpzt-optimize-admin.php');//加载后台
}
	//不同版本加载不同开关
	if (version_compare($wp_version, '2.8', '<')) { // For WP 2.7
		//require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/functions/switch27.php');
	} elseif (version_compare($wp_version, '3.0', '<')) { // For WP 2.8
		//require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/functions/switch28.php');
	} else{
		require_once(WP_YPOPTIMIZE_PLUGIN_DIR.'/functions/switch30.php'); // For WP 3.0
	}
?>