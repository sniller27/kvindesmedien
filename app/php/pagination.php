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
	        if(isset($_GET['page'])){
	        	if($_GET['page'] != 1){
	        	$previouspage = $_GET['page'] - 1;
	        	echo "<a href='$currentpage?page=$previouspage' class='pagination'><</a>";
	        	}

	        	$paginationstart = $_GET['page'] - 2;
	        	$paginationend = $_GET['page'] + 2;

	        }else {
	        	$paginationstart = 1;
	        	$paginationend = 5;
	        }
	        
	        if($paginationend>=$pages){
	        	$paginationend = $pages;
	        }else if($paginationend<5){
	        	$paginationend = 5;
	        }
	        if($paginationstart <= 1){
	        	$paginationstart = 1;
	        }else if($paginationstart>2){
	        	$paginationstart = 2;
	        }
	        for ($i=$paginationstart; $i <= $paginationend; $i++) {

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
	        if(isset($_GET['page'])){
	        	$nextpage = $_GET['page'] + 1;
	        	if($_GET['page'] != $pages){
	        	echo "<a href='$currentpage?page=$nextpage' class='pagination'>></a>";
	        	}
	        }else if($pages > 1){
	        	echo "<a href='$currentpage?page=2' class='pagination'>></a>";
	        }
?>
</div>