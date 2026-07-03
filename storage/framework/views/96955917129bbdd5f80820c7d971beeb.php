

<?php $__env->startSection('content'); ?>

<h2>Tambah Kategori</h2>

<form action="/kategori" method="POST">
    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control">
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\toko-parfum\resources\views/kategori/create.blade.php ENDPATH**/ ?>