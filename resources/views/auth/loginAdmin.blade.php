<!-- admin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/Login.jpg') }}" alt="Gambar halaman login" class="img-fluid">
        </div>
        <div class="col-md-6 order-md-1" style="padding-top: 90px; padding-right: 100px; padding-left: 100px;">
            <form action="/dashboardAdmin" method="POST">
                @csrf
                <div class="Tulisan" style="color: rgba(34, 101, 151, 1); font-size: 3vw; font-weight: 600;">
                    Hello admin,
                </div>
                <div class="Tulisan" style="color: rgba(34, 101, 151, 1); font-size: 3vw; font-weight: 600;">
                    Welcome to RespiraCare
                </div>
                @if ($errors->any())
                        {{ implode('', $errors->all(':message')) }}
                        @endif
                <div class="sub Tulisan" style="color: rgba(135, 192, 205, 1); font-size: 20px; font-weight: 600;">
                    <p>Sign in to your account</p>
                </div>
                <div class="mb-3">
                    <label for="emailAdmin" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Email</label>
                    <input type="text" name="email" id="emailAdmin" class="form-control w-100" placeholder="Enter Email" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                </div>
                <div class="mb-3">
                    <label for="passwordadmin" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Password</label>
                    <input type="password" name="password" id="passwordAdmin" class="form-control w-100" placeholder="Enter password" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                </div>
                <div class="mb-3" style="text-align: right; font-weight: bold;">
                    <a href="#" style="text-decoration: none; color: rgba(34, 101, 151, 1);">Forgot Password</a>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary" style="width: 100%; max-width: 570px; height: 50px; background-color:rgba(17, 63, 103, 1); font-weight:bold;">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
