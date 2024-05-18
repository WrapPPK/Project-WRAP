<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman Anda</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Icon cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- css -->
    <link href="css/bodyStyle.css" rel="stylesheet">

    <!-- Datables -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <style>
        /* Sidebar */
        #sidebar {
            background-color: white;
            height: 100vh;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            z-index: 1;

        }

        #sidebar .nav-link {
            color: rgba(171, 171, 171, 1);
        }

        #sidebar .nav-link:hover {
            background-color: #f8f9fa;
            color: #00897B;
        }

        #sidebar .nav-link.active {
            background-color: #f8f9fa;
            color: #00897B;
        }

        .submenu {
            display: none;
            padding-left: 20px;
        }

        #sidebar .active {
            background-color: #555;
        }

        main {
            padding-top: 20px;
            margin-left: 260px;
        }

        body {
            background-color: rgba(240, 255, 243, 1);
        }


        /* Kotak table */
        .container {
            margin-top: 50px;
            margin-left: 230px;
            overflow: hidden;
            max-height: 600px;
            padding-bottom:50px;
        }

        .inner-container {
            border: 1px solid #ddd;
            box-shadow;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom:100px;
            background-color: white;
            width:100%;
            padding-bottom:50px;
            margin-bottom:50px;
        }

        .table-container {
            width: 100%;
            padding-bottom:50px;
        }

        .table {
            width: 100%;
            padding-top:20px;
        }

        /* Nav */
        nav.navbar {
            background-color: #00897B;
        }

        nav.navbar a {
            color: white;
        }

        nav.navbar a:hover {
            color: #ffcc00;
        }
        /* button */
        .buttonDel{
            padding: 5px 10px;
            background-color:red;
            border: 2px solid red;
            color:white;
            border-radius: 5px;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;

        }
        .buttonDel:hover{
            padding: 5px 10px;
            border: 2px solid red;
            background-color:transparent;
            border-radius: 5px;
            color:red;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;
        }

        .button{
            padding: 5px 10px;
            background-color:#00897B;
            border: 2px solid #00897B;
            color:white;
            border-radius: 5px;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;

        }
        .button:hover{
            padding: 5px 10px;
            border: 2px solid #00897B;
            background-color:transparent;
            border-radius: 5px;
            color:#00897B;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;
        }



    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="#" style="width:200px; margin-left:-10px" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="margin-right: 30px">
                        <a class="nav-link" href="#">
                            <i class="fas fa-right-from-bracket" style="margin-right:15px;"> </i>Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column mt-5">
                        <center>
                            <div class="gambar_profile mt-4 text-center" style="width:80px;">
                                <img src="#" alt="Image Alt Text" class="img-fluid">
                            </div>
                        </center>
                        <h3 class="text-center mt-3">Admin</h3>
                        <li class="nav-item">
                            <a class="nav-link mt-3" onclick="#">
                                <i class="fas fa-user" style="margin-right:15px;"></i>Dokter
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container" style="margin-top:80px; text-align:center;">
    <form method="post" action="{{ route('doctors.store') }}" enctype="multipart/form-data" role="form">
        @csrf
        <h2 class="AkunHead fw-semibold mt-5 " style="text-align:center; margin-bottom:40px;;">
            Add Doctor Account
        </h2>
        @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                        @endif
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="NIP" aria-label="NIP" name="nip" aria-describedby="basic-addon1" />
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" aria-describedby="basic-addon1" />
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="basic-addon1" />
        </div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1" />
        </div>

        <div class="input-group mb-4 mx-auto" style="max-width: 568px">Upload photo</div>
        <div class="input-group mb-4 mx-auto" style="max-width: 568px">
            <input type="file" name="photo" size="20" />
        </div>
        <div class="mt-4" style="text-align: center; padding-bottom:100px;">
            <button class="button" type="submit">SUBMIT</button>
        </div>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
</body>
</html>
