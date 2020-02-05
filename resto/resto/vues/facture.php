<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
</head>
<body>

  <?php
      include_once('connexion.php');
    if (isset($_GET['ID1']))
    {
              # code...
              // recupération des identifiants fournis
              $id=$_GET['ID1'];
      
             // $Afficher = $dba->query("SELECT idDonneur, nom, prenom, dateNaissance, lieuNaissance, adresse, telephone, numCIN FROM donneur WHERE idDonneur=' $id'");

            $req = $dba-> query("
               SELECT numPoche, date, testBethV, testSimonin, testVih, testHb, testHc, testSyphilique  FROM poche, serologie , testgroupe WHERE 
                    (testgroupe.numeroPoche=poche.numPoche) AND (poche.numPoche=serologie.noPoche) AND numPoche IN 
               (SELECT numPoche FROM poche, etiquetagePoche, donneur WHERE
                     (donneur.idDonneur=etiquetagePoche.idDon) AND (etiquetagePoche.nmPoche=poche.numPoche) AND idDonneur='$id')
                      ");

            $collecte = $dba->query(" SELECT idDonneur, nom, prenom, dateNaissance, lieuNaissance, adresse, telephone, numCIN, lieu, collecte.date FROM poche, etiquetagePoche, donneur, collecte WHERE (collecte.numero=poche.noClt) AND
                     (donneur.idDonneur=etiquetagePoche.idDon) AND (etiquetagePoche.nmPoche=poche.numPoche) AND idDonneur='$id')
                     ");

          while($aff = $collecte->fetch())
           {
        /**********************************************************************\
              tout ce qui se trouve en dessous de ob_start() sera campturé.
              Donc le contenu du pdf doit se situer en dessous de ob_start()
        \**********************************************************************/
      	ob_start();
      ?>
      <!-- DEBUT STYLE-->
      <style type="text/css">

      /*************************************************************\
            je pense tu sais deja cette partie c'est pour le style
      \*************************************************************/

      strong{
        color: #000;
      }
      </style>
      <!-- FIN STYLE-->

      <!--===========================================================/>
          la balise <page> contient tous les informations de la page
          backtop, backleft, backright et backbottom permettent de
          definir les marges de la page
      <!============================================================-->
      <page backtop="20mm" backleft="10mm" backright="10mm" backbottom="30mm">

            <!-- page_header definir l' entete de page -->
        <page_header>

              <!-- la balise table est utilisée
                pour definir le contenu de la page -->
              <table style="width:100%;">
                  <tr>
                    <!-- les images de l'entete -->
                      <td style="width: 50%;"><img src="img/logo2bis.png" style="width: 20mm; margin-left: 20mm"></td>
                      <td style="width: 50%;"><img src="img/1.jpg" style="width: 20mm; margin-right: 20mm; float: right"></td>
                  </tr>
              </table>
              <table style="width:100%;">
                  <tr>
                      <td style="width: 50%; text-align:left;"><p style=" margin-left: 20mm">Donnez du Sang Sauvez des vies</p></td>
                      <td style="width: 50%; text-align:right;"><p style="margin-right: 20mm"> Centre National de Transfusion Sanguine</p></td>
                  </tr>
              </table>
              <hr style="color:red;">
        </page_header>

            <table style="font-family: helvetica; font-size:11pt">
                  <tr style="text-align:center;">
                    <td><h1 style=" margin: 40px; font-size: 27pt"><strong>RESULTATS DE DON DE SANG</strong></h1></td>
                  </tr>
                  <tr>
                    <td style="color:#000; line-height: 6mm">
                        <td><?php echo $aff['nom'];?> <?php echo $aff['prenom'];?></td><br>
                        <td><?php echo $aff['adresse'];?></td><br>
                        <td><?php echo $aff['dateNaissance'];?></td><br>
                        <td> <?php echo $aff['lieuNaissance'];?></td><br>
                        <td> <?php echo $aff['idDonneur'];?></td><br>
                        <td><?php echo $aff['telephone'];?></td><br>
                        <td><?php echo $aff['numCIN'];?></td><br>
                    </td>
                  </tr>
                  <?php
                   }
                 while($req = $resultat->fetch())
                  { 
                  ?>
                  <tr>
                    <td>
                      <p style=" margin-top: 80px;">Date du Don <?php echo $resultat['date'];?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p style=" margin-top: 80px; text-align: justify;">Vous avez bien voulu vous présenter à la collecte qui s'est tenue à <?php echo $aff['lieu'];?> le <?php echo $aff['collecte.date'];?>. Suite à votre don, nous avons recueilli les résultats suivants après analyses biologiques concernant votre groupe sanguin et éventuellement certaines sérologies :</p>
                    </td>
                  </tr>
                  <tr>
                    <td><p style=" margin-top: 80px; text-align:center; color: #000;">VOTRE GROUPE SANGUIN EST <?php echo $resultat['testBethV'], $resultat['testSimonin'];?></p>
                    </td>
                  </tr>
            </table>

            <table style="width:100%; margin-top: 80px; margin-left: 20px;">
                <tr><td style="width: 25%;">- Sérologie VIH 1 et 2</td><td style="width: 75%;"> : <?php echo $resultat['testVih'];?></td></tr>
                <tr><td style="width: 25%">- Sérologie hépatite B</td><td style="width: 75%"> : <?php echo $resultat['testHb'];?></td></tr>
                <tr><td style="width: 25%">- Sérologie hépatite C</td><td style="width: 75%"> : <?php echo $resultat['testHc'];?></td></tr>
                <tr><td style="width: 25%">- Sérologie syphilis</td><td style="width: 75%"> : <?php echo $resultat['testSyphilique'];?></td></tr>
            </table>
            <?php
            }
          }
            ?>
            <table>
                <tr>
                  <td ><p style=" margin-top: 30px;">Nous vous remercions de votre geste et vous donnons rendez-vous dans trois(3) mois pour un autre don afin de bénéficier de la carte de donneur. </p>
                  </td>
                </tr>
                <tr><td style="text-align: right; color:#000;"><p><u>Signature du médecin</u></p></td></tr>
            </table>

            <!-- page_footer difinir le pied de page -->
        <page_footer>
              <table style="width:100%;">
                  <tr>
                    <td style="width: 100%;">
                      <hr style="color:red;">
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 100%;"><p style="text-align:right; margin-right: 20mm">Date: <?php echo date('d/m/Y');?></p></td>
                  </tr>
              </table>
        </page_footer>
     

      <?php
            /*********************************************\
                ob_get_clean permet de recuperer le code capturer
                ob_start que l'on affecte a $content
            \*********************************************/
         $content = ob_get_clean();

            // importation de la biblioteque 
            require("html2pdf/html2pdf.class.php");
        try{

              // definir le format: P c'est en portrait A4 c'est le format
              $pdf = new Html2Pdf('P', 'A4', 'fr');

              // affichage pour tout la page
              $pdf->pdf->SetDisplayMode('fullpage');

              // transfers du contenu de la page
              $pdf->writeHTML($content);

              // le nom par defaut du fichier pdf
              $pdf->Output('rslt.pdf');
        }
        catch(HTML2PDF_exception $e){
              die($e);
        }
      ?>
</body>
</html>