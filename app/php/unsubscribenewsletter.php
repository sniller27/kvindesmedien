<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


if(isset($_GET['id'])){

	
	require_once("config.php");

	$hashsql = "select * from newsletters order by idnewsletters desc";
	//connects to db
	$result = $conn->query($hashsql);
	//gets data from db and prints out products
	while($row = $result->fetch_array()){

	    if(password_verify($row['idnewsletters'], $_GET['id'])){
	    	$hashsql = "DELETE FROM `newsletters` WHERE idnewsletters=".$row['idnewsletters']."";
	    	if($conn->query($hashsql)){
	    		echo 'Du er nu blevet afmeldt nyhedsbrevet';
	    	}else {
	    		echo 'Noget gik desværre galt under afmeldingen. Kontakt venligst Kvindesmedien for hjælp.';
	    	}

		}

	}


}

?>

</body>
</html>