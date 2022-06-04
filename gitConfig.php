<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'Github_OAuth_Client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = '1367777779cf7a9bf951';
$clientSecret     = 'c4af46a1dcf68be9cd2013be2229373f1f06df4f';
$redirectURL     = 'http://localhost/specialcat/index.php';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}