<?php
    $username = $_POST["username"];
    $pass = $_POST["pass"];
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

<body class="body-animate">
    <div class="container navbar-scroll body-animate" id="navbar">
    <nav class="navbar navbar-expand-sm navbar-light flex-column flex-lg-row">
            <a href="/index.html" class="navbar-brand h1 anm" style="font-size: 34px;">Web Projesi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Navigasyon">
                <span><i class="fa-solid fa-bars fa-xl anm"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle anm" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Şehir
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./sehir.html">Şehirim</a>
                            <a class="dropdown-item" href="./sehir.html#mirasimiz" onclick="scrollFunc(100)">Mirasımız</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a href="./iletisim.html" class="nav-link anm">
                            İletişim
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="./hakkimda.html" class="nav-link anm">
                            Hakkımda
                        </a>
                    </li>
                    <li class="nav-item active">
                        <button href="#" id="blackPage" class="nav-link"
                            style="border:none; background-color: transparent; margin-top: 2px;">
                            <i class="fa-solid fa-circle"></i>
                        </button>
                    </li>
                    <li class="nav-item active">
                        <a href="./login.html" class="nav-link anm">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                
                <h3 class="anm"><?php if ($username == "b231210074@sabis.sakarya.edu.tr" && $pass == "b231210074") {
                    echo "Hoşgeldiniz ".$username;}
                    else {
                        header("Location: login.html#wrong");
                        exit;
                    }    ?> </h3>

            </div>
        </div>
                </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ed9336997a.js" crossorigin="anonymous"></script>
        <script src="./blackPage.js"></script>
    </div>
</body>

</html>