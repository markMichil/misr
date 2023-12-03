<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $translation = $row->translate(); ?>
    <div class="for_blog feat_property">
        <?php if(get_file_url($row->image_id,'thumb')): ?>
            <div class="thumb">
                <a href="<?php echo e($row->getDetailUrl()); ?>">
                    <img class="img-whp" src="<?php echo e(get_file_url($row->image_id,'thumb')); ?>">
                    
                </a>
                <div class="blog_tag">
                    <?php $category = $row->category; ?>
                    <?php if(!empty($category)): ?>
                        <?php $t = $category->translate(); ?>
                        <a href="<?php echo e($category->getDetailUrl(app()->getLocale())); ?>">
                            <?php echo e($t->name ?? ''); ?>

                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="details">
            <div class="tc_content">
                <h4 class="mb15"><a href="<?php echo e($row->getDetailUrl()); ?>" class="c-inherit"><?php echo e($translation->title); ?></a></h4>
                <p><?php echo get_exceprt($translation->content); ?></p>
            </div>
            <div class="fp_footer">
                <ul class="fp_meta float-left mb0">
                    <?php if(!empty($row->author)): ?>
                        <li class="list-inline-item">
                            <a href="javascript:void(0)">
                                <?php if($avatar_url = $row->author->getAvatarUrl()): ?>
                                    <img class="avatar" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($row->author->getDisplayName()); ?>">
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><?php echo e($row->author->getDisplayName() ?? ''); ?></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><span class="flaticon-calendar pr10"></span> <?php echo e(display_date($row->updated_at)); ?></a></li>
                    <?php endif; ?>
                </ul>
                <a class="fp_pdate float-right text-thm" href="<?php echo e($row->getDetailUrl()); ?>"><?php echo e(__('Read More')); ?><span class="flaticon-next"></span></a>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/News/Views/frontend/layouts/details/news-loop.blade.php ENDPATH**/ ?>