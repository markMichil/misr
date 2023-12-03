
{{--<div class="home10-mainslider" >--}}
{{--    @if(!empty($list_slider))--}}
{{--        <div class="container-fluid p-lg-0">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="main-banner-wrapper">--}}
{{--                        <div class="banner-style-one owl-theme owl-carousel">--}}
{{--                            @foreach($list_slider as $item)--}}
{{--                                @php--}}
{{--                                    $img = get_file_url($item['bg_image'],'full');--}}
{{--                                @endphp--}}
{{--                                <div class="slide slide-one" @if(!empty($img)) style="background-image: url({{$img}}); height: 450px" @endif>--}}
{{--                                    <div class="container">--}}
{{--                                        @if(!empty($property = $item['row']))--}}
{{--                                            <?php--}}
{{--                                            $translation = $property->translate();--}}
{{--                                            $detailUrl = $property->getDetailUrl();--}}
{{--                                            ;?>--}}
{{--                                            <div class="row home-content">--}}
{{--                                                <div class="col-lg-12 text-center p0">--}}
{{--                                                    <h2 class="banner_top_title">{{$property->prefix_price}} {{ $property->display_price }}</h2>--}}
{{--                                                    <a @if(!empty($blank)) target="_blank" @endif href="{{$detailUrl}}">--}}
{{--                                                        <h3 class="banner-title">{{$translation->title}}</h3>--}}
{{--                                                    </a>--}}
{{--                                                    <p>{{__('Beds:')}} {{$property->bed}} {{__(', Baths:')}} {{$property->bathroom}} {{__(', Sq:')}} {!! size_unit_format($property->square) !!}</p>--}}
{{--                                                    <div class="btn"><a href="{{$detailUrl}}" class="banner-btn">{{__('Learn More')}}</a></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="carousel-btn-block banner-carousel-btn">--}}
{{--                            <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>--}}
{{--                            <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}


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



{{--<div class="relative flex items-center justify-center h-screen mb-10 overflow-hidden">--}}
{{--    <video src=--}}
{{--               "{{env('APP_URL')}}/video.mp4"--}}
{{--           autoplay="{true}" loop muted--}}
{{--           className="absolute z-10 w-auto--}}
{{--            min-w-full min-h-full max-w-none">--}}
{{--    </video>--}}
{{--</div>--}}
{{--<div class="container" style="width: 1200px">--}}

{{--    <header class="relative flex items-center justify-center h-screen  mb-10 overflow-hidden ">--}}

{{--        <video  controls autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">--}}
{{--            <source--}}
{{--                src="{{env('APP_URL')}}/video.mp4"--}}
{{--                type="video/mp4" />--}}
{{--        </video>--}}
{{--    </header>--}}

{{--</div>--}}

{{--<div class="relative">--}}
{{--    <div class="max-w-full">--}}
{{--        <div class="pb-9/16 relative">--}}
{{--            <video controls autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">--}}
{{--                <source src="{{env('APP_URL')}}/video.mp4" type="video/mp4" />--}}
{{--                Your browser does not support the video tag.--}}
{{--            </video>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="video-container outer-div flex justify-center items-center">
    <video controls autoplay muted playsinline class="max-w-screen-lg w-full h-auto">
        <source src="{{env('APP_URL')}}/video.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
</div>


<div class="container" >
    <div class="row">
        <div class="text-center md:max-xl:flex">

            <img src="{{url('img')}}/image.jpg"  style="width:100%;  height:100%" >
        </div>
    </div>
</div>

