<?php 

require_once __DIR__."/lib/Autoload.php";

use Template\Template;
use Template\Products as ProductTemplate;
use Products\Products as ProductAPI;

$api = new ProductAPI();


if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /");
}


$name = $_POST['name'] ?? "Anonymous";
$total_price = $_POST["total_price"] ?? "0.00";

?>
<!DOCTYPE html>
    <head>
        <?php Template::Head("Cart") ?>     
        <!-- <script src="assets/js/checkout.js" defer></script> -->
        <script src="/assets/js/complete.js" defer></script>
    </head>
    <body>
        <?php Template::Navigation("Cart") ?>   
        <section class="container">
            <h2>Complete</h2>
            <h3>Hi <?= $name ?>,</h3>
            <p>Your order is complete. Prepare the exact amount below:</p>
            <hr>
            <h1>USD<?= $total_price ?>.00</h1>
            
        </section>
    </body>