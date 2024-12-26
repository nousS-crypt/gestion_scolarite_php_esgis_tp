<?php
  //rappel parametres + connexion a la bdd
  require_once("../connexion.php");
  //ecriture requete
  $req = "SELECT * FROM etudiants";
  //execution de la requete
  $result=mysqli_query($conn,$req);

  echo"<h4 style='text-align:center;padding-top:150px'>Liste d'inscription des étudiants en Licence 1</h4>";
  echo"<form method='post' action='admin.php?pg=del'><table  class='table table-bordered table-hover table-stripped py-5'";
  echo"<tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Contact</th><th>Classe & Filière</th><th>Action</th></tr>";
  //Tant qu'on peut mettre dans $row un enregistremnt faire
  while($row=mysqli_fetch_assoc($result)){
    $mat=$row["matricule"];
    $nom=$row["nom"];
    $prenom=$row["prenom"];
    $classe=$row["classe"];
    $tel=$row["tel"];
    $fil= $row['cod_fil'];
    //$lien=$row["lien"];
    echo"<tr><td><input type='checkbox' name='id[]' value='$mat'><td><a href='admin.php?pg=edition&id=$mat'>$nom</a></td>
    <td>$prenom</td><td>$tel</td><td>$classe _ $fil</td><td><a class='btn btn-secondary' href='admin.php?pg=link&id=$mat' target='_blank'>Info</a></td></tr>";
  }
    echo"<tr><td class='text-center' colspan=6><input type='submit' class='btn btn-danger' value='Delete' name='delete'></td></tr></table></form>";