<html>
  <head>
    <!--link rel="stylesheet" href="frontEnd/test.css"-->
    <title>RaiderTime Home: Admin View</title>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- style sheets, bootstrap, javascript -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="slide_13_admin_home.css">
  
  </head>
  
  <body>
       <?php
     require('nav_bar.html');
   ?>
    
    
    <h5 style="font-family: Calibri; text-align: center; margin-top: 5%">Please search for a teacher to view their roster or for a student to view their current sign-up.</h5>
    <form class="search" method = "POST">
            <input type="text" id="userSearch" name="" placeholder="" required><br>
            <input type="submit" id="searchEnter"value="SEARCH"/>
    </form>

    <!--When admin searches for a student, the following code should pop up underneath the search bar.-->
    <div class = "student" style="background-color: var(--atholton-green); color: white"> 
      <ul>
        <li>
          <span id="title">STUDENT NAME:</span>
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
    
    <!--When admin searches for a teacher, the following code should pop up underneath the search bar.-->
    <div class = "teacher" style="background-color: var(--atholton-green); color: white"> 
        <ul>
        <li>
          <span id="title">TEACHER NAME:</span>
          <span id="teacher">[First] [Last]</span>
        </li>
        <li>
          <span id="title">LOCATION:</span>
          <span id="teacher">[Classroom No.]</span>
        </li>
        <li>
          <span id="title">DATE:</span>
          <span id="teacher">MM/DD/YY</span>
        </li>
        </ul>
      <div class= "px-4 container-fluid">
        <div class="row">
        <div class = col-20>
        <table class="table">
        <thead style="font-size: 24px">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Students in Class during RaiderTime</th>
        </tr>
        </thead>
          <tbody style="font-size: 20px">
            <tr>
              <th scope="row"></th>
              <td>Billy Bob Joe</td>
            </tr>
         </tbody>
         </table>
        </div>
      </div>
    </div>
    </div>
    <!--When no teacher or student is found, display the following text.-->
    <h5 style="font-family: Calibri; text-align: center; margin-top: 5%; margin-bottom: 5%">Sorry, no results were found for '___'.</h5>
<?php
     require('footer.html');
   ?>
  </body>
