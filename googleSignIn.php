<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="google-signin-client_id"
    content="751418040846-b0h7hb2us3svgl4037fjqbtmtkl9djrs.apps.googleusercontent.com">
</head>


<body>
  <h1>Please Sign In With Google!</h1>
<!--getting google client info -->
  <div class="g-signin2" data-onsuccess="onSignIn"></div>
  <a id = "sign-out" href="#" onclick="signOut();">Sign out</a>
  <p id = "name"></p>
  <p id = "pfp"></p>
  <p id = "email"></p>
  <script src="script.js"></script>
  
  <!-- href="#" onclick="signOut();">Sign out</a>
  <!-- href="#" onclick="getData()"> get Data< >
  <script src="script.js"></script>
  <!-- get profile info (doesn't work)-->
  
</body>


</html>

<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  document.getElementById('name').innerHTML = `Your name is: ${profile.getName()}`;
  document.getElementById('pfp').innerHTML = `Your profile picture is here: ${profile.getImageUrl()}`;
  document.getElementById('email').innerHTML =` Your email is ${profile.getEmail()}`;
}

function signOut() {
   loggedIn = false;
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>


