<section id="our-testimonials" class="our-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2 class="mt0"><?php echo e($title ?? ''); ?></h2>
                    <p><?php echo e($sub_title ?? ''); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-xl-6 m-auto">
                <div class="testimonialsec">
                    <ul class="tes-nav">
                        <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $avatar_url = get_file_url($item['avatar'], 'full'); ?>
                            <li>
                                <img class="img-fluid" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($item['name']); ?>"/>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <ul class="tes-for">
                        <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="testimonial_item">
                                <div class="details">
                                    <h4><?php echo e($item['name'] ?? ""); ?></h4>
                                    <span class="small text-thm"><?php echo e($item['position'] ?? ""); ?></span>
                                    <p><?php echo e($item['desc'] ?? ""); ?></p>
                                    <p class="mt25"><?php echo e($item['number_star'] ?? ""); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Property/Views/frontend/blocks/testimonial/style_1.blade.php ENDPATH**/ ?>