<!DOCTYPE html>
<html>
  <head>
    <title>Home Page
    </title>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <link href='slide_4.css' rel='stylesheet'>
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
    <div class="verification">
     <p>Enter Verification Code</p>
      <div class="verification2">
        <p>We sent a verification code to the email you entered, please enter it here.</p>
      </div>
       <form action="" method="get">
          <input type="text" placeholder="VERIFICATION CODE" style="text-align: center"/>
        </form>
      <a href="slide_5_new_password.php"><button class="users" type="button"><b>SUBMIT</b></button></a>
     </div>

     
  </body>

</html>
