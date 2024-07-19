<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo e(url('/')); ?>">
                <i class="bi bi-grid"></i>
                <span style="color: #055E68">Dashboard</span>
            </a>
        </li>
        <?php if(Auth::check()): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo e(url('/profile')); ?>">
                    <i class="bi bi-person"></i>
                    <span style="color: #055E68">Profil Saya</span>
                </a>
            </li>
            <li class="nav-heading">Your Menu</li>
            <?php if(Auth::user()->level === 'Administrator'): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-database"></i>
                        <span style="color: #055E68">Data Lelang</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/masyarakat')); ?>">
                                <i class="bi bi-circle"></i>
                                <span style="color: #055E68">Data Masyarakat</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/petugas')); ?>">
                                <i class="bi bi-circle"></i>
                                <span style="color: #055E68">Data Petugas</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/barang')); ?>">
                                <i class="bi bi-circle"></i>
                                <span style="color: #055E68">Data Barang</span>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="<?php echo e(url('/laporan')); ?>">
                            <i class="bi bi-clipboard-data"></i>
                            <span style="color: #055E68">Print Laporan</span>
                        </a>
                    </li>
                </li>
            <?php elseif(Auth::user()->level === 'Petugas'): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-database"></i>
                        <span style="color: #055E68">Data Lelang</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?php echo e(url('/masyarakat')); ?>">
                                <i class="bi bi-circle"></i>
                                <span style="color: #055E68">Data Masyarakat</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/barang')); ?>">
                                <i class="bi bi-circle"></i>
                                <span style="color: #055E68">Data Barang</span>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="<?php echo e(url('/lelang')); ?>">
                            <i class="bi bi-bar-chart"></i>
                            <span style="color: #055E68">Aktivasi Lelang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="<?php echo e(url('/laporan')); ?>">
                            <i class="bi bi-clipboard-data"></i>
                            <span style="color: #055E68">Print Laporan</span>
                        </a>
                    </li>
                </li>
            <?php elseif(Auth::user()->level === 'Masyarakat'): ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/gallery')); ?>">
                        <i class="bi bi-cart"></i>
                        <span style="color: #055E68">Gallery Lelang</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?php echo e(url('/profile')); ?>">
                        <i class="bi bi-clock-history"></i>
                        <span style="color: #055E68">Histori Lelang</span>
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-heading">Others</li>
        <?php else: ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo e(url('/gallery')); ?>">
                    <i class="bi bi-cart"></i>
                    <span style="color: #055E68">Gallery Lelang</span>
                </a>
            </li>
        <?php endif; ?>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo e(url('/about')); ?>">
                <i class="bi bi-question-circle"></i>
                <span style="color: #055E68">About</span>
            </a>
        </li>
        <?php if(Auth::check()): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo e(url('/logout')); ?>">
                    <i class="bi bi-box-arrow-right"></i>
                    <span style="color: #055E68">Log Out</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</aside>
<?php /**PATH /var/www/html/resources/views/layout/sidebar-new.blade.php ENDPATH**/ ?>