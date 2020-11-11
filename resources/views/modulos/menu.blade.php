  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">
        cms
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{url('/inicio')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          
          </li>
          <li class="nav-item">
          <a href="{{ url('/usuarios')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuario
              </p>
            </a>
          
          </li>
          <li class="nav-item">
          <a href="{{url('/slide')}}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Slide
              </p>
            </a>
          
          </li>
          <li class="nav-item">
          <a href="{{url('/categorias')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Categorias
              </p>
            </a>
          
          </li>
          <li class="nav-item">
          <a href="{{url('/post')}}" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Posts
              </p>
            </a>
          
          </li>
          <li class="nav-item">
          <a href="{{ url('/mensajes')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mensajes
              </p>
            </a>
          
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>