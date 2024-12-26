<?php
    require_once('../connexion.php');
    foreach ($_REQUEST['id'] as $value) {
        //recuperation des etudiants qui devraient supprimer de la table etudiants dans la table exclu
        $sql=sprintf("SELECT * FROM etudiants WHERE matricule='%d'",$value);
              $resultat=mysqli_query($conn,$sql);
              $row=mysqli_fetch_assoc($resultat);
              $mat=$row['matricule'];
              $n=$row['nom'];
              $p=$row['prenom'];
              $ph=$row['photo'];
              $mail=$row['mail'];
              $nais=$row['date_nais'];
              $s=$row['sexe'];
              $add=$row['addresse'];
              $tel=$row['tel'];
              $fil=$row['cod_fil'];
              $dip=$row['diplome'];
              $ann=$row['annee_dip'];
        //Après recuperation insertion dans la nouvelle table
        $req_2=sprintf("INSERT INTO supprimer values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",NULL,$mat,$n,
        $p,$ph,$mail,$nais,$s,$add,$tel,$dip,$ann,$fil);
        $res = mysqli_query($conn,$req_2); 

        //Suppression des etudiants de la table
        $req=sprintf("DELETE FROM etudiants WHERE matricule = '%d'",$value);
        $result=mysqli_query($conn,$req);
    }
    header("Location:admin.php?pg=l1");