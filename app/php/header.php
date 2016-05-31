<?php
//CATEGORIES
//Declaring variables
//active page in navbar
$frontpage = '';
$products = '';
$productstwo = '';
$about = '';
$abouttwo = '';
$contact = '';

//SUBCATEGORIES
//productcategories
$tables = '';
$furniture = '';
$candlesticks = '';
$light = '';
$sculptures = '';
$garden = '';

//aboutcategories
$worktasks = '';
$cooperation = '';
$exhibitions = '';
$awards = '';

//Assigning variables for the right pages
$currentsite = basename($_SERVER['PHP_SELF'], ".php");
if($currentsite == 'index'){

    $frontpage = 'id="active"';

}else if($currentsite == 'products'){
    
    $products = 'id="active"';
    $productstwo = 'class="active"';

}else if($currentsite == 'about'){

    $about = 'id="active"';
    $abouttwo = 'class="active"';

}else if($currentsite == 'contact'){

    $contact = 'id="active"';

}else if($currentsite == 'tables'){

    $products = 'id="active"';
    $tables = 'class="active"';

}else if($currentsite == 'furniture'){

    $products = 'id="active"';
    $furniture = 'class="active"';

}else if($currentsite == 'candlesticks'){

    $products = 'id="active"';
    $candlesticks = 'class="active"';

}else if($currentsite == 'light'){

    $products = 'id="active"';
    $light = 'class="active"';

}else if($currentsite == 'sculptures'){

    $products = 'id="active"';
    $sculptures = 'class="active"';

}else if($currentsite == 'garden'){

    $products = 'id="active"';
    $garden = 'class="active"';

}else if($currentsite == 'worktasks'){

    $about = 'id="active"';
    $worktasks = 'class="active"';

}else if($currentsite == 'cooperation'){

    $about = 'id="active"';
    $cooperation = 'class="active"';

}else if($currentsite == 'exhibitions'){

    $about = 'id="active"';
    $exhibitions = 'class="active"';

}else if($currentsite == 'awards'){

    $about = 'id="active"';
    $awards = 'class="active"';

}

?>

<div id="header">
    <div id='cssmenu'>
      <ul>
         <li><a href='index.php' <?= $frontpage ?>>Forside</a></li>
         <li class='active'><a href='products.php' <?= $products ?>>Produkter</a>
            <ul>
               <li><a href='tables.php' <?= $tables ?>>Borde</a></li>
               <li><a href='furniture.php' <?= $furniture ?>>Møbler</a></li>
               <li><a href='candlesticks.php' <?= $candlesticks ?>>Stager</a></li>
               <li><a href='light.php' <?= $light ?>>Lystræer og lysglober</a></li>
               <li><a href='sculptures.php' <?= $sculptures ?>>Skulpturer</a></li>
               <li><a href='garden.php' <?= $garden ?>>Haven</a></li>
            </ul>
         </li>
         <li><a href='about.php' <?= $about ?>>Om Kvindesmedien</a>
         <ul>
              <li><a href='worktasks.php' <?= $worktasks ?>>Smedeopgaver</a></li>
              <li><a href='cooperation.php' <?= $cooperation ?>>Samarbejde</a></li>
              <li><a href='exhibitions.php' <?= $exhibitions ?>>Udstillinger</a></li>
              <li><a href='awards.php' <?= $awards ?>>Priser og awards</a></li>
         </ul>
         </li>
         <li><a href='contact.php' <?= $contact ?>>Kontakt</a></li>
         <li><a href='http://shop.kvindesmedien.dk/'>Webshop</a></li>
      </ul>
    </div>
</div>
<!-- Logo -->
<a href="index.php"><img src="images/websitelogo.png" alt="Kvindesmedien logo" class="logotop"></a>

<noscript>Vores website fungerer bedre med JavaScript aktiveret, derfor anbefaler vi, at du slår JavaScript til i dine browserindstillinger.</noscript>