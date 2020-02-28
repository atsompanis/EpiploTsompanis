<!doctype html>
<html lang="en">
	<head>
		<!--Favicon-->
		<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
		<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
		<!--backtotop-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">


		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Abril+Fatface" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="css/demo.css" />	
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	    <!--CSSMenuLine-->
	    <link rel="stylesheet" type="text/css" href="css/default.css" />
	    <link rel="stylesheet" type="text/css" href="css/component2.css" />
	    <!--endCSSmenuline-->


		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
	    <script type='text/javascript'>$(document).ready(function(){

		        if($('.brands_slider').length)
		        {
		        var brandsSlider = $('.brands_slider');

		        brandsSlider.owlCarousel(
		        {
		        loop:true,
		        autoplay:true,
		        autoplayTimeout:5000,
		        nav:false,
		        dots:false,
		        autoWidth:true,
		        items:8,
		        margin:42
		        });

		        if($('.brands_prev').length)
		        {
		        var prev = $('.brands_prev');
		        prev.on('click', function()
		        {
		        brandsSlider.trigger('prev.owl.carousel');
		        });
		        }

		        if($('.brands_next').length)
		        {
		        var next = $('.brands_next');
		        next.on('click', function()
		        {
		        brandsSlider.trigger('next.owl.carousel');
		        });
		        }
		        }


		        });
		</script>




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

<a id="backtotop"></a>

<!--Nav Bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img id="main-logo" src="imgs/logotransparent.png" width="100%" class="d-inline-block align-top" alt=""> 
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
              <li><a href="#form-name">Επικοινωνία</a></li>
              <li><a href="#map-container-google-11">Τοποθεσία</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
   <!--End Menu Line-->


<!-- Carousel -->

		<div id="homepageCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#homepageCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#homepageCarousel" data-slide-to="1"></li>
		    <li data-target="#homepageCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="imgs/trapezariaslider.jpg" alt="First slide">
		      <div class="carousel-caption d-none d-md-block">
			  	<h5>Τραπεζαρίες</h5>
			  	<p> Κλασικές ή μοντέρνες τραπεζαρίες με λεπτομεριες απο γυαλί, μάρμαρο, σίδερο κ.α. </p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="imgs/krebatokamaraslider.jpg" alt="Second slide">
		      <div class="carousel-caption d-none d-md-block">
			  	<h5>Κρεβατοκάμαρες</h5>
			  	<p>Κρεβατοκάμαρες μοντέρνες με μασίφ ξύλα ή φυσικούς καπλαμάδες σε διάφορες αποχρώσεις.</p>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="imgs/armoniaslider.jpg" alt="Third slide">
		      <div class="carousel-caption d-none d-md-block">
			  	<h5>Καναπέδες</h5>
			  	<p>Γωνιακοί καναπέδες, πολυθρώνες κ.α. σε υπέροχα χρώματα, υφάσματα και μοναδικά σχέδια. </p>
			  </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#homepageCarousel" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#homepageCarousel" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	<!--Logo Carousel -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
		<div class="brands">
		    <div class="container">
		        <div class="row">
		            <div class="col">
		                <div class="brands_slider_container">
		                    <div class="owl-carousel owl-theme brands_slider">
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_join.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_alexopoulos.jpg" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_mediastrom.jpg" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_unico2.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_woodyline.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_letto.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_alphasaloni.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_notomobili-logo.jpg" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_join.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_alexopoulos.jpg" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_mediastrom.jpg" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_unico2.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_woodyline.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_letto.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_alphasaloni.png" alt=""></div>
		                        </div>
		                        <div class="owl-item">
		                            <div class="brands_item d-flex flex-column justify-content-center"><img src="imgs/logos/rsz_notomobili-logo.jpg" alt=""></div>
		                        </div>
		                    </div> <!-- Brands Slider Navigation -->
		                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
		                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	<!--END Logo Carousel-->

	<!-- Tables -->

	
		<main class="smooth" >
			<div class="content content--c1">
				<a href="bedroom.php" class="tilter tilter--1">
					<figure class="tilter__figure">
						<img class="tilter__image" src="imgs/bedroom-portrait.png" alt="img01" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">Bedroom</h3>
							<p class="tilter__description">Κρεβατοκάμαρα</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="sofas.php" class="tilter tilter--1">
					<figure class="tilter__figure">
						<img class="tilter__image" src="imgs/sofa-portrait.jpg" alt="img01" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">Sofa</h3>
							<p class="tilter__description">Καναπές</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="dining-room.php" class="tilter tilter--1">
					<figure class="tilter__figure">
						<img class="tilter__image" src="imgs/table_portrait.jpg" alt="img01" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">Dining Table</h3>
							<p class="tilter__description">Τραπεζαρία</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="kids-room.php" class="tilter tilter--1">
					<figure class="tilter__figure">
						<img class="tilter__image" src="imgs/kids-portrait.jpg" alt="img01" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">Kids Room</h3>
							<p class="tilter__description">Παιδικό δωμάτιο</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
			</div>
		</main>
	





<!-- Map -->


