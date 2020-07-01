<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
  require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
  
  $photo = new Photo();

  if ( 1 == 1 ) {
		unset( $recherche );
    $recherche[ "id_categorie" ] = 2 ; //les filles
    $recherche[ "order_by" ] = "id" ; 
    $liste_photo = $photo->getListe( $recherche, $debug );
    //print_r($liste_photo);
  
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta name="robots" content="noindex">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include('inc/meta.php'); ?>
    <title>Filles</title>
</head>

<body>
<div class="large-12 medium-12 small-12 columns" style="text-align: center;"> 
  <img src="../img/Lesto.png" alt="" />  

</div>
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
    <h3>Gala Lestonnac</h3> <br>
  </div>
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
          <h4><a href="filles/index.php" class="button">Filles</a></h4>
      </div>
  </div>
  
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
          <h4><a href="Garcons/index.php" class="button">Garçons</a></h4>
      </div>
  </div>
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
          <h4><a href="resultats/index.php?idCat=2" class="button">Résultats filles</a></h4>
      </div>
  </div>
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
          <h4><a href="resultats/index.php?idCat=1" class="button">Résultats garçons</a></h4>
      </div>
  </div>
<?php include('inc/scripts.php'); ?>
</body>

</html>