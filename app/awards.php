<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<?php include 'php/head.php'; ?>

<!-- <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script> -->
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5">

<script type="text/javascript" src="js/scripts/fancyboxcustom.js"></script>

</head>
<body class="productscoverimage">

	<div id="wrapper">
	
		<!-- header -->
		<?php include 'php/header.php'; ?>


<div class="container smalltopbuffer backgroundlayerlight">
	<div class="row">
	<?php include 'php/aboutnav.php'; ?>

      <div class="col-md-8">
      	<div class="styledheader">
     		<h2>Priser og awards</h2>
     	</div>
      	<div class="productsdescriptionbox">
      		<p>Her er et udvalg af forskellige awards/priser vi har produceret.
			Vi har bla. designet/produceret TV2-Zulu awarden som uddeles hvert efterår.
			Derudover har vi produceret Hip-Hop award, Niels Jensen Prisen, Hjemløse Pokalen, priser til Novo Nordisk, Niels Brock o.a. Vi kan designe og producere awards/priser efter ønske om størrelse, udseende, antal osv.
			</p>
      	</div>

        <div class="content botbuffer">
			        
			        <div class="grid">
					  <div class="grid-sizer"></div>


			 <?php 
    
		    require_once("php/config.php");
		    
		    //SQL query to select all products
		    $sql = "select mainimage 
from products a, productcategory_has_products b
where a.idproduct = b.products_idproduct and
productcategory_idproductcategory = 7";

		    //connects to db
		    $result = $conn->query($sql);
		    //gets data from db and prints out products
		    while($row = $result->fetch_array()){

		    	?>
		    	


					  <div class="grid-item">

						<a class="fancybox" href="<?= $row['mainimage']; ?>" data-fancybox-group="gallery">
					    <img src="<?= $row['mainimage']; ?>">
					    </a>

					  </div>


		    	<?php
		    }
		    ?>

					</div>
			    </div>

      </div>

      </div>
</div>

	



	<!-- Footer -->
	<div id="footer"></div>

	</div>
  
  <script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
  <script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
  <script type="text/javascript" src="js/scripts/masonrysettings.js"></script>


</body>
</html>