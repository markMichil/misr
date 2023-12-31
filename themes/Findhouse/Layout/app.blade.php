<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$html_class ?? ''}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php event(new \Modules\Layout\Events\LayoutBeginHead()); @endphp
    @php
        $favicon = setting_item('site_favicon');
    @endphp
    @if($favicon)
        @php
            $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
        @endphp
        @if(!empty($file))
            <link rel="icon" type="{{$file['file_type']}}" href="{{asset('uploads/'.$file['file_path'])}}" />
        @else:
            <link rel="icon" type="image/png" href="{{url('images/favicon.png')}}" />
        @endif
    @endif

    @include('Layout::parts.seo-meta')
    <link href="{{ asset('libs/flags/css/flag-icon.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('themes/findhouse/css/bootstrap.min.css?v=2')}}">
    <link rel="stylesheet" href="{{asset('themes/findhouse/css/style.css?v=2')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('themes/findhouse/css/responsive.css?v=2')}}">
    <link rel="stylesheet" href="{{asset('themes/findhouse/dist/frontend/css/frontend.css?v=2')}}">
<!-- Title -->
    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link rel="stylesheet" href="{{asset('themes/findhouse/fonts/SomarSans-Regular.ttf')}}">--}}
{{--    <link href="https://fonts.cdnfonts.com/css/somar-sans" rel="stylesheet">--}}

    {!! \App\Helpers\Assets::css() !!}
    {!! \App\Helpers\Assets::js() !!}
    @include('Layout::parts.global-script')
    <!-- Styles -->
    @stack('css')
    {{--Custom Style--}}
     <link href="{{ route('core.style.customCss') }}" rel="stylesheet">
    {{-- <link href="{{ asset('libs/carousel-2/owl.carousel.css') }}" rel="stylesheet"> --}}
    @if(session('website_locale',app()->getLocale()) == 'egy')
        <link href="{{ asset('themes/findhouse/dist/frontend/css/rtl.css?v=2') }}" rel="stylesheet">
    @endif

    {!! setting_item('head_scripts') !!}
    {!! setting_item_with_lang_raw('head_scripts') !!}



</head>
<body class="frontend-page {{$body_class ?? ''}} @if(session('website_locale',app()->getLocale()) == 'egy') is-rtl @endif">

    {!! setting_item('body_scripts') !!}
    {!! setting_item_with_lang_raw('body_scripts') !!}
    <div class="wrapper  mt-0 pt-0">
        {{-- @include('Layout::parts.topbar') --}}
        @include('Layout::parts.header')
        @yield('content')
        @include('Layout::parts.footer')
    </div>
    {!! setting_item('footer_scripts') !!}
    {!! setting_item_with_lang_raw('footer_scripts') !!}
</body>
</html>
