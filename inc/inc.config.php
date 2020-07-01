<?

	// ---- D�finition des constantes du site ------------------------ //
	//echo $_SERVER[ "DOCUMENT_ROOT" ] . "<br>";
	switch( $_SERVER[ "DOCUMENT_ROOT" ] ) {
		
		// ---- Serveur local Franck -------- //
		case "/var/www/math" :
			$localhost = "localhost";
			$dbname = "math";
			$user = "math";
			$mdp = "math33";
			break;
		
		// ---- Serveur PRE-PROD ------------ //
		case "/home/web/math" :
			$localhost = "localhost";
			$dbname = "math";
			$user = "math";
			$mdp = "math33";
			break;
		
		// ---- Serveur PROD ---------------- //
		case "/var/www/math" :
			$localhost = "localhost";
			$dbname = "math";
			$user = "math";
			$mdp = "math33";
			break;
		default:
		    $localhost = "localhost";
		    $dbname = "math";
		    $user = "math";
		    $mdp = "math33";
		    break;
	}
		
	define( "DBHOST",	$localhost );
	define( "DBNAME",	$dbname );
	define( "DBUSER",	$user );
	define( "DBPASSWD", $mdp );
	
	define( "MAILCUSTOMER", 	"NePasRepondre@akisteel.com" );
	define( "MAILNAMECUSTOMER", "gonzalez" );
	define( "URLSITEDEFAULT", 	"http://math.gonzalez.pm" );
	define( "FACEBOOK_LINK", 	"https://www.facebook.com/xxx" );
	define( "DAILYMOTION_LINK", "#" );
	
	// ---- Mail d'envoi
	define( "MAIL_TEST", 	"fjavi.gonzalez@gmail.com" ); // Si rempli alors cette valeur ser utilisée pour les différents envois de mails
	define( "MAIL_CONTACT", "fjavi.gonzalez@gmail.com" );
	define( "MAIL_BCC", 	"xav335@hotmail.com,fjavi.gonzalez@gmail.com,jav_gonz@yahoo.com" );
?>