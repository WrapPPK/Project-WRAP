<?php echo $__env->make('dokter.headerDokter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dokter.sidebar&navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="main p-3">
    <div class="board" style="margin-top:70px;">
        <div class="breadcrums">
            <h1>My Profile</h1>
        </div>
    </div>
    <div class="board" style="margin-top:10px;">
        <div class="breadcrums">
            <div class="container">
                <div class="row">
                    <div class="col-3" style="padding-top:20px;">
                        <div class="Profile" style="margin-bottom:10px; text-align: center;">
                            <img src="<?php echo e($doctor->photo); ?>" alt="Doctor Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-8" style="margin-left:20px;margin-top:10px;">
                        <form action="#" method="POST" class="form-valid" enctype="multipart/form-data">
                            <div class="row pt-2">
                                <div class="col-md">
                                    <label for="nameDokter" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Name</label>
                                    <input type="text" value="<?php echo e($doctor->name); ?>" name="nameDokter" id="nameDokter" class="form-control" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;" readonly>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md">
                                    <label for="emailDokter" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Email</label>
                                    <input type="text" value="<?php echo e($doctor->email); ?>" name="emailDokter" id="emailDokter" class="form-control" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;" readonly>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md">
                                    <label for="nikDokter" class="form-label" style="color: rgba(34, 101, 151, 1); font-weight: 700;">Nip</label>
                                    <input type="text" value="<?php echo e($doctor->nip); ?>" name="nikDokter" id="nikDokter" class="form-control" style="border-color: rgba(34, 101, 151, 1); border-width: 3px;" required readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\HP\Documents\Semester 6\Konfigurasi\Project-WRAP\resources\views/dokter/profileDokter.blade.php ENDPATH**/ ?>