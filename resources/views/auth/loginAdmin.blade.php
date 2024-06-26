@include('auth.headerAuth')
<nav class="navbar bg-body-tertiary" style="background-color:white;">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="{{ route('logout') }}">
            <img src="images/RespiraCareLogo.png" alt="RespiraCare Logo" style="height: 50px; width: 50px;">respiraCare
        </a>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 order-md-2">
            <img src="{{ asset('images/Login.jpg') }}" alt="Gambar halaman login" class="img-fluid">
        </div>
        <div class="col-md-6 order-md-1 row justify-content-center align-items-center min-vh-50" style="padding:80px">
            <form action="/dashAdmin" method="POST">
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
                    <input type="email" name="email" id="emailAdmin" class="form-control w-100" placeholder="Enter Email" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                </div>
                <div class="mb-3">
                    <label for="passwordadmin" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Password</label>
                    <input type="password" name="password" id="passwordAdmin" class="form-control w-100" placeholder="Enter password" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;">
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary w-100" style="background-color:rgba(17, 63, 103, 1); font-weight:bold;">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('auth.footerAuth')
