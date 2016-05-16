<h3>Tilmeld dig vores nyhedsbrev!</h3>
<form action="<?= $_SERVER['PHP_SELF']; ?>#newsletterform" method="post" id="newsletterform" name="newsletterform" onsubmit="return validateNewsletterForm()">
	<input type="email" placeholder="E-mail" name="email" aria-label="email" required />
	<button class="newsletterbtn">Tilmeld</button>
</form>

<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

	require_once("php/config.php");

	$emailsignup = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Error: email er ikke gyldig');

    //SQL query that select product stock
    $sql = "select email from newsletters where email = ? LIMIT 1";
    $insertsql = "INSERT INTO `newsletters`(`idnewsletters`, `email`) VALUES (null, ?)";

    //prepared statement for produkt info
    $stmt = $conn->prepare($sql);
	$insertstmt = $conn->prepare($insertsql);
	$insertstmt->bind_param('s', $emailsignup);

    $stmt->bind_param('s', $emailsignup);
    $stmt->bind_result($emailexists);
    $stmt->execute();
    
    //saves stock as variable
    if($stmt->fetch() == 0){

	    //prepared statement
	//    $stmt->bind_param('s', $deliveryaddress);
	    $insertstmt->execute();
        
        // $stock = $pstockid;
        
$msg = <<<EOD
<h1>Ordrebekræftelse</h1><br>
<h2>Ordre nummer: 222</h2>
<br>
<br>
<p>heey</p>
<br>
<br>
<br>
<br>
<br>
Tak fordi du handlede hos os
<br>
<br>
Venlig hilsen<br>
Tingfinderen

EOD;
$headers = "From: Kvindesmedien";

		    		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Error: email er ikke gyldig');
		    		//sends mail
    				mail($email, "Du er nu tilmeldt vores nyhedsbrev", $msg, $headers);
                    echo 'Du er nu tilmeldt vores nyhedsbrev';
        
    }else {
    	echo 'Du er allerede tilmeldt vores nyhedsbrev';
    }
    //closes statement to prevent error
    $stmt->close();

		    	}
?>