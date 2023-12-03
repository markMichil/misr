
<?php $__env->startSection('head'); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/daterange/daterangepicker.css")); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css")); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/fotorama/fotorama.css")); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="blog_post_container bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <?php echo $__env->make('News::frontend.layouts.details.news-breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <?php if($row->count() > 0): ?>
                    <div class="main_blog_post_content">
                        <?php echo $__env->make('News::frontend.layouts.details.news-detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="row related-news">
						<?php echo $__env->make('News::frontend.layouts.details.news-related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
                <?php else: ?>
                    <div class="alert alert-danger">
                        <?php echo e(__("Sorry, but nothing matched your search terms. Please try again with some different keywords.")); ?>

                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 col-xl-4">
                <?php echo $__env->make('News::frontend.layouts.details.news-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

 
  
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\misr\themes/Findhouse/News/Views/frontend/detail.blade.php ENDPATH**/ ?>