<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School of the elite</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php require_once("header.php");?>

    <main>
    <?php 
        if (isset($_REQUEST['pg']) && !empty($_REQUEST['pg']))  {
            switch($_REQUEST['pg']){
                case 'l1': include('licence_1.php');
                    break;
                case 'l2': include('etusupp.php');
                    break;
                case 'l3': include('nous.php');
                    break;
                case 'del': include('delete.php');//les etudiants abandons ou exclu iront dans un autre tableau 
                    break;
                case 'link': include('lienperso.php');
                    break;
                case 'edition': include('edition.php');
                    break;
                // case 'search': include('search.php');//barre de recherche
                //     break;
                default: include("licence_1.php");
            }
        }
        else{
            include("licence_1.php");
        }
        ?>

    </main>

    <?php require_once("footer.php");?>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>