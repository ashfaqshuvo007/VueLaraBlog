<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      {{-- <img src="{{ asset('assets/admin/default/adminIcon.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text text-center font-weight-light">VueLara Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{ route('Dashboard')}}" class="nav-link {{ App\Helpers\Menu::isActiveRoute('Dashboard')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ App\Helpers\Menu::isActiveRoute('Category')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ App\Helpers\Menu::isActiveRoute('Post')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Post
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>