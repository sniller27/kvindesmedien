<h3>Tilmeld dig vores nyhedsbrev!</h3>
<form action="<?= $_SERVER['PHP_SELF']; ?>?respond#newsletterform" method="post" id="newsletterform" name="newsletterform" onsubmit="return validateNewsletterForm()">
	<input type="email" placeholder="E-mail" name="email" aria-label="email" required />
	<button class="newsletterbtn">Tilmeld</button>
</form>

<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

	require_once("php/config.php");

	$emailsignup = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Tjek venligst om din mail er skrevet korrekt');

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
    
    if($stmt->fetch() == 0){

	    $insertstmt->execute();
        
        
$msg = <<<EOD
<h1>Tilmelding af nyhedsbrev</h1><br>
<br>
<br>
<p>Du er nu tilmeldt vores nyhedsbrev.</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
Venlig hilsen<br>
Kvindesmedien
EOD;
$headers = "From: Kvindesmedien";

		    		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Tjek venligst om din mail er skrevet korrekt');
		    		//sends mail
    				mail($email, "Du er nu tilmeldt vores nyhedsbrev", $msg, $headers);
                    echo 'Du er nu tilmeldt vores nyhedsbrev';
        
    }else {
    	echo '<p>Du er allerede tilmeldt vores nyhedsbrev</p>';
    }
    //closes statement to prevent error
    $stmt->close();

		    	}
?>