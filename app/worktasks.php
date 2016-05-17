<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<?php include 'php/head.php'; ?>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="plugins/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="plugins/fancybox/jquery.fancybox.css?v=2.1.5">

<script type="text/javascript" src="js/scripts/fancyboxcustom.js"></script>

</head>
<body class="productscoverimage">

	<div id="wrapper">
	
		<!-- header -->
		<?php include 'php/header.php'; ?>


<div class="container smalltopbuffer">
	<div class="row botbuffer">
	<?php include 'php/aboutnav.php'; ?>

      <div class="col-md-9">
     	<div class="styledheader">
     		<h2>Smedeopgaver</h2>
     	</div>
      	<div class="productsdescriptionbox">
      		<p>Udover alt det du finder på de andre sider, laver Kvindesmedien også mange små og store specialopgaver på bestilling, som både er til butiksbesøgende, virksomhedsejere eller folk, der skal have lavet noget. Kvindesmedien designer b.la. inventar til butikker, barer – cafeer – tøjforretninger – samt glober og lystræer til adskillige kirker i Danmark. Nogle af Kvindesmediens specialopgaver fra kunder og virksomheder kan ses herunder.</p>

      		<div class="content">
			        
			        <div class="grid">
					  <div class="grid-sizer"></div>


			 <?php 
    
		    require_once("php/config.php");
		    
		    //SQL query to select all products
		    $sql = "select mainimage 
from products a, productcategory_has_products b
where a.idproduct = b.products_idproduct and
productcategory_idproductcategory IN (10,9) order by productcategory_idproductcategory desc LIMIT 31";

		    //connects to db
		    $result = $conn->query($sql);
		    //gets data from db and prints out products
		    while($row = $result->fetch_array()){

		    	?>
		    	


					  <div class="grid-item">

						<a class="fancybox" href="<?= $row['mainimage']; ?>" data-fancybox-group="gallery">
					    <img src="<?= $row['mainimage']; ?>" alt="andet håndværk">
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
</div>

	



	<!-- Footer -->
	<?php require_once 'php/footer.php'; ?>

	</div>
  
  <script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
  <script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
  <script type="text/javascript" src="js/scripts/masonrysettings.js"></script>


</body>
</html>