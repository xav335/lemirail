<?

	// ---- D�finition des constantes du site ------------------------ //
	//echo $_SERVER[ "DOCUMENT_ROOT" ] . "<br>";
	switch( $_SERVER[ "DOCUMENT_ROOT" ] ) {
		
		// ---- Serveur local Franck -------- //
		case "/var/www/gonzalez" :
			$localhost = "localhost";
			$dbname = "gonzalez";
			$user = "global";
			$mdp = "global";
			break;
		
		// ---- Serveur PRE-PROD ------------ //
		case "/home/web/gonzalez" :
			$localhost = "localhost";
			$dbname = "gonzalez";
			$user = "gonzalez";
			$mdp = "gonzalez33";
			break;
		
		// ---- Serveur PROD ---------------- //
		case "/var/www/gonzalez" :
			$localhost = "localhost";
			$dbname = "gonzalez";
			$user = "gonzalez";
			$mdp = "gonzalez33";
			break;
		default:
		    $localhost = "localhost";
		    $dbname = "gonzalez";
		    $user = "gonzalez";
		    $mdp = "gonzalez33";
		    break;
	}
		
	define( "DBHOST",	$localhost );
	define( "DBNAME",	$dbname );
	define( "DBUSER",	$user );
	define( "DBPASSWD", $mdp );
	
	define( "MAILCUSTOMER", 	"NePasRepondre@akisteel.com" );
	define( "MAILNAMECUSTOMER", "gonzalez" );
	define( "URLSITEDEFAULT", 	"http://www.gonzalez.pm" );
	define( "FACEBOOK_LINK", 	"https://www.facebook.com/xxx" );
	define( "DAILYMOTION_LINK", "#" );
	
	// ---- Mail d'envoi
	define( "MAIL_TEST", 	"fjavi.gonzalez@gmail.com" ); // Si rempli alors cette valeur ser utilisée pour les différents envois de mails
	define( "MAIL_CONTACT", "fjavi.gonzalez@gmail.com" );
	define( "MAIL_BCC", 	"xav335@hotmail.com,fjavi.gonzalez@gmail.com,jav_gonz@yahoo.com" );
?>