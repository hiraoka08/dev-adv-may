<?php
    session_start();
    include "../classes/user.php";
    $user = new User;
    $user_details = $user->getSpecificUser($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-User</title>
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
                    <a href="profile.php" class="nav-link text-info" target="blank"><?= $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item me-5">
                    <a href="" class="nav-link">
                        <i class="fa-solid fa-user-xmark text-danger"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card border-0 w-50 mx-auto">
            <div class="card-header border-0 bg-white mx-auto">
                <h1 class="display-4 text-warning fw-bold">Edit User</h1>
            </div>
            <div class="card-body">
                <form action="../actions/edit-user.php" method="post">
                    <input type="hidden" name="user_id" value="<?= $user_details['id'] ?>">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="<?= $user_details['first_name'] ?>" required>
                        </div>
                        <div class="col">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $user_details['last_name'] ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= $user_details['username'] ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <input type="hidden" name="old_password" value="<?= $user_details['password'] ?>">
                        </div>
                    </div>

                    <button class="btn btn-warning form-control mt-3">Update</button>
                    <a href="dashboard.php" class="btn btn-danger form-control mt-2">Cancel</a>
                </form>
            </div>
        </div>
        
    </div>

</body>
</html>