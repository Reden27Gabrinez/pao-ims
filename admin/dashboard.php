
<?php

  $query1  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Oroquieta'");
  $count_oro = mysqli_num_rows($query1);

  $query2  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Sinacaban'");
  $count_sinacaban = mysqli_num_rows($query2);
  
  $query3  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Jimenez' ");
  $count_jimenez = mysqli_num_rows($query3);

  $query4  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Panaon' ");
  $count_panaon = mysqli_num_rows($query4);

  $query5  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Plaridel' ");
  $count_plaridel = mysqli_num_rows($query5);

  $query6  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Calamba' ");
  $count_calamba = mysqli_num_rows($query6);

  $query7  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Baliangao' ");
  $count_baliangao = mysqli_num_rows($query7);

  $query8  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Sapang Dalaga' ");
  $count_dalaga = mysqli_num_rows($query8);

  $query9  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Ozamis' ");
  $count_ozamis = mysqli_num_rows($query9);

  $query10  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Tangub' ");
  $count_tangub = mysqli_num_rows($query10);

  $query11  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Aloran' ");
  $count_aloran = mysqli_num_rows($query11);

  $query12  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Bonifacio' ");
  $count_bonifacio = mysqli_num_rows($query12);

  $query13  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Clarin' ");
  $count_clarin = mysqli_num_rows($query13);

  $query14  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Conception' ");
  $count_conception = mysqli_num_rows($query14);

  $query15  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Don Victoriano' ");
  $count_victoriano = mysqli_num_rows($query15);

  $query16  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Tudela' ");
  $count_tudela = mysqli_num_rows($query16);

  $query17  = mysqli_query($conn,"SELECT * FROM fem WHERE municipality = 'Lopez Jaena' ");
  $count_jaena = mysqli_num_rows($query17);

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
              <h3><?php echo $count_oro; ?></h3>

              <p>Oroquieta</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="index.php?page=Equipment-Oroquieta" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $count_sinacaban; ?><sup style="font-size: 20px"></sup></h3>

              <p>Sinacaban</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="index.php?page=Equipment-Sinacaban" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $count_jimenez; ?> </h3>

              <p>Jimenez</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="index.php?page=Equipment-Jimenez" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $count_panaon; ?> </h3>

              <p>Panaon</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="index.php?page=Equipment-Panaon" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $count_plaridel; ?></h3>

              <p>Plaridel</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="index.php?page=Equipment-Plaridel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $count_calamba; ?><sup style="font-size: 20px"></sup></h3>

              <p>Calamba</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="index.php?page=Equipment-Calamba" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $count_baliangao; ?></h3>

              <p>Baliangao</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="index.php?page=Equipment-Baliangao" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $count_dalaga; ?></h3>

              <p>Sapang Dalaga</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="index.php?page=Equipment-Dalaga" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $count_ozamis; ?></h3>

              <p>Ozamis City</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="index.php?page=Equipment-Ozamis" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $count_tangub; ?><sup style="font-size: 20px"></sup></h3>

              <p>Tangub City</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="index.php?page=Equipment-Tangub" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $count_aloran; ?></h3>

              <p>Aloran</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="index.php?page=Equipment-Aloran" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $count_bonifacio; ?></h3>

              <p>Bonifacio</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="index.php?page=Equipment-Bonifacio" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $count_clarin; ?></h3>

              <p>Clarin</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="index.php?page=Equipment-Clarin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $count_conception; ?><sup style="font-size: 20px"></sup></h3>

              <p>Conception</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="index.php?page=Equipment-Conception" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $count_victoriano; ?></h3>

              <p>Don Victoriano</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="index.php?page=Equipment-Victoriano" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $count_tudela; ?></h3>

              <p>Tudela</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="index.php?page=Equipment-Tudela" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $count_jaena; ?></h3>

              <p>Lopez Jaena</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="index.php?page=Equipment-Jaena" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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