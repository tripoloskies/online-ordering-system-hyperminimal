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
        <script src="assets/js/checkout.js" defer></script>
    </head>
    <body>
        <?php Template::Navigation("Cart") ?>   
        <section class="container">
            <h2>Checkout</h2>
            <div id="cart-box-lists">
                
            </div>
        </section>
        <section class="container">
            <h2>Basic Information</h2>
            <div id="cart-box-lists">
                <form id="checkout-form" method="POST" action="complete.php">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="name">Address</label>
                    <input type="text" name="address" id="address">
                    <label for="name">Birthday</label>
                    <input type="date" name="birthday" id="birthday">
                    <input type="hidden" name="total_price" id="total-price-input">
                    <div class="">
                        <p>Total Price</p>
                        <b id="total-price-label">Php 0.00</b>
                    </div>
                    <button type="submit" class="btn success">Checkout</button>          
                </form>
            </div>
        </section>
    </body>