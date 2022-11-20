<?php
    // add personnel to database
    if(isset($_POST['AddPersonnel']))
    {
        $role       = "Municipality";
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $contact    = $_POST['contact'];
        $sex        = $_POST['sex'];
        $assigned   = $_POST['assigned'];
        $position   = $_POST['position'];
        $username   = $_POST['username'];
        $password   = md5($_POST['password']);

        ////////////////////
        require "vendor/autoload.php";

        $client = new GuzzleHttp\Client(); 

        $response = $client->request("POST", "https://api.sms.fortres.net/v1/messages", [
            "headers" => [
                "Content-type" => "application/json"
            ],
            "auth" => ["63fe7253-7dbd-43c2-b334-c9f22959fab9", "D1J8lNzp6A4oYJb1fJ3R49Yy6TwERrtXKYj2SQf9"],
            "json" => [
                "recipient" => $contact,
                "message" => "Sample text message"
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            echo $response->getBody();
        }
        ///////////////////

        $query = "INSERT INTO users (role,username,password,name,municipality,email,contact,sex,position) VALUES  (?,?,?,?,?,?,?,?,?)";
        $stmt  = $conn->prepare($query);
        $stmt  -> bind_param("sssssssss",$role,$username,$password,$name,$assigned,$email,$contact,$sex,$position);
        $stmt  -> execute();
        $stmt  -> close();

        // header("location: index.php?page=AddPersonnel");
    }
?>
<div class="content-wrapper">
  <form method="POST" action="">
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
                    <option value="Bonifacio">Bonifacio</option>
                    <option value="">Clarin</option>
                    <option value="Clarin">Conception</option>
                    <option value="Don Victoriano">Don Victoriano</option>
                    <option value="Tudela">Tudela</option>
                    <option value="Ozamis">Ozamis City</option>
                    <option value="Tangub">Tangub City</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Position</label>
                  <input type="text" name="position" class="form-control">
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