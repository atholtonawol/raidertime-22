<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="slide_10.css">
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
    
    <style>
      body {
        font-family: 'Graduate';font-size: 22px;
        background-color: gainsboro;
        text-align: center;
      }
      </style>
  </head>
  <body>
    <?php
      require('header.html');
    ?>
    <div class="pt-3 container-fluid">
        <h1 id="heading">Raider Time Schedule</h1>
        <br>
          <div class="row justify-content-center">
            <div class = "schedule col-5 justify-content-center">
            <table class="table">
        
                  <tr>
                    <td class="period">Period 1</td>
                    <td class="time"> 7:25am - 8:10am </td>
                  </tr>
                  <tr>
                    <td class="period">Period 2</td>
                    <td class="time">8:15am - 9:00am</td>
                  </tr>
                  <tr>
                    <td class="period">Raider Time</td>
                    <td class="time"> 9:05am - 9:30am</td>
                  </tr>
                  <tr>
                    <td class="period">Period 3</td>
                    <td class="time">9:35am - 10:25am</td>
                  </tr>
                  <tr>
                    <td class="period">Period 4</td>
                    <td class="time">10:30am - 12:30pm</td>
                  </tr>
                  <tr>
                    <td>A Lunch</td>
                    <td class="time">10:30am -11:00am</td>
                  </tr>
                  <tr>
                    <td>B Lunch </td>
                    <td class="time">11:00am - 11:30am</td>
                  </tr>
                  <tr>
                    <td>C Lunch</td>
                    <td class="time">11:30am - 12:00am</td>
                  </tr>
                  <tr>
                    <td>D Lunch</td>
                    <td class="time">12:00pm - 12:30pm</td>
                  </tr>
                  <tr>
                    <td class="period">Period 5</td>
                    <td class="time">12:35pm - 1:10pm</td>
                  </tr>
                  <tr>
                    <td class="period">Period 6</td>
                    <td class="time">1:25pm - 2:10pm</td>
                  </tr>
          
              </table>
            </div>
            </div>
            </div>
    
    
  </body>
  </html>
