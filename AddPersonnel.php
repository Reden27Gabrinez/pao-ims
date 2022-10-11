<div class="content-wrapper">
  <form method="POST" action="class.php" enctype="multipart/form-data">
    <div class="container mx-2 mb-2 p-3">
      <div class="row">
        <div class="col-12">
          <h2 class="text-monospace">Add Personnel</h2>
        </div>
      </div>
    </div>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title fs-bold text-danger font-weight-bold">Personal Details</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body bg-gray">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Last Name</label>
                  <input required name="lname" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Given Name</label>
                  <input required name="fname" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Middle Name</label>
                  <input name="mname" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Sex</label>
                  <select required name="sex" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="">Choose</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="">Chapter | Division Assigned</label>
                  <select required name="position" class="form-control select2 select2-danger"
                    data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected" value="">Please Choose</option>
                    <option value="">Baliangao</option>
                    <option value="">Sapang Dalaga</option>
                    <option value="">Calamba</option>
                    <option value="">Plaridel</option>
                    <option value="">Lopez Jaena</option>
                    <option value="">Oroquieta</option>
                    <option value="">Aloran</option>
                    <option value="">Panaon</option>
                    <option value="">Jimenez</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Position</label>
                  <select required name="division" class="form-control select2 select2-danger"
                    data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected" value="">Please Choose</option>
                    <option value="Office of the General Manager">Office of the General Manager</option>
                    <option value="Admnistrative & General Services">Admnistrative &
                      General Services</option>
                    <option value="Finance and Commercial">Finance and Commercial
                    </option>
                    <option value="Engineering & Construction">Engineering &
                      Construction</option>
                    <option value="Production & Water Quality">Production & Water
                      Quality</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-4">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Username</label>
                      <input name="salary_grade" type="number" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Password</label>
                      <input name="office_number" type="password" class="form-control">
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->






          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->






        


        <div class="row">
          <div class="col-4"></div>
          <div class="col-4"></div>
          <div class="col-4">
            <button name="AddPersonnel" type="submit"
              class="btn btn-lg btn-success m-3 float-right font-weight-bolder">SUBMIT</button>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </form>
</div>
<!-- /.content-wrapper -->