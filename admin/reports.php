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
              <h3 class="card-title">REPORTS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php
                    $query  = "SELECT * FROM reports ORDER BY timestamp DESC";
                    $stmt   = $conn->prepare($query);
                    $stmt   ->execute();
                    $result = $stmt->get_result();
                ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>USER</th>
                    <th>MUNICIPALITY</th>
                    <th>DETAILS</th>
                    <th>DATE</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                      $counter = 0;
                      while($row = $result->fetch_assoc())
                      {
                          $counter++;
                          $timestamp = $row['timestamp'];
                          $today = date("F j, Y, g:i A", strtotime($timestamp));  
                  ?>
                  <tr>
                    <td><?= $counter; ?></td>
                    <td><?= $row['municipality']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><a href="../<?= $row['file_loc']; ?>" download><?= $row['file_loc']; ?></a></td>
                    <td><?= $today; ?></td>
                  </tr>
                  <?php
                      }
                        
                      $stmt->close();
                      // $conn->close();
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>USER</th>
                    <th>MUNICIPALITY</th>
                    <th>DETAILS</th>
                    <th>DATE</th>
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

