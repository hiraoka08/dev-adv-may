<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
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
                    <a href="profile.php" class="nav-link text-info" target="_blank"><?= $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item me-5">
                    <a href="" class="nav-link" target="_blank">
                        <i class="fa-solid fa-user-xmark text-danger"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card border-0 w-50 mx-auto">
            <div class="card-header border-0 bg-white">
                <h1 class="display-4 text-success fw-bold text-center">Add Products</h1>
            </div>
            <div class="card-body border-0">
                <form action="../actions/addition.php" method="post">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" required>
                
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" required>

                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" required>

                    <button type="submit" class="btn btn-success form-control my-3">
                        Add
                    </button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>