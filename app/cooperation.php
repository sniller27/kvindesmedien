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
	<div class="row colorwhite">
	<?php include 'php/aboutnav.php'; ?>

      <div class="col-md-8">
      	<div class="row">
      		<div class="col-xs-12 col-md-6">
      			
		     		<h2>Samarbejde</h2>
		      		<p>Her hos Kvindesmedien holder vi af samarbejde og lave projekter med hinanden.</p>

      		</div>
      		<div class="col-xs-12 col-md-6 responsiveimg">
      			<img src="images/ejerne.jpg" alt="udstilling Gelskov Gods">
      		</div>

      	</div>
      	

      	<div class="row botbuffer">
      		<div class="col-md-12">
      			<h3>Her er et overblik over tidligere kunder og partnere, vi har arbejdet med.</h3>
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
	<div id="footer"></div>

	</div>
  
  <script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
  <script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
  <script type="text/javascript" src="js/scripts/masonrysettings.js"></script>


</body>
</html>