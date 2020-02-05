<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
	<link rel="stylesheet" type="text/css" href="styleCss/stylAuth.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../styleCss/agencement.css"> -->

<title>Enregistrement de boissons</title>
</head>
<!-- <LEGEND> -->
	<body style="background-image: url('img/Nectars.jpg');background-repeat: no-repeat;background-position: auto; height: 500px; width: 700px;">
<!-- <header><h4><img src="../images/prelevHeader.png" align="center"></h4></header> -->
<div id = "formDon" align ="left">
	<form method="POST" onsubmit="return verifForm(this)" action="../controleur/boisson.php">
		<fieldset>
			<legend align="center"><h1>ESPACE DES INTITULES</h1></legend>
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
									<fieldset style="border:50; width: 80%;" id="civil">
							 		<legend align="center"><h3>Enregistrement</h3></legend>
										<table border ="0" rules="none" cellspacing="7" width="100%">
											<tr>
												<td>Intitulé de la boisson:<input type="text" name="nom" id="nom" class="required" required maxlength="100" onkeypress="verifierCaracteres(event); return false;" ><br></td>
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
												<td>Description:<input type="text" name="desc" id="desc" required onkeypress="verifierCaracteres(event); return false;"><br></td>
											</tr>
											

											<tr>
												<td>Prix Unitaire:</td>
												<td><input type="number" name="prix" id="prix" required min="300"><br></td>
											</tr>

											<tr>
												<td>
													Catégorie du Jus
												</td>
												<td><select name="type">
														<option  value="type">Catégorie</option>
														<option  value="Naturel">Jus Naturel</option>
														<option value="Gazeuse">Boissons gazeuse</option>
														<option value="Local">Jus local</option>
														<option value="Chaude">Boisson chaude</option>
													</select>
												</td>
											</tr>

											<tr>
												<td>
													Format de la boisson
												</td>
												<td><select name="format">
														<option  value="format">Format</option>
														<option  value="gm">Grand modèle</option>
														<option value="pm">Petit modèle</option>
													</select>
												</td>
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