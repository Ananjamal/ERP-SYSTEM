{{-- <div=>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav" >
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="{{ asset('DashAssets/images/faces/face1.jpg')}}" alt="profile" />
                        <span class="login-status online"></span>
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                        <span class="text-secondary text-small">Project Manager</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" wire:click='users'>
                    <span class="menu-title">Users</span>
                    <i class="fa fa-users menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-title">Roles/Permissions</span>
                    <i class="menu-arrow"></i>
                    <i class="fa fa-cogs menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <button class="nav-link"  wire:click='roles'>Roles</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  wire:click='permissions'>Permissions</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                    aria-controls="icons">
                    <span class="menu-title">Icons</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false"
                    aria-controls="forms">
                    <span class="menu-title">Forms</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
                <div class="collapse" id="forms">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/forms/basic_elements.html">Form Elements</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                    aria-controls="charts">
                    <span class="menu-title">Charts</span>
                    <i class="mdi mdi-chart-bar menu-icon"></i>
                </a>
                <div class="collapse" id="charts">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                    aria-controls="tables">
                    <span class="menu-title">Tables</span>
                    <i class="mdi mdi-table-large menu-icon"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                    aria-controls="auth">
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-lock menu-icon"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/login.html"> Login </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/register.html"> Register </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="docs/documentation.html" target="_blank">
                    <span class="menu-title">Documentation</span>
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>
</div> --}}
<div>

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> {{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="البحث ...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">القائمة الرئيسية</li>
                <li>
                    <a wire:click='users'>
                        <i class="fa fa-th"></i> <span>المستخدمين</span>
                        {{-- <small class="label pull-left bg-green">new</small> --}}
                    </a>
                </li>
                <li class=" treeview">
                    <a>
                        <i class="fa fa-dashboard"></i> <span>الاذونات والصلاحيات</span> <i
                            class="fa fa-angle-left pull-left"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li ><a wire:click='roles'><i class="fa fa-circle-o"></i> الاذونات</a>
                        </li>
                        <li><a wire:click='permissions'><i class="fa fa-circle-o"></i>الصلاحيات</a></li>
                    </ul>
                </li>
               </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
</div>
