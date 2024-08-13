<?php
    if (!empty($_SESSION)) {
        header('Location: index.php?page=accueil');
        exit();
    }
    $notifs = [
        "badlogin" => [
            "couleur" => "danger",
            "text" => "Le login et/ou mot de passe sont incorrect"
        ],
        "notconnected"=>[
            "couleur" => "warning",
            "text" => "Connexion obligatoire pour accéder aux pages d'administration"
        ],
        "logout" =>[
            "couleur" => "success",
            "text" => "Déconnexion réussie !"
        ],
    ]
?>
<main class="container pt-3 ">
    <h1 class="text-start text-dark">
        <i class="bi bi-person-circle"></i>&nbsp;Authentification
    </h1>
    <hr>
    <form action="ad_login_exe.php" method="POST" enctype="multipart/form-data">
        <div class="row mt-4">
            <div class="col-6">
                <?php if(isset($_GET['notif'])&& array_key_exists($_GET['notif'], $notifs)&&!empty($_GET['notif'])){
                        ?>
                        <div class="alert alert-<?php echo $notifs[$_GET['notif']]["couleur"]?>" role="alert">
                            <i class="bi bi-info-circle"></i>&nbsp;<?php echo $notifs[$_GET['notif']]["text"]?>
                        </div>
                    <?php }
                ?>
                <div class="row">
                    <div class="col">
                        <label for="login">Login</label>
                        <input name="login" id="login" type="text" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="passwd">Mot de passe</label>
                        <input name="passwd" id="passwd" type="password" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-6 text-center align-self-center">
                <button type="submit" class="btn btn-warning">Se connecter</button>
            </div>
        </div>
    </form>
</main>