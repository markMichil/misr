<!-- Inner Page Breadcrumb -->
<?php
    $bg = get_file_url(setting_item("contact_banner"),"full");
    $style = '';
    if($bg){
        $style = 'background-image: url('.$bg.')';
    }
?>

<section class="inner_page_breadcrumb" style="<?php echo e($style); ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <?php if(!empty($breadcrumbs)): ?>
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url("/")); ?>"><?php echo e(__('Home')); ?></a></li>
                            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="breadcrumb-item text-thm <?php echo e($breadcrumb['class'] ?? ''); ?>" aria-current="page">
                                    <?php if(!empty($breadcrumb['url'])): ?>
                                        <a href="<?php echo e(url($breadcrumb['url'])); ?>"><?php echo e($breadcrumb['name']); ?></a>
                                    <?php else: ?>
                                        <?php echo e($breadcrumb['name']); ?>

                                    <?php endif; ?>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                        <h2 class="breadcrumb_title"><?php echo e(__('Contact')); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Our Contact -->
<section class="our-contact pb0 bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="form_grid">
                    <h4 class="mb5"><?php echo setting_item_with_lang("page_contact_title"); ?></h4>
                    <p><?php echo setting_item_with_lang("page_contact_sub_title"); ?></p>
                    <form method="post" action="<?php echo e(route("contact.store")); ?>"  class="contact_form bravo-contact-block-form" id="contact_form" name="contact_form" novalidate="novalidate">
                        <?php echo e(csrf_field()); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_name" name="name" class="form-control" required="required" type="text" placeholder="<?php echo e(__('Name')); ?> ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="form_email" name="email" class="form-control required email" required="required" type="email" placeholder="<?php echo e(__('Email')); ?> ">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo e(recaptcha_field('contact')); ?>

                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control required" rows="8" required="required" placeholder="<?php echo e(__('Your Message')); ?>"></textarea>
                                </div>
                                <div class="form-group mb0">
                                    <button class="btn btn-lg btn-thm" type="submit"><?php echo e(__('Send Message')); ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="contact_localtion">
                    <?php
                        $list_info_contact = setting_item_with_lang('list_info_contact',request()->query('lang'));
                        if(!empty($list_info_contact)) $list_info_contact = json_decode($list_info_contact,true);
                        if(empty($list_info_contact) or !is_array($list_info_contact))
                            $list_info_contact = [];
                    ?>
                    <?php $__currentLoopData = $list_info_contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h4><?php echo $item['title']; ?></h4>
                        <div class="content_list"><?php echo $item['content']; ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p0 mt50">
        <div class="row">
            <div class="col-lg-12">
                <div class="h600" id="map_content"></div>
            </div>
        </div>
    </div>
</section>

<!-- Start Partners -->
<section class="start-partners bgc-thm pt50 pb50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="start_partner tac-smd">
                    <h2><?php echo e(__('Become a Real Estate Agent')); ?></h2>
                    <p><?php echo e(__('We only work with the best companies around the globe')); ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="parner_reg_btn text-right tac-smd">
                    <a class="btn btn-thm2" href="<?php echo e(route("auth.register")); ?>"><?php echo e(__('Register Now')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->startPush('js'); ?>
    <?php echo App\Helpers\MapEngine::scripts(); ?>

    <script type="text/javascript" src="<?php echo e(asset('libs/tinymce/js/tinymce/tinymce.min.js')); ?>" ></script>
    <script type="text/javascript" src="<?php echo e(asset('js/condition.js?_ver='.config('app.asset_version'))); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('module/core/js/map-engine.js?_ver='.config('app.asset_version'))); ?>"></script>
    <script>
        jQuery(function ($) {
            <?php if(setting_item("map_contact_lat") && setting_item("map_contact_long")): ?>
            new BravoMapEngine('map_content', {
                disableScripts: true,
                fitBounds: true,
                center: [<?php echo e(setting_item("map_contact_lat")); ?>, <?php echo e(setting_item("map_contact_long")); ?>],
                zoom:<?php echo e(setting_item("map_contact_zoom") ?? "8"); ?>,
                ready: function (engineMap) {
                    engineMap.addMarker([<?php echo e(setting_item("map_contact_lat")); ?>, <?php echo e(setting_item("map_contact_long")); ?>], {
                        icon_options: {
                            iconUrl:"<?php echo e(get_file_url(setting_item("boat_icon_marker_map"),'full') ?? url('images/icons/png/pin.png')); ?>"
                        }
                    });
                }
            });
            <?php endif; ?>
        })
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/Contact/Views/frontend/blocks/contact/index.blade.php ENDPATH**/ ?>