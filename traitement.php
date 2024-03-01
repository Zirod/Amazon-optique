<?php
    session_start();
    include('config.php');
    $connexion =  $bdd;

    // Enrégistrement du rendez-vous dans  

    if(isset($_POST['RDV'])){
        $objet = htmlspecialchars($_POST['objet']);
        $nom_prenom = htmlspecialchars($_POST['nom_prenom']);
        $email = htmlspecialchars($_POST['email']);
        $date = htmlspecialchars($_POST['date']);
        $heure = htmlspecialchars($_POST['heure']);

        $date_prise = date('d').'/'.date('m').'/'.date('Y');

        if(1==1){

            $mon_rdv = $connexion->prepare('INSERT INTO mes_rdv (objet, nom_prenom, email, rdv_date, heure, date_prise) VALUE (?,?,?,?,?,?)');
            $mon_rdv->execute(array($objet, $nom_prenom, $email, $date, $heure, $date_prise));

            header('Location:index.php?rdv_prise=1');

        }
    }

    if(isset($_POST['my_mail'])){
        echo('jve');
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $sujet = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        $date = date('d').'/'.date('m').'/'.date('Y');

        $mon_mail = $connexion->prepare('INSERT INTO  mes_mails (nom, mail, sujet, message, date) VALUE (?,?,?,?,?)');
        $mon_mail->execute(array($nom, $email, $sujet, $message, $date));

        header('Location:index.php?mon_mail=1');
    }
?>