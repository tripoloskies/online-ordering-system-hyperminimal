<?php

namespace Template;


class Products {
    public static function ListBox(array $product_lists) {
        ?>
            <div class="products-box-lists">
                <?php foreach ($product_lists as $product_list): ?>
                    <div class="products-box-list">
                        <a class="products-box-list-image" href="view.php?id=<?= $product_list["id"] ?? ""?>">
                            <img src="assets/img/products/<?= $product_list["id"] ?? "sui.jpg" ?>" alt="<?= $product_list["description"] ?? "" ?>">
                        </a>
                        <div class="products-box-list-props">
                            <h4 class="products-box-list-name"><?= $product_list["name"] ?? "" ?></h4>
                            <b>Price: <?= $product_list["price"] ?? "0.00" ?></b>
                            <a href="" class="btn success">Buy Now!</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php
    }
}

?>