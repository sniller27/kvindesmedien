<!-- Newsletter form -->
<h3>Tilmeld dig vores nyhedsbrev!</h3>
<form action="<?= $_SERVER['PHP_SELF']; ?>?respond#newsletterform" method="post" id="newsletterform" name="newsletterform" onsubmit="return validateNewsletterForm()">
	<input type="email" placeholder="E-mail" name="email" aria-label="email" required />
	<button class="newsletterbtn">Tilmeld</button>
</form>

<?php
    //checks if a post request has occured
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //connecting to db
	require_once("php/config.php");

    // validates user input
	$emailsignup = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Tjek venligst om din mail er skrevet korrekt');

    //SQL-query that checks if email alreadt exists in database
    $sql = "select email from newsletters where email = ? LIMIT 1";
    //SQL-query that inserts user email into database
    $insertsql = "INSERT INTO `newsletters`(`idnewsletters`, `email`) VALUES (null, ?)";

    //prepared statement
    $stmt = $conn->prepare($sql);
	$insertstmt = $conn->prepare($insertsql);
	$insertstmt->bind_param('s', $emailsignup);

    $stmt->bind_param('s', $emailsignup);
    $stmt->bind_result($emailexists);
    $stmt->execute();
    
    //checks is users email exists. If not, then registers user email and sends an email confirmation.
    if($stmt->fetch() == 0){
        //inserts users email into database
	    $insertstmt->execute();
        
$msg = <<<EOD
Du er blevet tilmeldt Kvindesmediens nyhedsbrev.

Du vil løbende modtage nyheder og tilbud omkring produkter og håndværk i Kvindesmedien.

Bemærk du til enhver tid kan afmelde dig vores nyhedsbrev igen.

Venlig hilsen
Kvindesmedien
EOD;
$headers = "From: Kvindesmedien";
                    
		    		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Tjek venligst om din mail er skrevet korrekt');
		    		//sends mail by using PHP mail function
    				mail($email, "Du er nu tilmeldt vores nyhedsbrev", $msg, $headers);
                    echo 'Du er nu tilmeldt vores nyhedsbrev';


                    //newsletter
                    $to = "sniller27@hotmail.com";
$subject = "Sommerudsalg hos Kvindesmedien";

$message = "
<html>
  <head>
    <meta charset='utf-8'>
    <title>Kvindesmedien</title>
      <style>
          td,table {
            border: 1px solid #DDDDDD;
          }
      </style>
      
  </head>
  <body>

    <table width='600' align='center' cellspacing='0' cellpadding='0' style='font-family: arial;'>
        <tbody style='background-color: #DDDDDD'>
            <tr><td align='center' colspan='2' style='background-color: #333333;padding: 10px;border:none;'><a href='http://somethingsimple.dk/Projects/kvindesmedien/index.php'><img class='logo' src='http://somethingsimple.dk/Projects/kvindesmedien/images/websitelogo.png'></a></td></tr>
            <tr><td align='center' colspan='2' style='background-color: #DDDDDD;border:none;'><h1 style='font-weight: 900;padding: 10px;font-size: 36px;color:#000000;'>
         Sommerudsalg
      </h1></td></tr>
            <tr><td colspan='2' style='border:none;'><img width='100%' src='http://somethingsimple.dk/Projects/kvindesmedien/images/kvindesmedien.jpg'></td></tr>
            <tr><td colspan='2' style='padding: 20px;border:none;'><h2 style='margin:0px 5px 5px 5px;font-weight: 900;color:#000000;font-size: 23px;line-height: 1.3;'>Sommeren banker på døren, og hos Kvindesmedien indleder vi sommeren med op til 50% rabat på udvalgte varer samt introduktion af vores nye kollektion.
          </h2></td></tr>
       
           
            
            
            
            <tr><td colspan='2' align='center' style='background-color: #333333;padding: 10px;border:none;border-top:5px solid #c78c00;'><h2 style='color:#DDDDDD;font-weight: 900;font-size: 30px;'>
                  Inviter venner og familie til grilfest
              </h2></td></tr>
            <tr><td width='50%' style='border:none;'><img style='width:298px;vertical-align:middle;' src='http://somethingsimple.dk/Projects/kvindesmedien/images/products/garden/garden_(27).jpg'></td><td width='50%' valign='top' style='padding:10px 10px 10px 10px;border:none;'><h3 style='margin:0px;font-weight: 900;color:#000000;'>
                Tjek vores store udvalg af grilmateriale. Vi har griller i flere størrelser og til flere seværdigheder uanset om, du er til havefester, strandture eller bare gril på gårdspladsen.
            </h3><a href='http://somethingsimple.dk/Projects/kvindesmedien/garden.php' style='background-color: #333333;width: 92px;padding: 15px;color: #DDDDDD;text-decoration: none;line-height:100px;font-weight: 600;font-size: 25px'>Se mere her</a></td></tr><tr><td colspan='2' align='center' style='background-color: #333333;padding: 10px;border:none;border-top:5px solid #c78c00;'><h2 style='color:#DDDDDD;font-weight: 900;font-size: 30px;'>
                  Se vores flotte krukker og vaser
              </h2></td></tr><tr><td width='50%' valign='top' style='border:none;'><h3 style='margin:0px;font-weight: 900;color:#000000;padding:10px 10px 10px 10px;vertical-align:top;'>
                Se vores flotte samling af krukker og vaser. Udvalget er i mange forskellige priser og varianter. Lige til at stille på terassen eller i haven.
            </h3><p style='padding-left: 10px'>
            
            <a href='http://somethingsimple.dk/Projects/kvindesmedien/garden.php' style='background-color: #333333;width: 92px;padding: 15px;color: #DDDDDD;text-decoration: none;line-height:45px;font-weight: 600;font-size: 25px;'>Se mere her</a></p></td><td width='50%' style='border:none;'><img style='width:309px;border:none;vertical-align:top;' src='http://somethingsimple.dk/Projects/kvindesmedien/images/products/garden/garden_(25).jpg'></td></tr>
            
            
            
            
            
            
            
            <tr><td colspan='2' align='center' style='background-color: #333333;padding: 10px;border:none;border-top:5px solid #c78c00;'><h2 style='color:#DDDDDD;font-weight: 900;font-size: 30px;'>
                  Nyd en drink i solen
              </h2></td></tr>
            <tr><td width='50%' style='border:none;'><img style='width:300px' src='http://somethingsimple.dk/Projects/kvindesmedien/images/products/tables/table_(3).jpg'></td><td width='50%' valign='top' style='padding:10px 10px 10px 10px;border:none;'><h3 style='margin:0px;font-weight: 900;color:#000000;'>
                Med et smart stenbord fra Kvindesmedien, har du altid drikkevarer i nærheden, så du kan nyde det gode sommervejr uden afbrydelser.
            </h3><a href='http://somethingsimple.dk/Projects/kvindesmedien/tables.php' style='background-color: #333333;width: 92px;padding: 15px;color: #DDDDDD;text-decoration: none;line-height:100px;font-weight: 600;font-size: 25px'>Se mere her</a>
                </td></tr>
            
            
            
            <tr><td colspan='2' align='center' style='padding-top:10px'><h3 style='font-weight: 600;font-size: 25px;color: #000000;'>
                Sommerudsalget starter d.25 juni og varer frem til d.3.august.
                </h3></td></tr>
         
            <tr><td colspan='2' align='center' style='padding: 0px 15px 15px 15px;border:none;'><p style='font-weight: 500;font-size: 20px;color: #000000;padding-top:10px;'>
                Vi glæder os til at se dig i butikken<br>
Venlig hilsen Kvindesmedien
                </p></td></tr>
            
            <tr><td align='center' colspan='2' style='background-color: #333333;border:none;padding-top: 20px;'><a href='https://www.facebook.com/kvindesmedien/?ref=ts&fref=ts'><img style='width: 40px' src='http://somethingsimple.dk/Projects/kvindesmedien/images/socialmedia/facebook2.png'></a>
                <a href='#'><img style='width: 40px' src='http://somethingsimple.dk/Projects/kvindesmedien/images/socialmedia/twitter2.png'></a>
                <a href='https://www.instagram.com/kvindesmedien/'><img style='width: 40px' src='http://somethingsimple.dk/Projects/kvindesmedien/images/socialmedia/instagram2.png'></a>
                <a href='#'><img style='width: 40px' src='http://somethingsimple.dk/Projects/kvindesmedien/images/socialmedia/youtube2.png'></a></td></tr>
            <tr><td  colspan='2' align='center' style='background-color: #333333; border:none;padding-bottom: 20px;'><a style='color: #DDDDDD' href='http://somethingsimple.dk/Projects/kvindesmedien/contact.php'>Kontakt</a> | <a href='#' style='color: #DDDDDD'>Afmeld nyhedsbrev</a></td></tr>

            
        </tbody>
      </table>
      

  </body>
</html>
";

// content-type
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

//sendes newsletter
mail($to,$subject,$message,$headers);
        
    }else {
    	echo '<p>Du er allerede tilmeldt vores nyhedsbrev</p>';
    }
    //closes statement to prevent error
    $stmt->close();

		    	}


?>