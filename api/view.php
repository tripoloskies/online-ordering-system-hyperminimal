<?php 

require_once __DIR__."/lib/Autoload.php";

use Template\Template;
use Products\Products as ProductAPI;

$api = new ProductAPI();

$product_id = $_GET["id"] ?? "";
$product = $api->get($product_id);

// print_r($product)

?>
<!DOCTYPE html>
    <head>
        <?php Template::Head($product["name"] ?? "404 Not Found") ?>     
        <script src="assets/js/product.js" defer></script>
        <script src="assets/js/counter.js" defer></script>
        <script type="text/javascript">
            var product_data = <?= json_encode($product) ?>
        </script>
    </head>
    <body>
        <?php Template::Navigation("Products") ?>   
        <section class="container">
            <?php if (!sizeof($product)): ?>
                <h1>
                    Product not found.
                </h1>
                <a href="products.php" class="btn primary">Shop Now!</a>
            <?php else: ?>
            <div id="product-view-container">
                <div id="product-view-image">
                    <img src="assets/img/products/<?= $product["id"] ?>.jpg" alt="">
                </div>
                <div id="product-view-props">
                    <h2><?= $product["name"] ?></h2>
                    <b>Brand <span style="background-color: var(--success); padding: 0.5rem"><?= $product["brand"] ?></b>
                    <b><?= $product["rating"]?>/5 (
                        <?php foreach (range(1, floor($product["rating"])) as $_r): ?>
                            ☆
                        <?php endforeach ?>
                    )</b>
                    <br>
                    <p><?= $product["description"] ?></p>
                    <hr>
                    <form id="addToCart">
                        <span>
                            <b>Price</b>
                            <h3>USD <?= $product["price"] ?>.00</h3>
                        </span>
                        <div class="quantity-container">
                            <b for="quantity">Quantity</b>
                            <div class="counter">
                                <button class="counter-buttons" id="counter-down">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>  
                                </button> 
                                <input type="number" class="counter-input" name="quantity" value=1 min=1 max=100 id="counter-input">          
                                <button class="counter-buttons" id="counter-up">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                    </svg>

                                </button>                      
                            </div>
                        </div>
                        <button type="submit" class="btn success">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                        </svg>
                        Add to Cart
                        </button>
                    </form>
                </div>
            </div>
            <?php endif ?>
        </section>
    </body>
</html>