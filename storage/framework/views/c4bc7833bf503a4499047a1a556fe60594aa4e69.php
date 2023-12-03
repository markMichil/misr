<?php
    $languages = \Modules\Language\Models\Language::getActive();
    $locale = session('website_locale',app()->getLocale());
?>

<?php if(!empty($languages) && setting_item('site_enable_multi_lang')): ?>
    <li class="">
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($locale != $language->locale): ?>
                <a href="<?php echo e(get_lang_switcher_url($language->locale)); ?>" class="is_login">





                    <?php if($language->name == 'Egyptian'): ?>
                        AR
                    <?php elseif($language->name == 'English'): ?>
                        EN
                    <?php else: ?>
                        <?php echo e($language->name); ?>

                        <?php endif; ?>


                </a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




















    </li>
<?php endif; ?>

<?php /**PATH /home3/misrprop/public_html/demo/modules/Language/Views/frontend/switcher.blade.php ENDPATH**/ ?>