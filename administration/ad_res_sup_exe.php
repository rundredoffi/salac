<?php
    require './ad_estconnect_exe.php';
    include '../connect.php';
    if (isset($_GET['codeRes']) && is_numeric($_GET['codeRes'])){
        $codeRes=$_GET['codeRes'];
        $sql="DELETE FROM Residences WHERE codeRes = :codeRes;";
        $request = $bdd -> prepare($sql);
        $request -> bindParam(':codeRes',$codeRes);
        $request -> execute();
        header('Location: ./index.php?page=res_main');
        exit();
    }
    else{
        header('Location: ./index.php?page=res_main');
        exit();
    }