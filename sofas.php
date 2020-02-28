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

		<!--font family for title!-->
		<link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">



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



<!--paralax-->
<div class="sofas-parallax">Σαλόνι</div>
<!--main content-->

<div class="container">
  <div class="row">
   

    <div class="col- follow" style="z-index:0;">
    	<div id="myBtnContainer">
		  <button class="btn active" onclick="filterSelection('all')"> ΟΛΑ</button>
		  <button class="btn" onclick="filterSelection('kanapes')"> Καναπεδες</button>
		  <button class="btn" onclick="filterSelection('klasikos')"> Κλασικοι Καναπεδες</button>
		  <button class="btn" onclick="filterSelection('goniakos')"> Γωνιακοι Καναπεδες</button>
		  <button class="btn" onclick="filterSelection('armchair')"> Πολυθρονες</button>
		</div>
    </div>


	<div class="col-xl">
	 	 
	 
	<div class="card-columns">


			<div class="filterDiv goniakos">
			<div class="card">
			  <img id="myImg" src="imgs/sofa/goniakoi-kanapedes/1-naomidemarko-delezakis.jpg" class="card-img-top" alt="Card1">
			  <div class="card-body">
			    <p class="card-text">Naomidemarko</p>
			  </div>
			</div>
			</div>

						
			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/06112018211404-0.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>
		
			<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/15092018151417-0.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/15092018172423-0.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/chester-moon-newcollection-delezakis-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Chester</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/earth2-1-delezakis.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Earth</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/goniakos-kanapes-albert.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Albert</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/goniakos-kanapes-ammos.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Ammos</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/goniakos-kanapes-armani.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Armani</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Nostos_HD.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Nostos</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/picasso.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Picasso</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/goniakos-kanapes-funny.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Funny</p>
			  </div>
			</div>
			</div>
		   

		   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/ALBERTO-sofa.-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/armonia.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/BARCELONA-high.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/calisti.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/El-Greco.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/epic.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/FLOW-1-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/freeman-sala-tsanis-saloni-kanape-thessaloniki.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/laoura4.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/lima0.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/majectic.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/MASIF-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/Metal1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/nausica-sofa-bed-21.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/RETRO.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/royal-logo-HD-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/THEO-2-2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/valentini-sala-tsanis-saloni-kanape-thessaloniki.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/velvet_enface-HD.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

					   <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/velvet_side-view-HD.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv kanapes">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/kanapedes/WING1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>



			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/15092018155459-0.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/armchair-finetsa.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Finetsa</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/armchair-simi.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Simi</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/armchair-star.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Star</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/15092018160508-0.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/dream-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Dream</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/karma-logo-HD-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Karma</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/nefeli.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Nefeli</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/nemesis.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Nemesis</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv armchair">
		 	<div class="card">
			  <img  id="myImg" src="imgs/sofa/poluthrones/nuovo.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Nuovo</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/sofa-inspire.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Insire</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/sofa-miami.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Miami</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/sofa-round.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Round</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/ALBERTO-corner-big..-2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/alberto-pouf-2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>							

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/alexander.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>	

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/ALBERTO-3.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>	

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Atlantis.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>	

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/barcelona-logo-HD-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>	

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/basic.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>	

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Best1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>	

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/COMFORT-BIG-high.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/boheme.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/boheme-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/capri-logo-HD-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/clever.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Cosi-HD.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/deluxe.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

						<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/DION-2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/dona.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/ergo.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/factory2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/FREEMAN..-5.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/FLOW.-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/FASHION-beige-high.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/fresh.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/FUN-BIG-high.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Galaxy-BIG-high.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/game-sofa-corner-kanape-gonia-11.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/geo0.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/geo-new-sala-tsanis-saloni-kanape-thessaloniki.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/gonia-wood6.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/gusto01.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/hamilton-sofa-corner-gonia-11.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/HUPPY.-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/jazz.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/joy_HD.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/karma-sofa-logo-HD-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/laoura1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/laoura-box-sala-tsanis-saloni-kanape-thessaloniki-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/letter.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/lobby.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/lobby-sala-tsanis-saloni-kanape-thessaloniki-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/LOTUS.-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/lotus-sofa-corner-kanape-4.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/lumina.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/masif-saloni-gwnia3.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/matrix.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/maxim-sofa-corner-gonia-21.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/memory-sala-tsanis-saloni-kanape-thessaloniki.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Metal.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/MISTRAL-BIG-high.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/MONOPOLY-2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/MYSTIC-2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/mythos01.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/mythos02.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/new.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/new-york-sala-tsanis-saloni-kanape-thessaloniki-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Nostos_HD.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/picasso.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Porto.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/prive-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/riva-sala-tsanis-saloni-kanape-thessaloniki.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/saloni-varousiadi.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/riviera.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/Rossi.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/RUSTIC.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/rustic-logo-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/SCORPION.-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/scorpion-sofa-corner-summer-2016-sala-tsanis.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/slide4.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/smile.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/sofa-corner-flow2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/soft-logo-HD-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/SPIRIT.-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/sugar-sala-tsanis-saloni-kanape-thessaloniki.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/VEGAS.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/VENUS.-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/VENUS-1-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/VERDI-2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/white-HAMILTON..-1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv goniakos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/goniakoi-kanapedes/natura-logo-HD-comp.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv klasikos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/klasikoi-kanapedes/apollon.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Apollon</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv klasikos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/klasikoi-kanapedes/epiplo-neoklasiko-saloni-arhaiko-epixilon2.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Arhaiko</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv klasikos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/klasikoi-kanapedes/epiplo-neoklasiko-saloni-chic-epixilon1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Chic</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv klasikos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/klasikoi-kanapedes/epiplo-neoklassiko-saloni-classic-lux-epixilon1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Lux</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv klasikos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/klasikoi-kanapedes/epiplo-neoklassiko-saloni-ferre-epixilon1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Ferre</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv klasikos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/klasikoi-kanapedes/epiplo-neoklassiko-saloni-narcissos-epixilon1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Narcissos</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv klasikos">
			<div class="card">
			  <img  id="myImg" src="imgs/sofa/klasikoi-kanapedes/epiplo-neoklassiko-saloni-valeria-epixilon.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">Valeria</p>
			  </div>
			</div>
			</div>


		</div>

		  <!--zoom effect-->
		    <div id="myModal" class="modal">
			  <span class="close">&times;</span>
			  <img class="modal-content" id="img01">
			  <div id="caption"></div>
			</div>

 
 
	</div>
  </div>
