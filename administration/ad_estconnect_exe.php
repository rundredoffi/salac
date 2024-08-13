<?php
    include './logs_exe.php';
    if(session_status() !== PHP_SESSION_ACTIVE) session_start(); // Voir https://www.php.net/manual/en/function.session-status.php
    if (!isset($_SESSION['codeUser'])) {
        ecrireFichierLog("Tentative d'accès à une page sans être connecté", 2);
        header('Location: index.php?page=login&notif=notconnected');
        exit();
    }
?>