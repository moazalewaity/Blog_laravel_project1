<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
        <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
        </a>
           </li>
                    <li class="treeview">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench fa-fw"></i>Users<span class="fa arrow"></span></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('users.index')}}">All Users</a>
                            </li>

                            <li>
                                <a href="{{ route('users.create')}}">Create User</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li class="treeview">
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{route('posts.index')}}">All Posts</a>
                            </li>

                            <li>
                                <a href="{{route('posts.create')}}">Create Post</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li class="treeview">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench fa-fw"></i>Categories<span class="fa arrow"></span></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('categories.index')}}">All Categories</a>
                            </li>

                            <li>
                                <a href="{{route('categories.create')}}">Create Category</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li class="treeview">
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Media<span class="fa arrow"></span></a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/media">All Media</a>
                            </li>

                            <li>
                                <a href="">Upload Media</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
</ul>