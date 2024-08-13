<?php
  require './ad_estconnect_exe.php';
?>
<main class="container pt-3 ">
	<h1 class="text-start text-dark">
		Administration du site
	</h1>
	<hr>
	<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <?php if($_SESSION['role'] == 'cpt' | $_SESSION['role']=='adm') {?>
        <div class="feature col">
          <h3 class="fs-2 text-body-emphasis"> <i class="bi bi-buildings"></i> Gestion des résidences</h3>
          <p>Gérer les résidences et les appartements/studios associés aux résidences.</p>
          <a href="./index.php?page=res_main" class="btn btn-secondary"role="button">
            Gestion résidences
          </a>
          <a href="./index.php?page=res_main" class="btn btn-secondary"role="button">
            Gestion résidences
          </a>
        </div>
      <?php }?>
      <?php if($_SESSION['role']=='adm'){?>
        <div class="feature col">
          <h3 class="fs-2 text-body-emphasis"><i class="bi bi-newspaper"></i> Gestion des actualités</h3>
          <p>Administrer les actualités sur la page d'accueil du site.</p>
          <a href="./index.php?page=actus_main" class="btn btn-secondary disabled"role="button">
            Gestion actualités
          </a>
        </div>
      <?php }?>
    </div>
</main>