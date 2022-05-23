<?php
//creating variables for creating connection
$server = "localhost";
$user = "root";
$password = "";
$db = "gestion_patient";

//creating connection
$conn = mysqli_connect($server, $user, $password, $db);
 
// Verifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>