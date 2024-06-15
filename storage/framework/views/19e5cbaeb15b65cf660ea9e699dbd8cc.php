<?php echo $__env->make('admin.headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebarAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container" style="margin-top:80px; text-align:center;">
        <form method="post" action="<?php echo e(route('doctors.store')); ?>" enctype="multipart/form-data" role="form">
            <?php echo csrf_field(); ?>
            <h2 class="AkunHead fw-semibold mt-5 " style="text-align:center; margin-bottom:40px;;">
                Add Doctor Account
            </h2>

            <?php if($errors->any()): ?>
                <?php echo e(implode('', $errors->all(':message'))); ?>

            <?php endif; ?>
            
            <div class="input-group mb-1 mx-auto" style="max-width: 568px">NIP</div>
            <div class="input-group mb-2 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" placeholder="NIP" aria-label="NIP" name="nip" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-1 mx-auto" style="max-width: 568px">Nama</div>
            <div class="input-group mb-2 mx-auto" style="max-width: 568px">
                <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-1 mx-auto" style="max-width: 568px">Email</div>
            <div class="input-group mb-2 mx-auto" style="max-width: 568px">
                <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-1 mx-auto" style="max-width: 568px">Password</div>
            <div class="input-group mb-2 mx-auto" style="max-width: 568px">
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1" />
            </div>

            <div class="input-group mb-2 mx-auto" style="max-width: 568px">Upload photo</div>
            <div class="input-group mb-4 mx-auto" style="max-width: 568px">
                <input type="file" name="photo" size="20" />
            </div>
            <div class="mt-4" style="text-align: center; padding-bottom:100px;">
                <button class="button" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>

    <?php echo $__env->make('admin.footerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\HP\Documents\Semester 6\Konfigurasi\Project-WRAP\resources\views/admin/insertAdmin.blade.php ENDPATH**/ ?>