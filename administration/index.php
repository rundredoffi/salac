<?php
	session_start();
	include './ad_header.php';
	if(isset($_GET["page"])&&!empty($_GET["page"])){
		$page = $_GET["page"];
		}
	else{
		$page = 'accueil';
	}
	include "./ad_".$page.'.php';
	include './ad_footer.php'; 
?>