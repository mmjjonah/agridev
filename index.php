<?php
define('__INCLUDE_DIR__', 'includes/');

include __INCLUDE_DIR__."vue.php";
include __INCLUDE_DIR__."controleur.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<link rel="icon" href="favicon.png" type="image/gif">

	<title><?= ucfirst(title()) ?></title>
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,500,500i,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="assets/lib/bootstrap/css/fonts/css/all.min.css">
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<style>
		<?= style() ?>
	</style>
</head>
<body>
	<?php


	include __INCLUDE_DIR__.'header.php';

	$contentPage = contentPage();
	echo content("f_recherche", ($GLOBALS['title_page'] ?? "hitady") );
	echo contentPage();

	include __INCLUDE_DIR__.'footer.php';
	
	
	?>
	<script src="assets/lib/jquery-3.4.1.min.js"></script>
	<script src="assets/lib/bootstrap/js/popper.min.js"></script>
	<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- <script src="assets/js/script.js"></script> -->

	<script>
		<?= include "assets/js/script.js" ?>
		
		<?= script() ?>
	</script>
	
</body>
</html>


