<div class="content-wrapper">
  <form method="POST" action="class.php">
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
                  <label for="">Name</label>
                  <input required name="name" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Email</label>
                  <input required name="email" type="email" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">Contact Number</label>
                  <input name="contact" type="number" class="form-control">
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
                  <label for="">Municipality | City Assigned</label>
                  <select required name="assigned" class="form-control select2 select2-danger"
                    data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected" value="">Please Choose</option>
                    <option value="Baliangao">Baliangao</option>
                    <option value="Sapang Dalaga">Sapang Dalaga</option>
                    <option value="Calamba">Calamba</option>
                    <option value="Plaridel">Plaridel</option>
                    <option value="Lopez Jaena">Lopez Jaena</option>
                    <option value="Oroquieta">Oroquieta City</option>
                    <option value="Aloran">Aloran</option>
                    <option value="Panaon">Panaon</option>
                    <option value="Jimenez">Jimenez</option>
                    <option value="Sinacaban">Sinacaban</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Position</label>
                  <select required name="position" class="form-control select2 select2-danger"
                    data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected" value="">Please Choose</option>
                    <option value="IT Staff">IT Staff</option>
                    <option value="Database Manager">Database Manager</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-md-4">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Username</label>
                      <input name="username" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Password</label>
                      <input name="password" type="password" class="form-control">
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