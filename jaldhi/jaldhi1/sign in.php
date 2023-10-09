<?php
include('php/conn.php');
if (isset($_POST['reg'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($password == '' or $email == '') {
        echo "please enter the password or email";
    } else {
        $qry = "SELECT email FROM register_data_sc WHERE email='$email'";
        $data = mysqli_query($con, $qry);
        if ($data) {
            if (!$r = mysqli_fetch_array($data)) {
                // $uname = $r['uname'];

                $sql = "INSERT INTO register_data_sc VALUES ('','$email','$password')";
                $data = mysqli_query($con, $sql);

                header('Location: http://localhost/jaldhi/index1.php');

            } else {
                echo "User already registerd";
                // header('location:www.youtube.com');
            }
        }
    }
}
if (isset($_POST['log'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($password == '' or $email == '') {
        echo "please enter the password or email";
    } else {
        $qry = "SELECT email,password FROM register_data_sc WHERE email='$email' AND password='$password'";
        $data = mysqli_query($con, $qry);
        if ($data) {
            if ($r = mysqli_fetch_array($data)) {
                // $uname = $r['uname'];
                header('Location: http://localhost/jaldhi/index1.php');
            } else {
                echo "no record found";
            }
        }
    }
}



?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,300&family=Josefin+Sans:wght@500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign In</title>
    <link rel="stylesheet" href="css/sign-in style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/logo1.png">
</head>

<body>

    <section class="login py-5 bg-light">
        <div class="container">
            <div class="row g-0">
            <div class="col-lg-5">
                    <img src="login/css/pic6.jpg" class="img-fluid" alt="photo">
                </div>
                <div class="font col-lg-7 text-center py-5">
                    <div class="offset-1 col-lg-10 pt-5">
                        <h3 class="mb-md-1 mb-4" style="color: #000000;word-spacing: 1px;">Welcome To</h3>
                        <h1 style="color: black;"><u>Jaldhi</u></h1>
                        <h4 style="color:#6c757d">Login Here</h4><br>
                    </div>

                    <div class="row-g-2">
                        <form action="" method="post">
                            <div class="col-grid">
                                <input type="email" name="email" placeholder="Email" class="contact"><br><br>
                                <input type="password" name="password" placeholder="Password" class="contact">
                            </div>
                            <div class="offset-1 col-lg-10 pt-4">
                                <button type="submit" class="btn btn-outline-warning" name="log">Sign In</button>
                            </div>
                        </form>
                    </div>



                    <div class="offset-1 col-lg-10 pt-5">
                        <h5 class="font2 mb-md-5 mb-4" style="color: #6c757d;word-spacing: 1px;">Don't Have Account
                            <a href="index.php" class="link">Sign Up</a> Here
                        </h5>
                        <h5 class="font2 mb-md-5 mb-4" style="color: #6c757d;word-spacing: 1px;">Admin
                            <a href="index3.php" class="link">Login</a> Here
                        </h5>
                    </div>


                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>