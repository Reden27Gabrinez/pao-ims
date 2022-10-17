
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class=
<?php
        // chanage admin password
    if(isset($_POST['update_pass']))
    {
          $adid         = $_SESSION['adminid'];
          $cpassword    = md5($_POST['currentpassword']);
          $newpassword  = md5($_POST['newpassword']);

          $query=mysqli_query($conn,"SELECT Id FROM administrator WHERE Id='$adid' AND Password='$cpassword'");
          $row=mysqli_fetch_array($query);
          if($row>0)
          {
              $ret=mysqli_query($conn,"UPDATE administrator SET Password='$newpassword' where Id='$adid'");
              $_SESSION['response']="Your password successully changed!";

              $nameUser       = $_SESSION['name'];
              $query2	= "INSERT INTO logs (User,Purpose) VALUES ('$nameUser','Admin Password Updated')";
              $logs = mysqli_query($conn,$query2);
          } 
          else 
          {
                $_SESSION['response']="Your current password is wrong!";
          }
    }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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
    <!-- /.content-header -->

                <?php
                $adminid=$_SESSION['id'];
                $ret=mysqli_query($conn,"select * from users where id='$adminid'");
                while ($row=mysqli_fetch_array($ret)) 
                {
                ?>
                    <!-- Main content -->
                    <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="Images/Admin/avatar5.png"
                                    alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><?php  echo $row['name'];?></h3>

                                <p class="text-muted text-center"><?php  echo $row['contact'];?></p>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                <p class="text-muted"><?php  echo $row['municipality'];?></p>

                                <a href="#" class="btn btn-primary btn-block"><b></b></a>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                            <div class="card-header p-2">
                            <a class="nav-link float-right font-weight-bolder" >Logout&nbsp;<button name="logout" type="button" onclick="out()" class="logout btn btn-danger"><i class="fas fa-sign-out-alt" ></i></button></a>
                                <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Admin Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Change Pass</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="#users_log" data-toggle="tab">Users Log</a></li>
                                <li class="nav-item"><a class="nav-link" href="#hr" data-toggle="tab">HR</a></li>
                                <li class="nav-item"><a class="nav-link" href="#gso" data-toggle="tab">GSO</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="Images/Admin/avatar5.png" alt="user image">
                                        <span class="username">
                                        <a href="#"><?php  echo $row['fld_name'];?></a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description"><label for="" class="badge badge-success">Online</label> - 
                                            <span id='time'><span>
                                        </span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="container">
                                        <label>Email:</label>
                                        <span><?php  echo $row['Email'];?></span>
                                        <br>

                                        <label>Number:</label>
                                        <span><?php  echo $row['Phone'];?></span>
                                        <br>
                                        
                                        <label>Address:</label>
                                        <span><?php  echo $row['Address'];?></span>
                                    </div>
                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">

                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    
                                        <div>
                                        <i class="fas fa-unlock bg-primary"></i>
                                        
                                        <div class="timeline-item mt-4">

                                            <h3 class="timeline-header"><a href="#">Password</a> configuration</h3>
                                            <form method="POST" name="changepass" onSubmit="return valid();">
                                            <div class="timeline-body">
                                                <div class="container">
                                                    <label>current password</label>
                                                    <input type="password" name="currentpassword" class="form-control text-monospace">
                                                    <label>new password</label>
                                                    <input type="password" name="newpassword" class="form-control text-monospace">
                                                    <label>confirm password</label>
                                                    <input type="password" name="confirmpassword" class="form-control text-monospace"><br>
                                                </div>
                                            </div>
                                            <div class="timeline-footer">
                                                <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                                <button type="submit" name="update_pass" id="pass_validate" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                        
                                        </div>
                                    
                                    <!-- END timeline item -->

                                    <div>
                                        <i class="fas fa-key bg-gray"></i>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form method="POST" action="class.php" class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                        <input required type="text" name="name" class="form-control text-monospace" id="inputName" value="<?php  echo $row['Name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                        <input readonly type="email" name="email" class="form-control text-monospace" id="inputEmail" value="<?php  echo $row['Email'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                        <input required type="number" name="phnumber" class="form-control text-monospace" id="inputName2" value="<?php  echo $row['Phone'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                        <textarea required class="form-control text-monospace" name="address" id="inputExperience"><?php  echo $row['Address'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                        <textarea required class="form-control text-monospace" name="username" id=""><?php  echo $row['Username'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" name="Update_profile" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="users_log">
                                   

                                    <section class="content">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">


                                            <div class="card">
                                                <div class="card-header">
                                                <h3 class="card-title">USERS LOG</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                <?php
                                                        $query  = "SELECT * FROM logs_user ORDER BY Timestamp DESC";
                                                        $stmt   = $conn->prepare($query);
                                                        $stmt   ->execute();
                                                        $result = $stmt->get_result();
                                                    ?>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>NO.</th>
                                                        <th>USER</th>
                                                        <th>ACTION</th>
                                                        <th>LOGS DATE</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $counter = 0;
                                                        while($row = $result->fetch_assoc())
                                                        {
                                                            $counter++;
                                                            $timestamp = $row['Timestamp'];
                                                            $today = date("F j, Y, g:i A", strtotime($timestamp));  
                                                    ?>
                                                    <tr>
                                                        
                                                        <td><?php echo $counter; ?></td>
                                                        <td><?= $row['User']; ?></td>
                                                        <td><?= $row['Actions']; ?></td>
                                                        <td><?php echo $today; ?></td> 
                                                    </tr>
                                                    <?php
                                                        }
                                                        $stmt->close();
                                                        // $conn->close();
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>

                                                        <th>NO.</th>
                                                        <th>USER</th>
                                                        <th>ACTION</th>
                                                        <th>LOGS DATE</th>
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



                                </div>

                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="hr">
                                   










                                        <!-- Main content -->
                                        <div class="">


                                        <div class="content-header">
                                            <div class="container-fluid">
                                            <div class="row mb-2">
                                                <div class="col-sm-6">
                                                </div><!-- /.col -->
                                                <div class="col-sm-12">
                                                <ol class="breadcrumb float-left">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-lgpipes"><i
                                                        class="nav-icon fas fa-plus"></i>&emsp;Add New User</button>
                                                </ol>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                            </div><!-- /.container-fluid -->
                                        </div>


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

                                        <section>
                                            <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">


                                                <div class="card">
                                                    <div class="card-header">
                                                    <h3 class="card-title">HR USER</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">

                                                    <table class="table table-bordered">
                                                        <thead class="alert-success">
                                                            <tr>
                                                                <th>NAME</th>
                                                                <th>USERNAME</th>
                                                                <th>ADDED ON</th>
                                                                <th>UPDATED AT</th>
                                                                <th>ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="background-color:#fff;">
                                                            <?php
                                                                require('configuration/config.php');
                                                                $query = mysqli_query($conn, "SELECT * FROM `hr_access` ORDER BY UpdatedAt DESC") or die(mysqli_error());
                                                                while($fetch = mysqli_fetch_array($query)){
                                                                    $timestamp = $fetch['Timestamp'];
                                                                    $today = date("F j, Y, g:i A", strtotime($timestamp));  

                                                                    $updateed = $fetch['UpdatedAt'];
                                                                    $upda = date("F j, Y, g:i A", strtotime($updateed));  
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $fetch['Name']?></td>
                                                                <td><?php echo $fetch['Username']?></td>
                                                                <td><?php echo $today; ?></td>
                                                                <td><?php echo $upda; ?></td>
                                                                <td>
                                                                    <button title="EDIT" class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['ID']?>"><span class="fa fa-edit"></span></button>
                                                                    <button title="CHANGE PASSWORD" class="btn btn-warning" data-toggle="modal" type="button" data-target="#change_pass_modal<?php echo $fetch['ID']?>"><span class="fa fa-key"></span></button>
                                                                    <a href="class.php?delete_user_hr=<?= $fetch['ID']; ?>" class="btn btn-danger"
                                                                        title="delete" onclick="return confirm('Do you want delete this record?');">
                                                                        <span class=""><i class="fa fa-trash"></i></span>
                                                                    </a>  
                                                                </td>
                                                            </tr>
                                                            <?php
                                                                
                                                                include 'update_user_hr.php';
                                                                include 'update_user_changepass.php';
                                                                
                                                                }
                                                            ?>
                                                        </tbody>
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







                                        <!-- new modal add user -->
                                        <form method="POST" action="class.php">
                                        <div class="modal fade" id="modal-lgpipes" aria-hidden="true">
                                            <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title">HR OFFICE ACCESS</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">NAME</label>
                                                                    <input required name="name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">USERNAME</label>
                                                                    <input required name="username" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">PASSWORD</label>
                                                                    <input required name="password" type="password" id="myInput" class="form-control">
                                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                                <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" name="signup_hr" class="btn btn-success">SUBMIT</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        </form>
                                        <!-- /.modal -->


                                       

                                        <script>
                                            function myFunction() {
                                            var x = document.getElementById("myInput");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                            }
                                        </script>




                                       





















                                </div>
                                <!-- /.tab-pane -->

                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="gso">
                                   










                                        <!-- Main content -->
                                        <div class="">


                                        <div class="content-header">
                                            <div class="container-fluid">
                                            <div class="row mb-2">
                                                <div class="col-sm-6">
                                                </div><!-- /.col -->
                                                <div class="col-sm-12">
                                                <ol class="breadcrumb float-left">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-lgpipes2"><i
                                                        class="nav-icon fas fa-plus"></i>&emsp;Add New User</button>
                                                </ol>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                            </div><!-- /.container-fluid -->
                                        </div>


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

                                        <section>
                                            <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">


                                                <div class="card">
                                                    <div class="card-header">
                                                    <h3 class="card-title">GSO USER</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">

                                                    <table class="table table-bordered">
                                                        <thead class="alert-success">
                                                            <tr>
                                                                <th>NAME</th>
                                                                <th>USERNAME</th>
                                                                <th>ADDED ON</th>
                                                                <th>UPDATED AT</th>
                                                                <th>ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="background-color:#fff;">
                                                            <?php
                                                                require('configuration/config.php');
                                                                $query = mysqli_query($conn, "SELECT * FROM `gso_access` ORDER BY UpdatedAt DESC") or die(mysqli_error());
                                                                while($fetch = mysqli_fetch_array($query)){
                                                                    $timestamp = $fetch['Timestamp'];
                                                                    $today = date("F j, Y, g:i A", strtotime($timestamp));  

                                                                    $updateed = $fetch['UpdatedAt'];
                                                                    $upda = date("F j, Y, g:i A", strtotime($updateed));  
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $fetch['Name']?></td>
                                                                <td><?php echo $fetch['Username']?></td>
                                                                <td><?php echo $today; ?></td>
                                                                <td><?php echo $upda; ?></td>
                                                                <td>
                                                                    <button title="EDIT" class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_gso<?php echo $fetch['ID']?>"><span class="fa fa-edit"></span></button>
                                                                    <button title="CHANGE PASSWORD" class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_gso_pass<?php echo $fetch['ID']?>"><span class="fa fa-key"></span></button>
                                                                    <a href="class.php?delete_user_gso=<?= $fetch['ID']; ?>" class="btn btn-danger"
                                                                        title="delete" onclick="return confirm('Do you want delete this record?');">
                                                                        <span class=""><i class="fa fa-trash"></i></span>
                                                                    </a>  
                                                                </td>
                                                            </tr>
                                                            <?php
                                                                
                                                                include 'update_user_gso.php';
                                                                include 'update_user_changepass_gso.php';
                                                                
                                                                }
                                                            ?>
                                                        </tbody>
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







                                        <!-- new modal add user -->
                                        <form method="POST" action="class.php">
                                        <div class="modal fade" id="modal-lgpipes2" aria-hidden="true">
                                            <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title">GSO OFFICE ACCESS</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">NAME</label>
                                                                    <input required name="name" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">USERNAME</label>
                                                                    <input required name="username" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">PASSWORD</label>
                                                                    <input required name="password" type="password" id="myInput2" class="form-control">
                                                                    <input type="checkbox" onclick="myFunction2()">Show Password
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                                <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" name="signup_gso" class="btn btn-success">SUBMIT</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        </form>
                                        <!-- /.modal -->




                                        <script>
                                            function myFunction2() {
                                            var x = document.getElementById("myInput2");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                            }
                                        </script>


















                                </div>
                                <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                    </section>
                <?php              
                }
                ?>

</div>
<script type="text/javascript">
        function valid()
        {
            if(document.changepass.newpassword.value!= document.changepass.confirmpassword.value)
            {
                $(function()
                {
                    var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                    });

                    $('#pass_validate').click(function() 
                    {
                        Toast.fire
                        ({
                            icon: 'error',
                            title: 'password not match!!'
                        })
                    });
                });
                document.changepass.confirmpassword.focus();
                return false;
            }

                return true;
                
        }   
        function checkAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
            url: "check_availability.php",
            data:'emailid='+$("#emailid").val(),
            type: "POST",
            success:function(data){
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
            },
            error:function (){}
            });
        }

        function out()
        {
            var lag = "logout";
            swal({
                title: "Logout?",
                icon: "warning",
                buttons: ["Cancel","Yes"],
                dangerMode: true,
                })
                .then((value) => {
                if(value){
                    if(lag){
                        $.ajax({
                        type: 'post',
                        data: {
                            logout:lag
                        },
                        url: 'class.php',
                        success: function (data){
                            window.location.href='login.php';
                        }
                        });
                    }
                }
                })
        };
