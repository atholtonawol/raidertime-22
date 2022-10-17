<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- style sheets, bootstrap, javascript -->
  
  <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS -->
  <style>
    :root {
      --atholton-green: #16542eff;
    }
    
    body {
      font-family: 'Graduate';
      font-size: 22px;
    }

    .btn{
      background-color:  #8ea484ff;
      border: 1px solid white;
      padding:  10px;
    }
 
    .btn:hover{  <!-- CSS -->
  <style>
    :root {
      --atholton-green: #16542eff;
    }
    
    body {
      font-family: 'Graduate';
      background-color: white;
      transition: 0.7s;
    }

    div {}

    .spacing {}

    #pass-preview {
      background: white;
    }

    .modal-content {
        background: var(--atholton-green);
    }
    
    .form-popup {
      background-color: var(--atholton-green);
      display: none;
      height: 80%;
      margin: auto;
      outline: 5px dotted white;
      position: auto;
      width: 70%;
      border-style: solid;
      border-width: 20px;
      border-color: var(--atholton-green);
    }

    h1 {
      background: transparent;
      color: white;
      margin-top: 7%;
      text-align: center;
    }

    h2 {
      background: transparent;
      color: white;
      margin: 2%;
      text-align: center;
    }

    h3 {
      background: transparent;
      color: white;
      font-family: Calibri;
      margin: 5%;
      text-align: center;
    }

    h4 {
      background: white;
      color: #16542E;
      font-weight: bold;
      margin-top: 10%;
      text-align: center;
    }

    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
      max-width: 100%;
      height: auto;
    }

    option {
      background: white;
      font-family: Calibri;
      font-size: 15px;
    }

    p {
      background: white;
      color: #16542E;
      font-family: Calibri;
    }

    select {
      background: white;
      font-family: Calibri;
      font-size: 18px;
      margin-bottom: 2%;
      margin-left: 25%;
      padding: 3px;
      width: 50%;
    }

    ul {
      list-style-type: none;
      background: white;
    }

    li {
      background: white;

    }

    li span {
      display: inline-block;
      background: white;
    }

    #title {
      margin-top: 8%;
    }

    #student {
      font-family: Calibri;
    }
  </style>
  
</head>
  
<body>
  <!-- HTML -->
  <div class="container mt-3">
    <!-- Button that opens popup to change signup -->
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myPopup">
      Change Signup
    </button>
  </div>

  <div class="modal" id="myPopup">
      <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header border-0">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <!-- Modal body.. -->
               <div class="position-relative">
    </div>
    <h1 class="display-5">Change Signup for MM/DD/YY</h1>
    <!--Change next line to display teacher name and room number for current signup.-->
    <h3>[Teacher Name] - [Room Number]</h3>
    <h2 class="display-6">New Signup Selection</h2>

    <form method = "POST">
    <td>
      <select name="teacher-dropdown" id="teacher-dropdown">
        <option autoComplete="on" list="suggestions" selected>Select New Teacher</option>
        <option value="Rhee, Hana">Rhee, Hana</option>
        <option value="Stuppy, Thomas">Stuppy, Thomas</option>
        <option value="Chaudhry, Mabrooka">Chaudhry, Mabrooka</option>
        <option value="Peddicord, Scott">Peddicord, Scott</option>
         <?php 
             
        require '/home4/ahsraid1/public_html/database/connect.php';
        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         } 
   
              $sql = 'SELECT teachers, room FROM teacherInfoOld';
              $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
             //FRONT END FIGURE OUT FORMATTING. ALIGN THE ROOM NUMBER TO THE RIGHT
             echo "<option>". $row['teachers'].$row['room']."</option>";
          }
          ?>
      </select>
    </td>
      <div class="col text-center">
      <button type="submit" class="btn mt-3" style="margin-bottom: 1%">Submit Teacher
      </button>
      </div>
    </form>

    <!--When new teacher is selected from dropdown, pass preview should show.-->

    <div class="pass-preview" style="background: white">
      <h4 class="display-6" style="margin-top: 3%; padding-top: 20px">Pass Preview</h4>
      <ul>
        <li>
          <span id="title">NAME:</span>
          <span id="student">[First] [Last]</span>
        </li>
        <li>
          <span id="title">RAIDER TIME TEACHER:</span>
          <span id="student">[Last], [First]</span>
        </li>
        <li>
          <span id="title">LOCATION:</span>
          <span id="student">[Classroom No.]</span>
        </li>
        <li style="padding-bottom: 5%">
          <span id="title">DATE:</span>
          <span id="student">MM/DD/YY</span>
        </li>
      </ul>
    </div>

    <!--When student is satisfied with pass preview and new teacher selected, they press button to enact changes.-->

            </div>
        </div>
      </div>
  </div>  

  
    <?php
    if(isset($_POST["teacher-dropdown"]))
    {
    $var = $_POST["teacher-dropdown"];
    $sql = "UPDATE studentInfo SET newTeacher = '{$var}' WHERE lastName = 'Aballo'";
    echo $var; 
      if(mysqli_query($conn, $sql))
      {
      echo "It worked";
      }
      else
      {
      echo mysqli_error($conn);
      }
//     $result = mysqli_query($conn, $sql);
    }
    ?>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    
  </script>

</body>

</html>
