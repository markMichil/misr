<?php
$related_news = \Modules\News\Models\News::query()->with('translation')->where('status','publish')->where('cat_id', $row->cat_id)->where('id', '!=', $row->id)->limit(2)->get();
?>
<?php if(!empty($related_news)): ?>
    <div class="col-lg-12 mb20">
        <h4><?php echo e(__("Related Posts")); ?></h4>
    </div>
    <?php $__currentLoopData = $related_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $translation = $new->translate(); ?>
        <div class="col-md-6 col-lg-6">
            <div class="for_blog feat_property">
                <?php if(get_file_url($new->image_id,'thumb')): ?>
                    <div class="thumb">
                        <img class="img-whp" src="<?php echo e(get_file_url($new->image_id,'thumb')); ?>">
                        
                    </div>
                <?php endif; ?>
                <div class="details">
                    <div class="tc_content">
                        <h4><?php echo e($translation->title); ?></h4>
                        <ul class="bpg_meta">
                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
                            <li class="list-inline-item"><a href="#"><?php echo e(display_date($new->updated_at)); ?></a></li>
                        </ul>
                        <p><?php echo e(Str::limit($new->content, 70)); ?></p>
                    </div>
                    <div class="fp_footer">
                        <?php if(!empty($row->author)): ?>
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item">
                                    <?php if($avatar_url = $row->author->getAvatarUrl()): ?>
                                        <a href="#"><img src="<?php echo e($avatar_url); ?>" alt="<?php echo e($row->author->getDisplayName()); ?>"></a>
                                    <?php endif; ?>
                                </li>
                                <li class="list-inline-item"><a href="#"><?php echo e($row->author->getDisplayName()); ?></a></li>
                            </ul>
                        <?php endif; ?>
                        <a class="fp_pdate float-right text-thm" href="<?php echo e($row->getDetailUrl()); ?>">Read More <span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/News/Views/frontend/layouts/details/news-related.blade.php ENDPATH**/ ?>