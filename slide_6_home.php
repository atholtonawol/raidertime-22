<html>
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
  <style>
    body {
      font-family: 'Graduate';font-size: 22px;
      background-color: #eeeeee;
    }
  </style>
</head>
  
<body>
    
   <?php
     require('header.html');
     require('slide_6_backend_get.php');
   ?>
    
   
    
    <h3>Welcome, [User Name]</h3>
  
    <div class = "pass">
      <p class = "title">Raider Time Pass</p>
      <p class = "name">Name: <?php echo $first_name." ".$last_name ?></p>
      <p class = "teacher">Period 2 Teacher: <?php echo $hr_name ?></p>
      <!-- <p class = "destination">Destination: <?php echo $new_name ?></p><-->
      <p class = "location">Location: <?php echo $new_name ?>, <?php echo $new_room ?></p>
      <p class = "date">Date: <?php echo date("F jS, Y") ?></p>
      <img style="padding-bottom: 5%" src = "https://ahs.hcpss.org/sites/default/files/atholtonhs.png"/>
    </div>

    <div class="col text-center" style="margin-top: 2%">
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
        <option autoComplete="on" list="suggestions" selected>Choose a teacher</option>
        <!--
        <option value="Rhee, Hana">Rhee, Hana</option>
        <option value="Stuppy, Thomas">Stuppy, Thomas</option>
        <option value="Chaudhry, Mabrooka">Chaudhry, Mabrooka</option>
        <option value="Peddicord, Scott">Peddicord, Scott</option>
        -->
         <?php 
             for($i = 1; $i <= count($list_teacher); $i++) {
                 //echo '<option>'.$list_teacher[$i][0].', \t\t'.$list_teacher[$i][1].'</option>';
                 $optionFormatted = sprintf("<option value='%i'>%-4s,%-8s", $list_teacher[$i][0], $i, $list_teacher[$i][0]);
                 $optionHTML = str_replace(' ', '&nbsp;', $optionFormatted);
                 echo $optionHTML;
             }
        
            /*
            require '/home4/ahsraid1/public_html/database/connect.php';
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
             } 
   
                 $sql = 'SELECT teachers, room FROM old_teacherInfo';
                 $result = mysqli_query($conn, $sql);
             while($row = mysqli_fetch_array($result)){
                //FRONT END FIGURE OUT FORMATTING. ALIGN THE ROOM NUMBER TO THE RIGHT
                 echo "<option>". $row['teachers'].$row['room']."</option>";
              }
             */
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

  
    <!--<?php
    if(isset($_POST["teacher-dropdown"]))
    {
    $var = $_POST["teacher-dropdown"];
    $sql = "UPDATE student_info SET newTeacher = '{$var}' WHERE lastName = 'Aballo'";
    echo $var; 
      if(!mysqli_query($conn, $sql))
      {
      echo mysqli_error($conn);
      }
//     $result = mysqli_query($conn, $sql);
    }
    ?>-->


  
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    
  </script>
 <a href="slide_12_teacher_home.php">Teacher view</a>
     <?php
     require('footer.html');
   ?> 
  </body>

</html>
    
  </script>
