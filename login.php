<?php
	require('./config.php');
	session_start();

	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	$mot_de_passe = stripslashes($_REQUEST['mot_de_passe']);
	$mot_de_passe = mysqli_real_escape_string($conn, $mot_de_passe);
	$query = "SELECT * FROM `medecin` WHERE email='$email' and mot_de_passe='$mot_de_passe'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['nom'] = $email;
	    header("Location: accueil.html");
	}else{
		$message = "L'adresse mail ou le mot de passe est incorrect.";
	}
?>