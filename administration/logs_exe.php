<?php 
    function ecrireFichierLog($message, $codeType = 0){
        $types = ["info", "warning","error","alert"];
        date_default_timezone_set('Europe/Paris'); // Pour éviter les erreurs de décalage horaire
        $file="./logs/adm".date("dm").".log"; // Nom du fichier de log
        
        $login = isset($_SESSION['login']) ? $_SESSION['login'] : "N/A";
        // Gestion du type de logs
        $type = $types[$codeType];
        // Gestion de l'IP
        $ip = $_SERVER['REMOTE_ADDR'];
        // Gestion de la date
        $date = date("d/m/Y");
        $heure = date("H:i:s");
        // Gestion page d'origine
        $page = $_SERVER['REQUEST_URI'];

        // Création du message
        $ligne = "$date\t$heure\t$type\t$ip\t$login\t$page\t$message\n";
        // Présentation en haut du fichier si début du fichier
        if(!file_exists($file)){
            file_put_contents($file,"-----------------------------------\nFichier de log du ".date("d/m/Y")."\n-----------------------------------\n\n\n");
        }
        file_put_contents($file, $ligne, FILE_APPEND);
    }
?>