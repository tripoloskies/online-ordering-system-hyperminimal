<?php

namespace Products;

require_once __DIR__."/../Autoload.php";


class Products {
    
    private array $products_list;

    public function __construct() {
       $this->products_list = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/data/products.json"), true);
    }

    public function get(string $product_id): array {
        $results = array_filter($this->products_list, function(array $product) use (&$product_id) {
            if (!isset($product["id"])) return false;
            return $product["id"] == $product_id;
        });

        $results = array_values($results);
        return $results[0] ?? [];
    }

    public function getAll(): array {
        return $this->products_list;
    }
}

?>

