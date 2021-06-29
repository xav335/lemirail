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
    <title>CLG Emmanuel D'Alzon</title>
</head>

<body>
<div class="large-3 medium-3 small-12 columns" style="text-align: center;"> 
  <img src="img/logoEDA.jpg" alt="" />  
</div>

<div class="large-7 medium-7 small-12 columns" style="text-align: center;"> 
   </br></br> <h2>Page de don et de téléchargement des spectacles de nos élèves.</h2>
</div>

  <div class="large-12 medium-12 small-12 columns" style="text-align: justify;">
    </br></br> <p>C'est une vraie déception pour nous, association des parents d'élèves de l'établissement Emmanuel d'Alzon, de ne pouvoir vous convier, en cette fin d'année, à un moment festif, d'échange et de partage avec les familles et les élèves que vous avez accompagnés sur les différents projets.</br>
    Cette année les CE1/CE2 vont présenter un film avec deux chansons, le cycle 3 propose le film de leur pièce de théâtre en anglais et les 5èmes plusieurs courts métrages en anglais.</br>
    Deux soirées de retransmission vous sont proposées, ainsi qu'aux familles d'élèves, pour partager ce moment virtuellement (vous avez reçu les liens précédemment). </br>
    Nous avions pour projet de reverser l'ensemble des bénéfices de ces soirées, si elles avaient pu se faire en présentiel, à une association chère à notre à notre communauté, l'Association Française de l'Atrésie de l'Oesophage (AFAO), sans laquelle nous n'aurions pu avoir accès à la superbe salle de spectacle qui a accueilli le tournage de la pièce de théâtre du cycle 3.</br>
    Pour compenser cela, nous proposons aux familles et à ceux qui le souhaitent de faire un don, déductible des impôts, pour l’AFAO</p>
  </div>
  
  
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
         <h3>Etape n°1 :</h3><h4><a id="donner" href="https://www.helloasso.com/associations/association-francaise-de-l-atresie-de-l-sophage/collectes/spectacle-st-medard-en-jalles-maud-pasquet" class="button" target="_blank">FAIRE UN DON A NOTRE ASSOCIATION</a></h4>
      </div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;">
     &nbsp;
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;">
            <form class="grid-x grid-padding-x" data-animation="top" id="formulaire" name="formulaire" method="post">
					<h3>Etape n°2 :</h3>
					<input type="text" name="nom" id="nom" placeholder="Indiquez vos nom et prénom" required  />
					<input type="email" name="email" id="email" placeholder="Indiquez votre e-mail" required />
			</form>
  </div>
   <div class="large-4 medium-4 small-12 columns" style="text-align: center;">
     &nbsp;
  </div>
  
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h4><a href="downloader.php?doc=PeterPanHD.mp4" target="_blank" id="telecharger" class="button" >TELECHARGER LE SPECTACLE</a></h4>
      </div>
  </div>
   <div class="large-12 medium-12 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h4>ou :</h4><h4><a href="peter.html" id="streaming" target="_blank" class="button">Voir en streaming</a></h4>
      </div>
  </div>
<?php include('inc/scripts.php'); ?>
</body>
<script type="text/javascript">

	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var donfait = 0;
	  console.log(donfait);

	$(document).on('click','#streaming',function(e) {
		if (donfait == 0)
		{
			console.log(donfait);
			alert("Merci de faire un don à notre association.");
			   
		} else {	
		
			document.location.href="peter.html";
		}	
		return false;	 
	})
	  
	$(document).on('click','#donner',function(e) {
		 donfait = 1;
		 console.log(donfait);
		 //return false;
	})

	
	$(document).on('click','#telecharger',function(e) {

	if (donfait == 0)
	{

		alert("Merci de faire un don à notre association.");
		   
	} else if (document.getElementById("nom").value.length == 0) {

		alert("Veuillez renseigner votre nom svp.");
	   
	} else if (!document.getElementById("email").value.match(mailformat))  {

		alert("Veuillez renseigner votre email svp.");

	} else {	
	
		document.location.href="downloader.php?doc=PeterPanHD.mp4";
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	})

	  console.log(data);

	    /* I put the above code for check data before send to ajax*/
	    $.ajax({
		        url: '/ajax/contact.php',
		        type: 'post',
		        data: data,
		        success: function (data) {
		            $("#resultat").html("<hr><h2 class='sous-titre'>Merci pour votre message</h2><hr>");
		        	$("#nom").val("");
		        	$("#prenom").val("");
		        	$("#ville").val("");
		        	$("#cp").val("");
		           	$("#email").val("");
		         	$("#tel").val("");
		           	$("#message").val("");
		        },
		        error: function() {
		        	 $("#resultat").html("<h3>Une erreur s'est produite !</h3>");
		        }
		   	});
		}
	return false;
	})

</script>
</html>