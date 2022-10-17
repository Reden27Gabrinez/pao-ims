<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="https://saad.da.gov.ph/priority_provinces/region-x/misamis-occidental" target="_blank" class="brand-link" class="text-center">
      <img src="admin/plugins/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PAOIMS</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="admin/plugins/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?page=Profile" class="d-block">USER</a>
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
          <!-- <li class="nav-item">
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
          </li> -->


          <li class="nav-header mt-5 text-uppercase text-bold"><?php echo $_SESSION['municipality']; ?></li>
          <li class="nav-item">
            <a href="index.php?page=Equipment" class="nav-link">
              <i class="fa fa-atom nav-icon"></i>
              <p>Equipment</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?page=AddEquipment" class="nav-link">
              <i class="fa fa-atom nav-icon"></i>
              <p>Add FEM</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link" data-toggle="modal" data-target="#modal-sm">
              <i class="fas fa-file-export nav-icon"></i>
              <p>Reports</p>
            </a>
          </li>
      
  
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>