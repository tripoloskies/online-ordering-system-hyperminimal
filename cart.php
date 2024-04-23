<?php 

require_once __DIR__."/lib/Autoload.php";

use Template\Template;
use Template\Products as ProductTemplate;
use Products\Products as ProductAPI;

$api = new ProductAPI();



?>
<!DOCTYPE html>
    <head>
        <?php Template::Head("Cart") ?>     
        <script src="assets/js/cart.js" defer></script>
    </head>
    <body>
        <?php Template::Navigation("Cart") ?>   
        <section class="container">
            <div id="cart-box-lists">
                
            </div>
        </section>
    </body>