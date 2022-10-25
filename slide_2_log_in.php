<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="slide_2.css">
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <!--<link href='googleSignIn.php' rel='stylesheet'>-->
    
<style>
  body {
    font-family: 'Graduate';font-size: 22px;
    background-image: url('https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/color%20atholton%20building.jpg?raw=true');
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
          <img class = "img-fluid" src="https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/NewAtholtonA.png?raw=true">
        </div>
      </div>
      </div>
    <br/>
      
     <?php
     require('nav_bar.html');
   ?>  
      
      
    <div class="container-fluid">
      <div class="row justify-content-center text-center">
      <div class="welcomebox col-md-4 col-9 mt-5 justify-content-center text-center">    
        <p>Welcome Raiders
          <br>I am a:</p>
  
          <form class="login" action = "slide_6_home.php"  method = "POST">
            <input type="text" id="username" name="username" placeholder="username" required><br>
          
               <input type="password"id="password" name="lname" placeholder="password" required>
               <br>
               <input type="submit" id="login"value="LOGIN"/>
          </form>
           
                <p id="forgotpass"><a href="slide_3_forgot_password.php"><u>Forgot password?</u></a></p>
                <div class="createaccount">
                  Don't have an account? <u>Sign up</u>
                </div>  
        
        <?php
                //backend code for storing login (VOGUE2!)
              if(isset($_POST["username"]) && isset($_POST["lname"]))
              {
                $username = $_POST["username"];
                $password = $_POST['lname'];
                echo $username;
                echo $password;
                $sql = "SELECT firstName FROM student_info WHERE user = '{$username}'";
                $result = mysqli_query($conn, $sql);
                $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
                if(count($var) != 0)
                { 
                  $sql = "UPDATE student_info SET password = '{$password}' WHERE user = '{$username}'";
                  $result = mysqli_query($conn, $sql);
                  } else {
                    echo "invalid"; 
                  }
                } 
             ?>
              </div>
                
        
      </div>
      </div>
    </div>
  
    <?php
     require('footer.html');
   ?>
  </body>
</html>
