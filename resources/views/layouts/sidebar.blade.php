<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- SideMenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">{{__('Navigation')}}</li>
                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fe-airplay"></i>
                        <span> {{__('Tableau de bord')}} </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('quizzes.index')}}">
                        <i class="fe-hard-drive"></i>
                        <span> {{__('Quizzes')}} </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}">
                        <i class="fe-archive"></i>
                        <span> {{__('Categories')}} </span>
                    </a>
                </li>
                {{--
                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="fe-gift"></i>
                        <span> {{__('Récompenses')}} </span>
                    </a>
                </li>
                --}}
                <li>
                    <a href="{{route('users.index')}}">
                        <i class="fe-users"></i>
                        <span> {{__('Utilisateurs')}} </span>
                    </a>
                </li>
                @if ($admin->getRelation('role')->name == "admin")
                    <li class="menu-title">{{__('Administration')}}</li>
                    <li>
                        <a href="{{route('admins.index')}}">
                            <i class="fe-user"></i>
                            <span> {{__('Administrateurs')}} </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fe-settings"></i>
                            <span> {{__('Paramètres')}} </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="admin-sweet-alert.html">{{__('Configuration')}}</a></li>
                            <li><a href="admin-grid.html">{{__('Roles')}}</a></li>
                            <li><a href="admin-tiles.html">{{__('Pays')}}</a></li>
                            <li><a href="admin-tiles.html">{{__('Ville')}}</a></li>
                            <li><a href="admin-tiles.html">{{__('Place')}}</a></li>
                        </ul>
                    </li>
                @endif
                <div class="mt-3 dropdown-divider text-secondary"></div>
                <li class="">
                    <a href="{{route('logout')}}">
                        <i class="fe-log-out"></i>
                        <span>  {{__('Deconnexion')}} </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
