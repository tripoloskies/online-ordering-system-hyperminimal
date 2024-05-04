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
            <div class="">
                <h2>Cart</h2>
            </div>
            <div id="cart-box-lists">
                
            </div>
            <a href="/checkout.php" class="btn success">Checkout</a>
        </section>
    </body>