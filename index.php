<?php include './php/control.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Salon
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css">
</head>

<body class="index-page sidebar-collapse">

  <div id="userInterFaceLogin">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="index.php">
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
              <a href="https://twitter.com/BeautyS34341197?s=09" class="nav-link" rel="tooltip" title="" data-placement="bottom"  data-original-title="Follow us on Twitter" rel="nofollow">
                <i class="fa fa-twitter text-primary"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" rel="tooltip" title="" data-placement="bottom" data-original-title="Like us on Facebook" rel="nofollow">
                <i class="fa fa-facebook-square text-primary"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://www.instagram.com/bueaty.salon?r=nametag" class="nav-link" rel="tooltip" title="" data-placement="bottom" data-original-title="Follow us on Instagram" rel="nofollow">
                <i class="fa fa-instagram text-primary"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg.jpg');">
      <div class="container">

      <div class="alert alert-success alert-dismissible fade show" style="display: <?php echo $registerSccess; ?>;" role="alert">
        <strong>Success!</strong>  User Created!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>

      <div class="alert alert-danger alert-dismissible fade show" style="display: <?php echo $registerFail; ?>;" role="alert">
        <strong>Error!</strong>  Faild to create user accout!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>

      <div class="alert alert-warning alert-dismissible fade show" style="display: <?php echo $userExist; ?>;" role="alert">
        <strong>Warning!</strong>  User Exist!
        <button type="button" class="btn-close text-right" data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>

        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            
            <div class="brand">
              <h1>Beauty Salon</h1>
              <h3>The relevance of beauty reveals itself step by step</h3>
              <button class="btn btn-white" id="mainBtnSignIn" data-bs-toggle="modal" data-bs-target="#login">Sign in</button><br>
              <a class="text-white" data-bs-toggle="modal" data-bs-target="#RegisterUser">Register</a>
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
          <p class="styleTile text-primary">Mohawk R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Mohawk'); ?></p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary">Book Now</button>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/StraightBack.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="styleTile text-primary">Straight back R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Straight back'); ?></p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary">Book Now</button>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/Wig.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="styleTile text-primary">Wig R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Wig'); ?></p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary">Book Now</button>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/StraightUp.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="styleTile text-primary">Straight up R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Straight up'); ?></p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="btn btn-primary">Book Now</button>
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


  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
        <form method="POST">
          <div class="text-center p-5">
              <a class="text" href="index.html">
                Beauty <img src="./assets/img/hair-cutting (1).png" width="40" alt=""> Salon </a>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
            <div class="mb-3 text-center p-2">
              <a href="">Forgot Password</a>
              <a href="" data-bs-toggle="modal" data-bs-target="#RegisterUser">Register</a>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Register-->
  <div class="modal fade" id="RegisterUser" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginLabel">Creative account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
          <div class="text-center p-5">
            <a class="text" href="index.html">
              Beauty <img src="./assets/img/hair-cutting (1).png" width="40" alt=""> Salon </a>
          </div>
          <form method="Post">
            <div class="mb-3">
              <input type="text" class="form-control" oninput="validationText('name');" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" oninput="validationText('surname');" name="surname" id="surname" placeholder="Surname" required>
            </div>
            <div class="mb-3">
              <input type="number" min="0" class="form-control" oninput="idValidation('id_No');" name="id_No" id="id_No" placeholder="ID" required>
            </div>
            <div class="mb-3">
              <input type="number" min="0" class="form-control" oninput="cellPhoneValidation('cell');" name="cell" id="cell" placeholder="Cell No" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" oninput="ValidateEmail('email');" name="email" id="email" placeholder="email@gmail.com" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" oninput="CheckPassword('password');" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" name="BtnRegisterUser" id="btnBtn" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    </div>


    <div id="loginToAdmin">
        <div class="wrapper" style="padding-top: 5%;">
        <div class="main-panel">

          <!-- End Navbar -->
          <div class="content">
            <div class="container-fluid">
            <div class="text-center"><img src="./assets/img/hair-cutting (1).png" width="70" alt=""></div>
            <br>
              <div class="row" style="padding-left: 25%; padding-right: 25%;">
                  
                  <div class="card ">
                    <div class="card-header card-header-primary text-center">
                      <h4 class="card-title">Login</h4>
                      <p class="card-category">Content management system</p> 
                    </div>
                    <div class="card-body">
                      <form method="POST">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating">Enter password</label>
                          <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="text-center">
                          <button type="submit" name="btnLoginAdmin" class="btn btn-primary" style="border-radius: 20px;">Login</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="./formValidation.js"></script>

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