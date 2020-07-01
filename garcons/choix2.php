<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
  require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
  
  $photo = new Photo();

	$id = $_GET["id"];
    $liste_photo = $photo->setVote($id);
    //print_r($liste_photo);
  
	$id_categorie = 1 ; //les garçons
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
    <title>Filles</title>
    <script type="text/javascript">
        window.setTimeout("location=('/<?php echo $dossier ?>/index.php');",2000);
    </script>
</head>

<body>

<div class="row contenu">
<br><br><br>
    <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
    <h3>- MERCI -</h3> <br><br>
    <h3>- Ton Vote est enregistré -</h3> <br>
    </div>
</div> 

<?php include('../inc/scripts.php'); ?>
</body>

</html>