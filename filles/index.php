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
    <title>Filles</title>
</head>

<body>

<?php
if ( !empty( $liste_photo ) ) : 
  $colonne=0; 
  $ligne=0;?>
<div class="row contenu">
  <div class="large-1 medium-2 small-12 columns">&nbsp;</div> 
<?  foreach( $liste_photo as $_photo ) :
    $colonne++; 
    $id = $_photo[ "id" ];
    $titre = $_photo[ "titre" ];
    $legende = $_photo[ "legende" ];
    $image_normale = "/img/". $dossier ."/". $_photo[ "image" ];
    //echo $image_normale . "<br>"; ?>
    <div class=" large-2 medium-2 small-12 columns"><a href="/<?php echo $dossier ?>/choix.php?id=<?php echo $id?>"><img class="galerie" src="<?php echo $image_normale ?>"/></a></div>
    <?php if ($colonne%5==0):
        $colonne==0; $ligne++; ?>
            <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
        </div>
      <?php if ($ligne<4):?>
        <div class="row contenu">
          <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
      <?php endif?>    
    <?php endif ?>  

  <?php endforeach ?>
</div> 



 

<!-- <div class="row contenu">
  <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/1.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/2.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/3.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/4.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/4.png"/></div>
  <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
</div>
<div class="row contenu">
  <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/1.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/2.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/3.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/4.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/4.png"/></div>
  <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
</div>
<div class="row contenu">
  <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/1.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/2.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/3.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/4.png"/></div>
  <div class=" large-2 medium-2 small-12 columns galerie"><img   src="img/filles/4.png"/></div>
  <div class="large-1 medium-2 small-12 columns">&nbsp;</div>
</div> -->

<?php endif ?>
<?php include('../inc/scripts.php'); ?>
</body>

</html>