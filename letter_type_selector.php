<?php

require_once './GFirestore.php';

error_reporting(0);

$event=new Firestore('event');

session_start();

if(isset($_POST["confirm"])){
  $venue = [
      ["path"=>"Venue","value"=>$_POST["confirm"]]
    ];
  $event->updateDocument($_SESSION['name'],$venue);

}

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Letter Type Selector</title>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-firestore.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">

    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">

      <!-- CSS StyleSheets -->
    <link rel="stylesheet" href="assets\css\letter_type_styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
      <!-- BootStrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

  <body>
      <nav class="navbar navbar-light navbar-expand-md bg-light border rounded-0 shadow navigation-clean-button">
        <div class="container-fluid">
        <a class="navbar-brand" data-aos="fade" href="createevent.php">ProjekFlow</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav text-primary ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="createevent.php">Book</a></li>
                </ul>
                <span class="navbar-text actions">
                    <button class="btn btn-light action-button" role="button" onclick="mainApp.logOut()">Log Out</button>
                </span> <!-- double check on the logout() -->
            </div>
        </div>
    </nav>

  <div class="header">
    <img src="assets\img\um-logo.png_header.png" alt="um logo">
    <h1 class="header-title">Letter Type Selector</h1>
  </div>
  <hr class="colored" />


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets\img\Slide_1_img.jpg" class="d-block w-100" alt="first slide">
        <div id ="Slide-one" class="carousel-caption d-none d-md-block">
      <h1>Book A Venue</h1>
      <p>Book your desired venue that is conducive and suitable for your specific needs.</p>
        <button onclick="window.open('Form_first_page_venue.php','_blank')" name="button_book_venue" type="button" class="btn btn-primary btn-lg">Create Letter</button>
      </div>

    </div>

    <div class="carousel-item">
      <img src="assets\img\Slide_2_img.jpg" class="d-block w-100" alt="second slide">

      <div id="Slide-two" class ="carousel-caption d-none d-md-block">
      <h1>Event Approval</h1>
      <p>Got an event that needs approval from authorities and staff of Univeristy of Malaya?</p>
      <button onclick="window.open('Form_first_page_event.php','_blank')" name ="button_event_approval" id="button-two" type="button" class="btn btn-primary btn-lg">Create Letter</button>
    </div>

    </div>

    <div class="carousel-item">
      <img src="assets\img\Slide_3_img_edited.jpg" class="d-block w-100" alt="third slide">
      <div id="Slide-three" class = "carousel-caption d-none d-md-block">
        <h1>Request Additional Equipment</h1>
        <p>Request equipment that is not readily available in the venue or needed for other important activities</p>
          <button onclick="window.open('Form_first_page_equipment.php','_blank')" name="button_request_equipment" id="button-three" type="button" class="btn btn-primary btn-lg">Create Letter</button>
    </div>
      </div>

      <div class="carousel-item">
        <img src="assets\img\Slide_4_img.jpg" class="d-block w-100" alt="third slide">
        <div id="Slide-four" class = "carousel-caption d-none d-md-block">
          <h1>Order Catering Services</h1>
          <p>Order food for your guests/participants from the many cafterias available throughout the campus</p>
            <button onclick="window.open('Form_first_page_catering.php','_blank')" name ="button_catering_services" id="button-four" type="button" class="btn btn-primary btn-lg">Create Letter</button>
      </div>
        </div>

        <div class="carousel-item">
          <img src="assets\img\Slide_5_img.jpg" class="d-block w-100" alt="third slide">
          <div id="Slide-five" class = "carousel-caption d-none d-md-block">
            <h1>Request Security Protection</h1>
            <p>Outdoor activities/events especially require police security to ensure everyone's safety</p>
              <button onclick="window.open('Form_first_page_security.php','_blank')" name="button_request_security" id="button-five" type="button" class="btn btn-primary btn-lg">Create Letter</button>
        </div>
          </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <script src="assets/js/fireBase.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/other.js"></script>
  </body>
</html>
