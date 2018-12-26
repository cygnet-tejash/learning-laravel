<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    
    <li class="nav-item @if(Route::currentRouteName() == 'admin.dashboard') {{ 'active' }}  @endif ">
        <a class="nav-link" href="{{ route('admin.dashboard') }}" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    @if(auth()->user()->hasPermissionTo('permission-list'))
    <li class="nav-item @if(strpos(Route::currentRouteName(), 'admin.permissions') !== FALSE) {{ 'active' }}  @endif ">
        <a class="nav-link" href="{{ route('admin.permissions.index') }}">
            <i class="fas fa-fw fa-key"></i>
            <span>Permissions</span>
        </a>
    </li>
    @endif

    @if(auth()->user()->hasPermissionTo('role-list'))
    <li class="nav-item @if(strpos(Route::currentRouteName(), 'admin.roles') !== FALSE) {{ 'active' }}  @endif ">
        <a class="nav-link" href="{{ route('admin.roles.index') }}">
            <i class="fas fa-fw fa-lock"></i>
            <span>Roles</span>
        </a>
    </li>
    @endif

    @if(auth()->user()->hasPermissionTo('user-list'))
    <li class="nav-item @if(strpos(Route::currentRouteName(), 'admin.users') !== FALSE) {{ 'active' }}  @endif ">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
        </a>
    </li>
    @endif

    @if(auth()->user()->hasPermissionTo('access-passport'))
    <li class="nav-item @if(strpos(Route::currentRouteName(), 'admin.passport') !== FALSE) {{ 'active' }}  @endif ">
        <a class="nav-link" href="{{ route('admin.passport') }}">
            <i class="fas fa-passport"></i>
            <span>Passport Token</span>
        </a>
    </li>
    @endif

    @if(auth()->user()->hasPermissionTo('project-list'))
    <li class="nav-item @if(strpos(Route::currentRouteName(), 'admin.projects') !== FALSE) {{ 'active' }}  @endif ">
        <a class="nav-link" href="{{ route('admin.projects.index') }}">
            <i class="fa fa-folder" aria-hidden="true"></i>
            <span>Projects</span>
        </a>
    </li>
    @endif
</ul>