<!-- Start Partners -->
<section class="start-partners bgc-thm pt50 pb50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="start_partner tac-smd">
                    <h2><?php echo e($title ?? ""); ?></h2>
                    <p><?php echo e($sub_title ?? ""); ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="parner_reg_btn text-right tac-smd">
                    <?php if($link_title): ?>
                        <a class="btn btn-thm2" href="<?php echo e($link_more); ?>"><?php echo e($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Property/Views/frontend/blocks/call-to-action/index.blade.php ENDPATH**/ ?>