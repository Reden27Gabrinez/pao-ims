<!-- Main content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card mt-5">
            <div class="card-header">
              <h3 class="card-title">Personnel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Municipality</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>image</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>
                      <a href="class.php?DeletePersonnel=" class="btn btn-danger" title="delete"
                        onclick="return confirm('Do you want delete this record?');">
                        <span class=""><i class="fa fa-trash"></i></span>
                      </a>
                      <a href="Personnel-Edit.php?edit_personnel=" class="btn btn-warning"
                        title="edit">
                        <span class=""><i class="fa fa-edit"></i></span>
                      </a>
                    </td>
                  </tr>

                </tbody>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Municipality</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>