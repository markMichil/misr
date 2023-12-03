
    <th scope="row">
        <div class="feat_property list favorite_page style2 bg-transparent">
            <div class="thumb">
                <?php if($row->image_url): ?>
                    <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl()); ?>">
                        <img class="img-whp" src="<?php echo e($row->image_url); ?>" alt="<?php echo e($row->title); ?>">
                    </a>
                <?php endif; ?>
                <div class="thmb_cntnt">
                    <ul class="tag mb0">
                        <li class="list-inline-item dn"></li>
                        <li class="list-inline-item"><a href="#"><?php echo e($row->property_type == 1 ? __('For Buy') : ($row->property_type == 2 ? __('For Rent') : '')); ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="details">
                <div class="tc_content">
                    <h4><a href="<?php echo e($row->getDetailUrl()); ?>" target="_blank"><?php echo e($row->title); ?></a></h4>
                    <?php if(!empty($row->location->name)): ?>
                        <p><span class="flaticon-placeholder"></span> <?php echo e($row->location->name ?? ''); ?></p>
                    <?php endif; ?>
                    <a class="fp_price text-thm" href="#"><?php echo e($row->display_price_admin); ?><small><?php echo e(__('/mo')); ?></small></a>
                </div>
            </div>
        </div>
    </th>
    <td><?php echo e(display_datetime($row->updated_at ?? $row->created_at)); ?></td>
    <td>
        <span class="status_tag <?php echo e($row->status == 'publish' ? 'badge2' : 'badge'); ?>">
            <?php echo e($row->status); ?>

        </span>
    </td>
    <td><?php echo e($row->view); ?></td>
    <td>
        <ul class="view_edit_delete_list mb0">
            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo e(__('Preview')); ?>"><a href="<?php echo e($row->getDetailUrl()); ?>"><span class="fa fa-eye"></span></a></li>
            <?php if(Auth::user()->hasPermission('property_update')): ?>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><a href="<?php echo e(route("property.vendor.edit",[$row->id])); ?>"><span class="flaticon-edit"></span></a></li>
            <?php endif; ?>
            <?php if(Auth::user()->hasPermission('property_delete')): ?>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><a href="<?php echo e(route("property.vendor.delete",[$row->id])); ?>"><span class="flaticon-garbage"></span></a></li>
            <?php endif; ?>
        </ul>
    </td>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/Property/Views/frontend/manageProperty/loop-list.blade.php ENDPATH**/ ?>