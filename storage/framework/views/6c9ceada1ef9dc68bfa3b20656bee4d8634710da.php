<?php
    /**
    * @var $row \Modules\Location\Models\Location
    * @var $to_location_detail bool
    * @var $service_type string
    */
    $translation = $row->translate();
    $link_location = false;
?>


<a href="#">

    <div class="<?php echo e($class_form ?? ""); ?>">
        <div class="thumb-container">
            <div class="thumb citi_side_con bg_img_placeholder" style="background-image:url(<?php echo e($row->getImageUrl()); ?>);"></div>
        </div>
        <div class="details">
            <h1 style="font-weight:bolder;color: #c3991b"><?php echo e($translation->name); ?></h1>


        </div>
    </div>
</a>

<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Location/Views/frontend/blocks/list-locations/loop_side.blade.php ENDPATH**/ ?>