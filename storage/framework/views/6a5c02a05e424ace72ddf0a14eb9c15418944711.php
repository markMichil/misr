<?php if(!empty($breadcrumbs)): ?>
    <div class="breadcrumb_content style2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url("/")); ?>"><?php echo e(__('Home')); ?></a></li>
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="breadcrumb-item text-thm <?php echo e($breadcrumb['class'] ?? ''); ?>" aria-current="page">
                    <?php if(!empty($breadcrumb['url'])): ?>
                        <a href="<?php echo e(url($breadcrumb['url'])); ?>"><?php echo e($breadcrumb['name']); ?></a>
                    <?php else: ?>
                        <?php echo e($breadcrumb['name']); ?>

                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
        <h2 class="breadcrumb_title"><?php echo e(__('News')); ?></h2>
    </div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/News/Views/frontend/layouts/details/news-breadcrumb.blade.php ENDPATH**/ ?>