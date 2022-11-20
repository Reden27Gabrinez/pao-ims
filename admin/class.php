<?php
    session_start();
    include('../configuration/config.php');

    // // add personnel to database
    // if(isset($_POST['AddPersonnel']))
    // {
    //     $role       = "Municipality";
    //     $name       = $_POST['name'];
    //     $email      = $_POST['email'];
    //     $contact    = $_POST['contact'];
    //     $sex        = $_POST['sex'];
    //     $assigned   = $_POST['assigned'];
    //     $position   = $_POST['position'];
    //     $username   = $_POST['username'];
    //     $password   = md5($_POST['password']);

    //     ////////////////////
    //     require "vendor/autoload.php";

    //     $client = new GuzzleHttp\Client(); 

    //     $response = $client->request("POST", "https://api.sms.fortres.net/v1/messages", [
    //         "headers" => [
    //             "Content-type" => "application/json"
    //         ],
    //         "auth" => ["63fe7253-7dbd-43c2-b334-c9f22959fab9", "D1J8lNzp6A4oYJb1fJ3R49Yy6TwERrtXKYj2SQf9"],
    //         "json" => [
    //             "recipient" => "09187349902",
    //             "message" => "Sample text message"
    //         ]
    //     ]);

    //     if ($response->getStatusCode() == 200) {
    //         echo $response->getBody();
    //     }
    //     ///////////////////

    //     $query = "INSERT INTO users (role,username,password,name,municipality,email,contact,sex,position) VALUES  (?,?,?,?,?,?,?,?,?)";
    //     $stmt  = $conn->prepare($query);
    //     $stmt  -> bind_param("sssssssss",$role,$username,$password,$name,$assigned,$email,$contact,$sex,$position);
    //     $stmt  -> execute();
    //     $stmt  -> close();

    //     header("location: index.php?page=AddPersonnel");
    // }

    // delete personnel to database
    if(isset($_GET['DeletePersonnel']))
    {
        $id = $_GET['DeletePersonnel'];

        $query = "DELETE FROM users WHERE id=? ";
        $stmt  = $conn->prepare($query);
        $stmt  -> bind_param("i",$id);
        $stmt  -> execute();
        $stmt       -> close();

        $conn       -> close();

        header('location:index.php?page=ManagePersonnel');
        $_SESSION['response']="Successfully Deleted!";
        $_SESSION['res_type']="danger";
    }
    if(isset($_POST['update_personnel']))
    {
        $id         = $_POST['personnel_id'];

        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $contact    = $_POST['contact'];
        $sex        = $_POST['sex'];
        $position   = $_POST['position'];
        $username   = $_POST['username'];
        $password   = md5($_POST['password']);

        $query = "UPDATE users SET username=?, password=?, name=?, email=?,contact=?,sex=?,position=? WHERE id=? ";
        $stmt   = $conn->prepare($query);
        $stmt   -> bind_param("sssssssi",$username,$password,$name,$email,$contact,$sex,$position,$id);
        $stmt   -> execute();
        $stmt   -> close();


        $conn   -> close();

        $_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php?page=ManagePersonnel');
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