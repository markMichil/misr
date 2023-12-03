<?php if(!empty($gallery)): ?>
    <section class="about-section gallery--block pb30">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!empty($item['image'])): ?>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="gallery_item">
                                <img class="img-fluid img-circle-rounded w100" src="<?php echo e(\Modules\Media\Helpers\FileHelper::url($item['image'], 'medium')); ?>" alt="fp1.jpg">
                                <div class="gallery_overlay"><a class="icon popup-img" href="<?php echo e(\Modules\Media\Helpers\FileHelper::url($item['image'], 'full')); ?>"><span class="flaticon-zoom-in"></span></a></div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/Template/Views/frontend/blocks/gallery/index.blade.php ENDPATH**/ ?>