<?php
    session_start();
    include "../classes/product.php";
    $product = new Product;

    $product_details = $product->getSpecificProduct($_GET['pro_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <div class="card border-0 mx-auto">
            <div class="card-header border-0 bg-white mx-auto">
                <h1 class="display-4 fw-bold text-info">Purchase</h1>
            </div>

            <div class="card-body border-0 w-50 mx-auto">
                <form action="" method="post">
                    <input type="hidden" name="pro_id" value="pro_id">

                    <label for="pro_name" class="form-label">Product Name</label>
                    <input type="text" name="pro_name" id="pro_name" class="form-control" value="<?= $product_details['product_name'] ?>">
                </form>
            </div>
        </div>
    </div>
</body>
</html>