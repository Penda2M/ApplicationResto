
<?php
	 include_once('../vues/connexion.php');
	 $sql="SELECT intitule FROM plat";

	 try {
	 	$stmt=$dba->prepare($sql);
	 	$stmt->execute();
	 	$results=$stmt->fetchAll();
	 	
	 } 
	 catch (Exception $ex) {
	 	echo ($ex->getMessage());
	 	
	 }
	 // $agent="SELECT idPrelev FROM preleveur WHERE login=''";
?>

<?php
	 include_once('../vues/connexion.php');
	 $sql="SELECT nom FROM boissons";

	 try {
	 	$stmt1=$dba->prepare($sql);
	 	$stmt1->execute();
	 	$results1=$stmt1->fetchAll();
	 	
	 } 
	 catch (Exception $ex) {
	 	echo ($ex->getMessage());
	 	
	 }
	 // $agent="SELECT idPrelev FROM preleveur WHERE login=''";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
	<link rel="stylesheet" type="text/css" href="styleCss/stylAuth.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../styleCss/agencement.css"> -->

<title>Enregistrement de Commande</title>
</head>
<!-- <LEGEND> -->
	<body>
<!-- <header><h4><img src="../images/prelevHeader.png" align="center"></h4></header> -->
<div id = "formDon" align ="left">
	<form method="POST" onsubmit="return verifForm(this)" action="../controleur/NvoPlat.php">
		<fieldset>
			<legend align="center"><h1>ESPACE DES INTITULE</h1></legend>
				<table border ="0" rules="none" cellspacing="10" >
							<!-- <tr>
								<td>N° Identifiant:<input type="text" name="idDon" id="idDon" required maxlength="13" ><br>
							 <td>N° Collecte:<input type="text" name="IdC" id="idDon" ></td>
							</tr>
							<tr>
								<td>Lieu Collecte:
									<input type="text" name="lieuC" id="idDon" ><br></td> 
								
							</tr> -->
							<script type="text/javascript">
								function surligne(champ, erreur)
											{
											   if(erreur)
											   {
											      champ.style.backgroundColor = "#fba";
											  	 alert("Erreur de saisie. Veuillez vérifier le format.");
											  	}
											   else
											      champ.style.backgroundColor = "";
											}
							</script>

							<tr>
								<td>
									<fieldset style="border:50; width: 100%;" id="civil">
							 		<legend align="center">Informations de la commande</legend>
										<table border ="0" rules="none" cellspacing="7" width="100%">
											<tr>
												<td>Intitulé du plat:</td>

													<td>
														<select ">
															<option>Choisir un plat</option>
															<?php foreach ($results as $output) {?>
															<option><?php echo $output["intitule"];?></option>
															<?php }?>
														</select>
													</td>
																			<script type="text/javascript">
													function verifierCaracteres(event) {
															 		
															var keyCode = event.which ? event.which : event.keyCode;
															var touche = String.fromCharCode(keyCode);
																	
															var champ = document.getElementById('mon_input');
																	
															var caracteres = ' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
																	
															if(caracteres.indexOf(touche) >= 0) {
																champ.value += touche;
															}	
													}
												</script>
											</tr>
											<tr>
												<td>Quantité de plat commandé:</td>
												<td><input type="number" name="qte" id="qte" required ><br></td>

											</tr>
											

											<tr>
												<td>Intitulé de la boisson:</td>
												<td>
														<select ">
															<option>Choisir un plat</option>
															<?php foreach ($results1 as $output) {?>
															<option><?php echo $output["nom"];?></option>
															<?php }?>
														</select>
												</td>
												
											</tr>

											<tr>
												<td>
													Nombre de bouteilles
												</td>
												<td><input type="number" name="nbre" id="nbre" required><br></td>
												
											</tr>

											<tr>
												<td>
													date de la commande
												</td>
												<td><input type="date" name="dateCmd" id="dateCmd" required><br></td>
												
											</tr>
											
										</table>
									</fieldset>
								</td>
							</tr>


							<tr>
								<td><table id="btn" align="CENTER">
									
									<tr>
										<td><input type="submit" name="Enregistrer" value="Enregistrer" onclick="enregistrement();" /></td>

										<td><input type="reset" name="Annuler" value="Annuler" /></td>
										<td><a href="menu.php">Retour</td>
									</tr>
								</table></td>
							</tr>
								
		
				</table>
			</fieldset>

	</form>
	</div>



<!-- fin formulaire inscription -->
	</body>
</html>