<section class="section pb-5">


  <div class="row">

    
    <div class="col-lg-5 mb-4">

      
      <div class="card">

        <div class="card-body">
          
          <div class="form-header blue accent-1">
            
          </div>


          <form method="post" action="email_send.php" enctype="multipart/form-data">
	          <!--Body-->
	          <div class="md-form">
	            <i class="fas fa-user prefix grey-text"></i>
	            <input type="text" id="form-name" name="form-name" class="form-control" placeholder="Ονομ/νυμο" required>
	          </div>

	          <div class="md-form">
	            <i class="fas fa-envelope prefix grey-text"></i>
	            <input type="text" id="form-email" name="form-email" class="form-control" placeholder="E-mail" required>
	          </div>

	          <div class="md-form">
	            <i class="fas fa-tag prefix grey-text"></i>
	            <input type="text" id="form-Subject" name="form-Subject" class="form-control" placeholder="Θέμα" required>
	          </div>

	          <div class="md-form">
	            <i class="fas fa-pencil-alt prefix grey-text"></i>
	            <textarea id="form-text" name="form-text" class="form-control md-textarea" rows="3" placeholder="Κείμενο" required></textarea>
	          </div>

	          <div class="text-center mt-4">
	          	<input name = "send" class="btn btn-light-blue" type = "submit" id = "add" value = "ΑΠΟΣΤΟΛΗ">
	            	
	          </div>

	      </form>

        </div>

      </div>
      

    </div>
    

    
    <div class="col-lg-7">

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
          <p>Δήμητρας 4, ΤΚ: 53100</p>
          <p>Φλώρινα, Ελλάδα</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating"><i class="fas fa-phone"></i></a>
          <p>+30 23850 24959</p>
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

<!-- Loader-->
<div class="loader-wrapper">
	<span class="loader">
		<span class="loader-inner">
		</span>
	</span>
</div>



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
		<script>
		(function() {
			var tiltSettings = [
			{},
			{
				movement: {
					imgWrapper : {
						translation : {x: 10, y: 10, z: 30},
						rotation : {x: 0, y: -10, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					lines : {
						translation : {x: 10, y: 10, z: [0,70]},
						rotation : {x: 0, y: 0, z: -2},
						reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
					},
					caption : {
						rotation : {x: 0, y: 0, z: 2},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					overlay : {
						translation : {x: 10, y: -10, z: 0},
						rotation : {x: 0, y: 0, z: 2},
						reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						rotation : {x: -5, y: 10, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
					},
					caption : {
						translation : {x: 30, y: 30, z: [0,40]},
						rotation : {x: [0,15], y: 0, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: 10, y: 10, z: [0,20]},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						rotation : {x: -5, y: 10, z: 0},
						reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
					},
					caption : {
						translation : {x: 20, y: 20, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					overlay : {
						translation : {x: 5, y: -5, z: 0},
						rotation : {x: 0, y: 0, z: 6},
						reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						translation : {x: 0, y: -8, z: 0},
						rotation : {x: 3, y: 3, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					lines : {
						translation : {x: 15, y: 15, z: [0,15]},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: 0, y: 8, z: 0},
						reverseAnimation : {duration : 600, easing : 'easeOutExpo'}
					},
					caption : {
						translation : {x: 10, y: -15, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					}
				}
			},
			{
				movement: {
					lines : {
						translation : {x: -5, y: 5, z: 0},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					caption : {
						translation : {x: 15, y: 15, z: 0},
						rotation : {x: 0, y: 0, z: 3},
						reverseAnimation : {duration : 1500, easing : 'easeOutElastic', elasticity : 700}
					},
					overlay : {
						translation : {x: 15, y: -15, z: 0},
						reverseAnimation : {duration : 500,easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 500, easing : 'easeOutExpo'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						translation : {x: 5, y: 5, z: 0},
						reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
					},
					caption : {
						translation : {x: 10, y: 10, z: [0,50]},
						reverseAnimation : {duration : 1000, easing : 'easeOutQuart'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
					}
				}
			},
			{
				movement: {
					lines : {
						translation : {x: 40, y: 40, z: 0},
						reverseAnimation : {duration : 1500, easing : 'easeOutElastic'}
					},
					caption : {
						translation : {x: 20, y: 20, z: 0},
						rotation : {x: 0, y: 0, z: -5},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: -30, y: -30, z: 0},
						rotation : {x: 0, y: 0, z: 3},
						reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
					}
				}
			}];

			function init() {
				var idx = 0;
				[].slice.call(document.querySelectorAll('a.tilter')).forEach(function(el, pos) { 
					idx = pos%2 === 0 ? idx+1 : idx;
					new TiltFx(el, tiltSettings[idx-1]);
				});
			}

			// Preload all images.
			imagesLoaded(document.querySelector('main'), function() {
				document.body.classList.remove('loading');
				init();
			});

			
		})();
		</script>
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <!-- MDB core JavaScript -->
  		<script type="text/javascript" src="js/mdb.js"></script>
  		<!--back to top-->
  		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	    <script>
	        var btn = $('#backtotop');

	      $(window).scroll(function() {
	        if ($(window).scrollTop() > 300) {
	          btn.addClass('show');
	        } else {
	          btn.removeClass('show');
	        }
	      });

	      btn.on('click', function(e) {
	        e.preventDefault();
	        $('html, body').animate({scrollTop:0}, '300');
	      });


	    </script>
  		<!--logo carousel-->
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

	</body>
</html>