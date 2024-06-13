<?php
 include __DIR__.'/../header.php';
?>


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
        <br> <br>
	  </nav>
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
<div class="container">
    <a href="test.php?action=add">add</a>
    <table class="table is-hoverable">
        <tr>
            <th>id</th>
            <th>titre</th>

            <th>prix</th>
            <th>quantité</th>
            <th>Update</th>
            <th>Delete</th>
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
