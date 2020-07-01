<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
  require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
  
  $photo = new Photo();

  if ( 1 == 1 ) {
    unset( $recherche );
    $id_categorie = $_GET["idCat"] ; //les filles
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
    <script type="text/javascript">
        window.setTimeout("location=('/resultats/index.php?idCat=<?php echo $id_categorie ?>');",5000);
    </script>
    <title><?php echo $dossier?></title>
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
    $vote = $_photo[ "vote" ];
    $legende = $_photo[ "legende" ];
    $image_normale = "/img/". $dossier ."/". $_photo[ "image" ];
    //echo $image_normale . "<br>"; ?>
    <div class=" large-2 medium-2 small-12 columns">
            <img class="galerie" src="<?php echo $image_normale ?>"/>
            <p style="text-align: center;"><?php echo $vote?></p>
    </div>
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
<div class="large-12 medium-12 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
          <h4><a href="/index.php" class="button">Retour</a></h4>
      </div>
  </div>


<?php endif ?>
<?php include('../inc/scripts.php'); ?>
</body>

</html>