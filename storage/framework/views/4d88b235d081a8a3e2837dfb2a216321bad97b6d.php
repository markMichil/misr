<?php
    $list_category = $model_category
        ->with('translation')
        ->withCount('news')
        ->orderBy('id')
        ->get()
        ->toTree();
?>
<?php if(!empty($list_category)): ?>
<div class="terms_condition_widget">
    <h4 class="title"><?php echo e($item->title); ?></h4>
    <div class="widget_list">
        <ul class="list_details">
            <?php
            $traverse = function ($categories, $prefix = '') use (&$traverse) {
                foreach ($categories as $category) {
                    $translation = $category->translate();
                    ?>
                        <li>
                            <a href="<?php echo e($category->getDetailUrl()); ?>">
                                <i class="fa fa-caret-right mr10"></i><?php echo e($prefix); ?> <?php echo e($translation->name); ?><span class="float-right"><?php echo e($category->news_count); ?> <?php echo e($category->news_count < 1 ? __('property') : __('properties')); ?></span>
                            </a>
                        </li>
                    <?php
                    $traverse($category->children, $prefix . '-');
                }
            };
            $traverse($list_category);
            ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/News/Views/frontend/layouts/sidebars/category.blade.php ENDPATH**/ ?>