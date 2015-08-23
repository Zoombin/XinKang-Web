<?php 
// Function: Format Bytes Into KB/MB
if(!function_exists('format_size')) {
	function format_size($rawSize) {
		if($rawSize / 1073741824 > 1)
			return number_format_i18n($rawSize/1048576, 1) . ' '.__('G', 'wp-dbmanager');
		else if ($rawSize / 1048576 > 1)
			return number_format_i18n($rawSize/1048576, 1) . ' '.__('M', 'wp-dbmanager');
		else if ($rawSize / 1024 > 1)
			return number_format_i18n($rawSize/1024, 1) . ' '.__('K', 'wp-dbmanager');
		else
			return number_format_i18n($rawSize, 0) . ' '.__('bytes', 'wp-dbmanager');
	}
}
//获取后台url
function get_optmenupage_url($pageslug){
	return site_url('/wp-admin/admin.php?page=optimize_page&tab='.$pageslug);
}

function check_youpzt_plugins_optimize(){
	$check_url="aHR0cDovL3d3dy55b3VwenQuY29tL3dwLWNvbnRlbnQvdXBkYXRlX2NoZWNrX3lvdXB6dF9qc29uL3lvdXB6dC1vcHRpbWl6ZXIuanNvbg==";
	$check_url=base64_decode($check_url);
	$check_content=file_get_contents($check_url);
	$check_obj=json_decode($check_content);
	return $check_obj;
}
?>