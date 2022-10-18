<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="slide_11.css">
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    <?php 
     require '/home4/ahsraid1/public_html/database/connect.php';
        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
         } 
    ?>
    <style>
      body {
        font-family: 'Graduate';font-size: 22px;
        background-color: gainsboro;
      }
      </style>
  </head>
  <body>
    <?php
include('menu_bar.html');
    ?>
    <div class="container">
    <h1>Raider Time Pass History</h1>
    <div class=" px-7 pt-3 container-fluid">
      <div class="row">
        <div class = col-7>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Teacher</th>
                <th scope="col">Room #</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>9/12/22</td>
                <td>Mrs. Rhee</td>
                <td>B125</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class=" col-5 container-fluid">
          <h2>Default Sign-Up </h2>  
          <td>
            <select name="teacher-dropdown" id="teacher-dropdown">
              
              <option autoComplete="on" list="suggestions" selected>Select New Teacher</option>
              <option value="Rhee, Hana">Rhee, Hana</option>
              <option value="Stuppy, Thomas">Stuppy, Thomas</option>
              <option value="Chaudhry, Mabrooka">Chaudhry, Mabrooka</option>
              <option value="Peddicord, Scott">Peddicord, Scott</option>
             <?php 
              $sql = 'SELECT teachers, room FROM teacherInfo';
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){
                //FRONT END FIGURE OUT FORMATTING. ALIGN THE ROOM NUMBER TO THE RIGHT
              echo "<option>". $row['teachers'].$row['room']."</option>";
             }
              ?>
            </select>
          </td>
      
        </div>
        </div>
      <!--Change Signup Popup-->
      <div class="h-100 d-flex align-items-center justify-content-center">
    <button type="button" class="btn btn-outline-dark btn-lg" onclick="openPopup()">Change Signup</button>
    
  </div>
  <div class="form-popup" id="myPopup">
    <!--Change next line to display today's date.-->
    <div class="position-relative">
      <div class="position-absolute top-0 start-0 translate-middle"><button class="btn-cancel"
          onclick="closePopup()">&#10006</button></div>
    </div>
    <h1 class="display-5">Change Signup for MM/DD/YY</h1>
    <!--Change next line to display teacher name and room number for current signup.-->
    <h3>[Teacher Name] - [Room Number]</h3>
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
      <h4 class="display-6">Pass Preview</h4>
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
        <li>
          <span id="title">DATE:</span>
          <span id="student">MM/DD/YY</span>
        </li>
      </ul>
      <img src="raider.png" alt="Raider Logo">
    </div>

    <!--When student is satisfied with pass preview and new teacher selected, they press button to enact changes.-->
    <button type="button" class="btn btn-outline-dark" style="margin-left: 25%; width: 50%; margin-top: 5%">Submit
      Change</button>
  </div>
  <div> </div>
</body>


<script>
  function openPopup() {
    document.getElementById("myPopup").style.display = "block";
  }

  function closePopup() {
    document.getElementById("myPopup").style.display = "none";
  }
</script>
<!--Change Signup Popup ends here-->
      
      <div class="row">
        <h1 id="">Change Password</h1>
        <div class="changepassbox col-9 mt-5 text-center">    
            <form class="login" method = "POST">
              <p class="passboxtext">Enter your current password:</p>
              <input type="text" class="form-control" id="currentpass" name="currentpass" placeholder="current password" required><br>
              <p class="passboxtext">Enter your new password:</p>
              <input type="text" class="form-control"id="newpass" name="newpass" placeholder="new password" required><br>
              <p class="passboxtext">Confirm your new password:</p>
              <input type="text" class="form-control" id="newpass2" name="newpass2" placeholder="new password" required>
                 <br>
                 <input type="submit" id="submit"value="Change Password"/>
                 </form>
                
        </div>
      </div>
    </div>
  </body>
  </html>
