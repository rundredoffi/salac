<?php
    require './ad_estconnect_exe.php';
    $codeRes=$_GET["codeRes"];
    if(isset($_GET["codeRes"])&&isset($_GET["codeType"]) && is_numeric($_GET["codeRes"])){
        include '../connect.php';
        var_dump($_POST);
        $codesTypes=$_POST;
    }
    else{
        echo "Error";
    }
?>