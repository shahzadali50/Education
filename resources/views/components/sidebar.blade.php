<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Dashboard & Apps</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="si-people si"><span class="path1"></span><span class="path2"></span></i>
                            <span>Class</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Classes</a></li>
                            <li><a href="/class"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Class Management</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user-secret"><span class="path1"></span><span class="path2"></span></i>
                            <span>Teacher</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('teacher.create')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Teacher</a></li>
                            <li><a href="{{route('teacher.list')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Teacher List</a></li>
                        </ul>
                    </li>





                </ul>
            </div>
        </div>
    </section>
    <div class="sidebar-footer">
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
        <a href="mailbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><span class="icon-Mail"></span></a>
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
    </div>
</aside>
