<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">Admin</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">Lapor Kuy</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
      <i class="fa fa-columns"></i> 
      <span>Dashboard</span>
      </a>
    </li>

    <li class="menu-header">Laporan</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Laporan</span></a>
      <ul class="dropdown-menu">
        <li><a class="{{ Request::route()->getName() == 'admin.waiting' ? ' active' : '' }}" href="{{ route('admin.waiting') }}">Waiting</a></li>
        <li><a class="nav-link" href="{{ route('admin.complete') }}">Complete</a></li>
        <li><a class="nav-link" href="{{ route('admin.report') }}">Report</a></li>
      </ul>
    </li>
     
    
       
      @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Users</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.users') }}">
          <i class="fa fa-users"></i> 
          <span>Users</span>
        </a>
      </li>
      @endif

  </ul>
</aside>
