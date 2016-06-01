<?php
require_once 'lib/src/Google_Client.php';
require 'lib/src/contrib/Google_Oauth2Service.php';
require_once 'lib/src/contrib/Google_PlusService.php';
session_start();
 $api = new Google_Client();
 $api->setApplicationName("Scrap it"); // Set Application name
 $api->setClientId('395951673212-6k44v16uvqvhkf7n9uc6hcd0g94bdhe1.apps.googleusercontent.com'); // Set Client ID
 $api->setClientSecret('kIQP-XQbqqE9LQjmiWDYJeoE'); //Set client Secret
 $api->setAccessType('online'); // Access method
 $api->setScopes(array('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/userinfo.email', 'https://www.googleapis.com/auth/userinfo.profile'));
 $api->setRedirectUri('https://scrapit2016.herokuapp.com/login'); // Enter your file path (Redirect Uri) that you have set to get client ID in API console
 $service = new Google_PlusService($api);
 $URI = $api->createAuthUrl();
?>
