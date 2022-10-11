<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="" target="_blank" class="brand-link" class="text-center">
      <img src="plugins/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PAOIMS</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="plugins/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?page=Profile" class="d-block">Administrator</a>
        </div>
      </div>


            <a href="index.php?page=dashboard" class="nav-link bg-warning text-center font-weight-bolder">
              <p>
                Dashboard
              </p>
            </a>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                Personnel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=AddPersonnel" class="nav-link">
                  <i class="fa fa-user-check nav-icon"></i>
                  <p>Add Personnel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=ManagePersonnel" class="nav-link">
                  <i class="fa fa-atom nav-icon"></i>
                  <p>Manage Personnel</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">MUNICIPALITY</li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fab fa-pied-piper-pp"></i>
              <p>
                Oroguieta
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=Equipment-Oroquieta" class="nav-link">
                  <i class="fa fa-atom nav-icon"></i>
                  <p>Equipment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Sinacaban
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=Equipment-Sinacaban" class="nav-link">
                  <i class="fa fa-atom nav-icon"></i>
                  <p>Equipment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-wave-square"></i>
              <p>
                Jimenez
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=Equipment-Jimenez" class="nav-link">
                  <i class="fa fa-atom nav-icon"></i>
                  <p>Equipment</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Panaon
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=Equipment-Panaon" class="nav-link">
                  <i class="fa fa-atom nav-icon"></i>
                  <p>Equipment</p>
                </a>
              </li>
            </ul>
 
    
          </li>

          <li class="nav-header">
            BACK UP
          </li>
          <li class="nav-item">
            <a href="email/backupCloud.php" class="nav-link bg-warning">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Back up Database
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>