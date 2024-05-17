<?php
if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/iletisim.css">
    <title>Ana Sayfa</title>
    <link rel="icon" type="image/x-icon" href="/source/dikeylogo.ico">
</head>

<body class="body-animate">
    <div class="container navbar-scroll body-animate" id="navbar">  
    <nav class="navbar navbar-expand-sm navbar-light flex-column flex-lg-row">
            <a href="/index.html" class="navbar-brand h1 anm" style="font-size: 34px;">Web Projesi</a>

            <div class="collapse navbar-collapse d-lg-flex" style="justify-content: end;" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item active navbar-nav-big d-none d-sm-block">
                        <a href="#" class="nav-link anm">
                            Hobilerim
                        </a>
                    </li>
                    <li class="nav-item active navbar-nav-big d-none d-sm-block">
                        <a href="./iletisim.html" class="nav-link anm">
                            ileteşim
                        </a>
                    </li>
                    <li class="nav-item active navbar-nav-big d-none d-sm-block">
                        <a href="./hakkimda.html" class="nav-link anm">
                            hakkımda
                        </a>
                    </li>
                    <li class="nav-item active navbar-nav-big d-none d-sm-block">
                        <button href="#" id="blackPage" class="nav-link"
                            style="border:none; background-color: transparent; margin-top: 2px;">
                            <i class="fa-solid fa-circle"></i>
                        </button>
                    </li>
                    <li class="nav-item active navbar-nav-big d-none d-sm-block">
                        <a href="./login.html" class="nav-link anm">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="col-12 contact">
            <h2 class="head">İletişime Geç</h2>
            <p style="text-align: center;">Aşağıdaki formu kullanarak bizimle iletişime geçebilirsiniz!</p>
            <br>
            <center>
            <div class="col-md-6" style="padding-bottom: 5px;">
                <h3><?php echo "$name";?></h3>
                <h3><?php echo "$mail";?></h3>
                <h3><?php echo "$message";?></h3>
            </center>
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
</body>

</html>