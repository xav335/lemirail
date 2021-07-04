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
    <div class="large-6 medium-6 small-12 columns" style="text-align: center;"> 
       </br></br> <h2>Page de téléchargement des spectacles de nos élèves.</h2>
    </div>
    <div class="large-3 medium-3 small-12 columns" style="text-align: center;"> 
      </br></br><img src="img/AFA.png" alt="" />  
    </div>

  <div class="large-12 medium-12 small-12 columns" style="text-align: justify;">
    </br></br> 
    <p>
    Cette année les CE1/CE2 ont présenté un film avec deux chansons, le cycle 3 a proposé le film de leur pièce de théâtre en anglais et les 5èmes ont joué plusieurs courts métrages en anglais.</br>
    Deux soirées de retransmission vous ont été proposées, ainsi qu'aux familles d'élèves, pour partager ces moments virtuellement.</br>
    L’APEL avait pour projet de reverser l'ensemble des bénéfices de ces soirées, si elles avaient pu se faire en présentiel, à une association
     chère à notre communauté, l'Association Française de l'Atrésie de l'Oesophage (AFAO), 
    sans laquelle nous n'aurions pas pu avoir accès à la superbe salle de spectacle qui a accueilli le tournage de la pièce de théâtre du cycle 3.</br>
    Pour compenser cela, nous proposons aux familles et à ceux qui le souhaitent de faire un don, déductible des impôts, pour l’AFAO.</br>
    </p>
  </div>
  
  
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
         <h3>Pour faire un don :</h3><h5><a id="donner" href="https://www.helloasso.com/associations/association-francaise-de-l-atresie-de-l-sophage/collectes/spectacle-st-medard-en-jalles-maud-pasquet" class="button" target="_blank">FAIRE UN DON A NOTRE ASSOCIATION</a></h4>
      </div>
  </div>
    <hr></hr>
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="large-4 medium-4 small-12 columns" style="text-align: center;">
         &nbsp;
      </div>
      <div class="large-4 medium-4 small-12 columns" style="text-align: center;">
        <form class="grid-x grid-padding-x" data-animation="top" id="formulaire" name="formulaire" method="post">
    		<h3>Pour télécharger :</h3>
    		<input type="text" name="nom" id="nom" placeholder="Indiquez vos nom et prénom" required  />
    		<input type="email" name="email" id="email" placeholder="Indiquez votre e-mail" required />
    	</form>
      </div>
       <div class="large-4 medium-4 small-12 columns" style="text-align: center;">
        &nbsp;
      </div>
  </div>
<hr></hr>
   <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
         <h3>Spectacles des élèves</h3></div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h5>LE SPECTACLE DES CM - 6ème </br> <a href="downloader.php?doc=PeterPanHD.mp4" target="_blank" id="telecharger" class="button" >TELECHARGER / VOIR</a></h5>
      </div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h5>LE SPECTACLE DES CE - 5ème </br> <a href="downloader.php?doc=PeterPanHD.mp4" target="_blank" id="telecharger2" class="button" >TELECHARGER / VOIR </a></h4>
      </div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h5>LE SPECTACLE DES  -  </br> <a href="downloader.php?doc=PeterPanHD.mp4" target="_blank" id="telecharger3" class="button" >TELECHARGER / VOIR </a></h4>
      </div>
  </div>
  
  <hr></hr>
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
         <h3>Travaux du bloc culture des 5ème</h3></div>
  </div>
    
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h5>LES INTERVIEWS DES CHEVALIERS </br> <a href="https://www.dropbox.com/sh/k5qqmcn4rivdi9a/AAA90HrxZF8EGInyiUfwfT1sa?dl=0" target="_blank" id="telecharger4" class="button" >TELECHARGER / VOIR </a></h4>
      </div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h5>LE defi astro PI </br> <a href="https://esero.fr/actualites/astropi-mission-zero-les-programmes-des-jeunes-a-bord-de-liss/" target="_blank" id="telecharger5" class="button" >félicitations de T.Pesquet</a></h4>
      </div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h5>LE 1er Eco-magasine du collège</br> <a href="https://madmagz.com/fr/magazine/preview/1853534#" target="_blank" id="telecharger5" class="button" >consulter en ligne</a></h5>
      </div>
 <!-- 
   <div class="large-12 medium-12 small-12 columns" style="text-align: center;"> 
      <div class="callout secondary">
           <h5>ou :</h4><h5><a href="peter.html" id="streaming" target="_blank" class="button">Voir en streaming</a></h4>
      </div>
  </div>
   -->
   </br></br>  </br></br>  </br></br>  </br></br> 
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

	//-------#######------- cm6eme ----------#########-------//
	$(document).on('click','#telecharger',function(e) {   //#####   Achanger

	if (document.getElementById("nom").value.length == 0) {

		alert("Veuillez renseigner votre nom svp.");
	   
	} else if (!document.getElementById("email").value.match(mailformat))  {

		alert("Veuillez renseigner votre email svp.");

	} else {	
	
		//document.location.href="https://www.dropbox.com/s/vjge97ycj49omjj/PeterPanHD.mp4?dl=0";
		window.open('https://www.dropbox.com/s/vjge97ycj49omjj/PeterPanHD.mp4?dl=0', '_blank');  //#####   Achanger
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'cm6eme'   //#####   Achanger
	  	})

	  console.log(data);

	    /* I put the above code for check data before send to ajax*/
	    $.ajax({
		        url: '/ajax/contact.php',
		        type: 'post',
		        data: data,
		        success: function (data) {
		            $("#resultat").html("<hr><h2 class='sous-titre'>Merci pour votre message</h2><hr>");
		        	//$("#nom").val("");
		           	//$("#email").val("");
		        },
		        error: function() {
		        	 $("#resultat").html("<h3>Une erreur s'est produite !</h3>");
		        }
		   	});
		}
	return false;
	})
	//-------#######------- ######### ----------#########-------//
	
	//-------#######------- ce5eme ----------#########-------//
	$(document).on('click','#telecharger2',function(e) {

	if (document.getElementById("nom").value.length == 0) {

		alert("Veuillez renseigner votre nom svp.");
	   
	} else if (!document.getElementById("email").value.match(mailformat))  {

		alert("Veuillez renseigner votre email svp.");

	} else {	
	
		//document.location.href="https://www.dropbox.com/s/vjge97ycj49omjj/PeterPanHD.mp4?dl=0";
		window.open('https://www.dropbox.com/s/vjge97ycj49omjj/PeterPanHD.mp4?dl=0', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'ce5eme'
	  	})

	  console.log(data);

	    /* I put the above code for check data before send to ajax*/
	    $.ajax({
		        url: '/ajax/contact.php',
		        type: 'post',
		        data: data,
		        success: function (data) {
		            $("#resultat").html("<hr><h2 class='sous-titre'>Merci pour votre message</h2><hr>");
		        	//$("#nom").val("");
		           	//$("#email").val("");
		        },
		        error: function() {
		        	 $("#resultat").html("<h3>Une erreur s'est produite !</h3>");
		        }
		   	});
		}
	return false;
	})
	//-------#######------- ######### ----------#########-------//
</script>
</html>
