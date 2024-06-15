<?php echo $__env->make('admin.headerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebarAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container" style="width: 100%; margin-top:90px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1 class="mb-3">Doctor List</h1>
        </div>
        <div class="inner-container" style="margin-bottom:100px;">
            <dir class="board">
                <div class="textheadertable" style="margin-bottom:20px;">
                    <div id="test" style="display: flex; justify-content: flex-end; margin-top: 10px;">
                        <input style="margin-right:890px" type="text" id="searchInput" placeholder="Search for names.." onkeyup="searchTable()">
                        <button style="padding-right:20px" type="button" class="btn btn-primary" onclick="location.href='/insert'">+ Tambah</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <table class="table" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Password</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $data = \App\Models\Doctor::all();
                    ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><?php echo e($data->nip); ?></td>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <!-- <td><?php echo e($data->password); ?></td> -->
                        <td>
                            <form action="<?php echo e(route('doctor.destroy', $data->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="buttonDel"><i class="fas fa-trash"></i></button>
                            </form>
                            <h1></h1>
                            <a href="<?php echo e(route('doctor.edit', $data->id)); ?>" class="button"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </dir>
        </div>
    </div>
    <?php echo $__env->make('admin.footerAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
<?php /**PATH C:\Users\HP\Documents\Semester 6\Konfigurasi\Project-WRAP\resources\views/admin/dashboardAdmin.blade.php ENDPATH**/ ?>