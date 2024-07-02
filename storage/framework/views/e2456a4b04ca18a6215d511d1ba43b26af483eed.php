<?php $__env->startSection('title', 'History'); ?>
<?php $__env->startSection('styles'); ?>
  <style>
    a:hover {
      text-decoration: none;
    }

    .card-body {
      padding: .5rem 1rem;
      border-bottom: 1px solid #e3e6f0;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="col-12" style="margin-top: -15px">
      <a href="<?php echo e(url('/')); ?>" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
      <div class="row mt-2">
        <?php if($pemesanan->count() > 0): ?>
          <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('transaksi.show', $data->kode)); ?>">
              <div class="col-lg-6 mb-4">
                  <div class="card o-hidden border-0 shadow h-100">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col font-weight-bold h5" style="margin: 0; color: #000;">
                          <?php echo e($data->rute->start); ?><i class="fas fa-long-arrow-alt-right mx-2" style="color: #858796;"></i><?php echo e($data->rute->end); ?>

                        </div>
                        <div class="col-auto text-right">
                          <i class="fas fa-angle-right" style="color: #858796;"></i>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <p style="margin: 0; color:#000;"><?php echo e(date('l, d F Y H:i', strtotime($data->waktu))); ?> WIB</p>
                      <p style="margin: 0; color:#000;"><?php echo e($data->rute->transportasi->name); ?> (<?php echo e($data->rute->transportasi->kode); ?>)</p>
                    </div>
                  </div>
                </a>
              </div>
            </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <div class="col-12 mb-4">
              <div class="card o-hidden border-0 shadow h-100 py-2">
                <div class="card-body text-center">
                  <h3 class="text-gray-900 font-weight-bold">Tidak ada pemesanan</h3>
                  <p class="text-muted">Silahkan lakukan pemesanan ticket terlebih dahulu.</p>
                  <a href="<?php echo e(url('/')); ?>" class="btn btn-primary" style="font-size: 16px; border-radius: 10rem;">
                    Cari Ticket
                  </a>
                </div>
              </div>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\PEMESANAN-TIKET-LARAVEL8\resources\views/client/history.blade.php ENDPATH**/ ?>