<?php echo $__env->make('Pasien.headerPasien', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin" style="margin-left:75px;">RespiraCare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        </div>
    </nav>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="<?php echo e(route('dashboardDoctor')); ?>">
                        RespiraCare
                    </a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?php echo e(route('profilePasien')); ?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(route('dashboardPasien')); ?>" class="sidebar-link">
                        <i class="lni lni-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(route('logout')); ?>" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </aside><?php /**PATH C:\xampp\htdocs\Merge FE dan BE Wrap\Project-WRAP-david-new\resources\views/Pasien/sidebar&navbar.blade.php ENDPATH**/ ?>