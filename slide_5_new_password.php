<!DOCTYPE html>
<html>
  <head>
    <title>Home Page
    </title>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <link href='slide_5.css' rel='stylesheet'>
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
     <p>Enter Your new Password</p>
      <form action="" method="get">
        <input type="text" placeholder="New Password" style="text-align: center" class="password2"/>
        

      </form>
      <div class="verification2">
        <p>Re-type Password</p>
      </div>
      
       <form action="" method="get">
          <input type="text" placeholder="Confirm new Password" style="text-align: center" class="password1"/>
        </form>
      <a href="slide_2_log_in.php"><button class="users" type="button"><b>Change</b></button></a>
     </div>

     
  </body>

</html>