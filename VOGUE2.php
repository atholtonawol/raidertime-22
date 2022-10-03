<?php>
 require '/home4/ahsraid1/public_html/database/connect.php';
 
 
 
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";  
 
 
header("Location: https://www.google.com/");
 
 
  $sql = 'SELECT firstName FROM emails';
  $result = mysqli_query($conn, $sql);
  $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
//   print_r($var);
   
//   print_r($sql);
//   print_r($result);
//   print_r($var);
echo $var[0]['firstName'];
  foreach($var as $name)
  {
    echo $name['firstName'];
    break;
       
  }
   
//  foreach($var as $name){
//      echo $name['First_Name'];
//  }
 
//  print_r($var);
// $names = 'SELECT First_Name FROM emails';
// $result = mysqli_query($conn, $names);
// $row = mysqli_fetch_assoc($result);
// echo $row;
// ?>

<!--<!DOCTYPE html>-->
<!--<html>-->
<!--  <head>-->
<!--    <title>Home Page-->
<!--    </title>-->
<!--    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>-->
<!--    <link href='Slide_2.css' rel='stylesheet'>-->
<!--<style>-->
<!--body {-->
<!--    font-family: 'Graduate';font-size: 22px;-->
<!--    background-image: url('https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/bw%20atholton%20building%20img.jpg?raw=true');-->
<!--    background-size: cover;-->
<!--}-->
<!--</style>-->
<!--  </head> -->
<!--    <body>-->
<!--      <img src="https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/atholtonA.png?raw=true", align = "right", width="120">-->
<!--  <h1>Atholton High School</h1>-->
<!--  <h2>Raider Time Signup</h2>-->
  

<!--    <div class="welcomebox">-->
<!--        <p>Welcome Raiders-->
<!--         </p>-->
      
<!--   <form class="login" method = "POST">-->
<!--  <input type="text" id="username" name="username" placeholder="username" required><br>-->

<!--     <input type="password"id="password" name="lname" placeholder="password" required>-->
<!--     <input type="submit" id="login"value="Login"/>-->
<!--     </form>-->
 
<!--      <p id="forgotpass">Forgot password?</p>-->
<!--      </div>-->
<!--      <div class="createaccount">-->
<!--        Don't have an account? <u>Sign up</u>-->
<!--      </div>-->
      
      
<!--      -->
      
<!--       -->
      
<!--      header('Location: '. "https://www.google.com/"); ?>-->
<!--  </body>-->

<!--</html>-->

<?php header('Location: '. "https://www.google.com/"); ?>
