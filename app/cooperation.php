<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<?php include 'php/head.php'; ?>

<script type="text/javascript" src="js/scripts/fancyboxcustom.js"></script>

</head>
<body class="productscoverimage">

	<div id="wrapper">
	
		<!-- header -->
		<?php include 'php/header.php'; ?>


<div class="container smalltopbuffer">
	<div class="row colorwhite backgroundlayerlight botbuffer">
	<?php include 'php/aboutnav.php'; ?>

      <div class="col-md-8">
      	<div class="row">
      		<div class="col-xs-12 col-md-6">
      			
		     		<h2>Samarbejde</h2>
		      		<p>Her hos Kvindesmedien holder vi af samarbejde og lave projekter med hinanden. Vi har gennem tidens forløb samarbejdet med en masse forskellige organisationer og virksomheder, hvor begge parter har nydt glæde af samarbejdet. Vi mener, at man med klare forventninger, godt kommunikation og godt teamwork kan komme langt med samarbejde, og vi er derfor altid åbne over for nye.</p>

      		</div>
      		<div class="col-xs-12 col-md-6 responsiveimg">
      			<img src="images/ejerne.jpg" alt="udstilling Gelskov Gods">
      		</div>

      	</div>
      	

      	<div class="row botbuffer">
      		<div class="col-md-12">
      			<h3>Her er et overblik over tidligere kunder og partnere, vi har arbejdet sammen med.</h3>
      		</div>
      			 <?php 
    
		    require_once("php/config.php");
		    
		    //SQL query to select all products
		    $sql = "
		    select logourl, companyname
		    from customercompanies
		    where logourl IS NOT NULL";

		    //connects to db
		    $result = $conn->query($sql);
		    //gets data from db and prints out products
		    while($row = $result->fetch_array()){

		    	?>
		    	

					  <div class="col-xs-6 col-sm-3 col-md-3 responsiveimg">

					    <img src="<?= $row['logourl']; ?>" alt="<?= $row['companyname']; ?>">

					  </div>


		    	<?php
		    }
		    ?>
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