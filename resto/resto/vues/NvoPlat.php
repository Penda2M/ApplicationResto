<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
	<link rel="stylesheet" type="text/css" href="styleCss/stylAuth.css" />
	<!-- <link rel="stylesheet" type="text/css" href="../styleCss/styleListe.css"> -->

<title>Enregistrement de plats</title>
</head>
<!-- <LEGEND> -->
	<body style="background-image: url('img/salade.jpg');background-repeat: no-repeat;background-position: auto; background-size: 700px;">

	<form method="POST" onsubmit="return verifForm(this)" action="../controleur/NvoPlat.php" style="padding:40px; margin-left: 100px;
 width:700px;height: 400px;font-size:15px;font-weight: bold; text-align: center;position: center; ">
		
			<h1 style="color: white;font-weight: bold; text-align: center;position: center; ">ESPACE DES INTITULES</h1>
				<table border ="0" rules="none" cellspacing="20" style="color: black; font-size:25px; ">
							
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
									
							 		<legend style="align-content: center;"><h2>Enregistrement</h2> </legend>
										<table border ="0" rules="none" cellspacing="7" width="100%">
											<tr>
												<td>Intitulé du plat:</td>
												<td><input type="text" name="nom" id="nom" class="required" required maxlength="100" onkeypress="verifierCaracteres(event); return false;" ><br></td>
												<script type="text/javascript">
													function verifierCaracteres(event) {
															 		
															var keyCode = event.which ? event.which : event.keyCode;
															var touche = String.fromCharCode(keyCode);
																	
															var champ = document.getElementById('mon_input');
																	
															var caracteres = ' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZéèà';
																	
															if(caracteres.indexOf(touche) >= 0) {
																champ.value += touche;
															}	
													}
												</script>
											</tr>
											<tr>
												<td>Description:</td>
												<td><input type="text" name="desc" id="desc" required onkeypress="verifierCaracteres(event); return false;"><br></td>
											</tr>
											

											<tr>
												<td>Prix Unitaire:</td>
												<td><input type="number" name="prix" id="prix" required min="500"><br></
											</tr>

											<tr>
												<td>
													Catégorie du plat
												</td>
												<td><select name="type">
														<option  value="type">Catégorie</option>
														<option  value="fast-food">Fast Food</option>
														<option value="entree">Entrée</option>
														<option value="assiete">Assiète</option>
													</select>
												</td>
											</tr>
											
										</table>
									
								</td>
							</tr>


							<tr>
								<td><table id="btn" align="CENTER">
									
									<tr>
										<td><input type="submit" name="Enregistrer" value="Enregistrer" onclick="enregistrement();" /></td>

										<td><input type="reset" name="Annuler" value="Annuler" /></td>
                                        <td><button style="color: blue;"><a href="menu.php">Retour</button></td>
										<!-- 
										<td><a href="menu.php">Retour</td> -->
									</tr>
								</table></td>
							</tr>
								
		
				</table>
			

	</form>
<!-- fin formulaire inscription -->
	</body>
</html>