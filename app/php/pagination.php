<div class="paginationpanel">
<?php
		// conntects to db
		    require_once("php/config.php");
		    $number;
		    $pagelimit = 30;
		    $currentpage = basename($_SERVER['PHP_SELF']);
		    
		    //SQL-query for sculptures main images
		    $sql = "select count(*) 
from products a, productcategory_has_products b
where a.idproduct = b.products_idproduct and
productcategory_idproductcategory = $category";

		    //executes query
		    $result = $conn->query($sql);
		    //fetching informtion from db
		    while($row = $result->fetch_array()){
		    	$number = $row[0];
		    }

	        $pages = ceil($number/$pagelimit);

	        for ($i=1; $i <= $pages; $i++) {

	        	if(isset($_GET['page'])){

	        		if(($_GET['page']) == 1){
						$interval = 0;
	        		}else {
	        			$interval = ($_GET['page']-1)*$pagelimit;
	        		}

	        		if($_GET['page'] == $i){
	        		echo "<a href='$currentpage?page=$i' class='pagination' id='activepagination'>$i</a>";
	        		}else {
	        		
	        			echo "<a href='$currentpage?page=$i' class='pagination'>$i</a>";
	        		
	        	}

	        	}else {
	        		$interval = 0;
	        		if($i == 1){
	        			echo "<a href='$currentpage?page=$i' class='pagination' id='activepagination'>$i</a>";
	        		}else {
	        			echo "<a href='$currentpage?page=$i' class='pagination'>$i</a>";
	        		}
	        	}

	        }
?>
</div>