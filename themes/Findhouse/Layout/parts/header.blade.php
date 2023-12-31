<div class="preloader d-none"></div>
@php
    $languages = \Modules\Language\Models\Language::getActive();
    $locale = session('website_locale',app()->getLocale());
@endphp
<style>
    :hover {
        color: var(--hover-color);
    }
</style>
{{--second--}}
	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed  stricky main-menu {{ (!empty($row->header_style) and $row->header_style=='transparent')   ? '  header-'.$row->header_style :
	'header-normal style2' }} @if(session('website_locale',app()->getLocale()) == 'egy') is-rtl @endif" style="height: 100px" >
		<div class="container p0 " style="width: 1200px">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
					@if($logo_id = setting_item("logo_id"))
						<?php $logo = get_file_url($logo_id,'full') ?>
						<img class="nav_logo_img img-fluid" src="{{$logo}}" alt="{{setting_item("site_title")}}">
					@endif
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
				<a href="{{ url(app_get_locale(false,'/')) }}" class="navbar_brand float-left dn-smd" style="width: 180px ;margin-left: 20px;">
					@if((isset($is_homepage) && $is_homepage == true))
						@if($logo_id_tran = setting_item("logo_id_tran"))
							<?php $logo_tran = get_file_url($logo_id_tran,'full') ?>
							<img class="logo1 "  src="{{$logo_tran}}" alt="{{setting_item("site_title")}}">
						@endif
					@else
						@if($logo_id = setting_item("logo_id"))
							<?php $logo = get_file_url($logo_id,'full') ?>
							<img class="logo1 "  src="{{$logo}}" alt="{{setting_item("site_title")}}">
						@endif
					@endif
		            @if($logo_id = setting_item("logo_id"))
                        <?php $logo = get_file_url($logo_id,'full') ?>
                        <img class="logo2 "  src="{{$logo}}" alt="{{setting_item("site_title")}}">
					@endif
{{--					<span>{{setting_item("site_title")}}</span>--}}
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">


					<?php
                    generate_menu('primary',[
                        'walker'=>\Themes\Findhouse\Core\Walkers\MenuWalker::class
                    ]);

    ?>


					@if(!Auth::id())
						<li class="list-inline-item">
							<a href="javascript:void(0)" class="btn"> <span class="dn-lg" data-toggle="modal" data-target="#login">{{ __('Login') }}</span>
                                @if(is_enable_registration())
                                  |
                                    <span data-toggle="modal" data-target="#register">{{ __('Register') }}</span>
                                @endif
                            </a>
						</li>
					@else
						<li class="login-item dropdown">
							<a href="#" data-toggle="dropdown" class="is_login @if(!($avatar_url = Auth::user()->getAvatarUrl())) no_avatar @endif">
{{--								@if($avatar_url = Auth::user()->getAvatarUrl())--}}
{{--									<img class="avatar" src="{{$avatar_url}}" alt="{{ Auth::user()->getDisplayName()}}">--}}
{{--								@else--}}
{{--									<span class="avatar-text">{{ucfirst( Auth::user()->getDisplayName()[0])}}</span>--}}
{{--								@endif--}}
								{{__("Hi, :Name",['name'=>Auth::user()->getDisplayName()])}}
							</a>
							<ul class="dropdown-menu dropdown-menu-right text-left">
								@if(Auth::user()->hasPermission('dashboard_agent_access'))
									<li class=" menu-hr"><a href="{{route('vendor.dashboard')}}"><i class="fa fa-line-chart"></i> {{__("Agent Dashboard")}}</a></li>
								@endif
								<li class="@if(Auth::user()->hasPermission('dashboard_agent_access')) menu-hr @endif">
									<a href="{{route('user.profile.index')}}"><i class="fa fa-user"></i> {{__("My profile")}}</a>
								</li>
								<li class="menu-hr"><a href="{{route('user.change_password')}}"><i class="fa fa-lock"></i> {{__("Change password")}}</a></li>
                                @if(is_enable_plan() )
                                    <li class="menu-hr"><a href="{{route('user.plan')}}"><i class="fa fa-list-alt"></i> {{__("My plan")}}</a></li>
                                @endif
								@if(Auth::user()->hasPermission('dashboard_access'))
									<li class="menu-hr"><a href="{{url('/admin')}}"><i class="fa fa-cog"></i> {{__("Admin Dashboard")}}</a></li>
								@endif
								<li class="menu-hr">
									<a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{__('Logout')}}</a>
								</li>
							</ul>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					@endif
                    @include('Language::frontend.switcher')
                </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center" onclick="window.location.href='{{asset('/')}}'">
					{{-- <a href="{{asset('/')}}" class="navbar_brand float-left dn-smd"> --}}
						@if($logo_id = setting_item("logo_id_mb"))
							<?php $logo = get_file_url($logo_id,'full') ?>
							<img class="nav_logo_img " src="{{$logo}}" alt="{{setting_item("site_title")}}">
{{--							<span class="mt20">{{setting_item("site_title")}}</span>--}}
						@endif
					{{-- </a> --}}
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s">
{{--                        <a href="{{route('vendor.dashboard')}}">--}}
{{--                            <span class="flaticon-user"></span></a>--}}
                    </li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1 mm-menu_offcanvas">
			<ul>
				<?php generate_menu('primary',[
                    'walker'=>\Themes\Findhouse\Core\Walkers\MenuWalker::class
                ]) ?>
				@if(!Auth::id())
					<li><a href="{{route('login')}}" > {{__('Login')}}</a></li>
                    @if(is_enable_registration())
					    <li><a href="{{route('auth.register')}}"> {{__('Register')}}</a></li>
                    @endif
				@endif

					<li>@include('Language::frontend.switcher',['mobile'=>true])</li>
			</ul>
		</nav>
    </div>

