<?php
    include "../classes/product.php";

    $product = new Product;

    $pro_id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $product->updateProduct($pro_id, $product_name, $price, $quantity);

?>