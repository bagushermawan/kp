<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}"><img src="{{asset('assets/img/favicon.png')}}" width="150px"
                height="110px" /></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::route()->getName() == 'admin.dashboard' ? 'active' :''}}">
            <a class="{{ Request::route()->getName() == 'admin.dashboard' ? 'nav-link beep beep-sidebar' :''}}" href="{{ route('admin.dashboard') }}">
                <i class="fa fa-columns"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-header">List</li>
        <li class="{{ Request::route()->getAction()['as'] == 'category' ? ' active' : '' }}">
          <a class="{{ Request::route()->getName() == 'category' ? 'nav-link beep beep-sidebar' :''}}" href="{{ route('category') }}">
            <i class="fa fa-columns"></i>
            <span>Category</span>
          </a>
        </li>
        <li class="{{ Request::route()->getName() == 'product' ? ' active'  : '' }}">
          <a class="{{ Request::route()->getName() == 'product' ? 'nav-link beep beep-sidebar' :''}}" href="{{ route('product') }}">
            <i class="fa fa-columns"></i>
            <span>Product</span>
          </a>
        </li>

        @if(Auth::user()->can('manage-users'))
        <li class="menu-header">Users</li>
        <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}">
          <a class="{{ Request::route()->getName() == 'admin.users' ? 'nav-link beep beep-sidebar' :''}}" href="{{route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
        @endif

        <li class="menu-header"><div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label>
  <em>Enable Dark Mode!</em>
</div></li>
    </ul>
</aside>
