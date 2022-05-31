<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

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
                    @php
                        $prefix=Request::route()->getPrefix();
                        $route=Route::current()->getName();
                        //dd($prefix, $route)
                    @endphp

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

{{--                        <li class="{{ request()->is('auth/appointment-management/*') ? 'active-sub active':''}}">--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-clock-o"></i>--}}
{{--                                <span class="menu-title">Category</span>--}}
{{--                                <i class="arrow"></i>--}}
{{--                            </a>--}}
{{--                            <!--Submenu-->--}}
{{--                            <ul class="collapse">--}}
{{--                                <li class="{{ request()->is('home/category-management/categories/*') ? "active" : "" }}">--}}
{{--                                    <a class="menu-item" href="{{route('categories.index')}}">--}}
{{--                                        <i class="fa fa-check-circle"></i> Category--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

{{--                        <li class="{{ request()->is('home/company/*') ? "active" : "" }}">--}}
{{--                            <a href="{{route('company.index')}}">--}}
{{--                                <i class="demo-pli-folder-organizing"></i>--}}
{{--                                <span class="menu-title">Company Settings</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="{{ request()->is('home/slider-management/sliders/*') ? "active" : "" }}">
                            <a href="{{route('sliders.index')}}">
                                <i class="demo-pli-split-vertical-2"></i>
                                <span class="menu-title">Sliders</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('home/category-management/categories/*') ? "active" : "" }}">
                            <a href="{{route('categories.index')}}">
                                <i class="demo-pli-data-settings"></i>
                                <span class="menu-title">Category</span>
                            </a>
                        </li>

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
