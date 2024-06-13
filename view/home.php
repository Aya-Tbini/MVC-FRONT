<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modist - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="view/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="view/css/animate.css">
    
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="view/css/magnific-popup.css">

    <link rel="stylesheet" href="view/css/aos.css">

    <link rel="stylesheet" href="view/css/ionicons.min.css">

    <link rel="stylesheet" href="view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="view/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="view/css/flaticon.css">
    <link rel="stylesheet" href="view/css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">My perfume</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
             
	          
	    

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		
		<div class="hero-wrap js-fullheight" style="background-image: url(https://image.freepik.com/photos-gratuite/fond-parfum-feminin-elegant_127657-1479.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Time to get your fav perfume</h3>
        
          <div class="col-md-11 ftco-animate text-center">
			<h1 class="m-b-20"><strong>Welcome To <br>   Perfume shop</strong></h1>
            <h2><span>chose your perfume</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
  
        </div>
    		
			    					

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://image.freepik.com/photos-gratuite/flacons-parfum-fleurs-beau-fond-blanc_51137-1009.jpg);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-5 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4"> <br>Online <br> <span>perfume Shop</span></h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
				<b>Des parfums pas chers de grandes marques, ça existe ! News Parfums est le site de parfum pas cher fiable par excellence : tous les parfums et coffrets parfum pas cher dans cet espace, comme sur le reste de notre site, sont garantis authentiques, dans leur emballage d'origine et bénéficient de la garantie de leurs fabricants respectifs <br> </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
			 <strong><a href="view/client/form.php">s'inscrire</a></strong>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Products</h1>
            <h2 class="mb-4">Our Products</h2>
			


			<table class="table is-hoverable">
				<tr>
					<th>id</th>
					<th>titre</th>
		
					<th>prix</th>
					<th>quantité</th>
					<th>update</th>
					<th>delete</th>
					
				</tr>
		
				<?php
		foreach($produits as $produit){
			?>
				<tr>
					<td><?php echo $produit->get('id');?></td>
					<td><?php echo $produit->get('titre');?></td>
					<td><?php echo $produit->get('prix');?></td>
					<td><?php echo $produit->get('quantite');?></td>
					<td><a href="test.php?action=edit&id=<?php echo $produit->get('id');?>">Update</a></td>
            <td><a href="test.php?action=delete&id=<?php echo $produit->get('id');?>">Delete</a></td>
			
				</tr>
				<?php
		}
		?>
			</table>
          </div>
        </div>    		
    	</div>
		
			</td>
			</tr>
	
			
			</table>
		
			</div>

			<section class="ftco-section bg-light">
				<div class="container">
						<div class="row justify-content-center mb-3 pb-3">
				  <div class="col-md-12 heading-section text-center ftco-animate">
					  <h1 class="big"> Details </h1>
					<h2 class="mb-4">Details Products</h2>
				  </div>
				  <br>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="https://www.fatales.tn/image_resize.php?img=produit%2Fimages%2FLa_Vie_est_Belle_l%60Eclat_de_Parfum_g.gif&h=238" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h5><a href="#">La Vie Est Belle L'Eclat De Parfum</a></h5>
							<h3>Bouquet floral éclatant, mêlant des notes fraîches et pétillantes de bergamote et de mandarine à des notes florales d'Iris Pallida, de Jasmin Sambac et de Freesia pétalé, magnifiées par de l'Absolu de Fleur d'Oranger. </h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>320dt</span></p>
		    					</div>
		    				
	    					</div>
	    					<hr>
    					
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="https://www.fatales.tn/image_resize.php?img=produit%2Fimages%2FDIOR_SAUVAGE_g.gif&h=238" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h5><a href="#">DIOR SAUVAGE</a></h5>
							<h3>Une composition à la fraîcheur radicale, dictée par un nom qui sonne comme un manifeste.

						 Sauvage est un acte de création inspiré des grands espaces.
								
								Un ciel bleu ozone qui domine un désert minéral chauffé à blanc. </h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>375dt</span></p>
		    					</div>
		    				
	    					</div>
	    					<hr>
    						
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="https://www.fatales.tn/image_resize.php?img=produit%2Fimages%2F_Mon_Paris_Eau_De_Parfum__Edition_Limitee_g.gif&h=238" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h5><a href="#">Mon Paris Eau De Parfum</a></h5>
							<h3> Mon Paris Eau De Parfum, le parfum de l'amour parisien s'illumine dans une édition iconique de collectionneur en or YSL. Un Cadeau pas comme les autres.</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>197dt</span></p>
		    					</div>
		    				
	    					</div>
	    				
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="https://www.fatales.tn/image_resize.php?img=produit%2Fimages%2FBlack_Opium_Eau_De_Parfum__g.gif&h=238" alt="Colorlib Template"></a>
    					<div class="text py-3 px-3">
    						<h5><a href="#">
								Black Opium Eau De Parfum</a></h5>
								<h3>  BLACK OPIUM Eau De Parfum par Yves Saint-Laurent, pour une héroïne rock et glamour, aussi addict qu’addictive.</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>248dt</span></p>
		    					</div>
		    					
	    						
	    					</div>
	    					<hr>
    						
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-section-more img" style="background-image: url(https://www.monbeaucerisier.com/wp-content/uploads/2013/12/Sans-titre-2.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section ftco-animate">
          
          </div>
        </div>
    	</div>
    </section>
	<br> <br>   

   
	<br> <br>  <br>  <br>  
		       
	<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Thanks</h1>
            <h2 class="mb-4">Thanks for your visit</h2>
          </div>
        </div>    		
    	</div>    
		          


       

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(https://media.istockphoto.com/videos/sensual-girl-spraying-fragrance-in-slow-motion-with-scent-particles-video-id935334178?s=640x640);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              >
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		           
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    
             
		
	

    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">perfume shop</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
         
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Tunis</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+21699999999</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">perfume@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
        
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>