<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="googleSignIn.css">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id"
    content="751418040846-b0h7hb2us3svgl4037fjqbtmtkl9djrs.apps.googleusercontent.com">
</head>


<body>
<!--getting google client info -->
  <button class = "signIn">
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </button>
  <p id = "name"></p>
  <p id = "pfp"></p>
  <p id = "email"></p>
  <script src="script.js"></script>
  
  <!-- href="#" onclick="signOut();">Sign out</a>
  <!-- href="#" onclick="getData()"> get Data< >
  <script src="script.js"></script>
  <a id = "sign-out" href="#" onclick="signOut();">Sign out</a>
  <!-- get profile info (doesn't work)-->
  
</body>


</html>

<script>
function onSignIn(googleUser) {
  var id_token = googleUser.getAuthResponse().id_token;
  
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'https://vogue.ahsraidertime.org/tokensignin');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
  xhr.onload = function() {
    console.log('Signed in as: ' + xhr.responseText);
  };
  
  xhr.send('idtoken=' + id_token);
  
  
  /*
  var profile = googleUser.getBasicProfile();
  document.getElementById('name').innerHTML = `Your name is: ${profile.getName()}`;
  var name = profile.getName();
  document.getElementById('pfp').innerHTML = `Your profile picture is here: ${profile.getImageUrl()}`;
  document.getElementById('email').innerHTML =` Your email is ${profile.getEmail()}`;
  
  document.cookie = "user_email=33";
  */
}


  
function signOut() {
   loggedIn = false;
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
      <?php
   //echo "<script>document.writeln(name);</script>";
  
       ?>

