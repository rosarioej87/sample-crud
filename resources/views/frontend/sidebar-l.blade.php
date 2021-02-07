<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <div class="user-profile position-relative" style="background: url(/src/assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img">
                @if (Auth::user()->avatar)
                    <img src="{{ asset('/storage/images/'.Auth::user()->avatar) }}" alt="avatar" class="w-100" />
                @else
                    <img src="{{ asset('/src/assets/images/profile.png') }}" alt="avatar" class="w-100" />
                @endif
            </div>
            <!-- User profile text-->
            <div class="profile-text pt-1">
                <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu animated flipInY">
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('users.edit', Auth::user()->id ) }}" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('home') }}" aria-expanded="false"
                        data-toggle="tooltip"
                        data-placement="right"
                        title=""
                        data-original-title="Home">
                        <i class="fas fa-home"></i>
                        <span class="hide-menu"> Home </span>
                    </a>
                </li>
                @can('manage-users')
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                       href="{{ route('admin.users.index') }}" aria-expanded="false"
                       data-toggle="tooltip"
                        data-placement="right"
                        title=""
                        data-original-title="Manage Users">
                        <i class="fas fa-user-circle"></i>
                        <span class="hide-menu"> Manage Users </span>
                    </a>
                </li>
                @endcan
                @can('manage-school-year')
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                       href="{{ route('school-years.index') }}" aria-expanded="false"
                       data-toggle="tooltip"
                        data-placement="right"
                        title=""
                        data-original-title="Manage School Year">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="hide-menu"> Manage School Year </span>
                    </a>
                </li>
                @endcan
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                       aria-expanded="false"
                       data-toggle="tooltip"
                        data-placement="right"
                        title=""
                        data-original-title="Manage Action Plan">
                       <i class="fas fa-tasks"></i>
                        <span class="hide-menu"> Manage Action Plan </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('action-plans.index') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Action Plans </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('programs.index') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Programs </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('projects.index') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Projects </span>
                            </a>
                        </li>
                    </ul>
                </li>
                @can('manage-evaluation')
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                       href="{{ route('projects.monitoring') }}" aria-expanded="false"
                       data-toggle="tooltip"
                        data-placement="right"
                        title=""
                        data-original-title="Monitoring and Evaluation">
                        <i class="fas fa-rocket"></i>
                        <span class="hide-menu"> Monitoring and Evaluation </span>
                    </a>
                </li>
                @endcan
                @can('manage-reports')
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                       aria-expanded="false"
                       data-toggle="tooltip"
                        data-placement="right"
                        title=""
                        data-original-title="Manage Reports">
                        <i class="fas fa-book"></i>
                        <span class="hide-menu"> Reports </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('reports.ap') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Action Plans </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('reports.monitoring') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Evaluation and Monitoring Report </span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('manage-utilities')
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                       aria-expanded="false"
                       data-toggle="tooltip"
                        data-placement="right"
                        title=""
                        data-original-title="System Utilities">
                        <i class="fas fa-laptop"></i>
                        <span class="hide-menu"> System Utilities </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('backup.index') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Backup & Restore </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('activity.index') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Activity Logs </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('settings.index') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Settings </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('help.index') }}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Help </span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
