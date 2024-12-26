<header>
        <nav class="nav navbar navbar-expand-lg navbar-dark position-fixed w-100">
            <div class="container-fluid">
              <a class="navbar-brand  mx-4" href="admin.php"><img src="../image/logo.png" alt="logo" width="200" height="90"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">
                  <li class="nav-item">
                    <a class="nav-link active pe-4" aria-current="page" href="admin.php?pg=l1">Licence 1</a>
                  </li>
                 
                  <li class="nav-item pe-4">
                    <a class="nav-link" href="admin.php?pg=l2">Defaillance</a>
                  </li>

                  <li class="nav-item pe-4">
                    <a class="nav-link" href="admin.php?pg=l3">Qui sommes-nous ?</a>
                  </li>
                 
                </ul>
                <div class="search">
                  <form action="admin.php?pg=search" method="GET">
                    <input class="control" type="search" name="r" placeholder="search" id="search">
                    <button type="submit" name="search" class="btn btn-success" >Search </button>
                  </form>
                </div>
              </div>
            </div>
        </nav> 
    </header>
<style>

.search{
    margin-right: 35px;
    padding-left: 15%;
    display: block;
    background-color: rgba(0, 0, 0, 0);
}
.control{
    border-color: rgba(0, 200, 255, 0.787);
    border-radius: 5px;
    margin-right: 10px;
}
.control:focus{
    border-color: rgba(0, 200, 255, 0.787);
}

</style>
<?php
require_once('../connexion.php');
$req ="SELECT * FROM etudiants ORDER BY matricule DESC";
$result=mysqli_query($conn,$req);

if (isset($_REQUEST["r"]) && !empty($_REQUEST['r'])) {
    # code...
    $search = htmlspecialchars($_REQUEST['r']);
    $req ='SELECT * FROM etudiants WHERE nom LIKE "%'.$search.'%"                                         ';
    $result=mysqli_query($conn,$req);

    if (mysqli_num_rows($result) > 0) {
      # code...

        $row=mysqli_fetch_assoc($result);
            $mat=$row["matricule"];
            $nom=$row["nom"];
            $prenom=$row["prenom"];
            $fil=$row["cod_fil"];
            $sexe=$row["sexe"];
        //echo"<h4 style='text-align:center;padding-top:150px'>Listes des étudiants retirer en Licence 1</h4>";
        echo"<form method='post' action='admin.php?pg=l2'><table  class='table table-bordered table-hover table-stripped py-5'";
        echo"<tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Sexe</th><th>Filière</th><th>Action</th></tr>";
        echo"<tr><td>$mat<td><a href='admin.php?pg=edition&id=$mat'>$nom</a></td>
          <td>$prenom</td><td>$sexe</td><td>$fil</td><td><a class='btn btn-secondary' href='admin.php?pg=link&id=$mat'>Info</a></td></tr>";
        echo"</table></form>";
      }
}