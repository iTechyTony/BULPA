<?php
require '../includes/init.php';
function clean_string($string){
	$string=trim($string);
	$string=filter_var($string,FILTER_SANITIZE_STRING);
	return $string;
}


?>