</script>"container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->

                    <!-- Main content -->
                    <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="plugins/dist/img/avatar5.png"
                                    alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Sample Name</h3>

                                <p class="text-muted text-center">09632357966</p>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                <p class="text-muted">Seoul, South Korea</p>

                                <a href="#" class="btn btn-primary btn-block"><b></b></a>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                            <div class="card-header p-2">
                            <a class="nav-link float-right font-weight-bolder" >Logout&nbsp;<button name="logout" type="button" onclick="out()" class="logout btn btn-danger"><i class="fas fa-sign-out-alt" ></i></button></a>
                                <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Admin Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Change Pass</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="#users_log" data-toggle="tab">Users Log</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="plugins/dist/img/avatar5.png" alt="user image">
                                        <span class="username">
                                        <a href="#">Sample Name</a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description"><label for="" class="badge badge-success">Online</label> - 
                                            <span id='time'><span>
                                        </span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="container">
                                        <label>Email:</label>
                                        <span>sample@gmail.com</span>
                                        <br>

                                        <label>Number:</label>
                                        <span>09632357966</span>
                                        <br>
                                        
                                        <label>Address:</label>
                                        <span>Seoul, South Korea</span>
                                    </div>
                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">

                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    
                                        <div>
                                        <i class="fas fa-unlock bg-primary"></i>
                                        
                                        <div class="timeline-item mt-4">

                                            <h3 class="timeline-header"><a href="#">Password</a> configuration</h3>
                                            <form method="POST" name="changepass" onSubmit="return valid();">
                                            <div class="timeline-body">
                                                <div class="container">
                                                    <label>current password</label>
                                                    <input type="password" name="currentpassword" class="form-control text-monospace">
                                                    <label>new password</label>
                                                    <input type="password" name="newpassword" class="form-control text-monospace">
                                                    <label>confirm password</label>
                                                    <input type="password" name="confirmpassword" class="form-control text-monospace"><br>
                                                </div>
                                            </div>
                                            <div class="timeline-footer">
                                                <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                                <button type="submit" name="update_pass" id="pass_validate" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                        
                                        </div>
                                    
                                    <!-- END timeline item -->

                                    <div>
                                        <i class="fas fa-key bg-gray"></i>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form method="POST" action="class.php" class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                        <input required type="text" name="name" class="form-control text-monospace" id="inputName" value="Sample Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                        <input readonly type="email" name="email" class="form-control text-monospace" id="inputEmail" value="sample@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                        <input required type="number" name="phnumber" class="form-control text-monospace" id="inputName2" value="09632357966">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                        <textarea required class="form-control text-monospace" name="address" id="inputExperience">Seoul, South Korea</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                        <textarea required class="form-control text-monospace" name="username" id="">user</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" name="Update_profile" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="users_log">
                                   

                                    <section class="content">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">


                                            <div class="card">
                                                <div class="card-header">
                                                <h3 class="card-title">USERS LOG</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">

                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>NO.</th>
                                                        <th>USER</th>
                                                        <th>ACTION</th>
                                                        <th>LOGS DATE</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                           
                                                    <tr>
                                                        
                                                        <td>1</td>
                                                        <td>user</td>
                                                        <td>login</td>
                                                        <td>October 09, 2022</td> 
                                                    </tr>

                                                    </tbody>
                                                    <tfoot>
                                                    <tr>

                                                        <th>NO.</th>
                                                        <th>USER</th>
                                                        <th>ACTION</th>
                                                        <th>LOGS DATE</th>
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



                                </div>

                                <!-- /.tab-pane -->



                                <!-- /.tab-pane -->


                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                    </section>


</div>
<script type="text/javascript">
        function valid()
        {
            if(document.changepass.newpassword.value!= document.changepass.confirmpassword.value)
            {
                $(function()
                {
                    var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                    });

                    $('#pass_validate').click(function() 
                    {
                        Toast.fire
                        ({
                            icon: 'error',
                            title: 'password not match!!'
                        })
                    });
                });
                document.changepass.confirmpassword.focus();
                return false;
            }

                return true;
                
        }   
        function checkAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
            url: "check_availability.php",
            data:'emailid='+$("#emailid").val(),
            type: "POST",
            success:function(data){
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
            },
            error:function (){}
            });
        }

        function out()
        {
            var lag = "logout";
            swal({
                title: "Logout?",
                icon: "warning",
                buttons: ["Cancel","Yes"],
                dangerMode: true,
                })
                .then((value) => {
                if(value){
                    if(lag){
                        $.ajax({
                        type: 'post',
                        data: {
                            logout:lag
                        },
                        url: 'class.php',
                        success: function (data){
                            window.location.href='login.php';
                        }
                        });
                    }
                }
                })
        };
</script>