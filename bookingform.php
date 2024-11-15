<?php session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Goaasy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Goaasy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="rooms.php" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="restaurant.php" class="nav-link">Restaurant</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          <div class="text">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>
            <h1 class="mb-4 bread">Booking Form</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section bg-light">
    <div class="container">
      <form action="submitbooking.php" method="post">

        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="">Name : </label>
            <input type="text" readonly class="form-control" name="name" id="" value="<?php if (isset($_SESSION['name'])) {
                                                                                        echo $_SESSION['name'];
                                                                                      } ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="">Email : </label>
            <input type="email" readonly class="form-control" name="email" id="" value="<?php if (isset($_SESSION['email'])) {
                                                                                          echo $_SESSION['email'];
                                                                                        } ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="">Contact No : </label>
            <input type="text" maxlength="10" readonly class="form-control" name="contact" id="" value="<?php if (isset($_SESSION['contact'])) {
                                                                                                          echo $_SESSION['contact'];
                                                                                                        } ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="">Room Type : </label>
            <select class="form-control" name="roomtype" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="Suite Room">Suite Room</option>
              <option value="Family Room">Family Room</option>
              <option value="Luxury Room">Luxury Room</option>
              <option value="Superior Room">Superior Room</option>
              <option value="Classic Room">Classic Room</option>
              <option value="Goassy Room">Goassy Room</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="">Rooms : </label>
            <input type="number" min="0" class="form-control" name="rooms" id="">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="">Chcek in Time : </label>

            <div class="row">

              <div class="col-md-4">
                <input type="date" class="form-control" name="checkindate">
              </div>
              <div class="col-md-4">
                <input type="time" class="form-control" name="checkintime">
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="">Chcek out Time : </label>

            <div class="row">

              <div class="col-md-4">
                <input type="date" class="form-control" name="checkoutdate">
              </div>
              <div class="col-md-4">
                <input type="time" class="form-control" name="checkouttime">
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <input type="submit" class="form-control" name="submitbook" id="submitbook">
          </div>
        </div>
      </form>



    </div>
  </section>




  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Goaasy Hotel</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Useful Links</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Rooms</a></li>
              <li><a href="#" class="py-2 d-block">Amenities</a></li>
              <li><a href="#" class="py-2 d-block">Gift Card</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Privacy</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Career</a></li>
              <li><a href="#" class="py-2 d-block">About Us</a></li>
              <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              <li><a href="#" class="py-2 d-block">Services</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, Lonavala, Mumbai</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 7412589630</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@goaasy.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>