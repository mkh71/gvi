<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                        <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                        <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                        <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                        <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->
                    <?php
                    $prefix=Request::route()->getPrefix();
                    $route=Route::current()->getName();
                    $menu = App\Models\MenuRole::query()
                        ->where('role_id', auth()->user()->roles[0]->id)
                        ->pluck('menu_id')
                        ->toArray();
                    $isAdmin = auth()->user()->hasRole('admin');
                    $clinics = \App\Models\Clinic::all()->count();
                    $m1 = $m2 = $m3 = $m4 = $m5 = $m6 = $m7 = $m8 = $m9 = $m10 = $m11 = $m12 = $m13 = $m14 = $m15 = $m16 = $m17 = $m18 = $m19 = $m20 = $m21 = $m2 = '';
                    ?>

                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="{{($route=='admin')? 'active-sub active':''}}">
                            <a href="{{url('/home')}}">
                                <i class="demo-pli-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        @if($clinics > 0)

                            <?php $m1 = menu('clinics.index'); ?>
                            @if($isAdmin || in_array($m1, $menu))
                                <li class="{{ request()->is('home/clinic-management/*') ? "active-sub active" : "" }}">
                                    <a class="" href="{{route('clinics.index')}}">
                                        <i class="fa fa-hospital"></i>
                                        <span class="menu-title">Clinics</span>
                                    </a>
                                </li>
                            @endif

                            <?php $m2 = menu('devices.index'); ?>
                            @if( $isAdmin || in_array($m2, $menu))
                                <li class="{{ request()->is('home/device-management/*') ? "active-sub active" : "" }}">
                                    <a class="" href="{{route('devices.index')}}">
                                        <i class="fa fa-heart-rate"></i>
                                        <span class="menu-title">Devices</span>
                                    </a>
                                </li>
                            @endif

                            <?php
                            $m4 = menu('users.index');
                            $m5 = menu('user.type');
                            $m6 = menu('users.create');
                            ?>
                            @if( $isAdmin || in_array($m4, $menu) || in_array($m5, $menu) || in_array($m6, $menu))
                                <li class="{{ request()->is('auth/user-management/*') ? 'active-sub active':''}}">
                                    <a href="#">
                                        <i class="fa fa-user"></i>
                                        <span class="menu-title">User Management</span>
                                        <i class="arrow"></i>
                                    </a>
                                    <!--Submenu-->
                                    <ul class="collapse">
                                        @if($isAdmin || in_array($m4, $menu))
                                            <li class="{{ request()->is('auth/user-management/*') ? "active" : "" }}">
                                                <a class="menu-item" href="{{route('users.index',['type'=>''])}}">
                                                    <i class="fa fa-street-view"></i> View All Staffs
                                                </a>
                                            </li>
                                        @endif
                                        @if($isAdmin || in_array($m5, $menu))
                                            <li class="{{ request()->is('auth/user-management/*') ? "active" : "" }}">
                                                <a class="menu-item" href="{{route('user.type',['type'=>'doctor'])}}">
                                                    <i class="fa fa-hospital-user"></i> View Doctors
                                                </a>
                                            </li>
                                        @endif
                                        @if($isAdmin || in_array($m6, $menu))
                                            <li class="{{ request()->is('home/user-management/*') ? "active" : "" }}">
                                                <a class="menu-item" href="{{route('users.create')}}">
                                                    <i class="fa fa-plus-circle"></i> Add User
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                            @endif

                            <?php
                            $m20 =  menu('patients');
                            $m21 =  menu('get.relationship');
                            ?>
                            @if($isAdmin || in_array($m20, $menu) )
                                <li class="{{ request()->is('home/relationship/*') ? "active" : "" }}">
                                    <a class="menu-item" href="{{route('patients')}}">
                                        <i class="fa fa-plus-circle"></i> Patients
                                    </a>
                                </li>
                            @endif

                            <?php $m7 = menu('role.view'); ?>

                            @if($isAdmin || in_array($m7, $menu))
                                <li class="{{ request()->is('home/role-management/*') ? "active-sub active" : "" }}">
                                    <a class="" href="{{route('role.view')}}">
                                        <i class="fa fa-connectdevelop"></i>
                                        <span class="menu-title">Role Management</span>
                                    </a>
                                </li>
                            @endif

                            <?php $m16 = menu('menu.view'); ?>
                            @if(in_array($m16, $menu) || auth()->user()->hasRole('admin'))
                                <li class="{{ request()->is('home/menu-management/*') ? "active-sub active" : "" }}">
                                    <a class=""
                                       href="{{route('menu.view')}}">
                                        <i class="ion-merge"></i>
                                        <span class="menu-title">Dynamic Menus</span>
                                    </a>
                                </li>
                            @endif

                        @else
                            <?php $m1 = menu('clinics.index'); ?>
                            @if($isAdmin || in_array($m1, $menu))
                                <li class="{{ request()->is('home/clinic-management/*') ? "active-sub active" : "" }}">
                                    <a class="" href="{{route('clinics.index')}}">
                                        <i class="fa fa-hospital"></i>
                                        <span class="menu-title">Clinics</span>
                                    </a>
                                </li>
                            @endif

                            <?php $m16 = menu('menu.view'); ?>
                            @if(in_array($m16, $menu) || auth()->user()->hasRole('admin'))
                                <li class="{{ request()->is('home/menu-management/*') ? "active-sub active" : "" }}">
                                    <a class=""
                                       href="{{route('menu.view')}}">
                                        <i class="ion-merge"></i>
                                        <span class="menu-title">Dynamic Menus</span>
                                    </a>
                                </li>
                            @endif
                            <li class="menu-title text-danger">
                                <a class="menu-item">Add a clinic, After that menu will be displayed</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
