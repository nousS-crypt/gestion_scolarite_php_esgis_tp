<?php
  //rappel parametres + connexion a la bdd
  require_once("../connexion.php");
  //ecriture requete
  $req = "SELECT * FROM supprimer";
  //ececution de la requete
  $result=mysqli_query($conn,$req);

  echo"<h4 style='text-align:center;padding-top:150px'>Listes des étudiants retirer en Licence 1</h4>";
  echo"<form method='post' action='admin.php?pg=l2'><table  class='table table-bordered table-hover table-stripped py-5'";
  echo"<tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Sexe</th><th>Filière</th><th>Action</th></tr>";
  //Tant qu'on peut mettre dans $row un enregistremnt faire
  while($row=mysqli_fetch_assoc($result)){
    $mat=$row["matricule"];
    $nom=$row["nom"];
    $prenom=$row["prenom"];
    $fil=$row["cod_fil"];
    $sexe=$row["sexe"];
    //$lien=$row["lien"];
    echo"<tr><td>$mat<td><a href='admin.php?pg=edition&id=$mat'>$nom</a></td>
    <td>$prenom</td><td>$sexe</td><td>$fil</td><td><a class='btn btn-secondary' href='admin.php?pg=link&id=$mat'>Info</a></td></tr>";
  }
    echo"</table></form>";