</div>









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
	    
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <script>
		filterSelection("all")
		function filterSelection(c) {
		  var x, i;
		  x = document.getElementsByClassName("filterDiv");
		  if (c == "all") c = "";
		  for (i = 0; i < x.length; i++) {
		    w3RemoveClass(x[i], "show");
		    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
		  }
		}

		function w3AddClass(element, name) {
		  var i, arr1, arr2;
		  arr1 = element.className.split(" ");
		  arr2 = name.split(" ");
		  for (i = 0; i < arr2.length; i++) {
		    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
		  }
		}

		function w3RemoveClass(element, name) {
		  var i, arr1, arr2;
		  arr1 = element.className.split(" ");
		  arr2 = name.split(" ");
		  for (i = 0; i < arr2.length; i++) {
		    while (arr1.indexOf(arr2[i]) > -1) {
		      arr1.splice(arr1.indexOf(arr2[i]), 1);     
		    }
		  }
		  element.className = arr1.join(" ");
		}

		// Add active class to the current button (highlight it)
		var btnContainer = document.getElementById("myBtnContainer");
		var btns = btnContainer.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function(){
		    var current = document.getElementsByClassName("active");
		    current[0].className = current[0].className.replace(" active", "");
		    this.className += " active";
		  });
		}
		</script>




	    <script>
			    	$(document).ready(function() {
			$(".megamenu").on("click", function(e) {
				e.stopPropagation();
			});
		});

	    </script>


	    
	    <script>
	    				// create references to the modal...
			var modal = document.getElementById('myModal');
			// to all images -- note I'm using a class!
			var images = document.getElementsByClassName('card-img-top');
			// the image in the modal
			var modalImg = document.getElementById("img01");
			// and the caption in the modal
			var captionText = document.getElementById("caption");

			// Go through all of the images with our custom class
			for (var i = 0; i < images.length; i++) {
			  var img = images[i];
			  // and attach our click listener for this image.
			  img.onclick = function(evt) {
			    console.log(evt);
			    modal.style.display = "block";
			    modalImg.src = this.src;
			    captionText.innerHTML = this.alt;
			  }
			}

			var span = document.getElementsByClassName("close")[0];

			span.onclick = function() {
			  modal.style.display = "none";
			}

	    </script>

	</body>
</html>