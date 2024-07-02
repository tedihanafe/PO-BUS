<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>

    <div class="col-xl-5 col-lg-6 col-md-9">
        <div class="card o-hidden border-0 my-5 bg-transparent">

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 font-weight-bold">APLICATION</h1>
                                <h3 class="h5 text-gray-900 mb-5 font-weight-bold">TICKET TRAVELING</h3>
                            </div>
                            <form method="POST" action="<?php echo e(route('login')); ?>" class="user">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-user <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="username" required autocomplete="off" placeholder="Username">
                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-user <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="password" required placeholder="Password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                                            <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <label class="custom-control-label" for="remember"><?php echo e(__('Remember Me')); ?></label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    <?php echo e(__('Login')); ?>

                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small p-4 text-success text-decoration-none" href="<?php echo e(route('register')); ?>">Buat
                                    Akun!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            // Mengatur latar belakang body dengan gambar
            $("body").css({
                "background-image": "url('<?php echo e(asset('img/cover-tiket.jpg')); ?>')",
                "background-size": "cover",
                "background-position": "center",
                "background-repeat": "no-repeat",
                "height": "100vh" /* Menentukan tinggi sesuai tinggi layar */
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\PROJECT LARAVEL\PEMESANAN-TIKET-LARAVEL8\resources\views/auth/login.blade.php ENDPATH**/ ?>