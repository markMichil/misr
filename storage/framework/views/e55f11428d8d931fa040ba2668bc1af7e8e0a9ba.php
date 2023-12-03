<?php if($list_item): ?>
<section id="our-partners" class="our-partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2 style="font-size:40px;font-weight:bolder;color: #c3991b"><?php echo e($title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $link_image = get_file_url($item['avatar'], 'full')?>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="<?php echo e($link_image); ?>">
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Agencies/Views/frontend/blocks/partners.blade.php ENDPATH**/ ?>