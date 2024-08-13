<?php 
	$pagesAutorisee=["accueil", "residence","Coordonnees"];
	include './connect.php';
	include './header.php';
	// Connexion à la BDD

	if(isset($_GET["page"])){
		$page = $_GET["page"];
		}
	else{
		$page = 'accueil';
	}

	$page = isset($_GET["page"]) &&!empty($_GET["page"]) && in_array($_GET['page'],$pagesAutorisee) ? $_GET['page'] : "accueil";
	include $page.'.php';
	include './footer.php'; 
?>