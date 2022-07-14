<?php include './php/control.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Material Kit by Creative Tim
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

<div style="display:<?php echo $mainUserPage;?>;">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="user.php">
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
            <a href="./index.php?logout=true" class="btn bg-primary" style="border-radius: 0 !important; margin: 2% !important;">LogOut</a>
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
    <div class="page-header header-filter clear-filter purple-filter" style="background-image: url('./assets/img/bg.jpg'); padding: 0!important; margin: 0 !important;">
      <div class="container">
        <div class="row" style="margin-top: 30px;">
          <div class="col-sm-6">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.685);">
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <a class="btn btn-danger" id="userUpdateError" type="button" style="margin: 2px !important; display: <?php echo $userUpdateError; ?>;">
                    <li class="list-group-item d-flex justify-content-between align-items-start">Error!<span><button class="btnFeedBack">X</button></span></li>
                  </a>
                  <a class="btn btn-success" id="userSuccess" type="button" style="margin: 2px !important; display: <?php echo $userSuccess; ?>;">
                    <li class="list-group-item d-flex justify-content-between align-items-start">Record Updated!</li>
                  </a>
                  <a class="btn btn-danger" id="userSuccess" type="button" style="margin: 2px !important; display: <?php echo $alertCancellSuccess; ?>;">
                    <li class="list-group-item d-flex justify-content-between align-items-start">Appointment cancelled!</li>
                  </a>
                  <a class="btn btn-success" id="userSuccess" type="button" style="margin: 2px !important; display: <?php echo $userSuccessPointmentAlert; ?>;">
                    <li class="list-group-item d-flex justify-content-between align-items-start">Appointment set successfully!</li>
                  </a>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $globalBookingControl; ?>" type="button" style="margin: 2px !important;">
                    <li class="list-group-item d-flex justify-content-between align-items-start">Make a booking now</li>
                  </a>
                  <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $globalAccessBooking; ?>" type="button" type="button" style="margin: 2px !important;">
                    <li class="list-group-item d-flex justify-content-between align-items-start">Access booking</li>
                  </a>
                  <a class="btn btn-primary" style="margin: 2px !important;" data-bs-toggle="modal" data-bs-target="#UserProdileModal" type="button" >
                    <li class="list-group-item d-flex justify-content-between align-items-start">User profile</li>
                  </a>
                </ul>
              </div>
              <div class="text-center">
                <img src="./assets/img/woman.png" width="100" alt="">
              </div>
              <h3 class="text-center">Welcome <?php echo substr(selectAllData($conn,'customers','custName','custEmail',$_SESSION['email']), 0, 1) . " " . selectAllData($conn,'customers','custSurname','custEmail',$_SESSION['email']); ?></h3>
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
          <p class="styleTile text-primary"> Mohawk R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Mohawk'); ?></p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/StraightBack.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Style</p>
          <p class="styleTile text-primary"> Straight back R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Straight back'); ?></p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/StraightUp.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Style</p>
          <p class="styleTile text-primary"> Straight up R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Straight up'); ?></p>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card">
        <img src="./assets/img/Wig.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p>Style</p>
          <p class="styleTile text-primary"> Wig R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Wig'); ?></p>
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

</div>
<div style="display:<?php echo $sessionOff; ?>;">
    <div class="card-body text-center" style="padding: 5% !important; margin: 5%;">
    <br>
    <br>
    <br>
    <a class="navbar-brand" href="index.php">
          Beauty <img src="./assets/img/hair-cutting (1).png" width="60" alt=""> Salon </a>
      <br>
      Your session has ended...please login to access the system?
      <br>
      <a href="index.php">Home</a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <div class="text-center p-5">
          <a class="text" href="index.html">
            Beauty <img src="./assets/img/hair-cutting (1).png" width="40" alt=""> Salon </a>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        <button type="button" class="btn btn-primary">Login</button>
        <div class="mb-3 text-center p-2">
          <a href="">Forgot Password</a>
          <a href="" data-bs-toggle="modal" data-bs-target="#RegisterUser">Register</a>
        </div>
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
        <div class="mb-3">
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Surname">
        </div>
        <div class="mb-3">
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Cell No">
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@gmail.com">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        <button type="button" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal user profile-->
<div class="modal fade" id="UserProdileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="UserProdileModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">User profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <div class="text-center p-5">
          <a class="text" href="index.html">
            Profile <img src="./assets/img/hair-cutting (1).png" width="40" alt=""> User </a>
        </div>
        <form method="post">
        <div class="mb-3">
          <input class="form-control" name="name" placeholder="Name" value="<?php echo selectAllData($conn,'customers','custName','custEmail',$_SESSION['email']); ?>">
        </div>
        <div class="mb-3">
          <input class="form-control" name="surname" placeholder="Surname" value="<?php echo selectAllData($conn,'customers','custSurname','custEmail',$_SESSION['email']); ?>">
        </div>
        <div class="mb-3">
          <input class="form-control" readonly name="id_No" placeholder="ID" value="<?php echo selectAllData($conn,'customers','custID_NO','custEmail',$_SESSION['email']); ?>">
        </div>
        <div class="mb-3">
          <input class="form-control" name="gender" readonly placeholder="Genger" value="<?php echo selectAllData($conn,'customers','Gender','custEmail',$_SESSION['email']); ?>">
        </div>
        <div class="mb-3">
          <input type="number" class="form-control" name="cell_no" placeholder="Cell" value="<?php echo selectAllData($conn,'customers','custContact','custEmail',$_SESSION['email']); ?>">
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo selectAllData($conn,'customers','custEmail','custEmail',$_SESSION['email']); ?>">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo selectAllData($conn,'customers','custPassword','custEmail',$_SESSION['email']); ?>">
        </div>
        <button type="submit" name="btnUpdateUserInfo" class="btn btn-primary">Update Info</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal access booking-->
