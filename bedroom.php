<!doctype html>
<html lang="en">
	<head>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Abril+Fatface" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="css/demo.css" />	
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />

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

	   
	    <title>Έπιπλο Τσομπάνης</title>
	</head>
	<body>


<!--Nav Bar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!--logo-->
		<a class="navbar-brand" href="homepage.php">
	    	<img src="imgs/logotransparent.png" width="100%" class="d-inline-block align-top" alt=""> 
	  	</a>


	 	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	   	 <span class="navbar-toggler-icon"></span>
	  	 </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      

		      <li class="nav-item active">
		        <a class="nav-link" href="homepage.php"> 
		        	<button type="button" class="btn btn-outline-dark">Home</button>
		        	
		        </a>
		      </li>


		      <li class="nav-item">
		        <a class="nav-link" href="company.php">
		        	<button type="button" class="btn btn-outline-dark">Εταιρία</button>
		        </a>
		      </li>


		      <li class="nav-item">
		        <a class="nav-link" href="stores.php">
		        	<button type="button" class="btn btn-outline-dark">Καταστήματα</button>
		        </a>
		      </li>


		      <li class="nav-item dropdown">
		        <a class="nav-link" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <button type="button" class="btn btn-outline-dark dropdown-toggle" id="dropdownMenuButton">Προιόντα</button>
		          <span class="sr-only">(current)</span>
		        </a>
				  <div class="dropdown-menu dropdown-menu-right dropdown-multicol2" aria-labelledby="dropdownMenuButton">
				    <div class="dropdown-col">
				      <a class="dropdown-item" href="bedroom.php">Κρεβατοκάμαρα</a>
				      <a class="dropdown-item" href="#">-</a>
				      <a class="dropdown-item" href="#">-</a>
				    </div>
				    <div class="dropdown-col">
				      <a class="dropdown-item" href="sofas.php">Σαλόνι</a>
				      <a class="dropdown-item" href="#">-</a>
				      <a class="dropdown-item" href="#">-</a>
				    </div>
				    <div class="dropdown-col">
				      <a class="dropdown-item" href="dinner-room.php">Τραπεζαρία</a>
				      <a class="dropdown-item" href="#">-</a>
				      <a class="dropdown-item" href="#">-</a>
				    </div>
				    <div class="dropdown-col">
				      <a class="dropdown-item" href="kids-room.php">Παιδικό δωμάτιο</a>
				      <a class="dropdown-item" href="#">-</a>
				      <a class="dropdown-item" href="#">-</a>
				    </div>
				  </div>
		      </li>

		    </ul>

		   	<img src="imgs/phone.svg" id="top-phone" alt="">Τηλ. 23850 24959 - 23707</img> 
			   
	  	</div>
	</nav>



<!--paralax-->
<div class="bedroom-parallax">Κρεβατοκάμαρα</div>
<!--main content-->

<div class="container">
  <div class="row">
   

    <div class="col- follow">
    	<div id="myBtnContainer">
		  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
		  <button class="btn" onclick="filterSelection('Selection1')"> Selection1</button>
		  <button class="btn" onclick="filterSelection('Selection2')"> Selection2</button>
		</div>
    </div>


	<div class="col-xl">
	 	 
	 
	<div class="card-columns">


			<div class="filterDiv Selection1">
			<div class="card">
			  <img id="myImg" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="card-img-top" alt="Card1">
			  <div class="card-body">
			    <p class="card-text">TEST 1</p>
			  </div>
			</div>
			</div>
						

			<div class="filterDiv Selection2">
			<div class="card">
			  <img  id="myImg" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">tEST 2</p>
			  </div>
			</div>
			</div>
		
			<div class="filterDiv Selection2">
		  	<div class="card">
			  <img  id="myImg" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">TEST 3</p>
			  </div>
			</div>
			</div>


			<div class="filterDiv Selection2">
			<div class="card">
			  <img id="myImg" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="card-img-top" alt="Card1">
			  <div class="card-body">
			    <p class="card-text">TEST 1</p>
			  </div>
			</div>
			</div>
						
			<div class="filterDiv Selection1">
			<div class="card">
			  <img  id="myImg" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">tEST 2</p>
			  </div>
			</div>
			</div>
		
			<div class="filterDiv Selection1">
		 	<div class="card">
			  <img  id="myImg" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" class="card-img-top" alt="Card2">
			  <div class="card-body">
			    <p class="card-text">TEST 3</p>
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

  <div style="background-color: #B49C83;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Βρείτε μας στα social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
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
        <p>-</p>

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
          <a href="dinning-room.php">Τραπεζαρία</a>
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
          <i class="fas fa-envelope mr-3"></i> ol484p@otenet.gr</p>
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
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> epiplotsompanis.gr</a>
  </div>
  
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- Footer -->



	    <!-- Optional JavaScript -->
	    
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