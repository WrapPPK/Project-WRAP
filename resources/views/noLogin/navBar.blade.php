<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/Style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid px-5">
        <nav class="navbar navbar-expand-lg fixed-top mb-4 px-5">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="/">
                    <img src="images/RespiraCareLogo-noBG.png" alt="RespiraCare Logo" style="width: 150px; height: auto;">
                </a>
                <div class="offcanvas offcanvas-end" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-2" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Feature</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="login-button" href="/login">Login</a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

