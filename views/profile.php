<?php
    session_start();
    include "../classes/user.php";
    $user = new User;
    $user_details = $user->getSpecificUser($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                    <a href="profile.php" class="nav-link text-info"><?= $_SESSION['username'] ?></a>
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
        <div class="card w-50 border-0 mx-auto">
            <div class="card-header bg-white border-0">
                <h1 class="display-4 fw-bold text-center text-info">Profile</h1>
            </div>
            <div class="card-body">

                <p class="text-end">
                    <a href="edit-user.php?user_id=<?= $user_details['id'] ?>" title="EditUser" class="btn btn-warning btn-sm px-4" target="_blank">
                        <i class="fa-solid fa-pencil"></i>
                        Edit
                    </a>
                    <a href="../actions/delete-user.php?user_id=<?= $user_id ?>" title="DeleteUser" class="btn btn-outline-danger btn-sm btn-sm px-4" target="_blank">
                        <i class="fa-solid fa-trash-can"></i>
                        Delete
                    </a>
                </p>
                

                <label for="f-name" class="form-label">First Name :</label>
                <p class="h4 fw-bold form-control"><?= $user_details['first_name'] ?></p>

                <label for="l-name" class="form-label">Last Name :</label>
                <p class="h4 fw-bold form-control"><?= $user_details['last_name'] ?></p>

                <label for="f-name" class="form-label">Userame :</label>
                <p class="h4 fw-bold form-control"><?= $user_details['username'] ?></p>

                <label for="f-name" class="form-label">Userame :</label>
                <p class="form-control">
                    <input type="hidden" name="password" value="<?= $user_details['password'] ?>">
                    ****************
                </p>
            </div>
        </div>
    </div>
</body>
</html>