<?php
    session_start();

    // include "../classes/user.php";
    include "../classes/product.php";
    // $user = new User;
    $product = new Product;

    // $user_list = $user->getAllUsers();
    $product_list = $product->getAllProducts();
    // print_r($product_list);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand">
            <h4 class="fw-bold ms-3 py-1">Sales OOP</h4>
        </a>
        <div class="ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item ms-3">
                    <a href="profile.php" class="nav-link text-info" target="_blank"><sapn class="text-white">Welcome : </span><?= $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item me-5">
                    <a href="../actions/logout.php" class="nav-link text-danger">
                        <i class="fa-solid fa-user-xmark"></i>
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 text-end">
        <a href="add-product.php" class="btn btn-outline-dark px-4 py-2" target="_blank">
            Add Product
        </a>


    </div>

    <div class="container mt-4">
        <h3 class="display-6 fw-bold text-center mb-4">Products List</h3>

        <table class="table table-striped table-hover w-75 mx-auto">
            <thead class="table-dark">
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach($product_list as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td>
                            <a href="edit-product.php?pro_id=<?= $product['id'] ?>" title="EditUser" class="btn btn-warning btn-sm" target="blank">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a href="../actions/delete-product.php?pro_id=<?= $product['id'] ?>" title="DeleteUser" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                        <td>
                            <a href="dashboard.php" title="DeleteUser" class="btn btn-success btn-sm">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>