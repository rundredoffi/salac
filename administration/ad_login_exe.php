<?php 
    include '../connect.php';
    include './logs_exe.php';
    if(isset($_POST)&&!empty($_POST['login'])&&!empty($_POST['passwd'])){
        $login=$_POST['login'];
        $mdp=$_POST['passwd'];
        $sql = "SELECT codeUser, login, nom, prenom, role
                FROM users
                WHERE login = '$login' AND mdp = '$mdp';";
        $reponse = $bdd->prepare("SELECT codeUser, login, nom, prenom, role
                            FROM users
                            WHERE login = :login AND mdp = :mdp");
        $reponse -> bindParam(':login',$login);
        $reponse -> bindParam(':mdp',$mdp);
        $reponse -> execute();
        $user=$reponse->fetch(PDO::FETCH_ASSOC);
        if($user){
            session_start();
            $_SESSION['codeUser'] = $user['codeUser'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['role'] = $user['role'];
            ecrireFichierLog("Connexion réussie", 0);
            header('Location: ./index.php?page=accueil');
        }
        else{
            ecrireFichierLog("Tentative de connexion avec login $login et mot de passe incorrect", 2);
            header('Location: ./index.php?page=login&notif=badlogin');
            exit();
        }
    }
    else{
        ecrireFichierLog("Tentative de connexion sans login ou mot de passe", 2);
        header('Location: ./index.php?page=login&notif=badlogin');
        exit();
    }
?>