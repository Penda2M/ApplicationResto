<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <title>SB Admin 2 - Bootstrap Admin Theme</title> -->

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 <!-- <link rel="stylesheet" type="text/css" href="styleCss/stylePrlv.css" /> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.html"></a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <!--  <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <form method="POST" action="../controleur/gestionRecherche.php">
                                    <option  value="choix">Options de Recherches </option> 
                                    <select>
                                        <option  value="id">Identifiant Donneur</option>
                                        <option value="nom">Nom du Donneur</option>
                                        <option value="dateNais">Date de Naissance</option>
                                        <option  value="tel">Numéro Téléphone</option>
                                    </select>
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span></form>
                            </div>
                            <!-- /input-group                         </li>-->

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Nouveautés<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li><a href="NvoPlat.php">Nouveau plat</a></li> 
                                <li><a href="boisson.php">Nouvelle Boisson</a></li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Modifications<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                    <li><a href="modifPlat.php">Modification de Plats</a></li> 
                                    <li><a href="modifBoisson.php">Modification de Boissons</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li><a href="enregistrerCmd.php">Enregistrer une Commande</a></li>
                        
                        <li><a href="authentification.php">Deconnexion</a></li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <body>
<!-- <center><header><h4><img src="../images/prelevHeader.png" align="center" height="100" width="100%"></h4></header></center>
 <center>   
 -->    
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
    <!-- <link rel="stylesheet" type="text/css" href="styleCss/stylAuth.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="../styleCss/agencement.css"> -->

<title>Enregistrement de Commande</title>
</head>
<!-- <LEGEND> -->
    <body >
<!-- <header><h4><img src="../images/prelevHeader.png" align="center"></h4></header> -->
<div  align ="left">
    <form id = "formCmd" method="POST" onsubmit="return verifForm(this)" action="../controleur/enregistrerCmd.php" style="background-image: url('img/restauration.jpg'); background-repeat: no-repeat; size: 1000px; width: 1000px; height: 700px;">
        <fieldset style="border:50; width: 65%;">
            <legend align="center"><h2 style="font-weight: bold;">ESPACE DES ENREGISTREMENTS</h2></legend>
                <table border ="0" rules="none" cellspacing="10" height: 500px;">
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
                                    <!-- <fieldset style="border:50; width: 80%;" id="civil"> -->
                                    <legend align="center">Informations de la commande</legend>
                                        <table border ="0" rules="none" cellspacing="7" width="100%" style="font-weight: bold;">
                                            <tr>
                                                <td>Intitulé du plat:</td>

                                                    <td>
                                                        <select name="plat">
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
                                                <td >Quantité de plat commandé:</td>
                                                <td><input type="number" name="qte" id="qte" required ><br></td>

                                            </tr>
                                            

                                            <tr>
                                                <td>Intitulé de la boisson:</td>
                                                <td>
                                                        <select name="jus">
                                                            <option>Choisir une boisson</option>
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
                                                    prix de la bouteille
                                                </td>
                                                <td><input type="number" name="pJus" id="nbre" required><br></td>
                                                
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
                                        <!-- <td><button style="color: blue;"><a href="menu.php">Retour</button></td> -->
                                    </tr>
                                </table></td>
                            </tr>
                                
        
                </table>
            </fieldset>

    </form>
    </div>


                <!-- /.col-lg-12 -->
            </div>
          
        </div>
        <!-- /#page-wrapper -->
  <!-- <footer><h4><img src="../images/footerAll.png" height="100" width="100%"></h4></footer> -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
 
</body>

</html>
