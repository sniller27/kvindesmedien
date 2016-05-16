<?php
//active page in navbar
$frontpage = '';
$products = '';
$about = '';
$contact = '';

//productcategory
$tables = '';
$furniture = '';
$candlesticks = '';
$light = '';
$sculptures = '';
$garden = '';


//chooses id for active page
$currentsite = basename($_SERVER['PHP_SELF'], ".php");
if($currentsite == 'index'){

    $frontpage = 'id="active"';

}else if($currentsite == 'products'){
    
    $products = 'id="active"';

}else if($currentsite == 'about'){

    $about = 'id="active"';

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
             <li><a href='tables.php'>Borde</a>
                <!-- <ul>
                   <li><a href='#'>Sub Product</a></li>
                   <li><a href='#'>Sub Product</a></li>
                </ul> -->
             </li>
             <li><a href='furniture.php'>Møbler</a></li>
             <li><a href='candlesticks.php'>Stager</a></li>
             <li><a href='light.php'>Lysglober</a></li>
             <li><a href='sculptures.php'>Skulpturer</a></li>
             <li><a href='garden.php'>Haven</a></li>

          </ul>
       </li>
       <li><a href='about.php' <?= $about ?>>Om Kvindesmedien</a>
       <ul>
           
            <li><a href='worktasks.php'>Smedeopgaver</a></li>
            <li><a href='cooperation.php'>Samarbejde</a></li>
            <li><a href='exhibitions.php'>Udstillinger</a></li>
            <li><a href='awards.php'>Priser og awards</a></li>

       </ul>
       </li>
       <li><a href='contact.php' <?= $contact ?>>Kontakt</a></li>
       <li><a href='http://shop.kvindesmedien.dk/'>Webshop</a></li>
    </ul>
    </div>

</div>
<a href="index.php"><img src="images/websitelogo.png" alt="Kvindesmedien logo" class="logotop"></a>