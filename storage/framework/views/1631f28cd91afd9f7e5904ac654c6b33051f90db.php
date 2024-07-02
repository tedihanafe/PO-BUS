<?php if(Auth::user()->level == "Admin"): ?>
  <?php $__env->startSection('title', 'Verifikasi Pembayaran'); ?>
  <?php $__env->startSection('heading', 'Verifikasi Pembayaran'); ?>
<?php elseif(Auth::user()->level == "Petugas"): ?>
  <?php $__env->startSection('title', 'Petugas'); ?>
<?php endif; ?>
<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow">
        <div class="card-body">
          <form method="POST" action="<?php echo e(route('petugas.kode')); ?>">
          <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col">
                <div class="form-group" style="margin-bottom: 0">
                  <input
                    type="text"
                    class="form-control"
                    id="kode"
                    name="kode"
                    placeholder="Kode Pemesanan"
                    required
                  />
                </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-primary px-4" style="font-size: 16px">
                  Cari
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\PEMESANAN-TIKET-LARAVEL8\resources\views/client/petugas.blade.php ENDPATH**/ ?>