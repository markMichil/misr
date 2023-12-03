<div class="mbp_thumb_post">
    <?php $category = $row->category; ?>
    <?php if(!empty($category)): ?>
        <div class="blog_sp_tag">
            <?php $t = $category->translate(); ?>
            <a href="<?php echo e($category->getDetailUrl(app()->getLocale())); ?>"><?php echo e($t->name ?? ''); ?></a>
        </div>
    <?php endif; ?>
    <h3 class="blog_sp_title"><?php echo e($translation->title); ?></h3>
    <ul class="blog_sp_post_meta">
        <?php if(!empty($row->author)): ?>
            <li class="list-inline-item">
                <?php if($avatar_url = $row->author->getAvatarUrl()): ?>
                    <a href="#"><img src="<?php echo e($avatar_url); ?>" alt="<?php echo e($row->author->getDisplayName()); ?>"></a>
                <?php endif; ?>
            </li>
            <li class="list-inline-item"><a href="#"><?php echo e($row->author->getDisplayName() ?? ''); ?></a></li>
        <?php endif; ?>
            <li class="list-inline-item"><span class="flaticon-calendar"></span></li>
            <li class="list-inline-item"><a href="#"><?php echo e(display_date($row->updated_at)); ?></a></li>
            <li class="list-inline-item"><span class="flaticon-view"></span></li>
            <li class="list-inline-item"><a href="#"> <?php echo e($row->view); ?> <?php echo e(__('views')); ?></a></li>
    </ul>
    <div class="thumb">
        <?php if($image_url = get_file_url($row->image_id, 'full')): ?>
            <img class="img-fluid" src="<?php echo e($image_url); ?>" alt="<?php echo e($translation->title); ?>">
        <?php endif; ?>
    </div>
    <div class="details">
        <?php echo $translation->content; ?>

    </div>
    <ul class="blog_post_share">
        <li><p><?php echo e(__("Share")); ?></p></li>
        <li><a target="_blank" original-title="<?php echo e(__("Facebook")); ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($translation->title); ?>"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" original-title="<?php echo e(__("Twitter")); ?>" href="https://twitter.com/share?url=<?php echo e($row->getDetailUrl()); ?>&amp;title=<?php echo e($translation->title); ?>"><i class="fa fa-twitter"></i></a></li>
    </ul>
</div>

<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/News/Views/frontend/layouts/details/news-detail.blade.php ENDPATH**/ ?>