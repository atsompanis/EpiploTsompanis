<!doctype html>
<html lang="en">
	<head>

    <!--Favicon-->
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <!--end-->

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Abril+Fatface" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="css/demo.css" />	
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <!--CSSMenuLine-->
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component2.css" />
    <!--endCSSmenuline-->

		<script>
			document.documentElement.className = 'js';
		</script>

		<script src="https://kit.fontawesome.com/e60f3e51e7.js" crossorigin="anonymous"></script>


		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	    <!-- Bootstrap CSS -->
	    

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	    <link href="css/mdb.css" rel="stylesheet">

	    <link rel="stylesheet" href="myCSS/tsompanis.css">

        <!--Menuline-->
      <script src="js/modernizr.custom.js"></script>
      <!--endMenuLine-->
	   
	    <title>Έπιπλο Τσομπάνης</title>
	</head>
	<body>



<!--Nav Bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="imgs/logotransparent.png" width="100%" class="d-inline-block align-top" alt=""> 
  </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="index.php"><i class="fas fa-home"></i> Αρχική</a>
            <a href="bedroom.php">Κρεβατοκάμαρα</a>
            <a href="sofas.php">Σαλόνι</a>
            <a href="dining-room.php">Τραπεζαρία</a>
            <a href="kids-room.php">Παιδικό δωμάτιο</a>
            <a href="stores.php">Καταστήματα</a>
            <a href="company.php">Εταιρία</a>
          </div>
        </div>
        <span class="hamburger" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      </li>
      <li class="nav-item">
         
      </li>
      <li class="nav-item">
         
      </li>
    </ul>
    <span class="navbar-text">
      <img src="imgs/phone.svg" id="top-phone" alt="">Τηλ. 23850 24959 - 23707</img>
    </span>
</nav>
<!--End Nav Bar-->


   <!--Menu Line -->
  <div class="container line-bar follow">
      <div class="main">
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
          <div class="cbp-hsinner">
            <ul class="cbp-hsmenu">
              <li><a href="index.php"><i class="fas fa-home"></i> Αρχική</a></li>
              <li>
                <a href="#">Προϊόντα</a>
                <ul class="cbp-hssubmenu cbp-hssub-rows">
                  <li><a href="bedroom.php"><img src="images/rsz_bedroom2.png" alt="bedroom"/><span>Κρεβατοκάμαρα</span></a></li>
                  <li><a href="sofas.php"><img src="images/rsz_sofa2.png" alt="sofa"/><span>Σαλόνι</span></a></li>
                  <li><a href="dining-room.php"><img src="images/rsz_table2.png" alt="table"/><span>Τραπεζαρία</span></a></li>
                  <li><a href=kids-room.php><img src="images/rsz_kids2.png" alt="kids-room-img"/><span>Παιδικό δωμάτιο</span></a></li>
                </ul>
              </li>
        <!--
              <li>
                <a href="#">one line obj</a>
                <ul class="cbp-hssubmenu">
                  <li><a href="#"><img src="" alt="img10"/><span>title</span></a></li>
                  <li><a href="#"><img src="" alt="img06"/><span>title</span></a></li>
                  <li><a href="#"><img src="" alt="img09"/><span>title</span></a></li>
                </ul>
              </li>
          -->
              <li><a href="stores.php">Καταστήματα</a></li>
              <li><a href="company.php">Εταιρία</a></li>
              <li><a href="index.php#form-name">Επικοινωνία</a></li>
              <li><a href="index.php#map-container-google-11">Τοποθεσία</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
   <!--End Menu Line-->

<!-- Map -->


<section class="section pb-5">



  <div class="row">

    
    <div class="col-lg-6 mb-4">

    	<div class="hvr-shutter-out-horizontal"><i class="far fa-building"></i> Κατάστημα 1</div>
    	<div class="building"></div>

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=%CE%B4%CE%B7%CE%BC%CE%B7%CF%84%CF%81%CE%B1%CF%82%204%2053100&t=&z=17&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating"><i class="fas fa-map-marker-alt"></i></a>
          <p>Δήμητρας 4, <br>ΤΚ: 53100</p>
          <p>Φλώρινα, Ελλάδα</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating"><i class="fas fa-phone"></i></a>
          <p>+30 23850 24959</p>
          <p>Δευτέρα - Σάββατο, <br>8:30 - 20:30</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating"><i class="fas fa-envelope"></i></a>
          <p>epilotsompanis@gmail.com</p>
          <p></p>
        </div>
      </div>     

    </div>
    





    
    <div class="col-lg-6">

    	<div class="hvr-shutter-out-horizontal"><i class="far fa-building"></i> Κατάστημα 2</div>
    	<div class="building"></div>

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=1%20%CE%97%CF%81%CE%AC%CE%BA%CE%BB%CE%B5%CE%B9%CE%B1%CF%82&t=&z=19&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating"><i class="fas fa-map-marker-alt"></i></a>
          <p>Δήμητρας & Ηρακλείας γωνία, <br>ΤΚ: 53100</p>
          <p>Φλώρινα, Ελλάδα</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating"><i class="fas fa-phone"></i></a>
          <p>+30 23850 23707</p>
          <p>Δευτέρα - Σάββατο, <br>8:30 - 20:30</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating"><i class="fas fa-envelope"></i></a>
          <p>epiplotsompanis@gmail.com</p>
          <p></p>
        </div>
      </div>

    </div>
    

  </div>

</section>





<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: darkslategrey;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Ακολουθήστε μας στα Social Media!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>

          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>

          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">ΕΠΙΠΛΟ ΤΣΟΜΠΑΝΗΣ</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>54 χρόνια στην αγορα του επίπλου με την ίδια φιλοσοφία και μεράκι που μας ξεχώρισε και μας ανέβασε στις προτιμήσεις σας.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">ΠΡΟΙΟΝΤΑ</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="bedroom.php">Κρεβατοκάμαρα</a>
        </p>
        <p>
          <a href="sofas.php">Σαλόνι</a>
        </p>
        <p>
          <a href="dining-room.php">Τραπεζαρία</a>
        </p>
        <p>
          <a href="kids-room.php">Παιδικό δωμάτιο</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">ΧΡΗΣΙΜΟΙ ΣΥΝΔΕΣΜΟΙ</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="company.php">Η Εταιρία</a>
        </p>
        <p>
          <a href="stores.php">Τα Καταστήματα</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">ΕΠΙΚΟΙΝΩΝΙΑ</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Φλώρινα, ΤΚ: 53100, Ελλάδα</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> epiplotsompanis@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +30 23850 24959</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +30 23850 23707</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://epiplotsompanis.gr"> epiplotsompanis.gr</a>
  </div>
  
  <!-- Copyright -->

</footer>
<!-- End Footer -->



	    <!-- Optional JavaScript -->
          <!--nav bar overlay for phones-->
        <script>
      /* Open when someone clicks on the span element */
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }

      /* Close when someone clicks on the "x" symbol inside the overlay */
      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }
    </script>
    <!-- end of nav bar overlay for phones-->

      <!--menubar js-->
      <script src="js/cbpHorizontalSlideOutMenu.min.js"></script>
      <script>
        var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
      </script>
      <!--End Menu Bar JS-->
      
	    <script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/main.js"></script>
		
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <!-- MDB core JavaScript -->
  		<script type="text/javascript" src="js/mdb.js"></script>
                <!-- mega menu-->
      <script>
            $(document).ready(function() {
      $(".megamenu").on("click", function(e) {
        e.stopPropagation();
      });
    });

      </script>
      <!--mega menu end-->
	</body>
</html>