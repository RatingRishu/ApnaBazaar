<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Apna Bazaar</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/home.css" />
</head>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image:url(image/hero-bg.jpg);
            background-size: 1600px 800px;
            
  
        }
        
        .total_form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            
            border-radius: 5px;
        }

        .center {
            text-align: center;
            padding-bottom: 20px;

        }

        .login {
            font-size: 30px;
        }
        .formmain{
            border: 2px solid black;
            margin-top: 5px;
            width: 90%;
            margin-left: 10px;
        }
        .form1 {
            margin-top: 20px;
            width: 90%;
            margin-left: 10px;
        }

        .form2 {
            margin-top: 20px;
            width: 90%;
            margin-left: 10px;
        }

        .btn0 {
            margin-top: 5px;
            width: 100%;
            height: 50px;
            background-color: #28a745;
            border-radius: 5px;
            font-size: 20px;
            margin: 7px 0;
            color: black;
            border: 0;
            cursor: pointer;
        }

        .btn0:hover {
            background-color: rgb(160, 160, 239);
        }

        .alert-danger {
            color: red;
        }
    </style>
  <!-- Header -->
  <div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-primary" href="index.php">
                        <h3>Apna Bazar</h3>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="adminlogin.php">Admin</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="displayproduct.php">
                                    All Products
                                </a>

                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header end -->


    <div class="total_form">
        <div class="center">
            <div class="login">
                <h3>Admin_Login</h3>

            </div>
            <div class="formmain">
                <form name="form-body" action="" method="post">
                    <div class="form1">
                        <label><b>Username</b></label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form2">
                        <label><b>Password</b></label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submit1" class="btn0">Sign in</button>

                    <div class="alert-danger" id="errormess" style="margin-top:10px; display:none">
                        <strong>Invalid!</strong> UserName and Password .
                    </div </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<?php
if (isset($_POST["submit1"])) {
    $count = 0;
    $username = mysqli_real_escape_string($link, $_POST["username"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);

    $res = mysqli_query($link, "SELECT * FROM admin_login WHERE username='$username' && password='$password'");
    $count = mysqli_num_rows($res);
    if ($count == 0) {
        ?>
        <script type="text/javascript">
            document.getElementById("errormess").style.display = "block";
        </script>
        <?php
    } else {
        $_SESSION["admin"] = $username;
        ?>
        <script type="text/javascript">
            window.location = "nextadmin.php";
        </script>
        <?php
    }
}



?>