<div class="modal fade" id="accessBookings" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="accessBookingsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Booking Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div>
                  <img src="./assets/img/<?php echo selectAllData($conn,'hairstyle','hairStyleName','hairStyleID',selectAllData($conn,'appointment','hairStyleID','custID',selectAllData($conn,'customers','custID','custEmail',$_SESSION['email']))); ?>.jpg" width="100%" style="border-radius: 20px;" alt="">
                </div>
                <h5 class="card-title">Hair Style Name : <?php echo selectAllData($conn,'hairstyle','hairStyleName','hairStyleID',selectAllData($conn,'appointment','hairStyleID','custID',selectAllData($conn,'customers','custID','custEmail',$_SESSION['email']))); ?></h5>
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                    Stylist Name : <?php echo selectAllData($conn,'employee','empName','empID',selectAllData($conn,'appointment','empID','custID',selectAllData($conn,'customers','custID','custEmail',$_SESSION['email']))); ?>
                  </li> 
                  <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
                  Pointments :<?php echo selectAllData($conn,'appointment','appointDate','custID',selectAllData($conn,'customers','custID','custEmail',$_SESSION['email'])); ?> (<?php echo selectAllData($conn,'appointment','appointTime','custID',selectAllData($conn,'customers','custID','custEmail',$_SESSION['email'])); ?>)
                  </li>
                </ul>
                <form method="post">
                  <button type="submit" name="btnCancelOder" class="btn btn-danger">Cancel Booking</button>
                </form>
                <h5 class="card-title text-center">Total Cost</h5>
                <h4 class="card-title text-center text-success">R<?php echo selectAllData($conn,'payment','amoutRand','custID',selectAllData($conn,'customers','custID','custEmail',$_SESSION['email'])); ?> <small>paid!</small></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal make bookings-->
<div class="modal fade" id="makeABooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="makeABookingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Booking Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <div class="titleLowerSection">
          <h3>Hair <img src="./assets/img/hair-cutting (1).png" width="80" alt=""> Styles</h3>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <img src="./assets/img/Mohawk.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <p>Style</p>
                <p class="styleTile text-primary"> Mohawk R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Mohawk'); ?></p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./oder.php?style=Mohawk" class="btn btn-primary">Book Now</a>
              </div>
            </div>
            <div class="card">
              <img src="./assets/img/StraightBack.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <p>Style</p>
                <p class="styleTile text-primary"> Straight back R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Straight back'); ?></p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./oder.php?style=StraightBack" class="btn btn-primary">Book Now</a>
              </div>
            </div>
            <div class="card">
              <img src="./assets/img/StraightUp.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <p>Style</p>
                <p class="styleTile text-primary"> Straight up R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Straight up'); ?></p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./oder.php?style=StraightUp" class="btn btn-primary">Book Now</a>
              </div>
            </div>
            <div class="card">
              <img src="./assets/img/Wig.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <p>Style</p>
                <p class="styleTile text-primary"> Wig R<?php echo selectAllData($conn,'hairstyle','hairStylePrice','hairStyleName','Wig'); ?></p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./oder.php?style=Wig" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Alert Modal-->
<div class="modal fade" id="activeBooking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="makeABookingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Booking Active</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body text-center">
                <div class="titleLowerSection">
                  <h3>Hair <img src="./assets/img/hair-cutting (1).png" width="50" alt=""> Salon</h3>
                 </div>
                <p class="styleTile text-primary">Appointment Active</p>
                <p class="card-text">You can only make one hair style booking at a time? complete your appointment before making another appointment!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Alert Modal-->
<div class="modal fade" id="noBookingActive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="makeABookingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Booking Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body text-center">
                <div class="titleLowerSection">
                  <h3>Hair <img src="./assets/img/hair-cutting (1).png" width="50" alt=""> Salon</h3>
                 </div>
                <p class="styleTile text-primary">Appointment</p>
                <p class="card-text">You have no appointment!</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  
</script>


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