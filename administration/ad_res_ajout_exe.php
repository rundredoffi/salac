<?php
    require './ad_estconnect_exe.php';
    include '../connect.php';
    if(!empty($_POST["nomRes"]) && is_numeric($_POST["cpRes"])){
        
        $parking=(isset($_POST["parkingRes"]))? 1 : 0;
        $ascenseur=(isset($_POST["ascRes"]))? 1 : 0;

        $uploaddir = '../photos/';
        $uploadfile = $uploaddir . basename($_FILES['imgRes']['name']);

        if (move_uploaded_file($_FILES['imgRes']['tmp_name'], $uploadfile)) {
            $imgRes=basename($_FILES['imgRes']['name']);
        } else {
            $imgRes=null;
        }

        $sql="INSERT INTO Residences
            (nomRes, adresseRes,cpRes, villeRes, classificationRes, assenceurRes, parkingRes, photoRes)
            VALUES
            (:nomRes, :rueRes, :cpRes,:villeRes,:classement,:ascenseur,:parking,:imgRes);";
        $request = $bdd->prepare($sql);
        
        $request -> bindParam(':nomRes', $_POST['nomRes']);
        $request -> bindParam(':rueRes', $_POST['rueRes']);
        $request -> bindParam(':cpRes', $_POST['cpRes']);
        $request -> bindParam(':villeRes', $_POST['villeRes']);
        $request -> bindParam(':classement', $_POST['classement']);
        $request -> bindParam(':ascenseur', $ascenseur);
        $request -> bindParam(':parking', $parking);
        $request -> bindParam(':imgRes', $imgRes);

        $request-> execute();
        header('Location: ./index.php?page=res_main');
        exit();
    }
    else{
        header('Location: ./index.php?page=res_ajout');
        exit();
    }
?>