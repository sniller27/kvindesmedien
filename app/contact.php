<!DOCTYPE html>
<html>
<head>

	<title>Kvindesmedien</title>

	<?php include 'php/head.php'; ?>

  <!-- Google maps API -->
<script type="text/javascript"
    src="http://maps.google.com/maps/api/js">
</script>
<script type="text/javascript">
  function initialize() {
    var position = new google.maps.LatLng(55.674270, 12.600858);
    var myOptions = {
      zoom: 16,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
      center: position,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"Kvindesmedien"
    });  
 
    var contentString = 'Kvindesmedien Aps <br> Mælkevejen 83 E, 1440 København';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
 
//    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
//    });
 
  }
</script>

</head>
<!-- initialize Google Maps -->
<body class="productscoverimage" onload="initialize()">

	<div id="wrapper">

		<!-- header -->
		<?php include 'php/header.php'; ?>

<div class="griddo griddo-pad contactpage">
  <div class="col-1-1">
    <h1>Kontakt</h1>
    <hr>
  </div>
  <div class="col-2-3">
    <div class="content">
      <h3>Skriv endelig til os!</h3>
      <form action="php/sendemail.php" method="post">
        <input type="text" placeholder="Navn" name="name" required></input>
        <input type="text" placeholder="Email" name="mail" required></input>
        <textarea placeholder="Besked" name="msg" required></textarea>
        <button class="btn" type="submit">Send besked</button>
      </form>
    </div>
  </div>
  <div class="col-1-3 smallbotbuffer">
      <div class="content">
        
        <div class="styledheader">
        <h2>Kontaktinfo</h2>
        </div>

        <div class="contactpageinformation">
          <div class="smallbotbuffer">
          <p>Kvindesmedien Aps <br> 
          Mælkevejen 83 E<br> 1440 København<br>
          CVR: 36087080 <br><br>
          Telefon: 3257 7658<br>
          Email: kontakt@kvindesmedien.dk</p>
          </div>

          <div class="smallbotbuffer">
          <h2>Åbningstider</h2>
          <p>Hverdage 9.00 – 17.00 <br>
           Lørdag 11.00 – 15.00</p>
          </div>

          <div class="smallbotbuffer">
            <h2>Find os her:</h2>
            <!-- Google maps -->
            <div id="map_canvas"></div>
          </div>
        </div>
      </div>
  </div>

</div>


	<!-- Footer -->
	<div id="footer"></div>

	</div>

</body>
</html>