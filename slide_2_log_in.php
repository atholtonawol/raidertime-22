<!DOCTYPE html>
<html lang="en">
  <head>
    <!--link rel="stylesheet" href="frontEnd/test.css"-->
    <link rel="stylesheet" href="slide_6.css">
    <title>Raider Time Home</title>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- style sheets, bootstrap, javascript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <style>
    body {
      font-family: 'Graduate';font-size: 22px;
      background-color: #eeeeee;
    }
  </style>
  </head> 
    <body>
        
    
      <div class=" px-4 pt-3 container-fluid">
      <div class="row">
        <div class="col-9">
          <h1 class="display-2"><b>Atholton High School</b></h1>
            <h2 class="display-4"><b>Raider Time Signup</b></h2>
        </div>
       <div class="col-3 text-end">
          <a href="https://ahs.hcpss.org/">
            <img class = "img-fluid" src="https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/new_Atholton_raider1-removebg-preview.png?raw=true">
         </a>
        </div>
      </div>
      </div>
    <br/>
    
    <div class="container-fluid">
      <div class="row justify-content-center text-center">
      <div class="welcomebox col-md-4 col-9 mt-5 justify-content-center text-center">    
        <h2>Welcome Raiders</h2>
          <h3>Please Sign In With Your HCPSS Google Account!</h3>
          <?php
            require('googleSignIn.php');
          ?>
         
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
    //require('footer.php');
    $user_email = _COOKIE['user_email'];
    echo "asdfasdfadf";
    print_r($user_email);
  ?>
  </body>
</html>
