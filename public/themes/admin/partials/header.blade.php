<header class="main-header">
    <!-- Logo -->
    <a href="{{ Trans::to('admin') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">{!!trans('cms.name.short')!!}</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">{!!trans('cms.name.html')!!}</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                {!! Message::display('drop') !!}
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-calendar"></i>
                  <span class="label label-warning">10</span>
                </a>
                {!! Calendar::display('drop') !!}
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                {!! Task::display('drop') !!}
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{!!User::users('picture')!!}" class="user-image" alt="User Image"/>
                    <span class="hidden-xs">{!!User::users('name')!!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{!!User::users('picture')!!}" class="img-circle" alt="User Image" />
                            <p>
                            {!!User::users('name')!!} - {!!User::users('designation')!!}
                            <small>Member since {!!User::users('joined')!!}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-12 text-center">
                              <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                              <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                              <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ URL::to('admin/profile') }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ URL::to('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
            </ul>
        </div>
    </nav>
</header>