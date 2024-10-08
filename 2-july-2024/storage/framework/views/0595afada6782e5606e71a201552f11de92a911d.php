<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="<?php echo e(url('/')); ?>" class="logo d-flex align-items-center">
            <img src="<?php echo e(asset('img/brand-logo-new-2.png')); ?>" alt="Pojok Lelang Logo">
            <span style="color: #055E68" class="d-none d-lg-block">Pojok Lelang</span>
        </a> 
        <i style="color: #055E68" class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <?php if(Auth::check()): ?>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <?php if(Auth::user()->level === 'Administrator'): ?>
                            <img src="<?php echo e(asset('img/avatar-admin.png')); ?>" alt="Profile" class="rounded-circle">
                        <?php elseif(Auth::user()->level === 'Petugas'): ?>
                            <img src="<?php echo e(asset('img/avatar-petugas.png')); ?>" alt="Profile" class="rounded-circle">
                        <?php elseif(Auth::user()->level === 'Masyarakat'): ?>
                            <img src="<?php echo e(asset('img/avatar-masyarakat.png')); ?>" alt="Profile" class="rounded-circle">
                        <?php endif; ?>
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e(Auth::user()->nama); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo e(Auth::user()->nama); ?></h6>
                            <span><?php echo e(Auth::user()->level); ?></span>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo e(url('/profile')); ?>">
                                <i class="bi bi-person"></i>
                                <span>Profil Saya</span>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo e(url('/logout')); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    <?php else: ?>
        <nav class="header-nav ms-auto">
            <div class="d-flex align-items-center">
                <div class="px-3 py-2 mb-1">
                    <div class="container d-flex flex-wrap justify-content-center">
                        <a href="<?php echo e(url('/login')); ?>" class="btn text-white btn-sm mt-1 me-2" style="background-color: #055E68; border-radius:15px">Log In</a>
                        <a href="<?php echo e(url('/register')); ?>" class="btn text-white btn-sm mt-1" style="background-color: #055E68; border-radius:15px">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
    <?php endif; ?>
</header>
<?php /**PATH /var/www/html/resources/views/layout/navbar-new.blade.php ENDPATH**/ ?>