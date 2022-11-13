<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '735904393805-81uo5s5tkd54tqeg5h1i5c79t8c0v961.apps.googleusercontent.com'; //Google client ID
$clientSecret = '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'; //Google client secret
$redirectURL = 'https://gotadeangel.000webhostapp.com/Login.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>