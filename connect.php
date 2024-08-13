<?php
    // Fichier de connexion à la base de données
    $server="localhost"; // Localhost car il est déjà sur le conteneur
    $nomBD="SALAC"; // Nom de la BDD
    $login=base64_decode("YWRtaW5lcg==");
    $psw=base64_decode("QXplcnR5MTIz"); 

    try { // Test de fonctionalité
        $bdd= new PDO("mysql:host=$server;dbname=$nomBD",$login,$psw);
    }
    catch(Exeception $e) { // Renvoie le message d'erreur
        echo 'Erreur: '.$e->getMessage."\n";
    }
    
?>
