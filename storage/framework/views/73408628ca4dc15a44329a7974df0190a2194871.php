
<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url(app_get_locale('/'))); ?>"><?php echo e(__("Home")); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__("Plan")); ?></li>
                        </ol>
                        <h1 class="breadcrumb_title"><?php echo e(__("Plan")); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('User::frontend.plan.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/User/Views/frontend/plan/index.blade.php ENDPATH**/ ?>