<?php
$featured_news = \Modules\News\Models\News::query()->with('translation')->where("status", "publish")->where('is_featured', 1)->limit(3)->get()
?>
<?php if(count($featured_news) > 0): ?>
    <div class="sidebar_feature_listing">
        <h4 class="title"><?php echo e(__("Featured Listings")); ?></h4>
        <?php $__currentLoopData = $featured_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $translation = $feature_new->translate(); ?>
            <div class="media">
                <?php if($image_url = get_file_url($feature_new->image_id, 'full')): ?>
                    <img class="align-self-start mr-3" src="<?php echo e($image_url); ?>" alt="<?php echo e($translation->title); ?>">
                <?php endif; ?>
                <div class="media-body">
                    <h5 class="mt-0 post_title"><?php echo e($translation->title); ?></h5>
                    <a href="#">$<?php echo e($feature_new->price); ?>/<small><?php echo e(__('/mo')); ?></small></a>
                    <ul class="mb0">
                        <li class="list-inline-item"><?php echo e(__('Beds:')); ?> <?php echo e($feature_new->bed); ?></li>
                        <li class="list-inline-item"><?php echo e(__('Baths:')); ?> <?php echo e($feature_new->bath); ?></li>
                        <li class="list-inline-item"><?php echo e(__('Sq Ft:')); ?> <?php echo e($feature_new->acreage); ?></li>
                    </ul>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/News/Views/frontend/layouts/sidebars/featured_listings.blade.php ENDPATH**/ ?>