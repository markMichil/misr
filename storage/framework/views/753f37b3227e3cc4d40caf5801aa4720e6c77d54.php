
    <div id="property-city" class="container property-city pb30 bb1" >
        <div class="row" style="margin-bottom: 30px">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h1 style="font-size:30px;font-weight:bolder;color: #c3991b"><?php echo e(clean($title)); ?> </h1>

                </div>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-4 col-xl">
                    <?php echo $__env->make('Location::frontend.blocks.list-locations.loop_side',['class_form'=>"properti_city_home8 text-center"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Location/Views/frontend/blocks/list-locations/style_5.blade.php ENDPATH**/ ?>