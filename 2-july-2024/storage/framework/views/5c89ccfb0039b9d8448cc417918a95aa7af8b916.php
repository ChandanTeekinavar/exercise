<?php $__env->startSection('content'); ?>
    <main id="main" class="main main-landing">
        <div class="position-relative overflow-hidden p-5 p-md-5 text-white bg-light bimage" style="background-image:url(<?php echo e(asset('img/lading2.jpg')); ?>); background-repeat: no-repeat; position:relative;background-size:cover; ">
            <div class="p-lg-3 my-5 judul">
                <h1 class="display-5 fw-bold">Pojok Lelang</h1>
                <blockquote class="blockquote">
                    <p class="lead fw-normal mt-3">A Real-time Auction Site for Everyone.</p>
                </blockquote>
                <a class="btn btn-sm text-white" href="<?php echo e(url('/gallery')); ?>" style="background-color: #055E68 ;border-radius: 20px">Mulai Lelang</a>
                <figure class="text-end">
                    <blockquote class="blockquote">
                        <p>Everyone can Bid.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title" style="color:#ffffff">Pojok Lelang</cite>
                    </figcaption>
                </figure>
            </div>
            </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
        </div>

        <div>
            <h2 class="position-relative overflow-hidden text-center mt-5">Produk Unggulan</h2>
            <div class="album py-4">
                <div class="container">
                    
                    <div class="row align-items-top">
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="<?php echo e(url('img/barang/'.$product1->foto)); ?>" style="max-width: 200px; max-height: 200px" class="img-fluid rounded-start" alt="Foto Barang">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($product1->nama_barang); ?></h5>
                                            <p class="card-text"><?php echo e($product1->deskripsi_barang); ?></p>
                                            <p class="card-text">Harga:
                                                <?php if($product1->penawaran_harga === null): ?>
                                                    Rp <?php echo e($product1->harga_awal); ?>

                                                <?php else: ?>
                                                    Rp <?php echo e($product1->penawaran_harga); ?>

                                                <?php endif; ?>
                                            </p>
                                            <div class="btn-group">
                                                <?php if(Auth::check()): ?>
                                                    <a href="<?php echo e(url('gallery/'.$product1->id)); ?>" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(url('/login')); ?>" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="<?php echo e(url('img/barang/'.$product2->foto)); ?>" style="max-width: 200px; max-height: 200px" class="img-fluid rounded-start" alt="Foto Barang">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($product2->nama_barang); ?></h5>
                                            <p class="card-text"><?php echo e($product2->deskripsi_barang); ?></p>
                                            <p class="card-text">Harga:
                                                <?php if($product2->penawaran_harga === null): ?>
                                                    Rp <?php echo e($product2->harga_awal); ?>

                                                <?php else: ?>
                                                    Rp <?php echo e($product2->penawaran_harga); ?>

                                                <?php endif; ?>
                                            </p>
                                            <div class="btn-group">
                                                <?php if(Auth::check()): ?>
                                                    <a href="<?php echo e(url('gallery/'.$product2->id)); ?>" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(url('/login')); ?>" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img src="<?php echo e(url('img/barang/'.$product3->foto)); ?>" style="max-width: 200px; max-height: 200px" class="img-fluid rounded-start" alt="Foto Barang">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo e($product3->nama_barang); ?></h5>
                                                <p class="card-text"><?php echo e($product3->deskripsi_barang); ?></p>
                                                <p class="card-text">Harga:
                                                    <?php if($product3->penawaran_harga === null): ?>
                                                        Rp <?php echo e($product3->harga_awal); ?>

                                                    <?php else: ?>
                                                        Rp <?php echo e($product3->penawaran_harga); ?>

                                                    <?php endif; ?>
                                                </p>
                                                <div class="btn-group">
                                                    <?php if(Auth::check()): ?>
                                                        <a href="<?php echo e(url('gallery/'.$product3->id)); ?>" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                    <?php else: ?>
                                                    <a href="<?php echo e(url('/login')); ?>" type="button" class="btn btn-sm text-white" style="background-color: #055E68; border-radius:20px">Ikut Lelang</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/landing.blade.php ENDPATH**/ ?>