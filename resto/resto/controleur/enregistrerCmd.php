<?php
// if(empty($post['Enregistrer'])){
// 	header("location:inscriptionDonneur.php?");



//inclusion de la page de connexion
 include_once('../vues/connexion.php');

 //recupération des valeurs des champs et requetes d'insertion

if (isset($_POST['plat']) AND isset($_POST['qte']) AND isset($_POST['jus']) AND isset($_POST['nbre']) AND isset($_POST['pJus']) AND isset($_POST['dateCmd']))

				 // $idDonneur=isset($_POST['idDon']);
				 $nom=$_POST['plat'];
				 $jus=$_POST['jus'];
				 $qte=$_POST['qte'];
				 $nbre=$_POST['nbre'];
				 $prix=$_POST['pJus'];
				 $dateCmd=$_POST['dateCmd']; 
				
				{ 
						
			$requete = $dba->prepare
			("
				INSERT INTO commande(dateCmd, platCmde, qPLat, jus, nJus, pJus) 
				VALUES (:dateCmd, :platCmde, :qPLat, :jus, :nJus, :pJus)
			");
			$requete->execute(array(
									 // 
									 'dateCmd' => $dateCmd,
									 'platCmde' =>  $nom, 
									 'qPLat' =>  $qte,
									 'jus' => $jus, 
									 'nJus' => $nbre,
									 'pJus' => $prix
									));
			echo "<br>Enregistrement réussi avec succès";

		}
header('Location: ../vues/menu.php');
exit();
	?>