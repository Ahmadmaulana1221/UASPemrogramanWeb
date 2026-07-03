

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Dashboard Toko Parfum</h2>

<div class="row">

    <!-- Total Kategori -->
    <div class="col-md-3 mb-3">
        <div class="card bg-primary text-white shadow">
            <div class="card-body text-center">
                <h2><?php echo e($kategori); ?></h2>
                <p class="mb-0">Total Kategori</p>
            </div>
        </div>
    </div>

    <!-- Total Produk -->
    <div class="col-md-3 mb-3">
        <div class="card bg-success text-white shadow">
            <div class="card-body text-center">
                <h2><?php echo e($produk); ?></h2>
                <p class="mb-0">Total Produk</p>
            </div>
        </div>
    </div>

    <!-- Total Supplier -->
    <div class="col-md-3 mb-3">
        <div class="card bg-warning text-white shadow">
            <div class="card-body text-center">
                <h2><?php echo e($supplier); ?></h2>
                <p class="mb-0">Total Supplier</p>
            </div>
        </div>
    </div>

    <!-- Total Transaksi -->
    <div class="col-md-3 mb-3">
        <div class="card bg-danger text-white shadow">
            <div class="card-body text-center">
                <h2><?php echo e($transaksi); ?></h2>
                <p class="mb-0">Total Transaksi</p>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\toko-parfum\resources\views/dashboard.blade.php ENDPATH**/ ?>