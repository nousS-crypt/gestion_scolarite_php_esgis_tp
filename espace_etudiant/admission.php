<section class="admission d-flex justify-content-center align-items-center pt-3">
            <div class="container my-5 py-4">
                <h1 style="color: white; letter-spacing: 2px; text-align: center; padding-bottom: 25px;">Formulaire d'admission</h1>
                <div class="row">
                    <div class="col-md">
                        <form class="row g-3 needs-validation" action="index.php?pg=admission" method="post" novalidate>
                            <div class="col-md-4">
                              <label for="validationCustom01" class="form-label">First name</label>
                              <input type="text" class="form-control" name="prenom" id="validationCustom01" placeholder="Mark" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label for="validationCustom02" class="form-label">Last name</label>
                              <input type="text" class="form-control" name="nom" id="validationCustom02" placeholder="Otto" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label for="validationCustomUsername" class="form-label">Email</label>
                              <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="email" class="form-control" name="Email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="jonhdoe@example.com" required >
                                <div class="invalid-feedback">
                                  Please choose a username.
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label for="validationCustom03" class="form-label"> Age</label>
                              <input type="text" name="Age" class="form-control" min="16" max="40" id="validationCustom03" required>
                              <div class="invalid-feedback">
                                Please provide a valid city.
                              </div>
                            </div>
                            <div class="col-md-4">
                              <label for="validationCustom04" class="form-label">Level of study</label>
                              <select class="form-select" id="validationCustom04" name="Bac" required>
                                <option selected value="">Choisir...</option>
                                <option value="Baccalauréat Littéraire(A & B)">Baccalauréat Littéraire(A & B)</option>
                                <option value="Baccalauréat Scientifique (D & C)">Baccalauréat Scientifique (D & C)</option>
                                <option value="Baccalauréat Commercial">Baccalauréat Commercial (Serie G)</option>
                                <option value="Diplome technique">Diplome technique</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid state.
                              </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Moyenne Obtenue</label>
                                <input type="number" name="moy" class="form-control" id="validationCustom09" min="10" max="20" required>
                                <div class="invalid-feedback">
                                  Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom06" class="form-label">Année d'obtention du Diplome</label>
                                <select class="form-select" id="validationCustom06" required name="Ann">
                                  <option selected value="">Choisir...</option>
                                  <option value="2014">Avant 2014</option>
                                  <option value="2015">Entre 2015 et 2022</option>
                                  <option value="2023">2023</option>
                                  <option value="2024">2024</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md"></div>
                            <div class="col-md-5">
                                <label>Avez-vous déjà fait des etudes universitaires :</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="Question" required>
                                    <label class="form-check-label" for="validationFormCheck2">Oui, bien-sur</label>
                                  </div>
                                  <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" name="Question"id="validationFormCheck3" name="radio-stacked" required>
                                    <label class="form-check-label" for="validationFormCheck3">Non, C'est ma première fois</label>
                                  </div>
                                
                            </div>
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                  Je reconnais réel et vrai ces informations
                                </label>
                                <div class="invalid-feedback">
                                  You must agree before submitting.
                                </div>
                              </div>
                            </div>
                            <div class="col-12 text-center">
                             <button class="btn btn-primary" type="submit" value="submit" name="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</section>
<?php
if (isset($_POST['submit'])) {
    // Capturer les données du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['Email'];
    $age = $_POST['Age'];
    $bac = $_POST['Bac'];
    $moyenne = $_POST['moy'];
    $annee_obtention =  intval($_POST['Ann']);
    $etudes_universitaires = $_POST['Question'];

    // Vérification des conditions requises
    $annee_inscription = intval(Date("Y")); // Conversion en entier;
    $conditions_remplies = false;
    // Condition 1 : Avoir obtenu son baccalauréat dans la même année que l'année d'inscription
    if ($annee_obtention == $annee_inscription) {     
        // Condition 2 : Avoir un baccalauréat scientifique C ou D ou un DTI
        if ($bac == 'Baccalauréat Scientifique (D & C)' || $bac == 'Diplome technique') {
          // Condition 3 : Avoir obtenu une mention assez bien (12 moyenne)
            if ($moyenne >= 12) {
                $conditions_remplies = true;
            }
        }
    }

    // Si toutes les conditions sont remplies, effectuer la redirection
    if ($conditions_remplies) {
        // Redirection vers une page de confirmation
        echo"<script>alert('Félicitation vous pouvez vous inscrire');
        document.location.href='index.php?pg=insc'</script>";
        exit;
    } else {
      echo"<script>alert('Vous n\'etes pas eligible a vous inscrire')</script>";        exit;
    }
}
