<?php $__env->startSection('title', 'Pengaturan'); ?>
<?php if(Auth::user()->level == "Admin"): ?>
  <?php $__env->startSection('heading', 'Pengaturan'); ?>
<?php endif; ?>
<?php $__env->startSection('styles'); ?>
  <style>
    .table {
      margin-bottom: 0;
      color: #000;
    }

    .table td {
      border-top: none;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <?php if(Auth::user()->level != "Admin"): ?>
    <div class="col-12" style="margin-top: -15px">
      <a href="javascript:window.history.back();" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
    <?php else: ?>
    <div class="col-12">
    <?php endif; ?>
      <div class="card shadow">
        <div class="card-body">
          <table class="table">
            <tr>
              <td><i class="fas fa-user"></i></td>
              <td>Ubah Nama User</td>
              <td class="text-right">
                <button
                  type="button"
                  class="btn btn-primary btn-sm"
                  data-toggle="modal"
                  data-target="#ubah-name"
                >
                  Ubah
                </button>
              </td>
            </tr>
            <tr  style="border-top: 1px solid #e3e6f0;">
              <td><i class="fas fa-key"></i></td>
              <td>Ubah Password</td>
              <td class="text-right">
                <button
                  type="button"
                  class="btn btn-primary btn-sm"
                  data-toggle="modal"
                  data-target="#ubah-password"
                >
                  Ubah
                </button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Ubah Name Modal -->
  <div
  class="modal fade"
  id="ubah-name"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Nama User</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo e(route('edit.name')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Nama User</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="<?php echo e(Auth::user()->name); ?>"
                required
              />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Kembali
            </button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Ubah Password Modal -->
  <div
  class="modal fade"
  id="ubah-password"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo e(route('edit.password')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="modal-body">
            <div class="form-group">
              <label for="password_lama">Password Lama</label>
              <input id="password_lama" type="password" class="form-control" name="password_lama">
            </div> 
            <div class="form-group">
              <label for="password">Password Baru</label>
              <input id="password" type="password" class="form-control" name="password">
            </div> 
            <div class="form-group">
              <label for="password-confirm">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              Kembali
            </button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\Ticket-Laravel-master\resources\views/client/pengaturan.blade.php ENDPATH**/ ?>