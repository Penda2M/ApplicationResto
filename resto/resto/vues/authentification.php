
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
		<!-- <link rel="stylesheet" type="text/css" href="styleCss/style1.css" /> -->
		<link rel="stylesheet" type="text/css" href="styleCss/stylAuth.css" />
	</head>
	<body>
			<div id="content" style="margin-top:10px;height:60%;">
				<center>

			<center><h1><u>Authentifiez Vous</u></h1><br/></center>
			<form method="POST" action="/resto/controleur/connexion.php">
				<table width="700" cellpadding="4" cellspacing="1" height="200">
					<tr>
						<td ><img src="img/user.jpg" width="170"></td>
						<td width="100"><h2>Identifiant</h2></td><td >:</td>
						<td width="300"><input name="login" type="text" placeholder="Entrer votre login"></td>
					</tr>
					<tr>
						<td><img src="img/mdp.jpg" width="170" 	></td>
						<td width="170" ><h2 width="170" >Mot de passe</h2></td><td>:</td>
						<td><input name="mdp" type="password" placeholder="Entrer votre mot de passe"></td>
					</tr>
						<tr>
						<td></td><td></td>
						<td><input type="submit" name="Connexion" value="Connexion"></td>
						<td><a href="modifMdp.php">Mot de passe oublié</a></td>
					</tr>
				</table>
			</form>
		</center>
			</div>

			<font color="red">
				<?
					echo $msg;
				
				?>
			</font>
	</body>
</html>

