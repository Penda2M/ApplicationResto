<?php
// if(empty($post['Enregistrer'])){
// 	header("location:inscriptionDonneur.php?");



//inclusion de la page de connexion
 include_once('../vues/connexion.php');

 //recupération des valeurs des champs et requetes d'insertion

if (isset($_POST['nom']) AND isset($_POST['desc']) AND isset($_POST['prix']) AND isset($_POST['type']) AND isset($_POST['format']))

				 // $idDonneur=isset($_POST['idDon']);
				 $nom=$_POST['nom'];
				 $desc=$_POST['desc'];
				 $prix=$_POST['prix'];
				 $type=$_POST['type'];
				 $format=$_POST['format'];
				
				{ 
						
			$requete = $dba->prepare
			("
				INSERT INTO boissons(nom, description, format, prixJ, categorie) 
				VALUES (:nom, :description, :format, :prixJ, :categorie)
			");
			$requete->execute(array(
									 // 
									 'nom' => $nom,
									 'description' =>  $desc, 
									 'format' =>  $format,
									 'prixJ' => $prix, 
									 'categorie' => $type
									));
			echo "<br>Enregistrement réussi avec succès";

		}
header('Location: ../vues/boisson.php');
exit();
	?>