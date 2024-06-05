<?php echo $__env->make('auth.headerAuth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 order-md-2">
            <img src="<?php echo e(asset('images/Login.jpg')); ?>" alt="Gambar halaman login" class="img-fluid">
        </div>
        <div class="col-md-6 order-md-1" style="padding-top: 150px; padding-right: 100px; padding-left: 100px;">
                <div class="Tulisan" style="color: rgba(34, 101, 151, 1); font-size: 3vw; font-weight: 600;">
                    Welcome to RespiraCare
                </div>
                <div class="sub Tulisan" style="color: rgba(135, 192, 205, 1); font-size: 20px; font-weight: 600;">
                    <p>Choose Role</p>
                </div>
                <div class="mb-3 text-center">
                    <a href="/loginPasien" class="btn btn-primary" style="width: 100%; max-width: 570px; height: 50px; background-color:rgba(17, 63, 103, 1); font-weight:bold;">
                        <p style="position:relative; top:5px;">Patient</p>
                    </a>
                </div>
                <div class="mb-3 text-center">
                    <a href="/loginDokter" class="btn btn-primary" style="width: 100%; max-width: 570px; height: 50px; background-color:rgba(17, 63, 103, 1); font-weight:bold;">
                        <p style="position:relative; top:5px;">Doctor</p>
                    </a>
                </div>
                <div class="mb-3 text-center">
                    <a href="/loginAdmin" class="btn btn-primary" style="width: 100%; max-width: 570px; height: 50px; background-color:rgba(17, 63, 103, 1); font-weight:bold;">
                        <p style="position:relative; top:5px;">Admin</p>
                    </a>
                </div>
        </div>
    </div>
</div>

<?php echo $__env->make('auth.footerAuth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Merge FE dan BE Wrap\Project-WRAP-david-new\resources\views/auth/pilihRole.blade.php ENDPATH**/ ?>