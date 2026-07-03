

<?php $__env->startSection('content'); ?>

<h2>Data Kategori</h2>

<a href="/kategori/create" class="btn btn-primary mb-3">
    Tambah Kategori
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($k->id); ?></td>
        <td><?php echo e($k->nama_kategori); ?></td>
        <td>
            <a href="/kategori/<?php echo e($k->id); ?>/edit" class="btn btn-warning">
                Edit
            </a>

            <form action="/kategori/<?php echo e($k->id); ?>" method="POST" style="display:inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\toko-parfum\resources\views/kategori/index.blade.php ENDPATH**/ ?>