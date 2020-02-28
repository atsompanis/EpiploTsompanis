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
<div class="dinner-room-parallax">Τραπεζαρία</div>
<!--main content-->

<div class="container">
  <div class="row">
   

    <div class="col- follow" style="z-index:0;">
    	<div id="myBtnContainer">
		  <button class="btn active" onclick="filterSelection('all')"> ΟΛΑ</button>
		  <button class="btn" onclick="filterSelection('trapezi')"> Επιπλα εισοδου</button>
		  <button class="btn" onclick="filterSelection('trapezaria')"> Τραπεζαριες</button>
		  <button class="btn" onclick="filterSelection('mpoufes')"> Μπουφεδες</button>
		  <button class="btn" onclick="filterSelection('saloniou')"> Τραπεζακια Σαλονιου</button>
		  <button class="btn" onclick="filterSelection('karekles')"> Καρεκλες</button>
  		  <button class="btn" onclick="filterSelection('sintheto')"> TV/Συνθετο</button>
  		  <button class="btn" onclick="filterSelection('vivliothiki')"> Βιβλιοθηκη</button>

		</div>
    </div>


	<div class="col-xl">
	 	 
	 
	<div class="card-columns">

			<!--Trapezia-->

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezia/947d410d897474079c1477051cfd4e9ea8072e3189e2.jpg" class="card-img-top" alt="Card1">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezi">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezia/a5d6a1a87373dffa53dbe5b3eee609d05b90c14222fb.jpg" class="card-img-top" alt="Card1">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezi">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezia/IMAG0189.jpg" class="card-img-top" alt="Card1">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezi">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezia/IMAG0191.jpg" class="card-img-top" alt="Card1">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezi">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezia/Oscar_Mirrors_01_PP.png" class="card-img-top" alt="Oscar">
			  <div class="card-body">
			    <p class="card-text">Oscar</p>
			  </div>
			</div>
			</div>


			<!--Trapezaries-->



			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/16e7b05d79744fbd4c9c13d31ea2830a5e73ce3ed328.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/065d403869739ae7f0995e3adc80ebd648fffb665bb8.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/163-thickbox_default.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/261-Slice_l-2.jpg" class="card-img-top" alt="Slice">
			  <div class="card-body">
			    <p class="card-text">Slice</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/265-M_l_2-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/261-thickbox_default.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/268-TUBE_l-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/447-OVAL_p-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/449-T198_p-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/506ccb6f72b12c0245ddbcd76a6704b08093c652fd79.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/533aba051261497ecffcbbec4fa56eb1e1f8cbe183b9.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/543-PEER_p-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/544-TRAFICO_l-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/545-FIORI_l-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/624-DECO_R_p-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/632-NOUVEAU_R_l-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/3048d1a6f86c2c4591b7e042bf815a88822c447d9dc4.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/69829384_10157486577054836_8604213550077968384_n.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/71107889_1356315244522435_5883401641222209536_n.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/184325132fca8edcdfb40e3540f67c1e9575e213be0a.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/AMORE-11.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/Beluga-4.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/block-1-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/DELTA-FINAL_e-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/epiplo-neoklassiki-trapezaria-queen-anna-epixilon1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/IMAG0113.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/IMAG0114.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/IMAG0123.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/IMG_1832.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/Table_Ordito.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/tr3.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaries/trk2.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>



			<!--Trapezakia salonioy -->


			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/419-ELEGANT_1_p-2-2-300x300.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>			

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/423-DELTA_1_p-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/435-OCTAGON_p-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Coffee_table_Combo_95.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Coffee_Table_Combo_Rect.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Coffee_table_Essential_45.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Coffee_table_Grig_Rect.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Coffee_table_Grig_Round.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/ESTRELLA-HDL.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/IMAG0172.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Oscar_Tables_01_PP.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/PALM3L.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Table_Deco_Round.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Table_Nouveau_Round.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezaria">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Table_Ordito_Round.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/4c2313a562076992e50aa34066b82ab86dff8a46af6f.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/68db9f54e70c67048d32e88a2cfb5f2217fbfb00722d.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/BELLO-FINAL_Mf.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/BRABUS.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/BRIO-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/CASA.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/COSI.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/cosi-ii-1-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/DOMUS-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/FINO-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/FLAT-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/MAXX-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/MOSSA-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/OGGI-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/OLA-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/ORIO-final.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/PASS.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/PLAZA-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/PORTO-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/TERRA-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/TIME-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/trapezaki-block.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/trapezaki-delta-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/trapezaki-elegant-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/trapezaki-forma-3.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/trapezaki-moka-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/trapezaki-solo-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/trapezaki-tutti.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/VIVE-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/WOOD.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-AMORE-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-BOX.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-COMO.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-DECOR.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-ELLE-3.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-ELITE-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-GLAMOUR.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-LOFT.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-MEZZO-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-MORE-2-1.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-PURE-2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-SEVEN-μάρμαρο.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv saloniou">
			<div class="card">
			  <img id="myImg" src="imgs/tables/trapezaki-saloniou/Τραπεζάκι-STEP.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>







			<!-- Karekles -->

			<div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/4_Her_01_PP.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/4_Him_01_PP.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/Abraccio_PP.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/Amore_01A_PP.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/Ariette_01_PP.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/A62-POLLITA-106_webgrey.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/A77_0836_greyweb.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/A82Camelia_marble_3631.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/az_Anesis_pr_summer2019_00229a-Large.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/az_Anesis_pr_summer2019_00336a.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/BAQQVVGMBY.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/DDOASFHLKO.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/FONRIKFOXT.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/GSUEQSDRTW.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/ILQCUEHIGQ.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/IOJVDCUSEW.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/JOPLWFKJBH.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/MXXHNVTXBP.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/RKRHIWTYSC.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/VFEGMCXUPA.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/VHKMFUXAHH.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/VSTDRKHBDP.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/VVSXKHFMMP.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

		    <div class="filterDiv karekles">
			<div class="card">
			  <img id="myImg" src="imgs/tables/karekles/WGIFKRBFUX.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>



			<!-- tv-suntheto -->


			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/1-fina-delezakis.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/1-social-bookcase-delezakis.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/9d7a23de0ef88d2f7129e74217686ba124d7356686c9.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/172-thickbox_default.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/242-thickbox_default.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/245-thickbox_default.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/246-thickbox_default.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/602c8ed1be1dfbf0835ead920eb58467fb52ce4ef728.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/526356cc127852413ea3b429311ef5b5c3003946c48f.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/b923820dcc509a6f75849bcaa6e02c990b0a82652dca.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/Cabinet_50's.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/Cabinet_Cassetone.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/Cabinet_Mostro.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/Cabinet_Trunk_New.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/Cabinet_Urban_Tall.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/d70fe748e6982b3439ad3b3da9c6fb5ba83c7a7ebea9.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/f009c65f686f6355c895b52ec2cb9e8885b54ff744d0.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/ifaistos-1-delezakis.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/IMAG0108.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv trapezia">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/IMAG0190.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/IMG_0039.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/IMG_2323.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/IMG_20191011_194124.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/mp_m7.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/mp_m8.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/mp_m9.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/mp_m10.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/sin9.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv mpoufes">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/mp9.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/sin2.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/sin11.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv sintheto">
			<div class="card">
			  <img id="myImg" src="imgs/tables/tv-sintheto/synthesi-Basic-trapezaki_saloniou-saloni-rustic-drys-leptomeria.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>


			<!-- Vivliothiki -->


			<div class="filterDiv vivliothiki">
			<div class="card">
			  <img id="myImg" src="imgs/tables/vivliothiki/1-social-bookcase-delezakis.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv vivliothiki">
			<div class="card">
			  <img id="myImg" src="imgs/tables/vivliothiki/93dc27118a0f19a198571619414de3ebd9f63d5c0169.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv vivliothiki">
			<div class="card">
			  <img id="myImg" src="imgs/tables/vivliothiki/93f7b804fa0150b875b8687a7d1f0ed65aaa29c04b1e.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv vivliothiki">
			<div class="card">
			  <img id="myImg" src="imgs/tables/vivliothiki/Bookcase_Charles.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv vivliothiki">
			<div class="card">
			  <img id="myImg" src="imgs/tables/vivliothiki/Bookcase_Nelson.png" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
			  </div>
			</div>
			</div>

			<div class="filterDiv vivliothiki">
			<div class="card">
			  <img id="myImg" src="imgs/tables/vivliothiki/vivliothikh-marvel-dookcase-xylo-drys-laka-mat-metallika-stoixeia-rafia-ntoylapia-diaxwristiko.jpg" class="card-img-top" alt="-">
			  <div class="card-body">
			    <p class="card-text">-</p>
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