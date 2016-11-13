<!doctype html>
<html class="no-js" lang="en">
  <head>
    <? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/meta.php" ); ?>
    <title>Le mirail | Welcome</title>
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">
        <h1>EPI 5ème</h1>
        <h2>Corps, santé, bien être et sécurité</h2>
        <h5>Etude du rythme cardiaque des élèves</h5>
      </div>
    </div>
	<div class="row">
        <div class="large-6 medium-6 columns">
            <div class="panel">
              <h4>Avant de Commencer</h4>
              <p>Récuperer le fichier de travail de votre classe en cliquant sur le bouton correspondant:</p>
                <div class="panel">
                    <h4>Données statistiques des 501</h4>
                    <a href="downloader.php?doc=data/501-eleves.xls" class="small success button">Format MS Excel</a>
                    <a href="downloader.php?doc=data/501-eleves.ods" class="small warning button">Format Open Office</a>
                </div>
                  
               <div class="panel">
                    <h4>Données statistiques des 502</h4>
                    <a href="downloader.php?doc=data/502-eleves2.xls" class="small success button">Format MS Excel</a>
                    <a href="downloader.php?doc=data/502-eleves2.ods" class="small warning button">Format Open Office</a>
                </div>
                
                <div class="panel">
                    <h4>Données statistiques des 503</h4>
                    <a href="downloader.php?doc=data/503-eleves.xls" class="small success button">Format MS Excel</a>
                    <a href="downloader.php?doc=data/503-eleves.ods" class="small warning button">Format Open Office</a>
                </div>          
            </div>
        </div>
         <!-- 
         <div class="large-6 medium-6 columns">
            <div class="panel">
              <h5>Quand vous avez fini</h5>
              <p>Déposer votre travail ici:</p>
              <a href="import.php" class="small alert button">Déposer votre fichier</a>          
            </div>
        </div>
         -->
    </div>
    

    <? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
  </body>
</html>
