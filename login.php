<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./svg/favicon.png" type="image/x-icon">

    <meta name="title" content="Email Generator - RixetBD">
    <meta name="description" content="EMailGeN is an Email Generator application using Javascript. Fast temporary & business email without registration and free. [ Temp mail, fake email, disposable email, temporary email ]">
    <meta name="keywords" content="email generator, email, generator, rixetbd, Temp mail, fake email, disposable email, temporary email">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Rabiul Islam">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="style21.css">

    <title>EFinder By RixetBD 😍</title>
    <style>
        
    </style>
</head>

<body class="position-relative">

    <div class="container">
        <div class="row align-items-center justify-content-center vh-100 top_row">
            <div class="form-holder col-sm-12 col-md-6">
                <form action="log.php" method="POST">
                    <div class="form-content">
                        <div class="form-items">
                            <h1 class="gradient_text">EFinder v2.0</h1>
                            <p>Give Login Information.</p>

                            <div class="col-md-12">
                                <input class="form-control cs_bg" type="text" id="fullName" placeholder="Username"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control cs_bg" type="password" id="domain" placeholder="Password"
                                    required>
                            </div>

                            <div class="form-button">
                                <button id="submitbtn" type="submit" class="btn mt-3"><i class="fas fa-user me-2"></i> Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="container-fluid m-0 p-0">
        <marquee behavior="scroll" direction="left" scrollamount="10" style="border-bottom: 2px solid #c2d7ef;">
            <img src="./svg/car2.gif" class="vec_car" id="vec_car">
        </marquee>
        <div class="col-sm-12 col-md-12">
            <!-- <p class="text-light text-center" style="margin-bottom: 5px"><small>Planning By Jayonta Debnath.</small></p> -->
            <p class="text-light text-center">Copyright &copy; <script type="text/javascript">
                    var year = new Date();
                    document.write(year.getFullYear());
                </script> 🤖 Development By <a class="link-copyright" target="_blank"
                    href="https://rixetbd.github.io/">Rabiul Islam.</a></p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>



    </script>

</body>

</html>