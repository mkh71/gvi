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

                        <li class="{{ request()->is('home/slider-management/*') ? "active active-sub" : "" }}">
                            <a href="{{route('sliders.index')}}">
                                <i class="demo-pli-split-vertical-2"></i>
                                <span class="menu-title">Sliders</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('home/category-management/*') ? "active active-sub" : "" }}">
                            <a href="{{route('categories.index')}}">
                                <i class="demo-pli-data-settings"></i>
                                <span class="menu-title">Categories</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('home/brand-management/*') ? "active active-sub" : "" }}">
                            <a href="{{route('brands.index')}}">
                                <i class="demo-pli-data-settings"></i>
                                <span class="menu-title">Brands</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('home/image-management/*') ? "active active-sub" : "" }}">
                            <a href="{{route('images.index')}}">
                                <i class="demo-pli-data-settings"></i>
                                <span class="menu-title">Page Images</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('home/flagship-management/*') ? "active active-sub" : "" }}">
                            <a href="{{route('flagships.index')}}">
                                <i class="demo-pli-data-settings"></i>
                                <span class="menu-title">Flagships</span>
                            </a>
                        </li>

                        <li class="{{ request()->is('home/gallery-management/*') ? 'active-sub active':''}}">
                            <a href="#">
                                <i class="fa fa-clock-o"></i>
                                <span class="menu-title">Gallery</span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <li class="">
                                    <a class="menu-item" href="{{route('galleries.index', 'Head Office')}}">
                                        <i class="fa fa-check-circle"></i> Head Office
                                    </a>
                                </li>
                            </ul>
                            <ul class="collapse">
                                <li class="">
                                    <a class="menu-item" href="{{route('galleries.index', 'National Training')}}">
                                        <i class="fa fa-check-circle"></i> National Training
                                    </a>
                                </li>
                            </ul>
                            <ul class="collapse">
                                <li class="">
                                    <a class="menu-item" href="{{route('galleries.index', 'Annual Conference')}}">
                                        <i class="fa fa-check-circle"></i> Annual Conference
                                    </a>
                                </li>
                            </ul>
                            <ul class="collapse">
                                <li class="">
                                    <a class="menu-item" href="{{route('galleries.index', 'DITF Participation')}}">
                                        <i class="fa fa-check-circle"></i> DITF Participation
                                    </a>
                                </li>
                            </ul>
                            <ul class="collapse">
                                <li class="">
                                    <a class="menu-item" href="{{route('galleries.index', 'Magazine')}}">
                                        <i class="fa fa-check-circle"></i> Magazine
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->is('home/messages') ? "active active-sub" : "" }}">
                            <a href="{{route('admin.message')}}">
                                <i class="demo-pli-mail-attachment"></i>
                                <span class="menu-title">Messages</span>
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
