<!-- Property Cities -->

    <div  id="best-property" class="container best-property mt80 pb50">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <?php if($title): ?>
                        <h2 style="font-size:40px;font-weight:bolder;color: #c3991b"><?php echo e(clean($title)); ?></h2>
                    <?php endif; ?>
                    <p style="font-size:20px;font-weight:bold;color: #cc9900">
                    <?php if($desc): ?>
                        <?php echo e(clean($desc)); ?>.
                    <?php endif; ?>


                    </p>
                        <a class="float-right" href="<?php echo e(route('property.search')); ?>">

<span
    class="flaticon-next"></span>
                            <?php echo e(__('View All')); ?>

                            <span
                                class="flaticon-next"></span>
                        </a>
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-4">
                    <?php echo $__env->make('Property::frontend.layouts.search.loop-gird-bg-image',
                        ['img_bg_class'=>'feature_property_bg_image_st3'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>


<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Property/Views/frontend/blocks/list-property/style_3.blade.php ENDPATH**/ ?>