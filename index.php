<!doctype html>
<html class="no-js" lang="en">
  <head>
    <? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/meta.php" ); ?>
    <title>Le mirail | Welcome</title>
  </head>
  <body>
    <div class="row">
         <div class="large-9 medium-9 columns">
            <h1>EPI Qu'est ce que le son ?</h1>
          </div>
          <div class="large-3 medium-3 columns">
            <img alt="" src="img/logomirail.png">
          </div>
    </div>
    <hr>
	<div class="row">
        <div class="large-6 medium-6 columns">
            <div class="panel">
              <h4>Avant de Commencer</h4>
              <p>Récuperer les fichiers de travail  en cliquant sur les boutons suivants:</p>
                <div class="panel">
                    <a href="downloader.php?doc=data/EPI-son-eleve.doc" class="small success button">Document Word</a>
                </div>
                  
               <div class="panel">
                    <a href="downloader.php?doc=data/bruit-self.wav" class="small warning button">Bruit self</a>
                     <a href="downloader.php?doc=data/Do-flute.wav" class="small warning button">Do flute</a>
                      <a href="downloader.php?doc=data/La-flute.wav" class="small warning button">La flute</a>
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
