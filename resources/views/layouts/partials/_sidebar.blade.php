<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @can('user.*')
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">User</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{route('user.index')}}"> Listing </a></li>
                    </ul>
                </div>
            </li>
        @endcan
        @can('hospital.*')
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link icon-data-list" data-toggle="collapse" href="#hospital" aria-expanded="false" aria-controls="hospital">--}}
{{--                    <i class="icon-layout menu-icon"></i>--}}
{{--                    <span class="menu-title">Service</span>--}}
{{--                    <i class="menu-arrow"></i>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="hospital">--}}
{{--                    <ul class="nav flex-column sub-menu">--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('service.index')}}">Listing</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('service.pending')}}">Pending Service</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
        @endcan

        @can('medical.*')
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link icon-data-list" data-toggle="collapse" href="#medical" aria-expanded="false" aria-controls="medical">--}}
{{--                    <i class="icon-share menu-icon"></i>--}}
{{--                    <span class="menu-title">Products</span>--}}
{{--                    <i class="menu-arrow"></i>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="medical">--}}
{{--                    <ul class="nav flex-column sub-menu">--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}">Listing</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('product.create')}}">Add new</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
        @endcan
{{--        @can('lab.*')--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link icon-data-list" data-toggle="collapse" href="#lab" aria-expanded="false" aria-controls="lab">--}}
{{--                    <i class="icon-paper menu-icon"></i>--}}
{{--                    <span class="menu-title">Labs</span>--}}
{{--                    <i class="menu-arrow"></i>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="lab">--}}
{{--                    <ul class="nav flex-column sub-menu">--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('lab.index')}}">Listing</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('lab.create')}}">Create</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        @endcan--}}
{{--        @can('oxygen.*')--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link icon-data-list" data-toggle="collapse" href="#oxygen" aria-expanded="false" aria-controls="oxygen">--}}
{{--                    <i class="icon-watch menu-icon"></i>--}}
{{--                    <span class="menu-title">Oxygen Centres</span>--}}
{{--                    <i class="menu-arrow"></i>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="oxygen">--}}
{{--                    <ul class="nav flex-column sub-menu">--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('oxygen.index')}}">Listing</a></li>--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{route('oxygen.create')}}">Create</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        @endcan--}}
    </ul>
</nav>
