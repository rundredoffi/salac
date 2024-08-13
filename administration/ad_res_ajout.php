<?php 
    require './ad_estconnect_exe.php';
?>
<main class="container pt-3 ">
    <h1 class="text-start text-dark">
        <i class="bi bi-buildings"></i> Gestion des résidences - Ajout d'une résidence
    </h1>
    <hr>
    <form action="ad_res_ajout_exe.php" method="POST" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col">
                <label for="nomRes">Nom de la résidence</label>
                <input name="nomRes" id="nomRes" type="text" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="rueRes">Rue</label>
                <input name="rueRes" id="rueRes" type="text" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <label for="cpRes">Code Postal</label>
                <input name="cpRes" id="cpRes" type="text" class="form-control">
            </div>
            <div class="col-9">
                <label for="villeRes">Ville</label>
                <input name="villeRes" id="villeRes" type="text" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="imgRes">Image de la résidence</label>
                <input name="imgRes" id="imgRes" accept="image/*"type="file" class="form-control">
            </div>
        </div>
        <div class="mt-3 row d-flex align-items-stretch">
            <div class="col-1">
                <label class="form-label" for="classement">Classement</label>
                <input name="classement" id="classement" type="text" class="form-control" value="0">
            </div>
            <div class="col-11 mt-4">
                <div class="form-check">
                    <input name="parkingRes" class="form-check-input" type="checkbox" value="" id="parkingRes">
                    <label class="form-check-label" for="flexCheckDefault"id="parkingRes">
                        Parking
                    </label>
                </div>
                <div class="form-check">
                    <input name="ascRes" class="form-check-input" type="checkbox" value="" id="ascRes">
                    <label class="form-check-label" for="flexCheckDefault" id="ascRes">
                        Ascenseur
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle"></i>&nbsp;Ajouter</button>
                </div>
            </div>
        </div>
    </form>
</main>