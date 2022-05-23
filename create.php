<?php
require('./config.php');
if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['mot_de_passe'])){
	$nom = stripslashes($_REQUEST['nom']);
	$nom = mysqli_real_escape_string($conn, $nom); 
	$prenom = stripslashes($_REQUEST['prenom']);
	$prenom = mysqli_real_escape_string($conn, $prenom); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	$mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
	$mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);
	
    $query = "INSERT into `medecin` (nom, prenom,email,mot_de_passe)
              VALUES (`$nom`, `$prenom`, `$email`, `$mot_de_passe`)";
			  if($nom = $row['nom']){
				  echo'user already present';
				  header("Location: create.html");
			  }
    $res = mysqli_query($conn, $query);


    if($res){
       header("Location: acc.html");
    }
}
?>