
<?php
        // chanage admin password
    if(isset($_POST['update_pass']))
    {
          $muni_id         = $_SESSION['id'];
          $cpassword    = md5($_POST['currentpassword']);
          $newpassword  = md5($_POST['newpassword']);

          $query=mysqli_query($conn,"SELECT id FROM users WHERE id='$muni_id' AND password='$cpassword'");
          $row=mysqli_fetch_array($query);
          if($row>0)
          {
              $ret=mysqli_query($conn,"UPDATE users SET password='$newpassword' where id='$muni_id'");
              $_SESSION['response']="Your password successully changed!";

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
                $user_id=$_SESSION['id'];
                $ret=mysqli_query($conn,"select * from users where id='$user_id'");
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
                                    src="admin/plugins/dist/img/avatar2.png"
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
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">User Info</a></li>
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
                                        <img class="img-circle img-bordered-sm" src="admin/plugins/dist/img/avatar2.png" alt="user image">
                                        <span class="username">
                                        <a href="#"><?php  echo $row['name'];?></a>
                                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description"><label for="" class="badge badge-success">Online</label> - 
                                            <span id='time'><span>
                                        </span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="container">
                                        <label>Email:</label>
                                        <span><?php  echo $row['email'];?></span>
                                        <br>

                                        <label>Number:</label>
                                        <span><?php  echo $row['contact'];?></span>
                                        <br>
                                        
                                        <label>Address:</label>
                                        <span><?php  echo $row['municipality'];?></span>
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
                                        <input required type="text" name="name" class="form-control text-monospace" id="inputName" value="<?php  echo $row['name'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                        <input readonly type="email" name="email" class="form-control text-monospace" id="inputEmail" value="<?php  echo $row['email'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                        <input required type="number" name="phnumber" class="form-control text-monospace" id="inputName2" value="<?php  echo $row['contact'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                        <textarea required class="form-control text-monospace" name="address" id="inputExperience"><?php  echo $row['municipality'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                        <textarea required class="form-control text-monospace" name="username" id=""><?php  echo $row['username'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Position</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="position" value="<?php  echo $row['position'];?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Sex</label>
                                        <div class="col-sm-10">
                                            <select required name="sex" class="form-control select2" style="width: 100%;">
                                                <option selected="selected" value="<?php  echo $row['sex'];?>"><?php  echo $row['sex'];?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
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
                                                       $query  = "SELECT * FROM logs WHERE user = 'Baliangao' ORDER BY timesstamp DESC";
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
                        url: 'logout.php',
                        success: function (data){
                            window.location.href='login.php';
                        }
                        });
                    }
                }
                })
        };
</script>