<?php
    require './ad_estconnect_exe.php';
    include '../connect.php';
    if(isset($_GET["codeRes"]) && is_numeric($_GET["codeRes"])){
		$codeRes = $_GET["codeRes"];
		$sql = "SELECT *
			FROM Residences
			WHERE codeRes = '$codeRes';";
		$reponse = $bdd -> query($sql);
		$residence=$reponse->fetch();
        // Affichage des apparts : 
        $sql = "SELECT *
        FROM typesAppartStudio;";
        $reponse = $bdd -> query($sql);
        $apparts=$reponse->fetchall(PDO::FETCH_ASSOC);
        // Collecte appart dans codeRes
        $sql = "SELECT *
        FROM resContientTypes
        WHERE codeRes = '$codeRes';";
        $reponse = $bdd -> query($sql);
        $resContient=$reponse->fetchall(PDO::FETCH_ASSOC);
	}
?>
<main class="container pt-3 ">

<h1 class="text-start text-dark">
    <i class="bi bi-buildings"></i> Gestion des résidences - Appartements et studios de la résidence : <?php echo $residence['nomRes'] ?>
</h1>
<hr>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="../photos/<?php echo $residence["photoRes"]?>" class="img-fluid rounded-start m-1" alt="<?php echo $residence["nomRes"]?>">
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="card-body p-0 ps-3">
                        <h4 class="card-title">
                            Résidence <?php echo $residence["nomRes"]?> 
                        </h4>
                        <p class="card-text"><?php echo $residence["adresseRes"]?><br><?php echo $residence["cpRes"]?> <?php echo $residence["villeRes"]?></p>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <button class="btn btn-primary"type="submit">Finir l'affectation</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php foreach ($apparts as $appart){ 
        $resContientType=(in_array($appart['codeType'],$resContient))? "checked" : "null";
    ?>
        <div class="col-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 form-check">
                        <input 
                            type="checkbox" 
                            class="form-check-input" 
                            value="<?php echo $appart['codeType']?>" 
                            name="<?php echo $appart['codeType']?>" 
                            id="<?php $appart['codeType']?>"
                            <?php echo $resContientType ?>
                        >
                        <p class="h5 card-title"><?php echo $appart['libelleType']?> </p>
                    </div>
                </div>
                <img class="card-img-bottom img-fluid"src="../photos/<?php echo $appart["photoType"]?>" alt="">
            </div>  
        </div>
    <?php }
    ?>
</div>
</main>