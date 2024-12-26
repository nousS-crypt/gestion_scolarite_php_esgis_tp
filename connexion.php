<?php
//initialisation des paramètres de connexion
define("HOST", "localhost");        
define("USER", "root");        
define("PWD", "");        
define("BDD", "elite");

//Connexion au Serveur et selection de la BDD
$conn = mysqli_connect(HOST, USER, PWD, BDD) or die("Impossible de se connecter");    
