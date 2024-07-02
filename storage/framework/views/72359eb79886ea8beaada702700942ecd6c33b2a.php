<?php $__env->startSection('title', 'Transaksi'); ?>
<?php $__env->startSection('heading', 'Transaksi'); ?>
<?php $__env->startSection('styles'); ?>
  <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"/>
  <style>
    thead > tr > th, tbody > tr > td{
      vertical-align: middle !important;
    }

    .card-title {
      float: left;
      font-size: 1.1rem;
      font-weight: 400;
      margin: 0;
    }

    .card-text {
      clear: both;
    }

    small {
      font-size: 80%;
      font-weight: 400;
    }

    .text-muted {
      color: #6c757d !important;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <!-- Button trigger modal -->
      <button
        type="button"
        class="btn btn-primary btn-sm btn-add"
      >
        <i class="fas fa-plus"></i>
      </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table table-bordered table-striped table-hover"
          id="dataTable"
          width="100%"
          cellspacing="0"
        >
          <thead>
            <tr>
              <td>No</td>
              <td>Kode Pemesanan</td>
              <td>Tujuan</td>
              <td>Penumpang</td>
              <td>Tanggal Berangkat</td>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td>
                  <h5 class="card-title"><?php echo DNS1D::getBarcodeHTML($data->kode, "C128", 2, 30); ?></h5>
                  <p class="card-text">
                    <small class="text-muted">
                      <?php echo e($data->kode); ?>

                    </small>
                  </p>
                </td>
                <td>
                  <h5 class="card-title"><?php echo e($data->rute->tujuan); ?></h5>
                  <p class="card-text">
                    <small class="text-muted">
                      <?php echo e($data->rute->start); ?> - <?php echo e($data->rute->end); ?>

                    </small>
                  </p>
                </td>
                <td>
                  <h5 class="card-title"><?php echo e($data->penumpang->name); ?></h5>
                  <p class="card-text">
                    <small class="text-muted">
                      Kode Kursi : <?php echo e($data->kursi); ?>

                    </small>
                  </p>
                </td>
                <td>
                  <h5 class="card-title"><?php echo e(date('l, d F Y', strtotime($data->waktu))); ?></h5>
                  <p class="card-text">
                    <small class="text-muted">
                      <?php echo e(date('H:i', strtotime($data->waktu))); ?> WIB
                    </small>
                  </p>
                </td>
                <td>
                  <a
                    href="<?php echo e(route('transaksi.show', $data->kode)); ?>"
                    class="btn btn-info btn-circle"
                    ><i class="fas fa-search-plus"></i
                  ></a>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\PEMESANAN-TIKET-LARAVEL8\resources\views/server/laporan/index.blade.php ENDPATH**/ ?>