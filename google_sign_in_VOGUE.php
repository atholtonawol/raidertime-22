<?php
require_once 'vendor/autoload.php';
  
// init configuration
$clientID = '751418040846-4tsmmv9vtuqcgb2k2ecc9vcsb51nm68i.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://ahsraidertime.org';
   
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
  
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>
 

