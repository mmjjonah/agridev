<?php
function title(){
	return ($_GET['page'] ?? "home") ;
}

function type($type = null){
	if (is_null($type)) {
		return ($_GET['type'] ?? "") ;
	}
	else{
		return ($_GET['type'] ?? "") == $type;
	}
}

function contentPage(){
	
	fileExiste("pages/" . title() . ".php");

	ob_start();
	include "pages/" . title() . ".php" ;
	return ob_get_clean();
}

function style(){

	$style = "assets/css/" . title() . ".css";

	fileExiste($style);

	ob_start();
	if (file_exists($style)) {
		include $style;
	}
	return ob_get_clean();
}

function script(){
	$dir = title();
	$script = "assets/js/$dir.js";

	fileExiste($script);

	ob_start();
	if (file_exists($script)) {
		include $script;
	}
	return ob_get_clean();
}

function content($titre, $global = null){

	if (!is_dir("pages/contents/" . title() . "/")) {
		mkdir("pages/contents/" . title() . "/", 0777, true);
	}

	if (!is_dir("assets/css/contents/" . title() . "/")) {
		mkdir("assets/css/contents/" . title() . "/", 0777, true);
	}

	if (!is_dir("assets/css/contents/global/")) {
		mkdir("assets/css/contents/global/", 0777, true);
	}

	if (is_null($global)){
		$dir = title();
		fileExiste("assets/css/contents/$dir/$titre.css");
		fileExiste("pages/contents/$dir/$titre.php");
	}
	else{
		$dir = "global";
		fileExiste("assets/css/contents/$dir/$titre.css");
		fileExiste("pages/contents/$dir/$titre.php");
	}

	ob_start();
	include "pages/contents/$dir/$titre.php" ;

	?>
	<style type="text/css">
		<?php  include "assets/css/contents/$dir/$titre.css"; ?>
	</style>
	<?php

	return ob_get_clean();
}

function json($titre){

	fileExiste("pages/contents/" . title() . "/$titre.json");

	ob_start();
	include "pages/contents/" . title() . "/$titre.json" ;
	$r = json_decode(ob_get_clean());
	return (is_array($r) || !is_null($r))?$r:Array();
}

function fileExiste($file){
	if (!file_exists($file)){
		fclose( fopen($file, 'w') );
	}
}

function page(){
	return "http://" . ($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
}