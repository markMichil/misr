<div class="row">
    <div class="col-sm-4">
        <h3 class="form-group-title"><?php echo e(__("Page Search")); ?></h3>
        <p class="form-group-desc"><?php echo e(__('Config page search of your website')); ?></p>
    </div>
    <div class="col-sm-8">
        <div class="panel">
            <div class="panel-title"><strong><?php echo e(__("General Options")); ?></strong></div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="" ><?php echo e(__("Title Page")); ?></label>
                    <div class="form-controls">
                        <input type="text" name="property_page_search_title" value="<?php echo e(setting_item_with_lang('property_page_search_title',request()->query('lang'))); ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="" ><?php echo e(__("Page list properties layout")); ?></label>
                    <div class="form-controls">
                        <select  name="property_page_search_layout" class="form-control">
                            <option <?php echo e(setting_item_with_lang('property_page_search_layout',request()->query('lang')) == 1 ? 'selected="selected"' : ''); ?> value="1"><?php echo e(__('Right Sidebar')); ?></option>
                            <option <?php echo e(setting_item_with_lang('property_page_search_layout',request()->query('lang')) == 2 ? 'selected="selected"' : ''); ?> value="2"><?php echo e(__('Left Sidebar')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="" ><?php echo e(__("Page single property layout")); ?></label>
                    <div class="form-controls">
                        <select  name="property_page_single_layout" value="<?php echo e(setting_item_with_lang('property_page_single_layout',request()->query('lang'))); ?>" class="form-control">
                            <option <?php echo e(setting_item_with_lang('property_page_single_layout',request()->query('lang')) == 1 ? 'selected="selected"' : ''); ?> value="1"><?php echo e(__('V1')); ?></option>
                            <option <?php echo e(setting_item_with_lang('property_page_single_layout',request()->query('lang')) == 2 ? 'selected="selected"' : ''); ?> value="2"><?php echo e(__('V2')); ?></option>
                            <option <?php echo e(setting_item_with_lang('property_page_single_layout',request()->query('lang')) == 3 ? 'selected="selected"' : ''); ?> value="3"><?php echo e(__('V3')); ?></option>
                            <option <?php echo e(setting_item_with_lang('property_page_single_layout',request()->query('lang')) == 4 ? 'selected="selected"' : ''); ?> value="4"><?php echo e(__('V4')); ?></option>
                        </select>
                    </div>
                </div>
                <?php if(is_default_lang()): ?>
                    <div class="form-group">
                        <label class="" ><?php echo e(__("Add prefix Price in Property listing?")); ?></label>
                        <div class="form-controls">
                            <label><input type="checkbox" name="property_prefix_price_listing" value="1" <?php if(!empty($settings['property_prefix_price_listing'])): ?> checked <?php endif; ?> /> <?php echo e(__("Yes, please enable it")); ?> </label>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="" ><?php echo e(__("Open gallery when clicking Featured image on the Listing page?")); ?></label>
                        <div class="form-controls">
                            <label><input type="checkbox" name="property_thumb_open_gallery" value="1" <?php if(!empty($settings['property_thumb_open_gallery'])): ?> checked <?php endif; ?> /> <?php echo e(__("Yes, please enable it")); ?> </label>
                            <br>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label class="" ><?php echo e(__("Layout Map Position")); ?></label>
                    <div class="form-controls">
                        <select name="property_layout_map_option" class="form-control">
                            <option <?php echo e((setting_item_with_lang('property_layout_map_option',request()->query('lang')) ?? '') == 'map_left' ? 'selected' : ''); ?> value="map_left"><?php echo e(__('Map Left')); ?></option>
                            <option <?php echo e((setting_item_with_lang('property_layout_map_option',request()->query('lang')) ?? '') == 'map_right' ? 'selected' : ''); ?> value="map_right"><?php echo e(__("Map Right")); ?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="" ><?php echo e(__("Layout Map Size")); ?></label>
                    <div class="form-controls">
                        <select name="property_layout_map_size" class="form-control">
                            <?php $__currentLoopData = range(4,8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e((setting_item_with_lang('property_layout_map_size',request()->query('lang')) ?? '') == $size ? 'selected' : ''); ?>"><?php echo e($size); ?>/12</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label><?php echo e(__("Map Lat Default")); ?></label>
                        <div class="form-controls">
                            <input type="text" name="property_map_lat_default" value="<?php echo e($settings['property_map_lat_default'] ?? ''); ?>" class="form-control" placeholder="21.030513">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label><?php echo e(__("Map Lng Default")); ?></label>
                        <div class="form-controls">
                            <input type="text" name="property_map_lng_default" value="<?php echo e($settings['property_map_lng_default'] ?? ''); ?>" class="form-control" placeholder="105.840565">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label><?php echo e(__("Map Zoom Default")); ?></label>
                        <div class="form-controls">
                            <input type="text" name="property_map_zoom_default" value="<?php echo e($settings['property_map_zoom_default'] ?? ''); ?>" class="form-control" placeholder="13">
                        </div>
                    </div>
                    <div class="col-md-12 mt-1">
                        <i> <?php echo e(__('Get lat - lng in here')); ?> <a href="https://www.latlong.net" target="_blank">https://www.latlong.net</a></i>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('Property::admin.settings.form-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('Property::admin.settings.map-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="panel">
            <div class="panel-title"><strong><?php echo e(__("SEO Options")); ?></strong></div>
            <div class="panel-body">
                <div class="form-group">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#seo_1"><?php echo e(__("General Options")); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#seo_2"><?php echo e(__("Share Facebook")); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#seo_3"><?php echo e(__("Share Twitter")); ?></a>
                        </li>
                    </ul>
                    <div class="tab-content" >
                        <div class="tab-pane active" id="seo_1">
                            <div class="form-group" >
                                <label class="control-label"><?php echo e(__("Seo Title")); ?></label>
                                <input type="text" name="property_page_list_seo_title" class="form-control" placeholder="<?php echo e(__("Enter title...")); ?>" value="<?php echo e(setting_item_with_lang('property_page_list_seo_title',request()->query('lang'))); ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__("Seo Description")); ?></label>
                                <input type="text" name="property_page_list_seo_desc" class="form-control" placeholder="<?php echo e(__("Enter description...")); ?>" value="<?php echo e(setting_item_with_lang('property_page_list_seo_desc',request()->query('lang'))); ?>">
                            </div>
                            <?php if(is_default_lang()): ?>
                                <div class="form-group form-group-image">
                                    <label class="control-label"><?php echo e(__("Featured Image")); ?></label>
                                    <?php echo \Modules\Media\Helpers\FileHelper::fieldUpload('property_page_list_seo_image', $settings['property_page_list_seo_image'] ?? "" ); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <?php
                            $seo_share = json_decode(setting_item_with_lang('property_page_list_seo_desc',request()->query('lang'),'[]'),true);
                        ?>
                        <div class="tab-pane" id="seo_2">
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__("Facebook Title")); ?></label>
                                <input type="text" name="property_page_list_seo_share[facebook][title]" class="form-control" placeholder="<?php echo e(__("Enter title...")); ?>" value="<?php echo e($seo_share['facebook']['title'] ?? ""); ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__("Facebook Description")); ?></label>
                                <input type="text" name="property_page_list_seo_share[facebook][desc]" class="form-control" placeholder="<?php echo e(__("Enter description...")); ?>" value="<?php echo e($seo_share['facebook']['desc'] ?? ""); ?>">
                            </div>
                            <?php if(is_default_lang()): ?>
                                <div class="form-group form-group-image">
                                    <label class="control-label"><?php echo e(__("Facebook Image")); ?></label>
                                    <?php echo \Modules\Media\Helpers\FileHelper::fieldUpload('property_page_list_seo_share[facebook][image]',$seo_share['facebook']['image'] ?? "" ); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane" id="seo_3">
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__("Twitter Title")); ?></label>
                                <input type="text" name="property_page_list_seo_share[twitter][title]" class="form-control" placeholder="<?php echo e(__("Enter title...")); ?>" value="<?php echo e($seo_share['twitter']['title'] ?? ""); ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(__("Twitter Description")); ?></label>
                                <input type="text" name="property_page_list_seo_share[twitter][desc]" class="form-control" placeholder="<?php echo e(__("Enter description...")); ?>" value="<?php echo e($seo_share['twitter']['title'] ?? ""); ?>">
                            </div>
                            <?php if(is_default_lang()): ?>
                                <div class="form-group form-group-image">
                                    <label class="control-label"><?php echo e(__("Twitter Image")); ?></label>
                                    <?php echo \Modules\Media\Helpers\FileHelper::fieldUpload('property_page_list_seo_share[twitter][image]', $seo_share['twitter']['image'] ?? "" ); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(is_default_lang()): ?>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h3 class="form-group-title"><?php echo e(__("Review Options")); ?></h3>
            <p class="form-group-desc"><?php echo e(__('Config review for property')); ?></p>
        </div>
        <div class="col-sm-8">
            <div class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="" ><?php echo e(__("Enable review system for Property?")); ?></label>
                        <div class="form-controls">
                            <label><input type="checkbox" name="property_enable_review" value="1" <?php if(!empty($settings['property_enable_review'])): ?> checked <?php endif; ?> /> <?php echo e(__("Yes, please enable it")); ?> </label>
                            <br>
                            <small class="form-text text-muted"><?php echo e(__("Turn on the mode for reviewing property")); ?></small>
                        </div>
                    </div>
                    <div class="form-group" data-condition="property_enable_review:is(1)">
                        <label class="" ><?php echo e(__("Review must be approval by admin")); ?></label>
                        <div class="form-controls">
                            <label><input type="checkbox" name="property_review_approved" value="1"  <?php if(!empty($settings['property_review_approved'])): ?> checked <?php endif; ?> /> <?php echo e(__("Yes please")); ?> </label>
                            <br>
                            <small class="form-text text-muted"><?php echo e(__("ON: Review must be approved by admin - OFF: Review is automatically approved")); ?></small>
                        </div>
                    </div>
                    <div class="form-group" data-condition="property_enable_review:is(1)">
                        <label class="" ><?php echo e(__("Review number per page")); ?></label>
                        <div class="form-controls">
                            <input type="number" class="form-control" name="property_review_number_per_page" value="<?php echo e($settings['property_review_number_per_page'] ?? 5); ?>" />
                            <small class="form-text text-muted"><?php echo e(__("Break comments into pages")); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(is_default_lang()): ?>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h3 class="form-group-title"><?php echo e(__("Vendor Options")); ?></h3>
            <p class="form-group-desc"><?php echo e(__('Agent config for property')); ?></p>
        </div>
        <div class="col-sm-8">
            <div class="panel">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="" ><?php echo e(__("Property created by vendor must be approved by admin")); ?></label>
                        <div class="form-controls">
                            <label><input type="checkbox" name="property_vendor_create_service_must_approved_by_admin" value="1" <?php if(!empty($settings['property_vendor_create_service_must_approved_by_admin'])): ?> checked <?php endif; ?> /> <?php echo e(__("Yes please")); ?> </label>
                            <br>
                            <small class="form-text text-muted"><?php echo e(__("ON: When vendor posts a service, it needs to be approved by administrator")); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Property/Views/admin/settings/property.blade.php ENDPATH**/ ?>