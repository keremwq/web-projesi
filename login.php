<?php
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $pass = $_POST["pass"];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/index.css">
    <link href='./css/login.css' rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/source/dikeylogo.ico">

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a href="/index.html" class="navbar-brand h1" style="font-size: 34px;">Web Projesi</a>

            <div class="collapse navbar-collapse" style="justify-content: end;">
                <ul class="navbar-nav">
                    <li class="nav-item active navbar-nav-big">
                        <a href="#" class="nav-link">
                            link1
                        </a>
                    </li>
                    <li class="nav-item active navbar-nav-big">
                        <a href="./iletisim.html" class="nav-link">
                            ileteşim
                        </a>
                    </li>
                    <li class="nav-item active navbar-nav-big">
                        <a href="./hakkimda.html" class="nav-link">
                            hakkımda
                        </a>
                    </li>
                    <li class="nav-item active navbar-nav-big">
                        <a href="./login.html" class="nav-link">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                
                <h3><?php if ($username == "b231210074" and $pass = "1234") {
                    echo "Hoşgeldiniz ".$username;}
                    else {
                        header("Location: login.html#wrong");
                        exit;
                    }    ?> </h3>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ed9336997a.js" crossorigin="anonymous"></script>
    </div>
</body>

</html>