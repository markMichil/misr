
<?php if(!empty($model_tag)): ?>
<div class="blog_tag_widget">
    <h4 class="title"><?php echo e($item->title); ?></h4>
    <ul class="tag_list">
        <?php
            $list_tags = \Modules\News\Models\NewsTag::getTags();
        ?>
        <?php if($list_tags): ?>
            <?php $__currentLoopData = $list_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $translation = $tag->translate() ?>
                <li class="list-inline-item"><a href="<?php echo e($tag->getDetailUrl(app()->getLocale())); ?>"><?php echo e($translation->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/News/Views/frontend/layouts/sidebars/tag.blade.php ENDPATH**/ ?>