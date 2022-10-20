<!doctype html>
<html lang = "en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!--Bootsrap CSS-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
 <link rel = "stylesheet" href = "slide_9.css">

 <title>FAQs</title>
 <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet'>
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
  ?>
<div class = "container">
    <div class = "row">
        <div class = "col-11 mx-auto">
        <div class = "faq">
            <h3 class = "faqHeader">Frequently Asked Questions</h3>
            <div class="accordion" id="accordionOne">
             
                <div class="accordion-item">
                  <h2 class = "accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Question 1: Why is signing up neccessary?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class = "h5">Signing up for your desired classroom in advance helps prevent overcrowding and helps organize our weekly Raider Time.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Question 2: How do I sign up for a club meeting?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class = "h5">To sign up for a club meeting you need to sign up for the teacher's classroom who sponsors the club. If you are unsure, ask your club sponsor where you will be meeting!</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Question 3: Why can't I find the classroom I want?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class = "h5">Any teacher who is not available for the Raider Time will not show up on the dropdown list. If you think we are missing a teacher, please let us know by emailing us at atholtonADS@gmail.com.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Question 4: I'm having trouble using the website!
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <p class = "h5">If you have a question not answered on this page or are experiencing a bug with our website, please contact us at atholtonADS@gmail.com.</p>
                      </div>
                    </div>
                  </div>
              </div>

        </div>
    </div>
   </div>
  </div>

  <div class = "row">
    <div class = "col-5 mx-auto">
      <div class = "faqBottom">
        <p>Have any other questions? Email us! atholtonads@gmail.com</p>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
