<?php
require('../service/DbConnect.php');
require('../service/LoginServices.php');



//login 

if (isset($_POST['login_submit_btn'])) {
    $userEmail = $_POST['email'];
    $password = $_POST['password'];
    
    $login = LoginServices::loginSubmit($userEmail, $password);

    if ($login) {
        header('Location: dashboard.php');
    } else {
        $error = "Invalid email or password.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numina | Admin | login</title>

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">

    <style>
        :root {
  --primary-color: #19a0e1;
  --primary-hover: rgb(40, 199, 235);
}
        .bg-custom{
            background: linear-gradient(180deg, var(--primary-color) 0%, var(--primary-hover) 100%);
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
            if (isset($error)) {
                echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
            } else {
                echo '';
            }
        ?>
        <div class="row" style="height: 100vh;">
            <div class="col-4 m-auto">
                <div class="card ">
                    <div class="card-body ">
                            <h4 class="card-title text-center">Admin Panel</h4>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" name="login_submit_btn" class="btn btn-primary w-100">Submit</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>