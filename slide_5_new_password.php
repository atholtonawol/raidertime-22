<!DOCTYPE html>
<html>
  <head>
    <title>Home Page
    </title>

    <!-- This is the code to link bootstrap and css.file -->
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="stlye.css"/>
<!-- End Links -->

<header>
  <div class="container">
    <div class="row mt-4 justify-content-left text-left"> 
      <h2>Change Password</h2>
    </div>
  </div>  
</header>
    
    <!-- Uses css code to create background image -->
<style>
body {
    font-family: 'Graduate';font-size: 22px;
    background-image: url('https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/bw%20atholton%20building%20img.jpg?raw=true');
    background-size: cover;
}
</style>
    <!-- End css code -->
  </head> 
    <body>

<!-- Adds header to top of page -->
      <?php
      require('menu_bar.html');
    ?>

      <!-- Start where bootstrap centers everything -->
    <div class="row mt-5 justify-content-center text-center">  
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
    </div>  
<!-- End where bootstrap centers everything -->
     
  </body>

</html>
