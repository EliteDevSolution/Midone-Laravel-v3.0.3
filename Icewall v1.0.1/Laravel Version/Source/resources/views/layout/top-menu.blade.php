@extends('../layout/main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('../layout/components/mobile-menu')
    @include('../layout/components/top-bar')
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            @foreach ($top_menu as $menuKey => $menu)
                <li>
                    <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'top-menu top-menu--active' : 'top-menu' }}">
                        <div class="top-menu__icon">
                            <i data-feather="{{ $menu['icon'] }}"></i>
                        </div>
                        <div class="top-menu__title">
                            {{ $menu['title'] }}  
                            @if (isset($menu['sub_menu']))
                                <i data-feather="chevron-down" class="top-menu__sub-icon"></i>
                            @endif
                        </div>
                    </a>
                    @if (isset($menu['sub_menu']))
                        <ul class="{{ $first_level_active_index == $menuKey ? 'top-menu__sub-open' : '' }}">
                            @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                <li>
                                    <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}" class="top-menu">
                                        <div class="top-menu__icon">
                                            <i data-feather="activity"></i>
                                        </div>
                                        <div class="top-menu__title">
                                            {{ $subMenu['title'] }} 
                                            @if (isset($subMenu['sub_menu']))
                                                <i data-feather="chevron-down" class="top-menu__sub-icon"></i>
                                            @endif
                                        </div>
                                    </a>
                                    @if (isset($subMenu['sub_menu']))
                                        <ul class="{{ $second_level_active_index == $subMenuKey ? 'top-menu__sub-open' : '' }}">
                                            @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                <li>
                                                    <a href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}" class="top-menu">
                                                        <div class="top-menu__icon">
                                                            <i data-feather="zap"></i>
                                                        </div>
                                                        <div class="top-menu__title">{{ $lastSubMenu['title'] }}</div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif                                
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- END: Top Menu -->
    <!-- BEGIN: Content -->
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <!-- BEGIN: Content -->
            <div class="content">
                @yield('subcontent')
            </div>
            <!-- END: Content -->
        </div>
    </div>
    <!-- END: Content -->
@endsection