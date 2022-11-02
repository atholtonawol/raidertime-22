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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="style.css" />

</head>
  
<body>
    
   <?php
     require('slide_6_backend_get.php');
   ?>
    
   
    
    <h3>Welcome, [User Name]</h3>
  
    <div class = "pass">
      <p class = "title">Raider Time Pass</p>
      <p class = "name">Name: <?php echo $first_name." ".$last_name ?></p>
      <p class = "teacher">Period 2 Teacher: <?php echo $hr_name ?></p>
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

    <form id = "teacher-selection" method = "POST">
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
                 echo '<option value='.$list_teacher[$i][0].'>'.$list_teacher[$i][1].', '.$list_teacher[$i][2].'</option>';
                 $optionFormatted = sprintf("<option value='%i'>%-4s,%-8s", $list_teacher[$i][0], $i, $list_teacher[$i][0]);
                 $optionHTML = str_replace(' ', '&nbsp;', $optionFormatted);
                 //echo $optionHTML;
             }
          ?>
      </select>
    </td>
      <div class="col text-center">
      <button type="submit" class="btn mt-3" style="margin-bottom: 1%" onclick='window.opener.location.reload(true);'>Submit Teacher</button>
      </div>
    </form>

    <!--When new teacher is selected from dropdown, pass preview should show.-->
    <!--
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
    -->
              
    <!--When student is satisfied with pass preview and new teacher selected, they press button to enact changes.-->

            </div>
        </div>
      </div>
   </div>  

  
   <!--UPDATE DATABASE WITH STUDENT'S SELECTION-->
   <?php
       if(isset($_POST["teacher-dropdown"])) {
           $selection = $_POST["teacher-dropdown"];
           print_r($selection);
           $sql = "UPDATE student_info SET newTeacher = '{$selection}' WHERE user = '{$userName}'";
           
           if(!mysqli_query($conn, $sql)) { //DOES THIS IF STATEMENT EVEN WORK???
               echo mysqli_error($conn);
           } else {
             echo "UISDFHNJKSDHFSDF";
             header("refresh: 0");
             header("refresh: 0");
           }
       }
   ?>
  
  <!--REFRESH PASS TO UPDATE INFO-->
  <!--<script>
    $form = $("#teacher-selection"); 
    $form.on("submit",function()
    {
      alert("submitting..");
      //do ajax
       $.ajax({
          url:<submit url>,
          type:post,
          success:function() {
            location.reload();
          }
      });
    });
    $form.submit();
    </script>-->



  
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    
  </script>
 <a href="slide_12_teacher_home.php">Teacher view</a>
    <?php
      require('header.html');
    ?>
    
    <?php
     require('footer.html');
   ?>
  </body>

</html>
    
  </script>
