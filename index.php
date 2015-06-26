<?php
	//echo md5("123"."VDWTBFWUHTE");
	require_once "start.php";

	require_once "url_class.php";
	
	$url = new URL();
	$view = $url->getView();
	
	$class = $view."Content";
	
	if ($url->fileExists($class."_class.php")) {
		require_once $class."_class.php";
		new $class();
	}
	
	else {
		header("Location: ".$url->notFound());
		exit;
	}
?>