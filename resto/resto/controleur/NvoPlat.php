<?php
// if(empty($post['Enregistrer'])){
// 	header("location:inscriptionDonneur.php?");



//inclusion de la page de connexion
 include_once('../vues/connexion.php');

 //recupération des valeurs des champs et requetes d'insertion

if (isset($_POST['nom']) AND isset($_POST['desc']) AND isset($_POST['prix']) AND isset($_POST['type']))

				 // $idDonneur=isset($_POST['idDon']);
				 $nom=$_POST['nom'];
				 $desc=$_POST['desc'];
				 $prix=$_POST['prix'];
				 $type=$_POST['type'];
				 $id="Ca17";
				
				{ 
						
			$requete = $dba->prepare
			("
				INSERT INTO plat(intitule, description, idCaisse, prix, categorie) 
				VALUES (:intitule, :description, :idCaisse, :prix, :categorie)
			");
			$requete->execute(array(
									 // 
									 'intitule' => $nom,
									 'description' =>  $desc, 
									 'idCaisse' =>  $id,
									 'prix' => $prix, 
									 'categorie' => $type
									));
			echo "<br>Enregistrement réussi avec succès";

		}
header('Location: ../vues/NvoPlat.php');
exit();
	?>