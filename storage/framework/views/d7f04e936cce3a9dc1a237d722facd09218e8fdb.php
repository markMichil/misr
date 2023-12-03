<?php $container = 1 ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 mb10">
    </div>
    <div class="mb-3">
        <?php if($row->id): ?>
            <?php echo $__env->make('Language::admin.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
    <form class="" action="<?php echo e(route('property.vendor.store',['id'=>($row->id) ? $row->id : '-1','lang'=>request()->query('lang')])); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-sm-9">
                <?php echo $__env->make('Property::admin.property.content',['hide_gallery'=>true,'property_type'=>1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('Property::admin.property.location', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
                <div class="col-sm-3">
                    <div class="panel">
                        <div class="panel-title"><strong><?php echo e(__('Settings')); ?></strong></div>
                        <div class="panel-body">
                            <?php if(in_array($row->status,['publish','draft'])): ?>
                                <div>
                                    <label class="cursor-pointer">
                                        <input <?php if($row->status=='publish'): ?> checked <?php endif; ?> type="radio" name="status" value="publish"> <?php echo e(__("Publish")); ?>

                                    </label>
                                </div>
                                <div>
                                    <label class="cursor-pointer">
                                        <input <?php if($row->status=='draft'): ?> checked <?php endif; ?> type="radio" name="status" value="draft"> <?php echo e(__("Draft")); ?>

                                    </label>
                                </div>
                            <?php endif; ?>
                            <?php if($row->status=='pending'): ?>
                                <div>
                                    <label class="cursor-pointer">
                                        <input checked  type="radio" name="status" value="pending" disabled> <?php echo e(__("Pending")); ?>

                                    </label>
                                </div>
                            <?php endif; ?>
                            <div class="my_profile_setting_input text-center">
                                <button type="submit" class="btn btn2 "><?php echo e(__('Save')); ?></button>
                            </div>
                        </div>
                    </div>
                    <?php if(is_default_lang()): ?>
                        <div div class="panel">
                            <div class="panel-title"><strong><?php echo e(__("Category")); ?></strong></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="">
                                        <select name="category_id" class="form-control">
                                            <option value=""><?php echo e(__("-- Please Select --")); ?></option>
                                            <?php
                                            $traverse = function ($categories, $prefix = '') use (&$traverse, $row) {
                                                foreach ($categories as $category) {
                                                    $selected = '';
                                                    if ($row->category_id == $category->id)
                                                        $selected = 'selected';
                                                    printf("<option value='%s' %s>%s</option>", $category->id, $selected, $prefix . ' ' . $category->name);
                                                    $traverse($category->children, $prefix . '-');
                                                }
                                            };
                                            $traverse($property_category);
                                            ?>
                                        </select>
                                    </div>
                                </div>`
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-title"><strong><?php echo e(__("Property type")); ?></strong></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div >
                                        <label class="cursor-pointer">
                                            <input type="radio" name="property_type" id="property_type_buy" value="1" <?php if(old('property_type',($row->property_type ?? 0) ? : 1) == 1): ?> checked <?php endif; ?>>
                                            <?php echo e(__("For buy")); ?>

                                        </label>
                                    </div>
                                    <div>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="property_type" id="property_type_rent"  value="2" <?php if(old('property_type',$row->property_type ?? 0) == 2): ?> checked <?php endif; ?>>
                                            <?php echo e(__("For rent")); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="panel">
                        <div class="panel-title"><strong><?php echo e(__('Sold')); ?></strong></div>
                        <div class="panel-body">
                        <div class="form-switch">
                                <div>
                                    <label>
                                        <input type="checkbox" name="is_sold" value="1" <?php if($row->is_sold): ?> checked <?php endif; ?>> <?php echo e(__("Sold Out")); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-title"><strong><?php echo e(__("Availability")); ?></strong></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label><?php echo e(__('Property Featured')); ?></label>
                                <br>
                                <label>
                                    <input type="checkbox" name="is_featured" <?php if($row->is_featured): ?> checked <?php endif; ?> value="1"> <?php echo e(__("Enable featured")); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-image">
                        <div class="panel-title"><strong><?php echo e(__('Property Image')); ?></strong></div>
                        <div class="panel-body">
                            <?php echo \Modules\Media\Helpers\FileHelper::fieldUpload('image_id',$row->image_id); ?>

                        </div>
                    </div>
                    <?php echo $__env->make('Property::admin.property.attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>



    </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script.body'); ?>
    <script type="text/javascript" src="<?php echo e(asset('libs/tinymce/js/tinymce/tinymce.min.js')); ?>" ></script>
    <script type="text/javascript" src="<?php echo e(asset('js/condition.js?_ver='.config('app.asset_version'))); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('module/core/js/map-engine.js?_ver='.config('app.asset_version'))); ?>"></script>
    <?php echo App\Helpers\MapEngine::scripts(); ?>

    <script>
        jQuery(function ($) {
            new BravoMapEngine('map_content', {
                fitBounds: true,
                center: [<?php echo e($row->map_lat ?? "51.505"); ?>, <?php echo e($row->map_lng ?? "-0.09"); ?>],
                zoom:<?php echo e($row->map_zoom ?? "8"); ?>,
                ready: function (engineMap) {
                    <?php if($row->map_lat && $row->map_lng): ?>
                    engineMap.addMarker([<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>], {
                        icon_options: {}
                    });
                    <?php endif; ?>
                    engineMap.on('click', function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                    engineMap.on('zoom_changed', function (zoom) {
                        $("input[name=map_zoom]").attr("value", zoom);
                    });
                    engineMap.searchBox($('.bravo_searchbox'),function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                }
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/Property/Views/frontend/manageProperty/detail.blade.php ENDPATH**/ ?>