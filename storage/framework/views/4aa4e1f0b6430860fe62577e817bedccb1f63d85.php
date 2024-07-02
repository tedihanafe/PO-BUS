<?php $__env->startSection('title', $id); ?>
<?php $__env->startSection('styles'); ?>
  <style>
    a:hover {
      text-decoration: none;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="col-12" style="margin-top: -15px">
      <a href="<?php echo e(url('/')); ?>" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
      <div class="row mt-2">
        <?php if(count($dataRute) > 0): ?>
          <?php $__currentLoopData = $dataRute; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 mb-4">
              <?php if($data['kursi'] == 0): ?>
                <div class="card o-hidden border-0 shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="font-weight-bold text-muted text-uppercase mb-1"><?php echo e($data['tujuan']); ?></div>
                        <div class="h5 mb-0 font-weight-bold text-muted mb-1"><?php echo e($data['start']); ?> - <?php echo e($data['end']); ?></div>
                        <small class="text-muted"><?php echo e($data['transportasi']); ?> (<?php echo e($data['kode']); ?>)</small>
                      </div>
                      <div class="col-auto text-right">
                        <div class="h5 mb-0 font-weight-bold text-muted">Rp. <?php echo e(number_format($data['harga'], 0, ',', '.')); ?></div>
                        <small class="text-muted">/Orang</small>
                        <p class="text-muted font-weight-bold">Habis</p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php else: ?>
                <a href="<?php echo e(route('cari.kursi', Crypt::encrypt($data))); ?>">
                  <div class="card o-hidden border-0 shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="font-weight-bold text-gray-800 text-uppercase mb-1"><?php echo e($data['tujuan']); ?></div>
                          <div class="h5 mb-0 font-weight-bold text-primary mb-1"><?php echo e($data['start']); ?> - <?php echo e($data['end']); ?></div>
                          <small class="text-muted"><?php echo e($data['transportasi']); ?> (<?php echo e($data['kode']); ?>)</small>
                        </div>
                        <div class="col-auto text-right">
                          <div class="h5 mb-0 font-weight-bold text-primary">Rp. <?php echo e(number_format($data['harga'], 0, ',', '.')); ?></div>
                          <small class="text-muted">/Orang</small>
                          <?php if($data['kursi'] < 50): ?>
                            <p class="text-primary" style="margin: 0;"><small><?php echo e($data['kursi']); ?> Kursi Tersedia</small></p>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              <?php endif; ?>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
          <div class="col-12 mb-4">
              <div class="card o-hidden border-0 shadow h-100 py-2">
                <div class="card-body text-center">
                  <h3 class="text-gray-900 font-weight-bold">Ticket tidak tersedia</h3>
                  <p class="text-muted">Ubah pencarian dengan data yang berbeda.</p>
                  <a href="<?php echo e(url('/')); ?>" class="btn btn-primary" style="font-size: 16px; border-radius: 10rem;">
                    Ubah Pencarian
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
<?php $__env->startSection('script'); ?>
  <script>
    function formatNumber(num) {
      return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\PEMESANAN-TIKET-LARAVEL8\resources\views/client/show.blade.php ENDPATH**/ ?>