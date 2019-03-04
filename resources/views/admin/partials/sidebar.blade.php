<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="{{url('/')}}"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="{{url('/admin/')}}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>SHOP</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/shop/category')}}"><i class="fa fa-angle-right"></i> Category</a></li>
                            <li><a href="{{url('/admin/shop/product')}}"><i class="fa fa-angle-right"></i> Product</a></li>
                            <li><a href="{{url('/admin/shop/order')}}"><i class="fa fa-angle-right"></i> Order</a></li>
                            <li><a href="{{url('/admin/shop/review')}}"><i class="fa fa-angle-right"></i> Review</a></li>
                            <li><a href="{{url('/admin/shop/customer')}}"><i class="fa fa-angle-right"></i> Customer</a></li>
                            <li><a href="{{url('/admin/shop/brand')}}"><i class="fa fa-angle-right"></i> Brands( Nhãn hiệu)</a></li>
                            <li><a href="{{url('/admin/shop/statistic')}}"><i class="fa fa-angle-right"></i> Statistic (Thống kê)</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>ODER</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/shop/product/order')}}"><i class="fa fa-angle-right"></i> Oder product</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Content</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/content/category')}}"><i class="fa fa-angle-right"></i> Category</a></li>
                            <li><a href="{{url('/admin/content/post')}}"><i class="fa fa-angle-right"></i> Post</a></li>
                            <li><a href="{{url('/admin/content/page')}}"><i class="fa fa-angle-right"></i> Page</a></li>
                            <li><a href="{{url('/admin/content/tag')}}"><i class="fa fa-angle-right"></i> Tag</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Menu</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/menu')}}"><i class="fa fa-angle-right"></i> Menu</a></li>
                            <li><a href="{{url('/admin/menuitems')}}"><i class="fa fa-angle-right"></i>Menu Items</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>admin</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/users')}}"><i class="fa fa-angle-right"></i> Quản trị viên</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Media Manager</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/media')}}"><i class="fa fa-angle-right"></i> Media Manager</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Global Setting</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/config')}}"><i class="fa fa-angle-right"></i> Global setting</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Newletters</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/newletters')}}"><i class="fa fa-angle-right"></i> Newletters</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Banners</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/banner')}}"><i class="fa fa-angle-right"></i> Banner</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Contact</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/contact')}}"><i class="fa fa-angle-right"></i> Contact</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Email</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/inbox')}}"><i class="fa fa-angle-right"></i> Inbox</a></li>
                            <li><a href="{{url('/admin/draft')}}"><i class="fa fa-angle-right"></i> Draft</a></li>
                            <li><a href="{{url('/admin/send')}}"><i class="fa fa-angle-right"></i> Send</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
</div>
<!--left-fixed -navigation-->