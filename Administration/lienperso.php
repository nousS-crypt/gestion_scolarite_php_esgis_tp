<?php 
     if (isset($_REQUEST['id'])) {
        # code...
        require_once('../connexion.php');
        $req=sprintf("SELECT * FROM etudiants WHERE matricule='%d'",$_REQUEST['id']);
        $result=mysqli_query($conn,$req);
        $row=mysqli_fetch_assoc($result);
        $mat= $row['matricule'];
        $nom= $row['nom'];
        $ph=$row["photo"];
        $pre= $row['prenom'];
        $fil= $row['cod_fil'];

        // Obtenir la date actuelle
        $currentDate = date('Y-m-d');

        // Ajouter un an à la date actuelle
        $newDate = date('Y-m-d', strtotime('+1 year', strtotime($currentDate)));

        // Inclure la bibliothèque phpqrcode
        include "../QRCOODE/phpqrcode/qrlib.php";

        // Texte à convertir en QR code
        $lien = "<a href='admin.php?pg=link&id=$mat'>Mon_lien personnaliser</a>";
        $text = "Votre matricule est: $mat.  Vous pouvez consulter la version numérique de votre carte etudiant via le lien suivant : ". $lien;
        
        // Nom du fichier de sortie (peut être un chemin relatif ou absolu)
        $file = 'qrcode'. date('Y-m-d His').'.png';
        
        // Taille du QR code 
        $size = 5;
        
        // Correction d'erreur : L - faible, M - moyenne, Q - bonne, H - très bonne
        $level = 'L';
        
        // Créer le QR code
        QRcode::png($text, $file, $level, $size);    

?>
<section class="container" style="padding-bottom:45%">
    <div class="it" style="margin:auto; padding-top:7%">
                        <div class="etudiant">
                            <div class="container etudiant-inner py-5">
                                <div class="carte front">
                                    <div>
                                        <h1>STUDENT ID CARD 2023-2024</h1>
                                        <div class="log" style="width: 100%; margin-bottom: 5px;" ><img src="../image/logo.png" alt="logo_of_elite" width="130px" height="50px"></div>
                                    </div>
                                    <div class="info">
                                        <img src="../image/<?php echo"$ph";?>" alt="student_pic" width="150" height="150" style=" margin-left: 10px;">
                                        <div>
                                        <p><strong> Surname:  <?php echo"$nom" ?></strong> </p>
                                        <p><strong> Name: <?php echo"$pre" ?></strong></p>
                                        <p><strong> Course: <?php echo"$fil" ?></strong></p>
                                        <p><strong> ID number: <?php echo"$mat";?></strong></p>
                                        </div>
                                    </div>
                                    <div class="carte-foot" style="margin-right: 40px; margin-left: 20px;">
                                        <p><strong>Issued On: <?php echo $currentDate ?></strong></p>
                                        <p><strong>Valid Until: <?php echo $newDate ?></strong></p>
                                    </div>
                                </div>
                                <div class="carte backs">
                                    <div class="back">
                                        <div style="margin-left: 10px; padding-top:10px;">
                                            <h3>School of the Elite</h3>
                                            <p>schoolofthelite@gmail.com</p>
                                            <p>jabari-Wakanda</p>
                                            <p>Tel : (-229) 909 096 9646</p>
                                            <p style="font-size: .8em;">Student card found? Please return it</p>
                                        </div>
                                        <div style="margin-right: 10px;">
                                            <p><a href="#" style="color: rgb(255, 255, 255); text-decoration: none; margin-right: 5px;">www.schoolofthelite.org</a></p>
                                            <?php echo '<img src="'.$file.'" alt="QR Code"  width="150" height="150">';?>
                                        </div>
                                    </div>
                                    <div class="container partenaire py-3">
                                        <img src="../image/seme_city.jpeg" alt="seme" width="100" height="50">
                                        <img src="../image/esgis.jpeg" alt="esgis" width="100" height="50">
                                        <img src="../image/tme.jpeg" alt="tme" width="100" height="50">
                                        <img src="../image/genixx.png" alt="tme" width="100" height="50">
                
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
</section>

<?php 

     }
