<html>
  <head>
    <!--link rel="stylesheet" href="frontEnd/test.css"-->
    <link rel="stylesheet" href="slide_6.css">
    <title>Raider Time Home</title>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>

    <!-- Links for github and repl.it to link to style sheet and bootstrap-->
    <link href='slide_6.css' rel='stylesheet'>
    <link href='style.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="stlye.css"/>
    
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
      require('slide_12_backend_get.php');
    ?>
    
    
    <h3>Welcome, <?php echo $teacher_name ?></h3>
    <p class = "title">Radier Time Class</p>
    <!-- This code was originally in the green box #34 -->
        <!-- Start bootstrap -->
  <div class="container"> 
    <div class="row">
      <div class="d-flex align-items-center">
        <div class="col-md-7">
          <p class = "name">Name: <?php echo $teacher_name ?></p>
          <p class = "location">Classroom: <?php echo $teacher_room ?></p>
          <p class = "date">Date: <?php echo date("F jS, Y") ?></p>
        </div>
        <!-- start code inside of green box -->
    <!-- For the code inside of the green box, everything that had style="whitesmoke" was css code to alter color of output text since I was struggling to do so via a class -->
     
        <div class="col-md-6">
          <div class = "pass">
            <div class=" px-7 pt-3 container-fluid">
              <div class="row">
                <div class = col-7>
                  <table class="table">
                    <thead style="font-size: 25px">
                    <tr>
                      <th scope="col" style="color: whitesmoke" >#</th>
                      <th scope="col" style="color: whitesmoke">Students in Class during RaiderTime</th>
                    </tr>
                  </thead>
                  <tbody style="font-size: 20px">
                  <?php
                  echo "PHP LOOP";
                    /*for($i = 0; $i < count($student_list); $i++) {
                      echo '
                        <tr>
                        <th scope="row" style="color: whitesmoke">1</th>
                        <td style="color: whitesmoke">Billy Bob Joe</td>
                        </tr>
                      ';
                      echo $i;
                    }*/
                  ?>
                  <!--
                  <tr>
                    <th scope="row" style="color: whitesmoke">1</th>
                    <td style="color: whitesmoke">Billy Bob Joe</td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: whitesmoke" >2</th>
                    <td style="color: whitesmoke">Thomas the Train</td>
                  </tr> 
                  <tr>
                    <th scope="row" style="color: whitesmoke">3</th>
                    <td style="color: whitesmoke">Ben Dover</td>
                  </tr> 
                  <tr>
                    <th scope="row" style="color: whitesmoke">4</th>
                    <td style="color: whitesmoke">Ryem Ploski</td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: whitesmoke">5</th>
                    <td style="color: whitesmoke">Liam Tronki</td>
                  </tr>
                  -->
                </tbody>
                </table>
              </div>
              <img src = "https://ahs.hcpss.org/sites/default/files/atholtonhs.png"/>
            </div>
          </div>
        </div> <!-- End green box class called pass -->
     </div> <!-- Col-md-6 -->    
 </div> <!-- End justify content -->
  </div> <!-- End bootstrap row -->
  </div> <!-- End bootstrap container -->



    <footer>
    
    </footer>
    
  </body>

</html>
