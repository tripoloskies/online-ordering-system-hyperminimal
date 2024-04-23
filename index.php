<?php 

require_once __DIR__."/lib/Autoload.php";

use Template\Template;

?>

<!DOCTYPE html>
    <head>
        <?php Template::Head("Home") ?>     
    </head>
    <body>
        <?php Template::Navigation("Home") ?>
        <main>
            <section class="container">
                <h1>Welcome to the Store!</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi illo rerum ullam asperiores, earum rem reiciendis modi autem alias temporibus, aut omnis minus perferendis aspernatur velit vel numquam quidem tempore.</p>
                <a href="products.php" class="btn primary">Shop Now</a>
            </section>
        </main>
    </body>
</html>