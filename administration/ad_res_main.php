<?php 
require './ad_estconnect_exe.php';
include '../connect.php';
$notifs = [
  "successEdit" => [
      "couleur" => "success",
      "text" => "Résidence modifié."
  ],
  "failEdit" => [
    "couleur" => "danger",
    "text" => "Erreur durant la modification"
],
];
$sql = "SELECT DISTINCT nomRes, villeRes,codeRes
        FROM Residences;";
$reponse=$bdd->query($sql);
$residences=$reponse->fetchall(PDO::FETCH_ASSOC);
?>
<main class="container pt-3 ">
	<h1 class="text-start text-dark">
    <i class="bi bi-buildings"></i> Gestion des résidences <a href="./index.php?page=res_ajout"><i class="bi bi-plus-circle-fill text-success"></i></a>
	</h1>
	<hr>
  <?php if(isset($_GET['notif'])&& array_key_exists($_GET['notif'], $notifs)&&!empty($_GET['notif'])){
    ?>
      <div class="alert alert-<?php echo $notifs[$_GET['notif']]["couleur"]?>" role="alert">
          <i class="bi bi-info-circle"></i>&nbsp;<?php echo $notifs[$_GET['notif']]["text"]?>
      </div>
  <?php }
  ?>
	<table class="table table-striped table-bordered mt-3">
    <thead class="table-dark text-center">
      <tr>
          <th>Résidence</th>
          <th>Ville</th>
          <th>Appart/Studio</th>
          <th>Modif.</th>
          <th>Supp.</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($residences as $residence){?>
      <tr>
        <td><?php echo $residence['nomRes']?></td>
        <td><?php echo strtoupper($residence['villeRes'])?></td>
        <td class="text-center ">
            <a href="" class="text-success">
                <i class="bi bi-buildings h4"></i>
            </a>
        </td>
        <td class="text-center ">
          <a href="./index.php?page=res_modif&codeRes=<?php echo $residence['codeRes']?>" class="text-info">
            <i class="bi bi-pencil-fill h4"></i>
          </a>
        </td>
        <td class="text-center ">
          <a href="./ad_res_sup_exe.php?codeRes=<?php echo $residence['codeRes']?>" class="text-danger">
            <i class="bi bi-x-circle-fill h4"></i>
          </a>
        </td>
      </tr>
    <?php }?>
    </tbody>
  </table>
</main>