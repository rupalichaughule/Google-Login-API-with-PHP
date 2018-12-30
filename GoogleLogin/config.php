<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("1042042046038-jv2v4jk8jtld5o7omvfm5r6cdbqgf771.apps.googleusercontent.com");
	$gClient->setClientSecret("A8okvS1MlyjmefQB1DI3G8yU");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
