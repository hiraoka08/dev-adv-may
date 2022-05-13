<?php
    require_once "database.php";

    class Product extends Database{

        public function getAllProducts(){
            $sql = "SELECT id, product_name, price, quantity FROM products";

            if($result = $this->conn->query($sql)){
                while($row = $result->fetch_assoc()){
                    $products[] = $row;
                }
                return $products;
            }else{
                die("Error in retrieving products ".$this->conn->error);
            }
        }

        public function createProduct($product_name, $price, $quantity){
            // Create the query
            $sql = "INSERT INTO products(product_name, price, quantity)
                    VALUES('$product_name', '$price', '$quantity')";

            // Excute the query
            if($this->conn->query($sql)){
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Error in adding Product ".$this->conn->error);
            }
        }

        public function getSpecificProduct($pro_id){
            $sql = "SELECT * FROM products WHERE id = '$pro_id'";

            if($result = $this->conn->query($sql)){
                return $result->fetch_assoc();
            }else{
                die("Error in retrieving product:".$this->conn->error);
            }
        }

        public function updateProduct($pro_id, $product_name, $price, $quantity){
            $sql = "UPDATE products
                    SET product_name = '$product_name'
                       price = '$price'
                       quantity = '$quantity'
                    WHERE id = '$pro_id'
                    ";
        }

        public function deleteProduct($pro_id){
            $sql = "DELETE FROM products WHERE id = '$pro_id'";

            if($this->conn->query($sql)){
                header('location: ../views/dashboard.php');
                exit;
            }else{
                die("Error in deleting product:".$this->conn->erro);
            }
        }
    }
?>