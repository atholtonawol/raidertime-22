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
    
  <style>
    body {
      font-family: 'Graduate';font-size: 22px;
      background-color: #eeeeee;
    }
  </style>
</head>
  
<body>
   <header> 
    
   </header>
    
   <?php
     require('menu_bar.html');
     require('slide_6_backend_get.php');
   ?>
    
    <!--
    <nav>
      <button type = "button">Home</button>
    </nav>
    -->
    
    <h3>Welcome, [User Name]</h3>
  
    <div class = "pass">
      <p class = "title">Raider Time Pass</p>
      <p class = "name">Name: asdf</p>
      <p class = "teacher">Period 2 Teacher: [Last],[First]</p>
      <!-- <p class = "destination">Destination: [Last, First]</p> -->
      <p class = "location">Location: [Classroom No.]</p>
      <p class = "date">Date: MM/DD/YYYY</p>
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
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" style="margin-top: 5%"></button>
            </div>
            <div class="modal-body">
              <!-- Modal body.. -->
               <div class="position-relative">
    </div>
    <h1 class="display-5">Change Signup for MM/DD/YY</h1>
    <!--Change next line to display teacher name and room number for current signup.-->
    <h5>[Teacher Name] - [Room Number]</h5>
    <h2 class="display-6">New Signup Selection</h2>

    <td>
      <select name="teacher-dropdown" id="teacher-dropdown">
        <option autoComplete="on" list="suggestions" selected>Select New Teacher</option>
        <option value="Rhee, Hana">Rhee, Hana</option>
        <option value="Stuppy, Thomas">Stuppy, Thomas</option>
        <option value="Chaudhry, Mabrooka">Chaudhry, Mabrooka</option>
        <option value="Peddicord, Scott">Peddicord, Scott</option>
      </select>
    </td>
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
     <div class="col text-center">
              <button type="button" class="btn mt-3" style="margin-bottom: 1%">Submit
      Change</button>
     </div>
            </div>
        </div>
      </div>
  </div>  
    
    <footer>
    
    </footer>

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    
  </script>
    
  </body>

</html>

<!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    
  </script>
