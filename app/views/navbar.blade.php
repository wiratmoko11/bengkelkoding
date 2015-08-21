<div class="navbar navbar-main navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <a href="#" data-toggle="sidebar-menu" id="toggle-sidebar-menu" class="visible-xs"><i class="fa fa-bars fa-2x"></i></a>
            <ul class="nav navbar-nav hidden-xs">
                @if(Auth::check())
                <!-- Notifications -->
                <li class="dropdown notifications">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-globe"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                            </a>
                            <div class="media-body">
                                <span class="label label-default pull-right">5 min</span>
                                <h5 class="media-heading">Adrian D.</h5>
                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                            </a>
                            <div class="media-body">
                                <span class="label label-default pull-right">2 days</span>
                                <h5 class="media-heading">Jane B.</h5>
                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </li>
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                            </a>
                            <div class="media-body">
                                <span class="label label-default pull-right">3 days</span>
                                <h5 class="media-heading">Andrew M.</h5>
                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
            @if(Auth::check())
            <ul class="nav navbar-nav navbar-user">

                <!-- User -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<<<<<<< HEAD
                        <img src="assets/images/people/50/{{Auth::user()->username}}.jpg" width="35" alt="Bill" class="img-circle" /> {{Auth::user()->username}} <span class="caret"></span>
=======
                        <img src="images/people/50/guy-5.jpg" width="35" alt="Bill" class="img-circle" /> Bill <span class="caret"></span>
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="profile.html">Profile</a>
                        </li>
                        <li><a href="messages.html">Messages</a>
                        </li>
<<<<<<< HEAD
                        <li><a href="logout">Logout</a>
=======
                        <li><a href="login.html">Logout</a>
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
            <ul class="nav navbar-nav hidden-xs">

                <!-- Search -->
                <div class="input-group pull-left">
                    <span class="input-group-addon"><i class="icon-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search a friend">
                </div>
            </ul>
        </div>
    </div>