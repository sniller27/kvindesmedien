<?php
//active page in navbar
$frontpage = '';
$products = '';
$about = '';
$contact = '';

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

}

?>

<div id="header">
    
    <div id='cssmenu'>
    <ul>
       <li><a href='index.php' <?= $frontpage ?>>Forside</a></li>
       <li class='active'><a href='products.php' <?= $products ?>>Håndværk</a>
          <ul>
             <li><a href='tables.php'>Borde</a>
                <!-- <ul>
                   <li><a href='#'>Sub Product</a></li>
                   <li><a href='#'>Sub Product</a></li>
                </ul> -->
             </li>
             <li><a href='#'>Møbler</a></li>
             <li><a href='#'>Stager</a></li>
             <li><a href='#'>Lysglober</a></li>
             <li><a href='#'>Skulpturer</a></li>
             <li><a href='#'>Haven</a></li>

          </ul>
       </li>
       <li><a href='about.php'<?= $about ?>>Om Kvindesmedien</a>
       <ul>
           
            <li><a href='#'>Smedeopgaver</a></li>
            <li><a href='#'>Showroom</a></li>
            <li><a href='#'>Priser og awards</a></li>

       </ul>
       </li>
       <li><a href='contact.php' <?= $contact ?>>Kontakt</a></li>
       <li><a href='http://shop.kvindesmedien.dk/'>Webshop</a></li>
    </ul>
    </div>

</div>