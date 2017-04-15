<!doctype html>
<html class="no-js" lang="en">
  <head>
    <? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/meta.php" ); ?>
    <title>Le mirail | Welcome</title>
  </head>
  <body>
    <div class="row">
         <div class="large-8 medium-8 columns">
            <h1>403e</h1>
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
              <p>Récuperer le fichier de travail de votre classe en cliquant sur le bouton correspondant:</p>
                <div class="panel">
                    <h4>Données statistiqueEPS01</h4>
                    <a href="downloader.php?doc=data/501-eleves.xls" class="small success button">Format MS Excel</a>
                    <a href="downloader.php?doc=data/501-eleves.ods" class="small warning button">Format Open Office</a>
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
