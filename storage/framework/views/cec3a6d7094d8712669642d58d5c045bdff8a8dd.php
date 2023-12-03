











































<script src=
            "https://cdn.tailwindcss.com">
</script>

<style>

    @media (min-width: 1280px) {
        .container {
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (min-width: 1280px) {
        .video-container {
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            background-color: black;
        }
    }
</style>



































<div class="video-container outer-div flex justify-center items-center">
    <video controls autoplay muted playsinline class="max-w-screen-lg w-full h-auto">
        <source src="<?php echo e(env('APP_URL')); ?>/video.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
</div>


<div class="container" >
    <div class="row">
        <div class="text-center md:max-xl:flex">

            <img src="<?php echo e(url('img')); ?>/image.jpg"  style="width:100%;  height:100%" >
        </div>
    </div>
</div>

<?php /**PATH /home3/misrprop/public_html/demo/themes/Findhouse/Template/Views/frontend/blocks/form-search-all-service/style_6.blade.php ENDPATH**/ ?>