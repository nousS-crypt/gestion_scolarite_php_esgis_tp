<?php
    if (isset($_REQUEST["id"])) {
        # code...
        echo "<script> alert('Veuillez obligatoirement reinsérer une image')</script>";
        require_once('../connexion.php');
        $req=sprintf("SELECT * FROM etudiants WHERE matricule ='%d'",$_REQUEST['id']);
        $result=mysqli_query($conn,$req);
        $row=mysqli_fetch_assoc($result);
        //var_dump($row);
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
        $lieu=$row['lieu'];
        $classe=$row['classe'];
        $dip=$row['diplome'];
        $ann=$row['annee_dip'];
    
?>


<main>
        <section class="insc d-flex justify-content-center align-items-center pt-3">
            <div class="container my-5 py-4">
                <h1 style="color: white; letter-spacing: 2px; text-align: center; padding-bottom: 25px;">Formulaire d'Inscription</h1>
                <div class="row">
                    <div class="col-md">
                        <form class="row g-3 needs-validation" action="admin.php?pg=edition"  enctype="multipart/form-data" method="post" novalidate>
                            <div class="col-md-3">
                              <label for="validationCustom01" class="form-label">First name</label>
                              <input type="text" class="form-control" <?php if(isset($_REQUEST['id'])) echo"value='$p'"; ?> name="prenom" id="validationCustom01" placeholder="Mark" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label for="validationCustom02" class="form-label">Last name</label>
                              <input type="text" class="form-control" <?php if(isset($_REQUEST['id'])) echo"value='$n'"; ?> name="nom" id="validationCustom02" placeholder="Otto" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label for="photo" class="form-label">Photo d'identité :</label>
                              <input type="file" class="form-control" name="photo" id="photo" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label for="validationCustomUsername" class="form-label">Email</label>
                              <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="email"  class="form-control" <?php if(isset($_REQUEST['id'])) echo"value='$mail'"; ?> name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="jonhdoe@example.com" required>
                                <div class="invalid-feedback">
                                  Please choose a valid email
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label for="validationCustom03" class="form-label"> Date de naissance</label>
                              <input type="date" max="2008-12-31" class="form-control" <?php if(isset($_REQUEST['id'])) echo"value='$nais'"; ?> name="date"  id="validationCustom03" placeholder="dd/mm/yyyy" required>
                              <div class="invalid-feedback">
                                Please provide a valid birthday
                              </div>
                            </div>
                            <div class="col-md">
                                <label for="validationCustom10" class="form-label">Sexe</label>
                                <select class="form-select" id="validationCustom10" name="sexe" required>
                                  <option <?php if(isset($_REQUEST['id']) && $s==='Masculin') echo"selected"; ?> value="Masculin">Masculin</option>
                                  <option <?php if(isset($_REQUEST['id']) && $s==='Feminin') echo"selected"; ?> value="Feminin">Féminin</option>
                                  <option <?php if(isset($_REQUEST['id']) && $s==='non préciser') echo"selected"; ?> value="non préciser">Ne pas préciser</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom08" class="form-label">Adresse</label>
                                <div class="input-group has-validation">
                                  <span class="input-group-text" id="inputGroupPrepend">📍</span>
                                  <input type="text" <?php if(isset($_REQUEST['id'])) echo"value='$add'"; ?> name="addresse" class="form-control" id="validationCustom08" aria-describedby="inputGroupPrepend" placeholder="jericho, Cotonou" required>
                                  <div class="invalid-feedback">
                                    Please choose a phone number.
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom07" class="form-label">Numéro de Téléphone</label>
                                <div class="input-group has-validation">
                                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                                  <input type="tel" class="form-control" <?php if(isset($_REQUEST['id'])) echo"value='$tel'"; ?> name="telephone" id="validationCustom07" aria-describedby="inputGroupPrepend" placeholder="(-229) 909 096 9646" required>
                                  <div class="invalid-feedback">
                                    Please choose a phone number.
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <label for="validationCustom04" class="form-label">Dernier Diplome</label>
                              <select class="form-select" id="validationCustom04" name="diplome" required>
                                <option <?php if(isset($_REQUEST['id']) && $dip==='') echo"selected" ?> value="">Choisir...</option>
                                <option <?php if(isset($_REQUEST['id']) && $dip==='Baccalauréat C') echo"selected"?> value="Baccalauréat C">Baccalauréat C </option>
                                <option <?php if(isset($_REQUEST['id']) && $dip==='Baccalauréat D') echo"selected"?> value="Baccalauréat D">Baccalauréat D </option>
                                <option  <?php if(isset($_REQUEST['id']) && $dip==='Diplome technique') echo"selected"?>value="Diplome technique">Diplome technique</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid state.
                              </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Filière</label>
                                <select class="form-select" id="validationCustom05"  name="filiere" required>
                                  <option <?php if(isset($_REQUEST['id'])&& $fil==='') echo"selected" ?>  value="">Choisir...</option>
                                  <option <?php if(isset($_REQUEST['id'])&& $fil==='AL') echo"selected" ?> value="AL">Architecture Logiciel</option>
                                  <option <?php if(isset($_REQUEST['id'])&& $fil==='SRT') echo"selected" ?> value="SRT">Système Réseau et Telecommunication</option>
                                  <option <?php if(isset($_REQUEST['id'])&& $fil==='SI') echo"selected" ?> value="SI">Cybersécurité</option>
                                  <option <?php if(isset($_REQUEST['id'])&& $fil==='IA') echo"selected" ?> value="IA">Intelligence Artificielle</option>
                                  <option <?php if(isset($_REQUEST['id'])&& $fil==='DSBS') echo"selected" ?> value="DSBS">Data Scientist & Big Data</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom06" class="form-label">Année d'obtention du Diplome</label>
                                <input type="date" class="form-control"<?php if(isset($_REQUEST['id'])) echo"value='$ann'"; ?> name="datdiplome" id="validationCustom06" placeholder="dd/mm/yyyy" required>
                              <div class="invalid-feedback">
                                Please provide a valid date
                              </div>
                            </div>
                            <div class="col-md"></div>
                            <div class="col-md-7">
                            <label for="validationCustom05" class="form-label">Lieu de naissance</label>
                                <input type="text" class="form-control" <?php if(isset($_REQUEST['id'])) echo"value='$lieu'"; ?> name="lieu" id="validationCustom05" >
                                <div class="invalid-feedback">
                                  Please select 
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" <?php if((isset($_REQUEST['id'])) && $classe == 'L1' ) echo"checked";?>  value="L1" name="classe" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                  J'accepte m'inscrire en Licence 1
                                </label>
                                <div class="invalid-feedback">
                                  You must agree before submitting.
                                </div>
                              </div>
                            </div>
                            <div class="col-12 text-center">
                              <input type="submit" class="btn btn-primary" name="send" <?php if((isset($_REQUEST['id']))) echo"value='Modifier'";?> ></p>
                              <?php if(isset($_REQUEST['id'])) echo"<input type='hidden' name='id' value='$mat'>"; ?>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php

//recuperation et soumission de la requete

//verification de la methode
if(isset($_REQUEST["send"])){
            //verification du télécharement de l'image
        if(empty($_FILES["photo"]["tmp_name"])){
            echo"<script>alert('Aucune image n'a été ajouté')</script>";
        }
        //récupération de l'image sans son extension
        $file_name=pathinfo($_FILES["photo"]["name"],PATHINFO_FILENAME);
        //recuperer l'extension de l'image
        $file_extension=pathinfo($_FILES["photo"]["name"],PATHINFO_EXTENSION);
        //Renommer les images
        $new_name_image=$file_name.'_'.date("ymd_His").'.'.$file_extension;
      //connexion a la BDD
      // require_once("../connexion.php");
      if($file_extension === "jpg" || $file_extension === "png"){
        $req= sprintf("UPDATE etudiants SET nom = '%s', prenom ='%s', photo ='%s', mail = '%s', date_nais = '%s', sexe = '%s', addresse = '%s',
        tel = '%s', diplome ='%s', annee_dip = '%s', cod_fil = '%s', lieu = '%s', classe = '%s' WHERE matricule = '%d'", $_REQUEST["nom"],
        $_REQUEST["prenom"],$new_name_image,$_REQUEST["email"],$_REQUEST["date"],$_REQUEST["sexe"],$_REQUEST["addresse"],
        $_REQUEST["telephone"],$_REQUEST["diplome"],$_REQUEST["datdiplome"],$_REQUEST["filiere"],$_REQUEST["lieu"],$_REQUEST["classe"],$_REQUEST['id']);
        $result = mysqli_query($conn,$req); 
        if($result===TRUE){
            //Déplacer l'image vers le dossier image
            $dossier="../image/";
            $chemin=$dossier. $new_name_image;
            if(move_uploaded_file($_FILES["photo"]["tmp_name"],$chemin)){
                echo"<script>alert('Ajout effectif')</script>";
                header("Location:admin.php?pg=l1");
            }
        }  
      }  
    }
  }