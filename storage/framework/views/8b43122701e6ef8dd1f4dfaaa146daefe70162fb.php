<?php $__env->startSection('title', 'Cari Kursi'); ?>
<?php $__env->startSection('styles'); ?>
    <style>
        a:hover {
            text-decoration: none;
        }

        .kursi {
            box-sizing: border-box;
            border: 2px solid #858796;
            width: 100%;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .kursi.booked {
            background-color: #858796;
        }

        .kursi.booked .kursi-text {
            color: red;
            /* Warna teks untuk kursi yang sudah terpesan */
        }

        .kursi .kursi-text {
            font-size: 26px;
            font-weight: bold;
            color: #858796;
            /* Default color for available seats */
        }

        .kursi.available {
            background-color: #ffffff;
        }

        .kursi.booked {
            background-color: #cccccc;
            /* Ganti warna ini sesuai keinginan Anda untuk kursi yang sudah dipesan */
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-12" style="margin-top: -15px">
            <a href="javascript:window.history.back();" class="text-white btn"><i class="fas fa-arrow-left mr-2"></i>
                Kembali</a>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <div class="row mt-2">
                <?php for($i = 1; $i <= $transportasi->jumlah; $i++): ?>
                    <?php
                        $array = ['kursi' => 'K' . $i, 'rute' => $data['id'], 'waktu' => $data['waktu']];
                        $cekData = json_encode($array);
                        $isBooked = $transportasi->kursi($cekData) != null;
                    ?>
                    <?php if($isBooked): ?>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                            <div class="kursi booked">
                                <div class="kursi-text">K<?php echo e($i); ?></div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                            <a href="<?php echo e(route('pesan', ['kursi' => 'K' . $i, 'data' => Crypt::encrypt($data)])); ?>">
                                <div class="kursi available">
                                    <div class="kursi-text text-primary">K<?php echo e($i); ?></div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\PEMESANAN-TIKET-LARAVEL8\resources\views/client/kursi.blade.php ENDPATH**/ ?>