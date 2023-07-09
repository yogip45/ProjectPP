<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>   
      @if (auth()->user()->level == "owner")        
      <li class="nav-item">
        <a class="nav-link" href="/users">
          <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
          <span class="menu-title">Data User</span>
        </a>
      </li>
      @endif
      @if (auth()->user()->level == "owner")
    <li class="nav-item">
      <a class="nav-link" href="/menus">
        <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
        <span class="menu-title">Daftar Menu</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="/pesanan">
        <span class="icon-bg"><i class="mdi mdi-clipboard-text menu-icon"></i></span>
        <span class="menu-title">Data Pesanan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/selesai">
        <span class="icon-bg"><i class="mdi mdi-clipboard-text menu-icon"></i></span>
        <span class="menu-title">Pesanan Selesai</span>
      </a>
    </li>
    {{-- @if (auth()->user()->level == "owner") --}}
    <li class="nav-item">
      <a class="nav-link" href="/cetakform">
        <span class="icon-bg"><i class="mdi mdi-folder-multiple-outline menu-icon"></i></span>
        <span class="menu-title">Recipt Print</span>
      </a>
    </li>
    {{-- @endif --}}
    @if (auth()->user()->level == "owner")
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li>
    @endif
    <li class="nav-item documentation-link">     
    </li>
    {{-- <li class="nav-item sidebar-user-actions">     
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="/sesi/logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
            <span class="menu-title">Log Out</span></a>
        </div>
      </li>
    </li> --}}
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </div>
    </li>   
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="/sesi/logout" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li>
  </ul>
</nav>