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
        else{
          echo"connected";
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
//       require('menu_bar.html');
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
            </select>
          </td>
      
        </div>
        </div>
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
