<!DOCTYPE html>
<html>
  <head>
    <title>Home Page
    </title>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <link href='slide_3.css' rel = 'stylesheet'>
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
    <div class="forgotpassword">
     <p>Forgot Password?</p>
      <div class="forgotpassword2">
        <p>Enter the email address associated with your ahsraidertime account, and we will send the verification code to change your password.</p>
      </div>
       <form action="" method="get">
          <input type="text" placeholder="email"/>
        </form>
      <a href="slide_4.html"><button class="users" type="button">Submit</button></a>
     </div>

     
  </body>

</html>
