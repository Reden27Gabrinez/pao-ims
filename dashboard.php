
<?php

  $muni = $_SESSION['municipality'];
  $query1  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = '$muni'");
  $count_ = mysqli_num_rows($query1);

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $count_; ?></h3>

              <p><?php echo $_SESSION['municipality']; ?> City</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <!-- <a href="index.php?page=ManagePersonnel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

      </div>

      <div class="row">
            <div class="col-md-12">
            <div class="card">
                                                    <div class="card-header">
                                                    <h3 class="card-title">USERS LOGS</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                    <?php
                                                       $query  = "SELECT * FROM logs ORDER BY timesstamp DESC LIMIT 5";
                                                       $stmt   = $conn->prepare($query);
                                                       $stmt   ->execute();
                                                       $result = $stmt->get_result();
                                                   ?>
                                                    <table class="table table-bordered">
                                                        <thead class="alert-success">
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>USER</th>
                                                                <th>ACTION</th>
                                                                <th>LOGS DATE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="background-color:#fff;">
                                                  <?php
                                                       $counter = 0;
                                                       while($row = $result->fetch_assoc())
                                                       {
                                                           $counter++;
                                                           $timestamp = $row['timesstamp'];
                                                           $today = date("F j, Y, g:i A", strtotime($timestamp));  
                                                   ?>
                                                            <tr>
                                                              <td><?php echo $counter; ?></td>
                                                              <td><?= $row['user']; ?></td>
                                                              <td><?= $row['actions']; ?></td>
                                                              <td><?php echo $today; ?></td> 
                                                            </tr>
                                                  <?php
                                                       }
                                                       $stmt->close();
                                                       // $conn->close();
                                                   ?>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->
            </div>                          
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>