<!DOCTYPE html>
<html>
  <head>
    <title>Home Page
    </title>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <link href='slide_2.css' rel='stylesheet'>
<style>
body {
    font-family: 'Graduate';font-size: 22px;
    background-image: url('https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/bw%20atholton%20building%20img.jpg?raw=true');
    background-size: cover;
}
</style>
  </head> 
    <body>
      <?php
        require('menu_bar.html');
      ?>
      <img src="https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/atholtonA.png?raw=true", align = "right", width="120">
  <h1>Atholton High School</h1>
  <h2>Raider Time Signup</h2>
  

    <div class="welcomebox">
        <p>Welcome Raiders
         </p>
      
   <form class="login">
  <input type="text" id="username" name="username" placeholder="username" required><br>

     <input type="password"id="password" name="lname" placeholder="password" required>
     <input type="submit" id="login"value="Login"/>
     </form>
 
      <p id="forgotpass"><a href="slide_3.php">Forgot password?</a></p>
      </div>
      <div class="createaccount">
        Don't have an account? <u>Sign up</u>
      </div>
      <a href="slide_6.php">temp login button</a>
  </body>

</html>
