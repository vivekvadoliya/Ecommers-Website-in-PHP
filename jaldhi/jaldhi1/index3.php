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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Login</title>
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
                        <h2 class="mb-md-1 mb-4" style="color: black;word-spacing: 1px;">Welcome To</h2>
                        <h1 class="mb-md-1 mb-4" style="color: #000000;word-spacing: 1px;"><u>Jaldhi</u></h1><br>
                        <h4 style="color: #6c757d;">Admin Login Here</h4>
                        <br>
                    </div>

                    <div class="row-g-2">
                        <form action="login.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error">
                                    <?php echo $_GET['error']; ?>
                                </p>
                            <?php } ?>
                            <div class="col-grid">
                                <input type="text" name="uname" placeholder="Usename" class="contact"><br><br>
                                <input type="password" name="password" placeholder="Password" class="contact">
                            </div>
                            <div class="offset-1 col-lg-10 pt-4">
                                <button type="submit" class="btn btn-outline-warning">Login</button>
                            </div>
                        </form>
                    </div>


                </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>