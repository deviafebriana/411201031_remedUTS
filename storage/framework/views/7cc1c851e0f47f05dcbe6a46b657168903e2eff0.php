
        
        <!-- START DATA -->
        <?php $__env->startSection('konten'); ?>
         <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h2>Tabel Kurir</h2>
            <a href='<?php echo e(url('barang')); ?>' class="btn btn-secondary">Input Barang</a>
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="<?php echo e(url('kurir')); ?>" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='<?php echo e(url('kurir/create')); ?>' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">ID</th>
                            <th class="col-md-4">Nama Kurir</th>
                            <th class="col-md-2">Email Kurir</th>
                            <th class="col-md-2">Password</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td><?php echo e($item->password); ?></td>
                            <td>
                                <a href='<?php echo e(url('kurir/'.$item->id.'/edit')); ?>' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin ingin hapus data?')" class='d-inline' action="<?php echo e(url('kurir/'.$item->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                                
                            </td>
                        </tr>  
                        <?php $i++ ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
               <?php echo e($data->withQueryString()->links()); ?>

          </div>
          <!-- AKHIR DATA -->   
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts_devi\resources\views/kurir/index.blade.php ENDPATH**/ ?>