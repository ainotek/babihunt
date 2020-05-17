<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
               role="button" aria-haspopup="false" aria-expanded="false">
                @if ($admin->picture)
                    <img src="{{$admin->picture}}" alt="user-image" class="rounded-circle">
                @else
                    <img src="{{asset('assets/images/users/user.png')}}" alt="user-image" class="rounded-circle">
                @endif
                <span class="pro-user-name ml-1">
         {{ucfirst($admin->first_name)}} {{ucfirst($admin->last_name)}}  <i class="mdi mdi-chevron-down"></i>
         </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <a href="{{route('users.profile')}}" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>{{__('Profile')}}</span>
                </a>
                <div class="dropdown-divider"></div>
                <!-- item-->
                <a href="{{route('logout')}}" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>{{__('Deconnexion')}}</span>
                </a>
            </div>
        </li>
    </ul>
    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{route('home')}}" class="logo text-center">
         <span class="logo-lg">
            <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="25">
             <!-- <span class="logo-lg-text-light">UBold</span> -->
         </span>
            <span class="logo-sm">
            <!-- <span class="logo-sm-text-dark">U</span> -->
            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="28">
         </span>
        </a>
    </div>
    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>
        <li class="d-none">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</div>
<!-- end Topbar -->
