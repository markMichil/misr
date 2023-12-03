
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="candidate_revew_select style2 text-right mb30-991">
                <ul class="mb0 d-sm-flex justify-content-between align-items-center">
                    <li class="list-inline-item">
                        <a class="btn btn-primary" href="<?php echo e(route("property.vendor.create")); ?>">
                            <span class="flaticon-plus"></span>
                            <span class=""> <?php echo e(__('Add property')); ?></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <div class="course fn-520">
                            <form class="form-inline my-2" action="<?php echo e(route('property.vendor.index')); ?>" method="GET">
                                <input class="mr-2 rounded ml-2 border py-1 pl-2 pr-2" type="search" placeholder="<?php echo e(__('Search Properties')); ?>" aria-label="Search" name="s" value="<?php echo e(Request::query("s")); ?>">
                                <button class="btn my-2 my-sm-0 bn-sm btn-sm btn-primary" type="submit"><?php echo e(__("Search")); ?> <span class="flaticon-magnifying-glass"></span></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb40">
                <div class="property_table">
                    <div class="table-responsive mt0">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col"><?php echo e(__('Listing Title')); ?></th>
                                <th scope="col"><?php echo e(__('Date published')); ?></th>
                                <th scope="col"><?php echo e(__('Status')); ?></th>
                                <th scope="col"><?php echo e(__('View')); ?></th>
                                <th scope="col"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if($rows->total() > 0): ?>
                                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php echo $__env->make('Property::frontend.manageProperty.loop-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mbp_pagination">
                        <?php echo e($rows->appends(request()->query())->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/Property/Views/frontend/manageProperty/index.blade.php ENDPATH**/ ?>