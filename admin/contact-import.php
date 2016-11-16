<!doctype html>
<html class="no-js" lang="en">
<head>
	<?php include_once 'inc-meta.php';?>
	<!-- blueimp Gallery styles -->
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="FileUpload/css/jquery.fileupload.css">
	<link rel="stylesheet" href="FileUpload/css/jquery.fileupload-ui.css">
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<noscript><link rel="stylesheet" href="FileUpload/css/jquery.fileupload-noscript.css"></noscript>
	<noscript><link rel="stylesheet" href="FileUpload/css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>	
     <div class="col-lg-4">
   		<a href="/index.php" > 
    		<button class="btn btn-info">
                <span>Retour</span>
            </button>
        </a>    
    </div>	
	<div class="container">
	
    
	<div class="row">
      <div class="col-lg-12">
        <h1>EPI 5ème</h1>
      </div>
    </div>
	
	    <h4>Transférer vos fichiers</h4>
	    
	   
	   
		<!-- The file upload form used as target for the file upload widget -->
	    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
	        <!-- Redirect browsers with JavaScript disabled to the origin page -->
	        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
	        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
	       
	        <div class="row fileupload-buttonbar">
	            <div class="col-lg-10">
	                <!-- The fileinput-button span is used to style the file input field as button -->
	                <span class="btn btn-success fileinput-button">
	                    <i class="glyphicon glyphicon-plus"></i>
	                    <span>Ajouter votre ficher tableur ...</span>
	                    <input type="file" name="files[]" multiple>
	                </span>
	               
	                <span class="fileupload-process"></span>
	            </div>
	            <!-- The global progress state -->
	            <div class="col-lg-5 fileupload-progress fade">
	                <!-- The global progress bar -->
	                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
	                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
	                </div>
	                <!-- The extended global progress state -->
	                <div class="progress-extended">&nbsp;</div>
	            </div>
	        </div>
            <h5>Liste des fichiers transférés</h5>
	        <!-- The table listing the files available for upload/download -->
	        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
	    </form>
	    <br>
	   
	</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Démarrer le transfert</span>
                </button>
            {% } %}
           
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        
    </tr>
{% } %}
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="FileUpload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="FileUpload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="FileUpload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="FileUpload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="FileUpload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="FileUpload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="FileUpload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="FileUpload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="FileUpload/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="FileUpload/js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="FileUpload/js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</div>
</body>
</html>


