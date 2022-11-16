<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '305528542879-4dg6dlsh68nlb8t28i2sd5138j16cn18.apps.googleusercontent.com'; //Google client ID
$clientSecret = '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'; //Google client secret
$redirectURL = 'http://localhost/xampp/purificadora/index2.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>