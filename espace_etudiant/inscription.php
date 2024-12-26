<main>
        <section class="insc d-flex justify-content-center align-items-center pt-3">
            <div class="container my-5 py-4">
                <h1 style="color: white; letter-spacing: 2px; text-align: center; padding-bottom: 25px;">Formulaire d'Inscription</h1>
                <div class="row">
                    <div class="col-md">
                        <form class="row g-3 needs-validation" action="index.php?pg=insc"  enctype="multipart/form-data" method="post" novalidate>
                            <div class="col-md-3">
                              <label for="validationCustom01" class="form-label">First name</label>
                              <input type="text" class="form-control" name="prenom" id="validationCustom01" placeholder="Mark" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label for="validationCustom02" class="form-label">Last name</label>
                              <input type="text" class="form-control" name="nom" id="validationCustom02" placeholder="Otto" required>
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
                                <input type="email"  class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="jonhdoe@example.com" required>
                                <div class="invalid-feedback">
                                  Please choose a valid email
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <label for="validationCustom03" class="form-label"> Date de naissance</label>
                              <input type="date" class="form-control" name="date"  id="validationCustom03" placeholder="dd/mm/yyyy" required>
                              <div class="invalid-feedback">
                                Please provide a valid birthday
                              </div>
                            </div>
                            <div class="col-md">
                                <label for="validationCustom10" class="form-label">Sexe</label>
                                <select class="form-select" id="validationCustom10" name="sexe" required>
                                  <option selected value="Masculin">Masculin</option>
                                  <option value="Feminin">Féminin</option>
                                  <option value="non préciser">Ne pas préciser</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom08" class="form-label">Adresse</label>
                                <div class="input-group has-validation">
                                  <span class="input-group-text" id="inputGroupPrepend">📍</span>
                                  <input type="text" name="addresse" class="form-control" id="validationCustom08" aria-describedby="inputGroupPrepend" placeholder="jericho, Cotonou" required>
                                  <div class="invalid-feedback">
                                    Please choose a phone number.
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom07" class="form-label">Numéro de Téléphone</label>
                                <div class="input-group has-validation">
                                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                                  <input type="tel" class="form-control" name="telephone" id="validationCustom07" aria-describedby="inputGroupPrepend" placeholder="(-229) 909 096 9646" required>
                                  <div class="invalid-feedback">
                                    Please choose a phone number.
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <label for="validationCustom04" class="form-label">Dernier Diplome</label>
                              <select class="form-select" id="validationCustom04" name="diplome" required>
                                <option selected value="">Choisir...</option>
                                <option value="Baccalauréat C">Baccalauréat C </option>
                                <option value="Baccalauréat D">Baccalauréat D </option>
                                <option value="Diplome technique">Diplome technique</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid state.
                              </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Filière</label>
                                <select class="form-select" id="validationCustom05"  name="filiere" required>
                                  <option selected value="">Choisir...</option>
                                  <option value="AL">Architecture Logiciel</option>
                                  <option value="SRT">Système Réseau et Telecommunication</option>
                                  <option value="SI">Cybersécurité</option>
                                  <option value="IA">Intelligence Artificielle</option>
                                  <option value="DSBS">Data Scientist & Big Data</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom06" class="form-label">Année d'obtention du Diplome</label>
                                <input type="date" max="2008-12-31" class="form-control" name="datdiplome" id="validationCustom06" placeholder="dd/mm/yyyy" required>
                              <div class="invalid-feedback">
                                Please provide a valid date
                              </div>
                            </div>
                            <div class="col-md"></div>
                            <div class="col-md-7">
                                <label for="validationCustom05" class="form-label">Lieu de naissance</label>
                                <input type="text" class="form-control" name="lieu" id="validationCustom05" >
                                <div class="invalid-feedback">
                                  Please select 
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="L1" name="classe" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                  J'accepte m'inscrire en Licence 1
                                </label>
                                <div class="invalid-feedback">
                                  You must agree before submitting.
                                </div>
                              </div>
                            </div>
                            <div class="col-12 text-center">
                              <button class="btn btn-primary" name="send" type="submit">Submit form</button>
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
        require_once("connexion.php");
        //insertion d'un etudiants
        $req=sprintf("INSERT INTO etudiants values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",NULL,$_REQUEST["nom"],
        $_REQUEST["prenom"],$new_name_image,$_REQUEST["email"],$_REQUEST["date"],$_REQUEST["sexe"],$_REQUEST["addresse"],
        $_REQUEST["telephone"],$_REQUEST["diplome"],$_REQUEST["datdiplome"],$_REQUEST["filiere"],$_REQUEST["lieu"],$_REQUEST["classe"]);
        //execution de la requete
        $result = mysqli_query($conn,$req); 
        if($result===TRUE){
            //Déplacer l'image vers le dossier image
            $dossier="image/";
            $chemin=$dossier. $new_name_image;
            if(move_uploaded_file($_FILES["photo"]["tmp_name"],$chemin)){
                echo"<script>alert('Ajout effectif')</script>";
            }
        }    
    }
