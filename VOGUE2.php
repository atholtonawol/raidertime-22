<?php echo "oxenberg"; ?>

<?php echo "test1"; ?>
<!DOCTYPE html> <html lang="en"> <head> <title>Home Page</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <link rel="stylesheet" href="slide_2.css"> <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'> <style> body { font-family: 'Graduate';font-size: 22px; background-image: url('https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/bw%20atholton%20building%20img.jpg?raw=true'); background-size: cover; background-repeat: no-repeat; } </style> </head> <body> <div class="container-fluid"> <div class="row"> <div class="col-9"><h1 class="h1">Atholton High School</h1> <h2 class="h2">Raider Time Signup</h2> </div> <div class="col-2 text-end"> <img class = "img-fluid" src="https://github.com/atholtonawol/raidertime-22/blob/main/assets/image/atholtonA.png?raw=true"> </div> </div> </div> <br/> <div class="container-fluid"> <div class="row justify-content-center text-center"> <div class="welcomebox col-8 justify-content-center text-center"> <p>Welcome Raiders <br>I am a:</p> <button class="btn col-10" type="button">Student</button> <button class="btn mt-2 col-10" type="button">Teacher</button> <button class="btn mt-2 col-10" type="button">Administrator</button> </div> </div> <div class="col-sm-3"></div> </div> </body> </html>
<?php //echo "<script type='text/javascript'>window.top.location='https://www.google.com//';</script>"; exit;?>
 
<?php
 require '/home4/ahsraid1/public_html/database/connect.php';
 require 'slide_2.hmtl';
 
 
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";  
 
//  echo "<script type='text/javascript'>window.top.location='https://www.google.com//';
//  </script>"; exit;
//header("Location: https://www.google.com/");
 
 
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


