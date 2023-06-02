
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>

 <form action='<?php echo e(url('kurir')); ?>' method='post'>
    <?php echo csrf_field(); ?> 
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='<?php echo e(url('kurir')); ?>' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value="<?php echo e(Session::get('id')); ?>" name='id' id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama Kurir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' value="<?php echo e(Session::get('name')); ?>" id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email Kurir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="<?php echo e(Session::get('email')); ?>" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='password' value="<?php echo e(Session::get('password')); ?>" id="password">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts_devi\resources\views/kurir/create.blade.php ENDPATH**/ ?>