<!doctype html>
<html class="no-js" lang="en">
  <head>
    <? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/meta.php" ); ?>
    <title>Le mirail | Welcome</title>
  </head>
  <body>
    <div class="row">
         <div class="large-8 medium-8 columns">
            <h1></h1>
            <h2>Scratch</h2>
            <h5> </h5>
          </div>
          <div class="large-4 medium-4 columns">
            <img alt="" src="img/logomirail.png">
          </div>
    </div>
    <hr>
	<div class="row">
        <div class="large-6 medium-6 columns">
            <div class="panel">
              <h4>Avant de Commencer</h4>
              <p>Récuperer le fichier de travail en cliquant sur le bouton correspondant:</p>
                <div class="panel">
                    <h4>Classe 403</h4>
                    <a href="downloader.php?doc=data/tennis.sb2" class="small success button">fichier scratch</a>
                </div>
                 <div class="panel">
                    <h4>Classe 501 et 503</h4>
                    <a href="downloader.php?doc=data/Plongeur1.sb2" class="small success button">Fiche 96-1 le plongeur</a>
                    <a href="downloader.php?doc=data/Plongeur2.sb2" class="small success button">Fiche 96-2 le plongeur</a>
                    <a href="downloader.php?doc=data/crayon1.sb2" class="small warning button">Fiche 97 - Crayon 1</a>
                    <a href="downloader.php?doc=data/crayon2.sb2" class="small warning button">Fiche 97 - Crayon 2</a>
                     <a href="downloader.php?doc=data/crayon3.sb2" class="small warning button">Fiche 97 - Crayon 3</a>
                </div>
            </div>
        </div>
         
         <div class="large-6 medium-6 columns">
            <div class="panel">
              <h5>Quand vous avez fini</h5>
              <p>Déposer votre travail ici:</p>
              <a href="admin/contact-import.php" class="small alert button">Déposer votre fichier</a>          
            </div>
        </div>
         
    </div>
    

    <? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
  </body>
</html>
