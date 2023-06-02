
        
        <!-- START DATA -->
        <?php $__env->startSection('konten'); ?>
         <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h2>Tabel Pengiriman</h2>
            <a href='<?php echo e(url('barang')); ?>' class="btn btn-secondary">Barang</a>
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="<?php echo e(url('pengiriman')); ?>" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='<?php echo e(url('pengiriman/create')); ?>' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">ID</th>
                            <th class="col-md-4">No Pengiriman</th>
                            <th class="col-md-2">Tanggal</th>
                            <th class="col-md-2">ID Lokasi</th>
                            <th class="col-md-2">ID Barang</th>
                            <th class="col-md-2">Jumlah Barang</th>
                            <th class="col-md-2">ID Kurir</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->no_pengiriman); ?></td>
                            <td><?php echo e($item->tanggal); ?></td>
                            <td><?php echo e($item->lokasi_id); ?></td>
                            <td><?php echo e($item->barang_id); ?></td>
                            <td><?php echo e($item->jumlah_barang); ?></td>
                            <td><?php echo e($item->kurir_id); ?></td>
                            <td>
                                <a href='<?php echo e(url('pengiriman/'.$item->id.'/edit')); ?>' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin ingin hapus data?')" class='d-inline' action="<?php echo e(url('pengiriman/'.$item->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                                <a href='<?php echo e(url('pengiriman/'.$item->id.'/edit')); ?>' class="btn btn-warning btn-sm">Submit Pengiriman</a>
                                
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
        
    
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uts_devi\resources\views/pengiriman/index.blade.php ENDPATH**/ ?>