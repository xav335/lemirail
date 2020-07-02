<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
  require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
  
  $photo = new Photo();

  if ( 1 == 1 ) {
    unset( $recherche );
    $id_categorie = 2 ; //les filles
    $recherche[ "id_categorie" ] = $id_categorie ; 
    $recherche[ "order_by" ] = "id" ; 
    $liste_photo = $photo->getListe( $recherche, $debug );
    //print_r($liste_photo);
    if ($id_categorie==2){
      $dossier = "filles";
    }else{
      $dossier = "garcons";
    }
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta name="robots" content="noindex">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include('../inc/meta.php'); ?>
    <title><?php echo $dossier?></title>
</head>

<body>

<?php
if (!isset($_GET["col"]) || $_GET["col"]=="") {
    $nbColonnes = 10;
} else {
   
    $nbColonnes = $_GET["col"];
}

if ( !empty( $liste_photo ) ) : 
  $colonne=0; 
  $ligne=0;?>

  <table>
  
  <tbody>
    <tr>
<?  foreach( $liste_photo as $_photo ) :
    $colonne++; 
    $id = $_photo[ "id" ];
    $titre = $_photo[ "titre" ];
    $legende = $_photo[ "legende" ];
    $image_normale = "/img/". $dossier ."/". $_photo[ "image" ];
    //echo $image_normale . "<br>"; ?>
    
    <td style="text-align: center;">
        <a href="/<?php echo $dossier ?>/choix.php?id=<?php echo $id?>"><img class="galerie" src="<?php echo $image_normale ?>"/></a><br>
        <?php echo $titre; ?>&nbsp;<br><?php echo $legende; ?>
    </td>
    
    <?php if ($colonne%$nbColonnes==0):
        $colonne==0; $ligne++; ?>
            </tr>
         
      <?php if ($ligne<49):?>
        <tr>
      <?php endif?>    
    <?php endif ?>  

  <?php endforeach ?>
</tr>
  </tbody>
</table>



 



<?php endif ?>
<?php include('../inc/scripts.php'); ?>
</body>

</html>