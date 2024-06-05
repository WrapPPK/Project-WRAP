<?php echo $__env->make('Pasien.headerPasien', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('Pasien.sidebar&navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main p-3">
            <dir class="board" style="margin-top:70px;">
                <div class="breadcrums">
                    <h1>Welcome.</h1>
                    <?php if(Auth::guard('pasien')->check()): ?>
                    <h4><?php echo e(Auth::guard('pasien')->user()->name); ?></h4>
                    <?php endif; ?>
                </div>
            </dir>
            
            

        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Merge FE dan BE Wrap\Project-WRAP-david-new\resources\views/Pasien/DashboardPasien.blade.php ENDPATH**/ ?>