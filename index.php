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
       </br></br> <h2>Page de téléchargement </br> des spectacles et travaux de nos élèves.</h2>
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
         <h3>&starf;&nbsp;Spectacles de nos élèves&nbsp;&starf;</h3></div>
   </div>
   <div class="large-6 medium-6 small-12 columns" style="text-align: center;"> 
       <h5>&star;&nbsp;LE SPECTACLE DES CM1 - CM2 - 6ème&nbsp;&star;</br>
       <img src="img/cm.png" alt="" />
       <a href="#" target="_blank" id="telecharger1" class="button" >TELECHARGER / VOIR </a></h5>
   </div>
  
   </div>
   <div class="large-6 medium-6 small-12 columns" style="text-align: center;"> 
        <h5>&star;&nbsp;LE SPECTACLE DES CE1 - CE2&nbsp;&star;</br>
        <img src="img/CE.png" alt="" />
        <a href="#" target="_blank" id="telecharger3" class="button" >TELECHARGER / VOIR </a></h5>
   </div>
  
  
  
  <hr></hr>
  
  
  
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
         <h3>&starf;&nbsp;Théatre en anglais des 5ème&nbsp;&starf;</h3></div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
       <h5>Groupe A </br>
       <img src="img/english5A.png" alt="" />
       <a href="#" target="_blank" id="telecharger7" class="button" >TELECHARGER / VOIR </a></h5>
   </div>
   <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
       <h5>Groupe B</br> 
       <img src="img/comic5B.png" alt="" />
       <a href="#" target="_blank" id="telecharger8" class="button" >TELECHARGER / VOIR </a></h5>
   </div>
   </div>
   <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
        <h5>Groupe C</br>
        <img src="img/sherlock5C.png" alt="" />
        <a href="#" target="_blank" id="telecharger9" class="button" >TELECHARGER / VOIR </a></h5>
   </div>
  <hr></hr>
  
  
  
  <div class="large-12 medium-12 small-12 columns" style="text-align: center;">
      <div class="callout secondary">
         <h3>&starf;&nbsp;Travaux du bloc culture des 5ème&nbsp;&starf;</h3></div>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
       <h5>&star;&nbsp;D'Alzon-TV : INTERVIEWS DES CHEVALIERS&nbsp;&star;</br>
       <img src="img/BC5.png" alt="" />
       <a href="#" target="_blank" id="telecharger4" class="button" >TELECHARGER / VOIR </a></h5>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
           <h5>&star;&nbsp;Le defi astro PI&nbsp;&star;</br> 
           <img src="img/TP.png" alt="" />
           <a href="#" target="_blank" id="telecharger5" class="button" >Message de Thomas Pesquet</a></h4>
  </div>
  <div class="large-4 medium-4 small-12 columns" style="text-align: center;"> 
           <h5>&star;&nbsp;LE 1er Eco-magasine du collège&nbsp;&star;</br> 
           <img src="img/mag.png" alt="" />
           <a href="#" target="_blank" id="telecharger6" class="button" >consulter en ligne</a></h5>
 </div>
 <hr></hr>          
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

	//-------#######------- telecharger1 ----------#########-------//
	$(document).on('click','#telecharger1',function(e) {   //#####   Achanger

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('https://www.dropbox.com/s/jymtpdpr46n2zmk/Olivier_Gayrard_Peter%20Pan%20HD.mp4?dl=0', '_blank');  //#####   Achanger
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'peterpan'   //#####   Achanger
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
	
	//-------#######------- telecharger2 ----------#########-------//
	$(document).on('click','#telecharger2',function(e) {

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('XXXXXXX', '_blank');
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
	
	//-------#######------- telecharger3 ----------#########-------//
	$(document).on('click','#telecharger3',function(e) {

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('https://www.dropbox.com/s/cdvml9mxnnqd4o0/Olivier_Gayrard_Chansons%20CE1-CE2.mp4?dl=0', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'ce1ce2'
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
	
	//-------#######------- telecharger4 ----------#########-------//
	$(document).on('click','#telecharger4',function(e) {

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('https://www.dropbox.com/sh/k5qqmcn4rivdi9a/AAA90HrxZF8EGInyiUfwfT1sa?dl=0', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'chevaliers'
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
	
	//-------#######------- telecharger5 ----------#########-------//
	$(document).on('click','#telecharger5',function(e) {

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('https://esero.fr/actualites/astropi-mission-zero-les-programmes-des-jeunes-a-bord-de-liss/', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'astropi'
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
	
	//-------#######------- telecharger6 ----------#########-------//
	$(document).on('click','#telecharger6',function(e) {

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('https://madmagz.com/fr/magazine/1930005', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'ecomag'
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
	
	
	//-------#######------- telecharger7 ----------#########-------//
	$(document).on('click','#telecharger7',function(e) {

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('https://www.dropbox.com/s/d3o68twywigvu1j/Johnny%20English.mp4?dl=0', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'johnny'
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
	
	
	//-------#######------- telecharger8 ----------#########-------//
	$(document).on('click','#telecharger8',function(e) {

		if (document.getElementById("nom").value.length == 0) {

			alert("Veuillez renseigner votre nom svp.");
			document.getElementById("nom").focus();
		   
		} else if (!document.getElementById("email").value.match(mailformat))  {

			alert("Veuillez renseigner votre email svp.");
			document.getElementById("email").focus();

	} else {	
	
		window.open('https://www.dropbox.com/s/1de4e9dv1rgpcci/Nolan%20Deniaud%20-%20Comic-Con.mp4?dl=0', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'comicon'
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
	
	//-------#######------- telecharger9 ----------#########-------//
	$(document).on('click','#telecharger9',function(e) {

	if (document.getElementById("nom").value.length == 0) {

		alert("Veuillez renseigner votre nom svp.");
		document.getElementById("nom").focus();
	   
	} else if (!document.getElementById("email").value.match(mailformat))  {

		alert("Veuillez renseigner votre email svp.");
		document.getElementById("email").focus();

	} else {	
	
		window.open('https://www.dropbox.com/s/m42t07npn9y5ab2/Nolan%20Deniaud%20-%20SHERLOCK%20HOLMES.mp4?dl=0', '_blank');
	  	e.preventDefault();
	  	data = $("#formulaire").serializeArray();

	 	 data.push({
	   		name: 'action',
	    	value: 'sendMail'
	  	},
		{
	   		name: 'file',
	    	value: 'sherlock'
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
