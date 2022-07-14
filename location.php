<?php include './php/control.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Material Kit by Creative Tim
  </title>
  <script>
    function showPosition() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                document.getElementById("result").innerHTML = positionInfo;
                var lat =  position.coords.latitude;
                var log =  position.coords.longitude;

                window.location.href = "./location.php?lattitude="+lat+"&Longitude="+log;
            });
        } else {

          window.location.href = "./location.php?errorLocation=error";
            
        }
    }
   </script>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css">
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="./user.php">
          Beauty <img src="./assets/img/hair-cutting (1).png" width="40" alt=""> Salon </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" >
              <i class="fa fa-phone-square text-primary" aria-hidden="true"></i> Contact - US
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom"  data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter text-primary"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square text-primary"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram text-primary"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" style="background-image: url('./assets/img/bg.jpg'); padding: 0!important; margin: 0 !important;">
    <div class="container" >
      <div class="row" style="margin-top: 50px;">
        <div class="col-sm-6">
          <div class="card" style="background-color: rgba(255, 255, 255, 0.685);">
            <div class="card-body text-center">
                <img src="./assets/img/location.png" width="300" alt="">
                <div class="col-lg-6 text-center" style="padding-top: 3px !important;">
                <h2 class="text-dark"></h2>
                <div id="result">
                    <!--Position information will be inserted here-->
                </div>
                <button onclick="showPosition();" type="button" class="btn bg-primary text-white" style="border-radius: 20px;">Enable Location</button>
                </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="lowerSection text-center">
      <div class="titleLowerSection">
        <h3>Hair <img src="./assets/img/hair-cutting (1).png" width="80" alt=""> Styles</h3>
      </div>
      <div class="card">
        <img src="./assets/img/Mohawk.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Style</p>
          <p class="styleTile text-primary"> Mohawk</p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/StraightBack.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Style</p>
          <p class="styleTile text-primary"> Straight back</p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/StraightUp.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Style</p>
          <p class="styleTile text-primary"> Straight up</p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/Wig.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Style</p>
          <p class="styleTile text-primary"> Wig</p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </section>

  <!--  End Modal -->
  <footer class="footer text-center">
    <div class="container text-center">
      <a class="navbar-brand text-center">
        Beauty <img src="./assets/img/hair-cutting (1).png" width="30" alt=""> Salon </a>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>

  
</body>

</html>