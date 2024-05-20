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
            <a href="/checkout.php" id="checkout-button" class="btn success">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
            </svg>

                Checkout
            </a>
        </section>
    </body>