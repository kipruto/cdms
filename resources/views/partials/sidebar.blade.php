<aside class="main-sidebar sidebar-light-primary elevation-1">
    <a href="#" class="brand-link">
        <img src="{{asset('img/logo.png')}}" alt="CDMS Logo" class="brand-image">
        <span class="brand-text font-weight-light">CDMS</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('img/user.png')}}" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{!! Auth::user()->first_name !!}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog green"></i>
                        <p> Management<i class="right fa fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                       @permission('user-*')
                        <li class="nav-item -align-right">
                            <a href="{{url('admin/users')}}" class="nav-link">
                                <i class="fas fa-users-cog indigo"></i>
                                <p> User Management</p>
                            </a>
                        </li>
                        @endpermission

                        @permission('role-*')
                        <li class="nav-item -align-right">
                            <a href="{{url('admin/roles')}}" class="nav-link">
                                <i class="fas fa-chart-pie yellow"></i>
                                <p>Role Management</p>
                            </a>
                        </li>
                        @endpermission
                        @permission('station-*')
                        <li class="nav-item -align-right">
                            <a href="{{url('admin/subcounties')}}" class="nav-link">
                                <i class="far fa-hospital orange"></i>
                                <p>Field Station Management</p>
                            </a>
                        </li>
                        @endpermission
                        @permission('drug-*')
                        <li class="nav-item -align-right">
                            <a href="#" class="nav-link">
                                <i class="fas fa-pills green"></i>
                                <p> Drug Management</p>
                            </a>
                        </li>
                        @endpermission
                        

                        @ability('admin, supervisor, laboratory-technician, field-officer', '*')
                        <li class="nav-item -align-right">
                            @if(Auth::check())
                                @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('supervisor'))
                                    <a href="{{url('admin/patients')}}" class="nav-link">
                                        <i class="fas fa-wheelchair blue"></i>
                                        <p> Patient Management</p>
                                    </a>
                                @else
                                    <a href="{{url('officer/patients')}}" class="nav-link">
                                        <i class="fas fa-wheelchair blue"></i>
                                        <p> Patient Management</p>
                                    </a>
                                @endif
                            @endif

                        </li>
                        @endability
                        @ability('admin, supervisor, laboratory-technician, field-officer', '*')
                        <li class="nav-item -align-right">
                            @if(Auth::check())
                                @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('supervisor'))
                                    <a href="{{url('admin/cases')}}" class="nav-link">
                                        <i class="fas fa-wheelchair blue"></i>
                                        <p> Case Management</p>
                                    </a>
                                @else
                                    <a href="{{url('officer/cases')}}" class="nav-link">
                                        <i class="fas fa-wheelchair blue"></i>
                                        <p> Case Management</p>
                                    </a>
                                @endif
                            @endif

                        </li>
                        @endability
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >

                        <i class="fas fa-power-off red"></i>
                        {{ __('Logout') }}

                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

    </div>
</aside>
