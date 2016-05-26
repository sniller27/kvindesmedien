<!DOCTYPE html>
<html lang="da">
<head>

	<title>Kvindesmedien - Kontakt</title>

	<?php include 'php/head.php'; ?>

  <!-- Google maps API -->
  <script type="text/javascript" src="js/googlemaps.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

</head>
<!-- initialize Google Maps -->
<body class="productscoverimage" onload="initialize()">

	<div id="wrapper">

		<!-- header -->
		<?php include 'php/header.php'; ?>

    <div class="container contactpage">
      <div class="row smalltopbuffer">
        <!-- contact form -->
        <div class="col-md-8">
          <div class="styledheader">
            <h2>Kontakt</h2>
          </div>
          <div class="content productsdescriptionbox">
          <?php
          if(isset($_GET['mailsent'])){
            echo '<h2 class="feedbackmessage confirmationcolor">Din besked er blevet sendt!</h2>';
          }
          ?>
            <h4>Hos Kvindesmedien er vi altid åbne overfor henvendelser. Besøg os, ring eller skriv til os over mail eller brug kontaktformularen nedenunder.</h4>
            <form action="php/sendemail.php" method="post" onsubmit="return validateContactForm()" name="contactform">
              <input type="text" placeholder="Navn" name="name" aria-label="navn"  required />
              <input type="email" placeholder="Email" name="mail" aria-label="email" required  />
              <textarea placeholder="Besked" name="msg" required ></textarea>
              <button class="btn" type="submit">Send besked</button>
            </form>
          </div>
        </div>
        <!-- contactinfo -->
        <div class="col-md-4 smallbotbuffer">
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
                <p>Hverdage: 9.00 – 17.00 <br>
                 Lørdag: 11.00 – 15.00</p>
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
    </div>

    <!-- Footer -->
    <?php require_once 'php/footer.php'; ?>

	</div>

<!-- contactform validation script -->
<script type="text/javascript" src="js/validatecontactform.js"></script>
</body>
</html>