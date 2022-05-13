<?php
    include "../classes/product.php";

    $product = new Product;
    $product->deleteProduct($_GET['pro_id']);
?>