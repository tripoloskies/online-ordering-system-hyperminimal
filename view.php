<?php 

require_once __DIR__."/lib/Autoload.php";

use Template\Template;
use Template\Products as ProductTemplate;
use Products\Products as ProductAPI;

$api = new ProductAPI();

$product_id = $_GET["id"] ?? "";
$product = $api->get($product_id);

?>
<!DOCTYPE html>
    <head>
        <?php Template::Head($product["name"] ?? "404 Not Found") ?>     
        <script src="assets/js/product.js" defer></script>
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
                    <!-- <img src="assets/img/products/<?= $product["id"] ?>.jpg" alt=""> -->
                    <img src="assets/img/products/sui.jpg" alt="">
                </div>
                <div id="product-view-props">
                    <h2><?= $product["name"] ?></h2>
                    <br>
                    <br>
                    <p><?= $product["description"] ?></p>
                    <hr>
                    <form id="addToCart">
                        <label for="type">
                            <b>Type</b>
                        </label>
                        <select name="type">
                            <?php foreach ($product["prices"] as $name => $price):?>
                                <option value="<?= $name ?>"><?= $name ?></option>
                            <?php endforeach ?>
                        </select>
                        <button type="submit" class="btn success">Add to Cart</button>
                    </form>
                </div>
            </div>
            <?php endif ?>
        </section>
    </body>
</html>