<?php
    include '../connect.php';
    if(!empty($_POST["nomRes"]) && is_numeric($_POST["cpRes"])){
        if(isset($_GET["codeRes"]) && is_numeric($_GET["codeRes"])){
            $codeRes = $_POST['codeRes'];
            $sql = "SELECT photoRes
                FROM Residences
                WHERE codeRes = '$codeRes';";
            $reponse = $bdd -> query($sql);
            $residence=$reponse->fetch();
        }
        $parking=(isset($_POST["parkingRes"]))? 1 : 0;
        $ascenseur=(isset($_POST["ascRes"]))? 1 : 0;
        $codeRes = $_GET['codeRes'];

        $uploaddir = '../photos/';
        $uploadfile = $uploaddir . basename($_FILES['imgRes']['name']);

        if (move_uploaded_file($_FILES['imgRes']['tmp_name'], $uploadfile)) {
            $imgRes=basename($_FILES['imgRes']['name']);
        } else {
            $imgRes=$residence['photoRes'];
        }
        
        $sql="UPDATE Residences
            SET nomRes = :nomRes, adresseRes = :adresseRes,cpRes = :cpRes,
            villeRes = :villeRes, classificationRes = :classementRes, assenceurRes = :assenceurRes,
            parkingRes = :parkingRes, photoRes = :photoRes
            WHERE codeRes = :codeRes;";
        $request = $bdd -> prepare($sql);

        $request -> bindParam(':nomRes', $_POST['nomRes']);
        $request -> bindParam(':adresseRes', $_POST['rueRes']);
        $request -> bindParam(':cpRes', $_POST['cpRes']);
        $request -> bindParam(':villeRes', $_POST['villeRes']);
        $request -> bindParam(':classementRes', $_POST['classement']);
        $request -> bindParam(':assenceurRes', $ascenseur);
        $request -> bindParam(':parkingRes', $parking);
        $request -> bindParam(':photoRes', $imgRes);
        $request -> bindParam(':codeRes',$codeRes);
        $request -> execute();
        header('Location: ./index.php?page=res_main&notif=successEdit');
        exit();
    }
    else{
        header('Location: ./index.php?page=res_main&notif=failEdit');
        exit();
    }
?>