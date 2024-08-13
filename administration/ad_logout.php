<?php 
    require './ad_estconnect_exe.php';
    session_start();
    // Détruire la session
    if(session_unset()){
        header('Location: ./index.php?page=login&notif=logout');
        exit();
    }
?>