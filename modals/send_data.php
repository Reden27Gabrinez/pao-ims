
<!-- new export modal -->
<?php

  if(isset($_POST['send_reports']))
  {
      $name = $_POST['name'];
      $muni = $_POST['muni'];
      $file = $_FILES['file'];

      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('csv', 'pdf');
      
      if (in_array($fileActualExt,$allowed)) 
      {
          if ($fileError === 0) 
          {
              if ($fileSize < 20000) 
              {
                  $f=date('d-m-Y');
                  $fileNameNew = $muni.".".$f.".".$fileActualExt;
                  // $fileNameNew = $muni.".".uniqid('', true).".".$fileActualExt;
                  $fileDestination = 'admin/reports/'.$fileNameNew;

                  $query = "INSERT INTO reports (municipality,name,file_loc) VALUES (?,?,?)";
                  $stmt   = $conn->prepare($query);
                  $stmt   -> bind_param("sss",$muni,$name,$fileDestination);
                  $stmt   -> execute();
                  
                  move_uploaded_file($fileTmpName,$fileDestination);
                  $stmt   -> close();

                  $name       = $_SESSION['name'];
                  $municipal  = $_SESSION['municipality'];  
                  $query2	= "INSERT INTO notifications (user,municipality,actions) VALUES ('$name','$municipal','Added $f of Reports')";
                  $logs = mysqli_query($conn,$query2);

                  // header("Location: index.php?page=dashboard");
              }
              else
              {
                  echo '<script>alert("Your file is too big")</script>';
                  // header("Location: index.php?page=dashboard");
              }
          }
          else
          {
              echo '<script>alert("There was an error uploading your file")</script>';
              // header("Location: index.php?page=dashboard");

          }
      }
      else
      {
          echo '<script>alert("you cannot upload files of this type")</script>';
          // header("Location: index.php?page=dashboard");
      }
  }


?>
<div class="modal fade" id="modal-sm-send">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">SEND REPORTS TO ADMINISTRATOR</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">



            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                  <input readonly name="name" type="text" value="<?php echo $_SESSION['name']; ?>" class="form-control">
                </div>
                <div class="col-md-6">
                  <input readonly name="muni" type="text" value="<?php echo $_SESSION['municipality']; ?>" class="form-control">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-12">
                  <input required name="file" type="file" class="form-control">
                </div>
              </div>
              <div class="row mt-2 float-right">
                <input type="submit" name="send_reports" value="send" class="btn btn-success mr-2">
              </div>
            </form>



          </div>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

<!-- /.modal -->