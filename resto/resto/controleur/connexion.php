<?php

session_start();
include('../vues/connexion.php');

	if (empty($_POST["login"])&& empty($_POST["pwd"])){
		# code...
		header('Location: ../vues/authentification.php?');
			exit();
	}

	/*champ non vide*/
	if(!empty($_POST["login"])&& !empty($_POST["mdp"]))

	{

		$username=$_POST["login"];
		$password=$_POST["mdp"];

		//connection des préleveur
		// $log="Ado";
		// $mdp="Touba017";
		if($username =="Adja" && $password == "Diom07")
		{
			 $_SESSION['username'] = $username;
           // header('Location: ..vues/menuPrelev.php');
			header('Location: ../vues/menu.php?');
		
		}

		else if ($username == " " || $password == " " ) {
			# code...
           header('Location: ../vues/authentification.php'); // utilisateur ou mot de passe incorrect
         exit();
		}
	}	
	
?>