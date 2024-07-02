<?php $__env->startSection('title', 'Edit Transportasi'); ?>
<?php $__env->startSection('heading', 'Edit Transportasi'); ?>
<?php $__env->startSection('styles'); ?>
  <link href="<?php echo e(asset('vendor/select2/dist/css/select2.min.css')); ?>" rel="stylesheet"/>
  <style>
    .select2-container .select2-selection--single {
      display: block;
      width: 100%;
      height: calc(1.5em + .75rem + 2px);
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 2;
      color: #6e707e;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #d1d3e2;
      border-radius: .35rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #6e707e;
      line-height: 28px;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
      display: block;
      padding-left: 0;
      padding-right: 0;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      margin-top: -2px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: calc(1.5em + .75rem + 2px);
      position: absolute;
      top: 1px;
      right: 1px;
      width: 20px;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="card shadow mb-4 mt-2">
    <form action="<?php echo e(route('transportasi.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="card-body">
        <input type="hidden" name="id" value="<?php echo e($transportasi->id); ?>">
        <div class="form-group">
          <label for="name">Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            value="<?php echo e($transportasi->name); ?>"
            required
          />
        </div>
        <div class="form-group">
          <label for="kode">Kode</label>
          <input
            type="text"
            class="form-control"
            id="kode"
            name="kode"
            value="<?php echo e($transportasi->kode); ?>"
            required
          />
        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah Kursi</label>
          <input
            type="text"
            class="form-control"
            id="jumlah"
            name="jumlah"
            onkeypress="return inputNumber(event)"
            value="<?php echo e($transportasi->jumlah); ?>"
            required
          />
        </div>
        <div class="form-group">
          <label for="category_id">Category</label><br>
          <select
            class="select2 form-control"
            id="category_id"
            name="category_id"
            required
            style="width: 100%; color: #6e707e;"
          >
            <option value="" disabled>-- Pilih Category --</option>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($data->id); ?>"
                <?php if($data->id == $transportasi->category_id): ?>
                  selected
                <?php endif; ?>
              ><?php echo e($data->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
      </div>
      <div class="card-footer">
        <a href="<?php echo e(route('transportasi.index')); ?>" class="btn btn-warning mr-2">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('vendor/select2/dist/js/select2.full.min.js')); ?>"></script>
  <script>
    if(jQuery().select2) {
      $(".select2").select2();
    }
    function inputNumber(e) {
      const charCode = (e.which) ? e.which : w.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
      return true;
    };
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\PEMESANAN-TIKET-LARAVEL8\resources\views/server/transportasi/edit.blade.php ENDPATH**/ ?>