<?php
//Returns the contents of a div 
function getDiv($divName) {
  echo "getdiv";
  $dom = new DOMDocument();
  $dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $divContent = $xpath->query('//div[@id="'.$divName.'"]');
}


echo("SLIDE 6 GET<br>");

$servername = "50.87.190.153";
 $username = "ahsraid1_awol23";
 $password = "12345";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, "ahsraid1_awol23");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 


/*
   $sql = 'SELECT firstName, lastName FROM studentInfo WHERE user="kdamav7949"';
   $result = mysqli_query($conn, $sql);
   $var = mysqli_fetch_all($result, MYSQLI_ASSOC);

   echo "<br>var: ";
   print_r($var);
   echo "<br>sql: ";
   print_r($sql);
   echo "<br>result: ";
   print_r($result);


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

 echo $var[0]['firstName'];
   foreach($var as $name)
   {
     echo $name['firstName'];
     break;
      
   }

*/

//$userName = $_POST["username"];
$userName = "kdamav7949";


//if(isset($_POST['username']))
if(true)
  {
    $sql = 'SELECT firstName, lastName FROM studentInfo WHERE user="'.$userName.'"';   //The query sent to the SQL server (mySQL?)
    $result = mysqli_query($conn, $sql);   //Connects to the SQL server and sends the $sql query. The server responds with an object containing the result of the query.
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);   //Takes the result object from the server, and turns it into an associative array that is easy to reference in our code.
 
    echo "<br>var: ";
    print_r($var);
    echo "<br>sql: ";
    print_r($sql);
    echo "<br>result: ";
    print_r($result);
    echo "<br>var 0: ";
    print_r($var[0]['firstName']);
    
    if (count($var) != 1) { //Ensure that exactly one result was found
      echo 'Invalid SQL result: Number of results is '.count($var).' instead of 1!';
    } else {
      //These variables will be referenced by slide_6_home.php
      $first_name = $var[0]['firstName'];
      $last_name = $var[0]['lastName'];
     
      $passDiv = getDiv('pass');
      foreach($var[0] as $key => $value){
        $passDiv = str_replace('{'.strtoupper($key).'}', $value, $passDiv);
      }

      
     print_r(getDiv("pass"));
      document.getElementById('pass').innerHTML = <?php print_r(getDiv("pass")); ?>;
    }
    
  
  } else {
    echo "isset post username error";
  }



?>
