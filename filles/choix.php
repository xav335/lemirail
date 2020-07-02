<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
  require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
  
  $photo = new Photo();

	$id = $_GET["id"];
    $liste_photo = $photo->getPhoto($id);
    //print_r($liste_photo);
  
    $id_categorie = 2 ; //les filles
    if ($id_categorie==2){
      $dossier = "filles";
    }else{
      $dossier = "garcons";
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
if ( !empty( $liste_photo ) ) : ?>
<div class="row contenu">
 
    <?foreach( $liste_photo as $_photo ) :
        $id = $_photo[ "id" ];
        $titre = $_photo[ "titre" ];
        $legende = $_photo[ "legende" ];
        $image_normale = "/img/". $dossier ."/". $_photo[ "image" ];?>
        
        <div class=" large-8 medium-8 small-12 columns" style="text-align: center;">
            <img class="galerie" src="<?php echo $image_normale ?>"/></a>
        </div>
        <div class=" large-4 medium-4 small-12 columns" style="text-align: center; padding: 50px 0px 0px 0px;">
            <?php echo $titre; ?>&nbsp;<br><?php echo $legende; ?><br><br>
            <div class="callout alert" >
                <h4><a href="/<?php echo $dossier ?>/choix2.php?id=<?php echo $id?>" class="button">Validez votre choix</a></h4>
            </div>
            <div class="callout secondary" style="text-align: center; padding: 50px 0px 0px 0px;">
                <h4><a href="/<?php echo $dossier ?>/index.php" class="button">Annuler / Retour</a></h4>
            </div>
        </div>

    <?php endforeach ?>
</div> 

<?php endif ?>
<?php include('../inc/scripts.php'); ?>
</body>

</html>