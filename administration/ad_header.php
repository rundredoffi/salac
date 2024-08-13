<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>SA LAC - Administration</title>
</head>
<body class="d-flex flex-column min-vh-100">
	<header>
		<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark bg-gradient" data-bs-theme="dark">
			<div class="container-fluid">
				<span class="navbar-brand">
					<a  href="../index.php" class="text-decoration-none">
						<img src="../photos/logoSALAC.png" alt="logo" height="75" class="d-inline-block align-text-middle">
					</a>
					SA LAC - Administration
				</span>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<?php if(!empty($_SESSION)){?>
							<li class="nav-item">
								<a class="nav-link active" href="./index.php?page=res_main"><i class="bi bi-building"></i>&nbsp;Gestion des résidences</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="./index.php?page=actus_main"><i class="bi bi-newspaper"></i>&nbsp;Gestion des actualités</a>
							</li>
						<?php }?>
					</ul>
					<?php 
						$pageHeader=(!empty($_SESSION))? "./ad_logout.php" : "./index.php?page=login";
						$btnText=(!empty($_SESSION))? $_SESSION['login'].'&nbsp;<i class="bi bi-box-arrow-right"></i>' : "Login";
						$btnColor=(!empty($_SESSION))? 'warning text-dark' : "outline-light";
					?>
					<span class="navbar-text">
						<a class="btn btn-<?php echo $btnColor?>" href="<?php echo $pageHeader?>"><?php echo $btnText ?></a>
					</span>
				</div>
			</div>
		</nav>
	</header>