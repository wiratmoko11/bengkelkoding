<!-- Sidebar -->
<div class="sidebar left hidden-xs">
        <a id="brand" href="index.html">BengkelKoding.com</a>
        <div id="menu" data-scrollable>
            <ul>
                @if(Auth::check())
                <li class="">
                    <a href="#timeline" data-toggle="collapse"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                @endif
                @if(Auth::check())
                <li class="">
                    <a href="profile.html"><i class="icon-user-1"></i> Profile</a>
                </li>
                @endif
                <li class="">
                    <a href="{{URL::to('forum')}}"><i class="fa fa-group"></i> Forum</a>
                </li>
                <li class="">
                    <a href="messages.html"><i class="icon-comment-fill-1"></i> Messages</a>
                </li>
                <li class="" style="background: none repeat scroll 0% 0% rgb(37, 173, 159);">
                    <a href="{{URl::to('login')}}"><i class="icon-lock-fill"></i> Login</a>
                </li>
                <li class="hasSubmenu ">
                    <a href="#components" data-toggle="collapse"><i class="icon-paint-brushes"></i>UI Components</a>
                    <ul class="collapse " id="components">
                        <li class="">
                            <a href="buttons.html"><i class="fa fa-circle-o"></i> Buttons</a>
                        </li>
                        <li class="">
                            <a href="icons.html"><i class="fa fa-circle-o"></i> Icons</a>
                        </li>
                        <li class="">
                            <a href="progress.html"><i class="fa fa-circle-o"></i> Progress</a>
                        </li>
                        <li class="">
                            <a href="grid.html"><i class="fa fa-circle-o"></i> Grid</a>
                        </li>
                        <li class="">
                            <a href="forms.html"><i class="fa fa-circle-o"></i> Forms</a>
                        </li>
                        <li class="">
                            <a href="tables.html"><i class="fa fa-circle-o"></i> Tables</a>
                        </li>
                    </ul>
                </li>

                <!-- Sample 2 Level Collapse -->
                <li class="hasSubmenu">
                    <a href="#collapse" data-toggle="collapse">
                        <i class="fa fa-chevron-circle-down"></i> Collapse
                    </a>
                    <ul class="collapse" id="collapse">
                        <li class="hasSubmenu">
                            <a href="#collapse-1" data-toggle="collapse"><i class="fa fa-circle-o"></i> Submenu</a>
                            <ul class="collapse" id="collapse-1">
                                <li><a href="#">Regular Link</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Regular Link</a>
                        </li>
                    </ul>
                </li>    
            </ul>
        </div>
    </div>
<!-- /#sidebar-wrapper -->