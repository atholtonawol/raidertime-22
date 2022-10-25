<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="slide_1.css">
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    
<style>
  body {
    font-family: 'Graduate';font-size: 22px;
    background-image: url('https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/SchoolPicEdited.jpg?raw=true');
    background-size: cover;
    background-repeat: no-repeat;
    background-color: gainsboro;
  }

</style>
  </head> 
<body>
    
      <div class=" px-4 pt-3 container-fluid">
      <div class="row">
        <div class="col-10">
          <h1 class="display-2"><b>Atholton High School</b></h1>
            <h2 class="display-4"><b>Raider Time Signup</b></h2>
        </div>
        <div class="col-2 text-end">
         <a href="https://ahs.hcpss.org/">
          <img class = "img-fluid" src="https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/NewAtholtonA.png?raw=true">
         </a>
        </div>
      </div>
      </div>
    <br/>
         
       <?php
     require('nav_bar.html');
   ?>
    
    <div class="container-fluid">
      <div class="row justify-content-center text-center">
      <div class="welcomebox col-md-6 col-10 mt-5 justify-content-center text-center">    
        <p>Welcome Raiders
          
                
          <br>I am a:</p>
        <a href="slide_2_log_in.php"><button class="btn col-9" type="button">Student</button></a>
        <button class="btn mt-3 col-9" type="button">Teacher</button>
        <button class="btn mt-3 mb-5 col-9" type="button">Administrator</button>
        
      </div>
        <?php
                  //Google sign in
                  require('googleSignIn.php');
                ?>
      </div>
    </div>
  <?php
     require('footer.html');
   ?>
  </body>
</html>
