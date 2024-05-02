<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* CSS */
        ::placeholder {
            color: rgba(135, 192, 205, 1) !important;
        }

        /* Override max-width for image */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
    <link href="css/styleRegis.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/Login.jpg') }}" alt="Gambar halaman login" class="img-fluid">
        </div>
        <div class="col-md-6 order-md-1" style="padding-top: 100px; padding-right: 100px; padding-left: 100px;">
            <form action="/register" method="POST" class="form-valid" enctype="multipart/form-data">
                @csrf <!-- Tambahkan CSRF token untuk keamanan -->
                <div class="Tulisan" style="color: rgba(34, 101, 151, 1); font-size: 3vw; font-weight: 600;">
                    Welcome to RespiraCare
                </div>
                <div class="sub Tulisan" style="color: rgba(135, 192, 205, 1); font-size: 20px; font-weight: 600;">
                    <p>Sign in to your account</p>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control w-100" placeholder="Enter your name" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Email</label>
                            <input type="text" id="email" name="email" class="form-control w-100" placeholder="Enter your name" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="birthdate" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Date</label>
                            <input type="date" id="birthdate" name="birthdate" class="form-control w-100" name="tanggal">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Password</label>
                            <input type="password" id="password" name="password" class="form-control w-100" placeholder="Enter your password" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confirm_password" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control w-100" placeholder="Enter your password" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone_number" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Phone Number</label>
                            <input type="tel" id="phone_number" name="phone_number" class="form-control w-100" placeholder="Enter your phone number" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Gender</label>
                            <select id="gender" name="gender" class="form-control w-100" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                                <option value="" selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="doctor" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Doctor</label>
                        <select id="doctor" name="doctor" class="form-control w-100" style="border: 2px solid rgba(34, 101, 151, 1); border-width: 3px;">
                            <option value="" selected>Choose Doctor</option>
                            <option value="heru">Heru Ikhsan Maulana Sp.p</option>
                            <option value="david">David Gholi Rahmadana Sp.p</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary" onclick="konfirmasiRegis()" style="width: 100%; max-width: 570px; height: 50px; background-color:rgba(17, 63, 103, 1); font-weight:bold;">
                        Sign Up
                    </button>
                </div>
                <div class="Signup text-center">
                    <p>Already have an account? <a href="/login" style="text-decoration:none; font-weight:bold;">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/konfirmasiRegis.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
</body>
</html>
