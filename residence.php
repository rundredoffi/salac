<?php
    
    if(isset($_GET["codeRes"])&&!empty($_GET["codeRes"])){
		$codeRes = $_GET["codeRes"];
		$sql = "SELECT *
			FROM Residences
			WHERE codeRes = '$codeRes';";
		$reponse = $bdd -> query($sql);
		$residence=$reponse->fetch();
		$sql = "SELECT codeRes, resContientTypes.codeType, libelleType, loyerType, photoType
		From typesAppartStudio
		INNER JOIN resContientTypes ON resContientTypes.codeType=typesAppartStudio.codeType
		WHERE codeRes='$codeRes';";
		$reponse = $bdd -> query($sql);
		$appartements=$reponse->fetchall(PDO::FETCH_ASSOC);
        $pIcone = $residence["parkingRes"]==1 ? "check-circle-fill text-success" : "x-circle-fill text-danger";
        $pAscenseur = $residence["assenceurRes"]==1 ? "check-circle-fill text-success" : "x-circle-fill text-danger";
	}

?>
<main class="container pt-3 ">
    <h1 class="text-center text-dark">
        La résidences :
        <span class="text-secondary"><?php echo $residence["nomRes"]?></span>
    </h1>
    <hr>

    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="./photos/<?php echo $residence["photoRes"]?>" class="img-fluid rounded-start m-1" alt="<?php echo $residence["nomRes"]?>">
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
                        <div class="card-body">
                            <div class="row border-start pb-4">
                                <div class="col">
                                    <h6 class="card-subtitle text-muted text-center">
                                        Classification 
                                        <?php for ($i=1;$i<=$residence["classificationRes"];$i++) {?> 
                                            <i class="bi bi-star-fill text-warning"></i>
                                        <?php } ?> 
                                    </h6>
    
                                </div>
                            </div>
                            <div class="row border-start">
                                <div class="col">
                                    <h6 class="card-subtitle text-muted text-center">
                                        Ascenseur <i class="bi bi-<?php echo $pAscenseur?>"></i>
                                    </h6>
                                </div>
                                <div class="col">
                                    <h6 class="card-subtitle text-muted text-center">
                                        Parking
                                        <i class="bi bi-<?php echo $pIcone?>"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-group">
        <?php foreach($appartements as $appartement){ ?>
            <div class="card">
            <div class="card-body pt-2">
                <h5 class="card-title"><?php echo $appartement["libelleType"]?></h5>
                <p class="card-text">Loyer : <?php echo $appartement["loyerType"]?>€</p>
            </div>
            <img src="./photos/<?php echo $appartement["photoType"]?>" class="card-img-top img-fluid" alt="T1">
        </div>
        <?php } ?>
    </div>
</main>