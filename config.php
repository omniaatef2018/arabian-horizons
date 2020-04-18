<?php
function base_url($path){
	$url = sprintf("%s://%s%s",isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',$_SERVER['SERVER_NAME'],dirname($_SERVER['PHP_SELF']).'/');
	return $url.$path;
}
 ?>