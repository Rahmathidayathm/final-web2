<ul class="sidebar-nav" style="background-color: lightgrey;" data-coreui="navigation" data-simplebar>
    @auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <img src="{{ asset('icons/home.png') }}" width="25" style="margin-right: 20px;" alt="">
            Tampilan Utama
        </a>
    </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <img src="{{ asset('icons/user.png') }}" width="25" style="margin-right: 20px;" alt="">
                Pengguna
            </a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link" href="{{ route('roles.index') }}">
                <img src="{{ asset('icons/group.png') }}" width="25" style="margin-right: 20px;" alt="">
                Roles
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('clients.index') }}">
                <img src="{{ asset('icons/target.png') }}" width="25" style="margin-right: 20px;" alt="">
                Klien
            </a>
        </li> -->

{{--        <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>--}}

{{--        <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>--}}

{{--        <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>--}}

{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{ route('users.index') }}">--}}
{{--            <svg class="nav-icon">--}}
{{--                <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>--}}
{{--            </svg>--}}
{{--            {{ __('Users') }}--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{ route('about') }}">--}}
{{--            <svg class="nav-icon">--}}
{{--                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>--}}
{{--            </svg>--}}
{{--            {{ __('About us') }}--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    <li class="nav-group" aria-expanded="false">--}}
{{--        <a class="nav-link nav-group-toggle" href="#">--}}
{{--            <svg class="nav-icon">--}}
{{--                <use xlink:href="{{ asset('icons/coreui.svg#cil-star') }}"></use>--}}
{{--            </svg>--}}
{{--            Two-level menu--}}
{{--        </a>--}}
{{--        <ul class="nav-group-items" style="height: 0px;">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#" target="_top">--}}
{{--                    <svg class="nav-icon">--}}
{{--                        <use xlink:href="{{ asset('icons/coreui.svg#cil-bug') }}"></use>--}}
{{--                    </svg>--}}
{{--                    Child menu--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </li>--}}
    @endauth
</ul>
