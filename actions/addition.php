<?php
    include "../classes/product.php";

    // collect the data
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // create an object
    $product = new Product;

    // call the method
    $product->createProduct($product_name, $price, $quantity);
?>