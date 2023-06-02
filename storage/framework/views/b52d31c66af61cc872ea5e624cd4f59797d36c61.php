
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>

 <form action='<?php echo e(url('pengiriman/'.$data->id)); ?>' method='post'>
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='<?php echo e(url('pengiriman')); ?>' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <?php echo e($data->id); ?>

                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_pengiriman" class="col-sm-2 col-form-label">No Pengiriman</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_pengiriman' value="<?php echo e($data->no_pengiriman); ?>" id="no_pengiriman">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal' value="<?php echo e($data->tanggal); ?>" id="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lokasi_id" class="col-sm-2 col-form-label">ID Lokasi</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='lokasi_id' value="<?php echo e($data->lokasi_id); ?>" id="lokasi_id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="barang_id" class="col-sm-2 col-form-label">ID Barang</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='barang_id' value="<?php echo e($data->barang_id); ?>" id="barang_id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='jumlah_barang' value="<?php echo e($data->jumlah_barang); ?>" id="jumlah_barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kurir_id" class="col-sm-2 col-form-label">ID Kurir</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kurir_id' value="<?php echo e($data->kurir_id); ?>" id="kurir_id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kurir_id" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts_devi\resources\views/pengiriman/edit.blade.php ENDPATH**/ ?>