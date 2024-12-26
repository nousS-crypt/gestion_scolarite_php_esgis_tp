<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of the elite</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once("espace_etudiant/header.php");?>

    <main>
    <?php 
        if (isset($_REQUEST['pg']) && !empty($_REQUEST['pg']))  {
            switch($_REQUEST['pg']){
                case 'home': include('espace_etudiant/home.php');
                    break;
                case 'admission': include('espace_etudiant/admission.php');
                    break;
                case 'contact': include('espace_etudiant/contact.php');
                    break;
                case 'insc': include('espace_etudiant/inscription.php');
                    break;
                default: include("espace_etudiant/home.php");
            }
        }
        else{
            include("espace_etudiant/home.php");
        }
        ?>

    </main>

    <?php require_once("espace_etudiant/footer.php");?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>