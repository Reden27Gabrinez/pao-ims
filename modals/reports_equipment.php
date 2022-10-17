
<!-- new export modal -->
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">EXPORT DATA</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">




              <div class="row">
                <div class="col-12 col-sm-12">
                  <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                      <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Export By Date</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Export All</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

                          <form action="Equipment-ExportDate.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="card card-outline card-warning">
                                    <div class="card-header">
                                      <h3 class="card-title">EXPORT FROM</h3>
                                      <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <div class="container">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="">From</label>
                                                <input required type="date" name="fromdate" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-outline card-danger">
                                      <div class="card-header">
                                        <h3 class="card-title">EXPORT TO</h3>
                                      </div>
                                      <div class="card-body">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label for="">To</label>
                                                <input required type="date" name="todate" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-6"></div>
                                      <div class="col-md-6">
                                        <input type="submit" value="EXPORT" name="submit" class="btn btn-success float-right mt-2">
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </form>

                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-12 text-center">
                                  <a href="Equipment-ExportAll.php" class="btn btn-lg btn-success">EXPORT DATA</a>
                              </div>

                            </div>
                          </div>
                        </div>                  
                      </div>
                    </div>
                    <!-- /.card -->
                  </div>
            </div>
          </div>
        </div>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

<!-- /.modal -->