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

              <?php
                  $query  = "SELECT * FROM users ORDER BY created_at DESC";
                  $stmt   = $conn->prepare($query);
                  $stmt   ->execute();
                  $result = $stmt->get_result();
              ?>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Municipality</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $counter = 0;
                    while($row = $result->fetch_assoc())
                    {
                        $counter++;
                        $timestamp  = $row['created_at'];
                        $date       = date('d M Y',strtotime($timestamp));
                        $time       = date('h:i A',strtotime($timestamp));
                        if($row['role'] == "Admin")
                        {}
                        else
                        {
                ?>

                  <tr>
                    <td><?php echo $counter; ?></td>
                    <td><?= $row['municipality']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['contact']; ?></td>
                    <td>
                      <a href="class.php?DeletePersonnel=<?= $row['id']; ?>" class="btn btn-danger" title="Delete"
                        onclick="return confirm('Do you want delete this record?');">
                        <span class=""><i class="fa fa-trash"></i></span>
                      </a>
                      <button title="Edit" class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?= $row['id']; ?>">
                        <span class="fa fa-edit"></span>
                      </button>
                      <button title="View" class="btn btn-info" data-toggle="modal" type="button" data-target="#view_modal<?= $row['id']; ?>">
                        <span class="fa fa-eye"></span>
                      </button>
                    </td>
                  </tr>

                <?php
                          include 'update_personnel.php';
                          include 'view_personnel.php';
                        }
                    }
                    $stmt->close();
                    $conn->close();
                ?>

                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Municipality</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
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