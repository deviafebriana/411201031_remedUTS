
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>

 <form action='<?php echo e(url('lokasi/'.$data->id)); ?>' method='post'>
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='<?php echo e(url('lokasi')); ?>' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <?php echo e($data->id); ?>

                </div>
            </div>
            <div class="mb-3 row">
                <label for="kode_lokasi" class="col-sm-2 col-form-label">Kode Lokasi</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kode_lokasi' value="<?php echo e($data->kode_lokasi); ?>" id="kode_lokasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_lokasi" class="col-sm-2 col-form-label">Nama Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_lokasi' value="<?php echo e($data->nama_lokasi); ?>" id="nama_lokasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_lokasi" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts_devi\resources\views/lokasi/edit.blade.php ENDPATH**/ ?>