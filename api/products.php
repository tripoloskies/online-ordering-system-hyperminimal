<?php 

require_once __DIR__."/lib/Autoload.php";

use Template\Template;
use Template\Products as ProductTemplate;
use Products\Products as ProductAPI;

$api = new ProductAPI();

?>
<!DOCTYPE html>
    <head>
        <?php Template::Head("Products") ?>     
        <script src="assets/js/products.js" defer></script>
    </head>
    <body>
        <?php Template::Navigation("Products") ?>
        <main>
            <section class="container">
                <h2>Products</h2>
                <?= ProductTemplate::ListBox($api->getAll()) ?>
            </section>
        </main>
    </body>
</html>