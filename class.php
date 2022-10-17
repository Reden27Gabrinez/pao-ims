<?php
    session_start();
    include('configuration/config.php');

    if(isset($_POST['login']))
    {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) 
        {

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
        
            $username = test_input($_POST['username']);
            $password = test_input($_POST['password']);
            $role = test_input($_POST['role']);
        
            if (empty($username)) 
            {
                header("Location: login.php?error=User Name is Required");
            }else if (empty($password)) 
            {
                header("Location: login.php?error=Password is Required");
            }
            else 
            {
        
                // Hashing the password
                $password = md5($password);
                
                $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result = mysqli_query($conn, $sql);
        
                if (mysqli_num_rows($result) === 1) 
                {
                    // the user name must be unique
                    $row = mysqli_fetch_assoc($result);
                    if ($row['password'] === $password && $row['role'] == $role) 
                    {
                        // $_SESSION['name'] = $row['name'];
                        // $_SESSION['id'] = $row['id'];
                        $_SESSION['role'] = $row['role'];
                        $roles = $row['role'];
                        // $_SESSION['username'] = $row['username'];
                        // $_SESSION['municipality'] = $row['municipality'];

                        if($roles == "Municipality")
                        {
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['role'] = $row['role'];
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['municipality'] = $row['municipality'];

                            $name = $row['name'];
                            $muni = $row['municipality'];

                            $query2	= "INSERT INTO logs (user,actions) VALUES ('$muni','$name | Login')";
                            $logs = mysqli_query($conn,$query2);

                            header("Location: index.php");
                        }
                        else if($roles == "Admin")
                        {
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['role'] = $row['role'];
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['municipality'] = $row['municipality'];

                            header("Location: admin/index.php");
                        }
                        else
                        {
                            header("Location: samp.html");
                        }
        
                        
        
                    }
                    else 
                    {
                        header("Location: login.php?error=Incorect User name or password");
                    }
                }
                else 
                {
                    header("Location: login.php?error=Incorect User name or password");
                }
        
            }
            
        }else 
        {
            header("Location: login.php");
        }
    }

    if(isset($_POST['Add_FEM']))
    {
        $user           = $_SESSION['id'];
        $name_owner     = $_POST['name_owner'];
        $location       = $_POST['location'];
        $type_owner     = $_POST['type_owner'];
        $fem            = $_POST['fem'];
        $units          = $_POST['units'];
        $capacity       = $_POST['capacity'];
        $fac_brand      = $_POST['fac_brand'];
        $mode_acqui     = $_POST['mode_acqui'];
        $cost_acqui     = $_POST['cost_acqui'];
        $yr_acqui       = $_POST['yr_acqui'];
        $use_fac        = $_POST['use_fac'];
        $fac_cond       = $_POST['fac_cond'];
        $commodity      = $_POST['commodity'];
        $eng_brand      = $_POST['eng_brand'];
        $eng_hp         = $_POST['eng_hp'];

        $query = "INSERT INTO fem (user,name_owner,location,type_owner,fem,units,capacity,brand,mode_aquisition,cost_aquisition,yr_acquired,use_facility,facility_cond,commodity,engine_brand,horsepower) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt   = $conn->prepare($query);
        $stmt   -> bind_param("ssssssssssssssss",$user,$name_owner,$location,$type_owner,$fem,$units,$capacity,$fac_brand,$mode_acqui,$cost_acqui,$yr_acqui,$use_fac,$fac_cond,$commodity,$eng_brand,$eng_hp);
        $stmt   -> execute();
        $stmt   -> close();

        header('location:index.php?page=AddEquipment');
        $_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
    }

    if(isset($_POST['update_fem']))
    {
        $id             = $_POST['fem_id'];
        
        $name_owner     = $_POST['name_owner'];
        $location       = $_POST['location'];
        $type_owner     = $_POST['type_owner'];
        $fem            = $_POST['fem'];
        $units          = $_POST['units'];
        $capacity       = $_POST['capacity'];
        $fac_brand      = $_POST['fac_brand'];
        $mode_acqui     = $_POST['mode_acqui'];
        $cost_acqui     = $_POST['cost_acqui'];
        $yr_acqui       = $_POST['yr_acqui'];
        $use_fac        = $_POST['use_fac'];
        $fac_cond       = $_POST['fac_cond'];
        $commodity      = $_POST['commodity'];
        $eng_brand      = $_POST['eng_brand'];
        $eng_hp         = $_POST['eng_hp'];

        $query = "UPDATE fem SET name_owner=?,location=?,type_owner=?,fem=?,units=?,capacity=?,brand=?,mode_aquisition=?,cost_aquisition=?,yr_acquired=?,use_facility=?,facility_cond=?,commodity=?,engine_brand=?,horsepower=? WHERE id=?";
        $stmt   = $conn->prepare($query);
        $stmt   -> bind_param("sssssssssssssssi",$name_owner,$location,$type_owner,$fem,$units,$capacity,$fac_brand,$mode_acqui,$cost_acqui,$yr_acqui,$use_fac,$fac_cond,$commodity,$eng_brand,$eng_hp,$id);
        $stmt   -> execute();
        $stmt   -> close();

        header('location:index.php?page=Equipment');
        $_SESSION['response']="$name_owner is Successfully Updated the database!";
		$_SESSION['res_type']="success";
    }
        // update user profile
        if(isset($_POST['Update_profile']))
        {
            $name     = $_POST['name'];
            $phone    = $_POST['phnumber'];
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $address  = $_POST['address'];
            $position = $_POST['position'];
            $sex      = $_POST['sex'];
            $ser_id  = $_SESSION['id'];
    
            $query  = "UPDATE users SET name = ?, email = ?, Username = ?, contact = ?, municipality = ?,position=?,sex=? WHERE id = ? ";
            $stmt   = $conn->prepare($query);
            $stmt   -> bind_param("sssssssi",$name,$email,$username,$phone,$address,$position,$sex,$ser_id);
            $stmt   -> execute();
            $stmt       -> close();
    
            // $nameUser       = $_SESSION['name'];
            // $query2	= "INSERT INTO logs (User,Purpose) VALUES ('$nameUser','$name | Admin Profile Updated')";
            // $logs = mysqli_query($conn,$query2);
    
            $conn       -> close();
    
            $_SESSION['response']="Updated Successfully!";
            $_SESSION['res_type']="primary";
            header('location:index.php?page=Profile');
        }


?>