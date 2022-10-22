<!-- Main content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mt-3">


        <div class="container">
          <?php 
              if(isset($_SESSION['response'])) 
              { 
          ?>
          <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b><?= $_SESSION['response']; ?></b>
          </div>
          <?php 
              } 
              unset($_SESSION['response']); 
          ?>
        </div>


          <div class="card mt-5">
            <div class="card-header">
              <h3 class="card-title">Panaon Facility</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
                    $query  = "SELECT * FROM fem WHERE municipality = 'Panaon' AND categories = 'Facility' ORDER BY created_at DESC";
                    $stmt   = $conn->prepare($query);
                    $stmt   ->execute();
                    $result = $stmt->get_result();
                ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name of Owner</th>
                    <th>Location</th>
                    <th>Type of Owner</th>
                    <th>Use of Facility</th>
                    <th>Facility Condition</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                      $counter = 0;
                      while($row = $result->fetch_assoc())
                      {
                          $counter++;
                          $timestamp = $row['created_at'];
                          $today = date("F j, Y, g:i A", strtotime($timestamp));  
                  ?>
                  <tr>
                    <td><?= $counter; ?></td>
                    <td><?= $row['name_owner']; ?></td>
                    <td><?= $row['location']; ?></td>
                    <td><?= $row['type_owner']; ?></td>
                    <td><?= $row['use_facility']; ?></td>
                    <td><?= $row['facility_cond']; ?></td>
                    <td>
                      <button title="Edit" class="btn btn-info" data-toggle="modal" type="button" data-target="#update_modal<?= $row['id']; ?>">
                        <i class="fa fa-eye"></i>
                      </button>
                    </td>
                  </tr>
                  <?php
                        include 'modals/update_fem.php';
                      }
                        
                      $stmt->close();
                      // $conn->close();
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name of Owner</th>
                    <th>Location</th>
                    <th>Type of Owner</th>
                    <th>Use of Facility</th>
                    <th>Facility Condition</th>
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

