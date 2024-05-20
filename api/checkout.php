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
            <div id="cart-box-lists">
                <form id="checkout-form" method="POST" action="complete.php">
                    <h2>Personal Information</h2>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Birthday</label>
                    <input type="date" name="birthday" id="birthday" required>
                    <input type="hidden" name="total_price" id="total-price-input">
                    <label for="name">Payment Method</label>
                    <select name="payment_method" id="payment-method">
                        <option value="COD">Cash on Delivery</option>
                    </select>
                    <h2>Shipping Information</h2>
                    <label for="name">Name</label>
                    <input type="text" name="shipping_name" id="shipping_name" required>
                    <label for="name">House/Lot</label>
                    <input type="text" name="houselot" id="houselot" required>
                    <label for="name">Street</label>
                    <input type="text" name="street" id="street" required>
                    <label for="name">Barangay/District</label>
                    <input type="text" name="street" id="district" required>
                    <label for="name">City/Municipal</label>
                    <input type="text" name="city" id="city" required>
                    <label for="name">Province/State</label>
                    <input type="text" name="province" id="province" required>
                    <label for="name">Country</label>
                    <select name="country" id="country">
                        <option value="US">United States</option>
                        <option value="NL">Netherlands</option>
                        <option value="PH">Philippines</option>
                    </select>
                    <label for="name">Zip Code</label>
                    <input type="text" name="zip" id="zip" required>
                    <div class="">
                        <p>Total Price</p>
                        <b id="total-price-label">Php 0.00</b>
                    </div>
                    <button type="submit" class="btn success">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                    </svg>

                        Checkout
                    </button>          
                </form>
            </div>
        </section>
    </body>